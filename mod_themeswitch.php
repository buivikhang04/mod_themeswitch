<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_themeswitch
 * @copyright   Copyright (c) 2025 Bùi Vĩ khang và Nguyễn Chí Thanh
 * @license     MIT; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

require ModuleHelper::getLayoutPath('mod_themeswitch', $params->get('layout', 'default'));
