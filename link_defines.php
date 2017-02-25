<?php

if (!defined('e107_INIT')) { exit; }

$imagenewcode = "<img class='linkspage_new' src='".THEME."images/new.png' alt='' style='vertical-align:middle' />";
if (!defined("IMAGE_NEW")){ define("IMAGE_NEW", (file_exists(THEME."images/new.png") ? $imagenewcode : '<i class="fa fa-plus fa-2x"></i>')); }
 
if (!defined('ADMIN_LINK_ICON_EDIT'))  { define("ADMIN_LINK_ICON_EDIT", ADMIN_EDIT_ICON); } 
if (!defined('ADMIN_LINK_ICON_DELETE')){ define("ADMIN_LINK_ICON_DELETE", ADMIN_DELETE_ICON); }
if (!defined('ADMIN_LINK_ICON_ORDER_UP')){ define("ADMIN_LINK_ICON_ORDER_UP", ADMIN_UP_ICON); } 
if (!defined('ADMIN_LINK_ICON_ORDER_DOWN')){ define("ADMIN_LINK_ICON_ORDER_DOWN", ADMIN_UP_DOWN); }

$imagedir = e_IMAGE_ABS."admin_images/";
if (!defined('LINK_ICON_EDIT')) { define("LINK_ICON_EDIT", "<img src='".$imagedir."edit_16.png' alt='' style='border:0; cursor:pointer;' />"); }
if (!defined('LINK_ICON_DELETE')) { define("LINK_ICON_DELETE", "<img src='".$imagedir."delete_16.png' alt='' style='border:0; cursor:pointer;' />"); }
if (!defined('LINK_ICON_DELETE_BASE')) { define("LINK_ICON_DELETE_BASE", $imagedir."delete_16.png"); }
if (!defined('LINK_ICON_LINK')) { define("LINK_ICON_LINK", "<img src='".$imagedir."leave_16.png' alt='' style='border:0; cursor:pointer;' />"); }
if (!defined('LINK_ICON_ORDER_UP_BASE')) { define("LINK_ICON_ORDER_UP_BASE", $imagedir."up.png"); }
if (!defined('LINK_ICON_ORDER_DOWN_BASE')) { define("LINK_ICON_ORDER_DOWN_BASE", $imagedir."down.png"); }
if (!defined('LINK_ICON_ORDER_UP')) { define("LINK_ICON_ORDER_UP", "<img src='".$imagedir."up.png' alt='' style='border:0; cursor:pointer;' />"); }
if (!defined('LINK_ICON_ORDER_DOWN')) { define("LINK_ICON_ORDER_DOWN", "<img src='".$imagedir."down.png' alt='' style='border:0; cursor:pointer;' />"); }
if (!defined('LINK_ICON_TRUE')) { define("LINK_ICON_TRUE", "<img src='".$imagedir."true_16.png' alt='' style='border:0;  padding:2px;  ' />"); }
if (!defined('LINK_ICON_FALSE')) { define("LINK_ICON_FALSE", "<img src='".$imagedir."false_16.png' alt='' style='border:0;  padding:2px; ' />"); }
?>