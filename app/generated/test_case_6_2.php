<?php

declare(strict_types=1);

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Test\TestResult;

/** @var ContainerAdapterInterface $adapter */

// Warm-up
$container = $adapter->bootstrapPrototypeContainer();
gc_collect_cycles();

// Start benchmark
$t1 = hrtime(true);
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$container->get('DiContainerBenchmarks\Fixture\C\FixtureC1000');
$t2 = hrtime(true);
// End benchmark

return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
