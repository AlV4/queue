<?php
/**
 * Created by IntelliJ IDEA.
 * User: alex
 * Date: 13.01.20
 * Time: 22:15
 */

namespace App\Message;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MetricsHandler implements MessageHandlerInterface
{
    public function __invoke(Metrics $message)
    {
        echo sprintf('The image "%s" is being resized...'.PHP_EOL, $message->getText());
        sleep(20); // Assume than message resizing takes 2 seconds
        echo 'The image has been resized!'.PHP_EOL;
        echo 'Moving on to next message in the queue.'.PHP_EOL.PHP_EOL;
    }
}