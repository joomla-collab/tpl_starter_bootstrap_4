<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.joomla-london
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */
/*
 * Module chrome for rendering the module in a submenu
 */
function modChrome_bootstrap4($module, &$params, &$attribs)
{
	if ($module->content)
	{
		// Get module params
        $bootstrapSize = (int) $params->get('bootstrap_size');
	    $cols = "col";
		if ($bootstrapSize != '0') {$cols = "col-" . $bootstrapSize;}

		$columnClass = $cols;

		if ($module->showtitle)
		{
			echo '<h2>' .$module->title .'</h2>';
		}
	?>

	<div class="items<?php echo " " . $cols;?>">
		<div class="item">


			<?php echo $module->content; ?>

		</div>
	</div>

<?php
	}
}
?>