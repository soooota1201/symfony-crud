<?php

namespace App\Controller;

use App\Entity\Crud;
use App\Form\CrudType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

  /**
   * @Route("create", name="create")
   */
  public function create(Reauest $reauest)
  {
     $crud = new Crud();
     $form = new Crud();
  }
}
