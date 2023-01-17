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

namespace Micro\Plugin\Http\Test\Unit;

use Micro\Plugin\Http\HttpBootPlugin;
use Micro\Plugin\Http\HttpCorePlugin;
use Micro\Plugin\Http\HttpExceptionResponseDevPlugin;
use Micro\Plugin\Http\HttpExceptionResponsePlugin;
use Micro\Plugin\Http\HttpLoggerPlugin;
use Micro\Plugin\Http\HttpPackPlugin;
use Micro\Plugin\Http\HttpRouterCodePlugin;
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
        ], $pluginsDepended);
    }
}
