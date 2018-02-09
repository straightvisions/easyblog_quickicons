<?php
/**
 * @version		1.0.x
 * @package		Easyblog
 * @author		Dennis Heiden https://www.straightvisions.com
 * @copyright	Copyright (c) 2018 straightvisions
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;
if(JComponentHelper::getComponent('com_easyblog', true)->enabled == 1):
$eb_path = JPATH_ADMINISTRATOR.'/components/com_easyblog/';
// load eb language file
$lang = JFactory::getLanguage();
$extension = 'com_easyblog';
$base_dir = JPATH_ADMINISTRATOR;
$language_tag = $lang->getTag();
$reload = true;
$lang->load($extension, $base_dir, $language_tag, $reload);
?>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<div id="sveb">
	<div class="sv_eb_quick_icons_container">
	  <div class="icon_wrapper">
		<a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_DASHBOARD'); ?>">
			<i class="fa fa-tachometer-alt"></i>
			<span><?php echo JText::_('COM_EASYBLOG_DASHBOARD'); ?></span>
		</a>
		<a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog&view=composer&tmpl=component'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_COMPOSE_NEW_POST'); ?>">
			<i class="fa fa-pencil-alt"></i>
			<span><?php echo JText::_('COM_EASYBLOG_COMPOSE_NEW_POST'); ?></span>
		</a>
		<a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog&view=blogs'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_BLOG_ENTRIES'); ?>">
			<i class="fa fa-file-alt"></i>
			<span><?php echo JText::_('COM_EASYBLOG_BLOG_ENTRIES'); ?></span>
		</a>
		<a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog&view=categories'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_CATEGORIES_TITLE'); ?>">
			<i class="fa fa-folder-open"></i>
			<span><?php echo JText::_('COM_EASYBLOG_CATEGORIES_TITLE'); ?></span>
		</a>
		  <a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog&view=tags'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_HOME_TAGS'); ?>">
			<i class="fa fa-tags"></i>
			<span><?php echo JText::_('COM_EASYBLOG_HOME_TAGS'); ?></span>
		</a>
		<a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog&view=comments'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_COMMENTS_TITLE'); ?>">
			<i class="fa fa-comments"></i>
			<span><?php echo JText::_('COM_EASYBLOG_COMMENTS_TITLE'); ?></span>
		</a>
		<a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog&view=bloggers'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_BLOGGERS_TITLE'); ?>">
			<i class="fa fa fa-user"></i>
			<span><?php echo JText::_('COM_EASYBLOG_BLOGGERS_TITLE'); ?></span>
		</a>
		<a class="icon" href="<?php echo JRoute::_('index.php?option=com_easyblog&view=metas'); ?>" alt="<?php echo JText::_('COM_EASYBLOG_TITLE_METAS'); ?>">
			<i class="fa fa fa-coffee"></i>
			<span><?php echo JText::_('COM_EASYBLOG_TITLE_METAS'); ?></span>
		</a>
	  </div>

	</div>
</div>
<?php else:
	echo "EASYBLOG COMPONENT NOT INSTALLED OR NOT ENABLED!";
endif;