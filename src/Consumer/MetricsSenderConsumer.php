<?php

namespace App\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * Class NotificationConsumer
 */
class MetricsSenderConsumer implements ConsumerInterface
{
    /**
     * @var AMQPMessage $msg
     * @return void
     */
    public function execute(AMQPMessage $msg)
    {
        echo $msg->getBody().PHP_EOL;
        echo 'Отправлено успешно!...';
    }
}