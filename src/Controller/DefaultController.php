<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;

class DefaultController extends AbstractController
{
    /**
     * @Rest\Get("/", name="default")
     */
    public function index()
    {
        return $this->json([
            'status' => 'ok'
        ]);
    }
}
