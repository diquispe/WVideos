<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 5/03/2016
 * Time: 20:42
 */

namespace Xvideos\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use Xvideos\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function ($app) {
            return new HtmlBuilder($app['config'], $app['view'], $app['url']);
        });
    }
}