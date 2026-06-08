<?php

/**
 * Plugin Name: Oxa Auto-Deploy Test
 * Description: Harmless no-op plugin for testing auto-deploy rollouts.
 * Version: 0.0.1
 */
defined('ABSPATH') || exit;
add_action('init', fn() => update_option('oxa_autodeploy_test_ping', gmdate('c')));
