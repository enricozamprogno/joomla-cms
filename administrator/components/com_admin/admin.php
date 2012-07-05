<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_admin
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// No access check.

$task = JFactory::getApplication()->input->get('task');

$controller	= JControllerLegacy::getInstance('Admin');
$controller->execute($task);
$controller->redirect();
