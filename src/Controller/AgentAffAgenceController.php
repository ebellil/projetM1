<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AgentAffAgenceController extends AbstractController
{
    /**
     * @Route("/agent/aff/agence", name="agent_aff_agence")
     */
    public function index()
    {
        return $this->render('agent_aff_agence/index.html.twig', [
            'controller_name' => 'AgentAffAgenceController',
        ]);
    }
}
