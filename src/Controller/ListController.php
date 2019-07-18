<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractFOSRestController
{
    /**
     * @Route("/list", name="list")
     */
    public function index()
    {
        return [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ListController.php',
        ];
    }

    /**
     * @Rest\Get("/update", name="app.update")
     */
    public function update()
    {
        return ['message' => 'update'];
    }

    /**
     * @Rest\Delete("/delete")
     */
    public function remove()
    {
        return['message'=>'deleted'];

    }
}
