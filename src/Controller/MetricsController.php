<?php

namespace App\Controller;

use OldSound\RabbitMqBundle\RabbitMq\ProducerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
class MetricsController extends AbstractController
{
    private $metrics;

    public function __construct(ProducerInterface $metrics)
    {
        $this->metrics = $metrics;

    }
    /**
     * @Rest\Get("/metrics", name="metrics")
     */
    public function index()
    {
        $this->metrics->publish( "test"  );
        return $this->json([
            'status' => 'ok'
        ]);
    }
}
