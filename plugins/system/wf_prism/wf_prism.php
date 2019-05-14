<?php

/**
 * @package     Prism
 * @subpackage  System.wf_prism
 *
 * @copyright   Copyright (C) 2019 Ryan Demmer. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
defined('JPATH_BASE') or die;

/**
 * JCE
 *
 * @package     Wf_Prism
 * @subpackage  System
 * @since       1.0.0
 */
class PlgSystemWf_Prism extends JPlugin
{
	public function onAfterRoute()
	{
		$app = JFactory::getApplication();

		if ($app->isAdmin()) {
		    return;
		}
		
		$document = JFactory::getDocument();
		
    	$document->addScript('plugins/system/wf_prism/js/prism.js', array('version' => 'auto'));
    	$document->addStylesheet('plugins/system/wf_prism/css/prism.css', array('version' => 'auto'));
	}
}
