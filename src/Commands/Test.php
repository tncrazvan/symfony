<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command
{
    protected function configure(): void {
        $this
            ->setName('app:test')
            ->setDescription('Test command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $output->writeln("This is a symfony test command!.\n");

        return Command::SUCCESS;
    }
}
