<?php

use Aschmelyun\Quickmetrics\Quickmetrics;

if(!function_exists('qm')) {
    function qm() {
        return app(Quickmetrics::class);
    }
}