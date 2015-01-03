<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:54
         compiled from "C:\Users\Alexandre\hubiC\www\the\web\piwigo\themes\default\local_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1123554a5c4c2c73682-57606421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e763acb7a306a17f22e92d6a024de12a4ea3dce6' => 
    array (
      0 => 'C:\\Users\\Alexandre\\hubiC\\www\\the\\web\\piwigo\\themes\\default\\local_head.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123554a5c4c2c73682-57606421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'load_css' => 0,
    'ROOT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c2ca1335_65151542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c2ca1335_65151542')) {function content_54a5c4c2ca1335_65151542($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['load_css']->value){?> 
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie5-ie6.css">
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie7.css">
	<![endif]-->
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/print.css",'order'=>-10),$_smarty_tpl);?>

<?php }?>
<?php }} ?>