<?php
/**
 * @version		1.0.x
 * @package		Easyblog
 * @author		Dennis Heiden https://www.straightvisions.com
 * @copyright	Copyright (c) 2018 straightvisions
 * @license		GNU General Public License v3.0
 */
// no direct access
defined('_JEXEC') or die ;
$user = JFactory::getUser();
$mod_name = "mod_sv_easyblog_quickicons";
$mainframe = JFactory::getApplication();
$document = JFactory::getDocument();
$user = JFactory::getUser();
$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$componentParams = JComponentHelper::getParams('com_easyblog');
JHTML::_('behavior.modal');
$document->addStyleSheet(JURI::base(true).'/modules/'.$mod_name.'/tmpl/css/style.css?v=1.0.0');
// Output content with template
require (JModuleHelper::getLayoutPath($mod_name, 'default'));