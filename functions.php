<?php

/**
 * init assets front
 * require presswind plugin to work
 */
if (class_exists('PressWind\PWVite')) {

    \PressWind\PWVite::init(port: 3000, path: '', is_ts: true);
    /**
     * init assets admin
     */
    // \PressWind\PWVite::init(
    //     port: 4444,
    //     path: '/admin',
    //     position: 'editor',
    //     is_ts: false
    // );
}
