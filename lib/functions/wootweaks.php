<?php
/**
 * WooCommerce Tweaks
 *
 * This file includes any custom WooCommerce tweaks
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/
 * @author       Matt Ryan
 * @copyright    Copyright (c) 2017 Matt Ryan
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

// Don't display gravatars for reviewers.
 remove_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
