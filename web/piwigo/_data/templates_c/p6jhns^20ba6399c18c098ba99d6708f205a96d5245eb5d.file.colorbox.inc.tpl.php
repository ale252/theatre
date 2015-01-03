<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:01:57
         compiled from ".\admin\themes\default\template\include\colorbox.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3068954a5c3d54e0696-34762948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ba6399c18c098ba99d6708f205a96d5245eb5d' => 
    array (
      0 => '.\\admin\\themes\\default\\template\\include\\colorbox.inc.tpl',
      1 => 1420149514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3068954a5c3d54e0696-34762948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'load_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c3d5518707_66694971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c3d5518707_66694971')) {function content_54a5c3d5518707_66694971($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['load_mode']->value)){?><?php $_smarty_tpl->tpl_vars['load_mode'] = new Smarty_variable('footer', null, 0);?><?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.colorbox','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.colorbox','path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl);?>

<?php }} ?>