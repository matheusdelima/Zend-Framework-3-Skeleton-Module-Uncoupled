<?php

namespace ZendSkeletonModule;

return array_merge(
    include 'service_manager.config.php',
    include 'controller.config.php',
    include 'router.config.php',
    include 'form_elements.config.php',
    include 'input_filters.config.php',
    include 'doctrine.config.php',
    include 'view_strategies.config.php',
    include 'view_manager.config.php',
    include 'view_helper.config.php',
    // include 'access.config.php'
);