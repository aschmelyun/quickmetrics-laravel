<?php

use Aschmelyun\Quickmetrics\Quickmetrics;

if(!function_exists('qm')) {
    function qm(string $name, float $val, ?string $dimension = null) {
        return app(Quickmetrics::class)
            ->event($name, $val, $dimension);
    }
}