<?php
//No Direct Access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list = modSubtemaHelper::getList($params);
$menu = modSubtemaHelper::getMenu($params);

require JModuleHelper::getLayoutPath('mod_sidebar_interno', $params->get('layout', 'default'));
?>