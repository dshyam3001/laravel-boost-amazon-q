<?php

declare(strict_types=1);

namespace Dshyam3001\LaravelBoostAmazonQ;

use Dshyam3001\LaravelBoostAmazonQ\Install\Agents\AmazonQ;
use Illuminate\Support\ServiceProvider;
use Laravel\Boost\Boost;

class AmazonQServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Boost::registerAgent('amazonq', AmazonQ::class);
    }
}
