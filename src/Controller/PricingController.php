<?php

namespace App\Controller;

use App\Repository\PricingPlanRepository;
use App\Repository\PricingPlanFeatureRepository;
use App\Entity\PricingPlan;
use App\Entity\PricingPlanFeature;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    private $pricingPlanRepository;
    private $pricingPlanFeatureRepository;
    
    // this construct function was updated to symfony 6
    // the use of the methos getDoctrine is now outdated
    //you cant use two construct functions inside the class 

    public function __construct(
        PricingPlanRepository $pricingPlanRepository,
        PricingPlanFeatureRepository $pricingPlanFeatureRepository
    ) {
        $this->pricingPlanRepository = $pricingPlanRepository;
        $this->pricingPlanFeatureRepository = $pricingPlanFeatureRepository;
    }
    
    
    

    #[Route('/pricing', name: 'pricing')]
    public function index(): Response
    {
        $pricingPlans = $this->pricingPlanRepository->findAll();
        $features = $this->pricingPlanFeatureRepository->findAll();
        
        return $this->render('pricing/index.html.twig', [
            'pricing_plans' => $pricingPlans,
            'features' => $features,
        ]);
    }
}
