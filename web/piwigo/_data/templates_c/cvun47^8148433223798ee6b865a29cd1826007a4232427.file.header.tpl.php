<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:00:56
         compiled from ".\themes\default\template\mail\text\html\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1706954a5c3986e79f8-67604846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8148433223798ee6b865a29cd1826007a4232427' => 
    array (
      0 => '.\\themes\\default\\template\\mail\\text\\html\\header.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1706954a5c3986e79f8-67604846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_info' => 0,
    'CONTENT_ENCODING' => 0,
    'GLOBAL_MAIL_CSS' => 0,
    'MAIL_CSS' => 0,
    'MAIL_TITLE' => 0,
    'MAIL_SUBTITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c39874aa07_38040240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c39874aa07_38040240')) {function content_54a5c39874aa07_38040240($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
"/>
    <title>Piwigo Mail</title>

    <style type="text/css">
    <?php if (isset($_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value)){?><?php echo $_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value;?>
<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['MAIL_CSS']->value)){?><?php echo $_smarty_tpl->tpl_vars['MAIL_CSS']->value;?>
<?php }?>
    </style>
  </head>

  <body>
    <table id="bodyTable" cellspacing="0" cellpadding="10" border="0">
      <tr><td align="center" valign="top">

        <table id="contentTable" cellspacing="0" cellpadding="0" border="0">
          <tr><td id="header">
            
            <div id="title"><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>
</div>
            <?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)){?><div id="subtitle"><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>
</div><?php }?>
            
          </td></tr>

          <tr><td id="content">

            <div id="topSpacer"></div>
            <?php }} ?>