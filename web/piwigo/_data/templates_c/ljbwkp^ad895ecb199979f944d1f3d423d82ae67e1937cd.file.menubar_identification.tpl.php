<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:54
         compiled from ".\themes\default\template\menubar_identification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496454a5c4c24b58e4-03290338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad895ecb199979f944d1f3d423d82ae67e1937cd' => 
    array (
      0 => '.\\themes\\default\\template\\menubar_identification.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496454a5c4c24b58e4-03290338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USERNAME' => 0,
    'U_REGISTER' => 0,
    'U_LOGIN' => 0,
    'U_LOGOUT' => 0,
    'U_PROFILE' => 0,
    'U_ADMIN' => 0,
    'AUTHORIZE_REMEMBERING' => 0,
    'U_LOST_PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c260eff3_18783112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c260eff3_18783112')) {function content_54a5c4c260eff3_18783112($_smarty_tpl) {?><dt><?php echo l10n('Identification');?>
</dt>
<dd>
 <?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)){?> <p><?php echo l10n('Hello');?>
 <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 !</p> <?php }?> <ul> <?php if (isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)){?> <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Create a new account');?>
" rel="nofollow"><?php echo l10n('Register');?>
</a></li> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['U_LOGIN']->value)){?> <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" rel="nofollow"><?php echo l10n('Login');?>
</a></li> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value)){?> <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a></li> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['U_PROFILE']->value)){?> <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
" title="<?php echo l10n('customize the appareance of the gallery');?>
"><?php echo l10n('Customize');?>
</a></li> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['U_ADMIN']->value)){?> <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
" title="<?php echo l10n('available for administrators only');?>
"><?php echo l10n('Administration');?>
</a></li> <?php }?> </ul> 
<?php if (isset($_smarty_tpl->tpl_vars['U_LOGIN']->value)){?>
 <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" id="quickconnect"> <fieldset> <legend><?php echo l10n('Quick connect');?>
</legend> <div> <label for="username"><?php echo l10n('Username');?>
</label><br> <input type="text" name="username" id="username" value="" style="width:99%"> </div> <div><label for="password"><?php echo l10n('Password');?>
</label><br> <input type="password" name="password" id="password" style="width:99%"> </div> <?php if ($_smarty_tpl->tpl_vars['AUTHORIZE_REMEMBERING']->value){?> <div><label for="remember_me"> <input type="checkbox" name="remember_me" id="remember_me" value="1"> <?php echo l10n('Auto login');?>
 </label></div> <?php }?> <div> <input type="hidden" name="redirect" value="<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"> <input type="submit" name="login" value="<?php echo l10n('Submit');?>
"> <span class="categoryActions"> <?php if (isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)){?> <a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Create a new account');?>
" class="pwg-state-default pwg-button" rel="nofollow"> <span class="pwg-icon pwg-icon-register"> </span> </a> <?php }?> <a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" title="<?php echo l10n('Forgot your password?');?>
" class="pwg-state-default pwg-button"> <span class="pwg-icon pwg-icon-lost-password"> </span> </a> </span> </div> </fieldset> </form> 
<?php }?>
</dd>
<?php }} ?>