<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminGeneAchatController extends AbstractController
{
    /**
     * @Route("/admin/gene/achat", name="admin_gene_achat")
     */
    public function index()
    {
        return $this->render('admin_gene_achat/index.html.twig', [
            'controller_name' => 'AdminGeneAchatController',
        ]);
    }
}
