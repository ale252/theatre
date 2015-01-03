<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:01:10
         compiled from ".\plugins\TakeATour\tpl\js_css.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1342454a5c3a61dd358-46569687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97deecb31d8c5b7f6092543415a9ffcbac7a8b9' => 
    array (
      0 => '.\\plugins\\TakeATour\\tpl\\js_css.tpl',
      1 => 1420149511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1342454a5c3a61dd358-46569687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_THEME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c3a6247075_00523323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c3a6247075_00523323')) {function content_54a5c3a6247075_00523323($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.bootstrap-tour','load'=>'header','require'=>'jquery','path'=>'plugins/TakeATour/js/custom-bootstrap-tour-standalone.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/TakeATour/css/bootstrap-tour-standalone.css"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['ADMIN_THEME']->value=='clear'){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/TakeATour/css/clear.css"),$_smarty_tpl);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN_THEME']->value=='roma'){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/TakeATour/css/roma.css"),$_smarty_tpl);?>
<?php }?><?php }} ?>