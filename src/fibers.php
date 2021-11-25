<?php

namespace PHP81;

require_once __DIR__.'/../vendor/autoload.php';
error_reporting(E_ALL ^ E_DEPRECATED);

use Box\Spout\Common\Entity\Row as SpoutRow;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Box\Spout\Reader\SheetInterface as SpoutSheet;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;

// RFC: https://wiki.php.net/rfc/fibers

function parseLargeExcel(): void
{
    $reader = ReaderEntityFactory::createXLSXReader();
    $reader->open(__DIR__.'/fibers.xlsx');

    foreach (new \LimitIterator($reader->getSheetIterator(), limit: 1) as $sheet) {
        foreach ($sheet->getRowIterator() as $row) {
            // do parse Excel ...
            \Fiber::suspend();
        }
    }

    $reader->close();
}

(new SingleCommandApplication())
    ->setName('Import large Excel file')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $progressBar = new ProgressBar($output);
        $fiber = new \Fiber(parseLargeExcel(...));

        $progressBar->start();
        $progressBar->setFormat("%current% rows [%bar%] %elapsed:6s% %memory:6s%");

        $fiber->start();

        while (!$fiber->isTerminated()) {
            $progressBar->advance();
            $fiber->resume();
        }

        $progressBar->finish();
        $output->writeln('');
    })
    ->run()
;
