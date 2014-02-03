<?php
/**
 * Router configuration for Newsletter plugin
 * 
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 * 
 * @since  0.0.1
 */

/**
 * Subscribe action
 * @since  0.0.1
 */
	Router::connect(
		'/newsletter/subscribe', 
		array('plugin' => 'Newsletter', 'controller' => 'newsletter', 'action' => 'subscribe')
	);

/**
 * unsubscribe action
 * @since  0.0.1
 */
	Router::connect(
		'/newsletter/unsubscribe', 
		array('plugin' => 'Newsletter', 'controller' => 'newsletter', 'action' => 'unsubscribe')
	);
