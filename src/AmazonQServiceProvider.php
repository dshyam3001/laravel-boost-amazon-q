<?php

declare(strict_types=1);

namespace Amazon\LaravelBoostAmazonQ;

use Amazon\LaravelBoostAmazonQ\Install\Agents\AmazonQ;
use Illuminate\Support\ServiceProvider;
use Laravel\Boost\Boost;

class AmazonQServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Boost::registerAgent('amazonq', AmazonQ::class);
    }
}
