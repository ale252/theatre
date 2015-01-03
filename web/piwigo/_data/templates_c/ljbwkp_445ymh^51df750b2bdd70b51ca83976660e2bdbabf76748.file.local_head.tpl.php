<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:54
         compiled from "C:\Users\Alexandre\hubiC\www\the\web\piwigo\themes\elegant\local_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252854a5c4c2cd2173-41723992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51df750b2bdd70b51ca83976660e2bdbabf76748' => 
    array (
      0 => 'C:\\Users\\Alexandre\\hubiC\\www\\the\\web\\piwigo\\themes\\elegant\\local_head.tpl',
      1 => 1420149517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252854a5c4c2cd2173-41723992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LEVEL_SEPARATOR' => 0,
    'elegant' => 0,
    'BODY_ID' => 0,
    'ROOT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c2d3d3a1_16661076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c2d3d3a1_16661076')) {function content_54a5c4c2d3d3a1_16661076($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.browsePath ul li span a:before, .browsePath ul li.last:before
{
  content: "<?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
";
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  var p_main_menu = "<?php echo $_smarty_tpl->tpl_vars['elegant']->value['p_main_menu'];?>
", p_pict_descr = "<?php echo $_smarty_tpl->tpl_vars['elegant']->value['p_pict_descr'];?>
", p_pict_comment = "<?php echo $_smarty_tpl->tpl_vars['elegant']->value['p_pict_comment'];?>
";
  jQuery(document).ready(function() {
      jQuery(".browsePath").jBreadCrumb();
  });
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['BODY_ID']->value=='thePicturePage'){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'elegant.scripts_pp','load'=>'footer','require'=>'jquery','path'=>'themes/elegant/scripts_pp.js'),$_smarty_tpl);?>

<?php }else{ ?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'elegant.scripts','load'=>'footer','require'=>'jquery','path'=>'themes/elegant/scripts.js'),$_smarty_tpl);?>

<?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.jBreadCrumb','load'=>'footer','require'=>'jquery','path'=>'themes/elegant/js/jquery.jBreadCrumb.js'),$_smarty_tpl);?>



<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/elegant/fix-ie7.css">
	<![endif]-->
<?php }} ?>