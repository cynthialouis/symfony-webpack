<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecipeController extends Controller
{
    /**
     * @Route("/recipes")
     */
    public function showAllAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Recipe');
        $recipes = $repository->findAll();

        return $this->render('recipe/show_all.html.twig', ['recipes' => $recipes]);
    }
}
