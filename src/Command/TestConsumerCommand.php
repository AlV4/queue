<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestConsumerCommand extends Command
{
    protected static $defaultName = 'app:test-queue';

    protected function configure()
    {
        $this
            ->setDescription('Put test message to the queue')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
//        $this->get('old_sound_rabbit_mq.metrics')->publish('Тестовое сообщение...');
        return 0;
    }
}
