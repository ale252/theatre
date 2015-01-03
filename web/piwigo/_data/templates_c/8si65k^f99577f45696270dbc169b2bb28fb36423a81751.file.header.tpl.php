<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:00:56
         compiled from ".\themes\default\template\mail\text\plain\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37154a5c3988203f7-47187803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99577f45696270dbc169b2bb28fb36423a81751' => 
    array (
      0 => '.\\themes\\default\\template\\mail\\text\\plain\\header.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37154a5c3988203f7-47187803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIL_TITLE' => 0,
    'MAIL_SUBTITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c39884a793_31710565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c39884a793_31710565')) {function content_54a5c39884a793_31710565($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)){?><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }} ?>