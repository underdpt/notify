<?php

namespace Yoeunes\Notify\Tests;

use Yoeunes\Notify\NotifyServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NotifyServiceProvider::class,
        ];
    }
}
