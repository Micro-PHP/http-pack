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

namespace Micro\Plugin\Http;

use Micro\Framework\Kernel\Plugin\PluginDependedInterface;

/**
 * @author Stanislau Komar <head.trackingsoft@gmail.com>
 */
readonly class HttpPackPlugin implements PluginDependedInterface
{
    public function getDependedPlugins(): iterable
    {
        return [
            HttpCorePlugin::class,
            HttpLoggerPlugin::class,
            HttpExceptionResponsePlugin::class,
            HttpExceptionResponseDevPlugin::class,
            HttpBootPlugin::class,
            HttpRouterCodePlugin::class,
            HttpMiddlewarePlugin::class,
        ];
    }
}
