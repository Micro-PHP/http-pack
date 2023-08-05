<?php

declare(strict_types=1);

/*
 *  This file is part of the Micro framework package.
 *
 *  (c) Stanislau Komar <kost@micro-php.net>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace Micro\Plugin\HttpPack\Tests\Unit;

use Micro\Plugin\Http\HttpCorePlugin;
use Micro\Plugin\HttpBoot\HttpBootPlugin;
use Micro\Plugin\HttpExceptions\HttpExceptionResponsePlugin;
use Micro\Plugin\HttpExceptionsDev\HttpExceptionResponseDevPlugin;
use Micro\Plugin\HttpLogger\HttpLoggerPlugin;
use Micro\Plugin\HttpMiddleware\HttpMiddlewarePlugin;
use Micro\Plugin\HttpPack\HttpPackPlugin;
use Micro\Plugin\HttpRouterCode\HttpRouterCodePlugin;
use PHPUnit\Framework\TestCase;

class HttpPackPluginTest extends TestCase
{
    public function testDependedPlugins()
    {
        $plugin = new HttpPackPlugin();

        $pluginsDepended = $plugin->getDependedPlugins();

        $this->assertEquals([
            HttpCorePlugin::class,
            HttpLoggerPlugin::class,
            HttpExceptionResponsePlugin::class,
            HttpExceptionResponseDevPlugin::class,
            HttpBootPlugin::class,
            HttpRouterCodePlugin::class,
            HttpMiddlewarePlugin::class,
        ], $pluginsDepended);
    }
}
