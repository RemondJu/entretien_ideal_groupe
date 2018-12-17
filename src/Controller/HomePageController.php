<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Counter;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Counter::class);

        $counter = $repo->findOneBy([
          'id' => 1,
        ]);

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'count' => $counter,
        ]);
    }
}
