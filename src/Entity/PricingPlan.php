<?php

namespace App\Entity;

use App\Repository\PricingPlanRepository;
use App\Repository\PricingPlanFeatureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PricingPlanRepository::class)]
class PricingPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\OneToMany(mappedBy: 'pricingPlan', cascade:['persist'], orphanRemoval:true,  targetEntity: PricingPlanBenefit::class) ]
    private Collection $benefit;

    #[ORM\ManyToMany(targetEntity: PricingPlanFeature::class)]
    private Collection $features;

    

    public function __construct()
    {
        $this->benefit = new ArrayCollection();
        $this->features = new ArrayCollection();
        $this->benefit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, PricingPlanBenefit>
     */
    public function getBenefit(): Collection
    {
        return $this->benefit;
    }

    public function addBenefit(PricingPlanBenefit $benefit): static
    {
        if (!$this->benefit->contains($benefit)) {
            $this->benefit->add($benefit);
            $benefit->setPricingPlan($this);
        }

        return $this;
    }

    public function removeBenefit(PricingPlanBenefit $benefit): static
    {
        if ($this->benefit->removeElement($benefit)) {
            // set the owning side to null (unless already changed)
            if ($benefit->getPricingPlan() === $this) {
                $benefit->setPricingPlan(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PricingPlanFeature>
     */
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    public function addFeature(PricingPlanFeature $feature): static
    {
        if (!$this->features->contains($feature)) {
            $this->features->add($feature);
        }

        return $this;
    }
    
    public function hasFeature(PricingPlanFeature $feature): bool
    {
        return $this->features->contains($feature);
    }

      

    public function removeFeature(PricingPlanFeature $feature): static
    {
        $this->features->removeElement($feature);

        return $this;
    }

    /**
     * @return Collection<int, PricingPlanBenefit>
     */
    public function getBenefits(): Collection
    {
        return $this->benefit;
    }
}
