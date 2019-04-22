<?php

namespace repat\HardCoreDebugLogger;

use repat\HardCoreFilter;
use repat\HardCore;

final class HardCoreDebugLogger {

    public static function register(string $output = 'php://stdout')
    {
        register_tick_function(function () use ($output) {
            $bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
            $last = reset($bt);
            $info = sprintf("%.4f %s +%d\n", microtime(true), $last['file'], $last['line']);
            file_put_contents($output, $info, FILE_APPEND);
        });
        HardCoreFilter::register();
        HardCore::register();
    }
}
