<?php

function site_doctype($type='<!DOCTYPE html>')
{
	echo $type;
}

function page_title($title)
{
	?>
	<title><?php echo $title; ?></title>
	<?php
}

function page_meta($name,$val=null)
{
	?>
	<meta name="<?php echo $name; ?>" content="<?php echo $val ?>" />
	<?php
}

function page_css($arg=null)
{
	?>
	<link rel="stylesheet" type="text/css" href="<?php print_file(CSS_DIR.$arg.'?var'.time()); ?>" />
	<?php
}

function page_css_direct($arg=null)
{
	?>
	<link rel="stylesheet" type="text/css" href="<?php print_file(CSS_DIR_DIRECT.$arg.'?var'.time()); ?>" />
	<?php
}

function favicon_icon($icon_name)
{
	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php print_file($icon_name); ?>" />
	<?php
}

function page_jquery_lib($arg)
{
	?>
	<script type="text/javascript" src="<?php print_file(JS_DIR.$arg.'?var'.time()); ?>"></script>
	<?php
}

function load_jquery_plugin($arg)
{
	?>
	<script type="text/javascript" src="<?php print_file(JS_DIR.$arg.'?var'.time()); ?>"></script>
	<?php
}

function load_jquery_plugin_direct($arg)
{
	?>
	<script type="text/javascript" src="<?php print_file(JS_DIR_DIRECT.$arg.'?var'.time()); ?>"></script>
	<?php
}