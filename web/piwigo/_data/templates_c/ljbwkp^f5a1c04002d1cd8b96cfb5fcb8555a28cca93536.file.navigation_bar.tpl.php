<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:58
         compiled from ".\themes\default\template\navigation_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2561254a5c4c6cf2f13-81248341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a1c04002d1cd8b96cfb5fcb8555a28cca93536' => 
    array (
      0 => '.\\themes\\default\\template\\navigation_bar.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2561254a5c4c6cf2f13-81248341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navbar' => 0,
    'page' => 0,
    'prev_page' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c6dc6de6_27121413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c6dc6de6_27121413')) {function content_54a5c4c6dc6de6_27121413($_smarty_tpl) {?><div class="navigationBar">
<?php if (isset($_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST'])){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST'];?>
" rel="first"><?php echo l10n('First');?>
</a> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_PREV'];?>
" rel="prev"><?php echo l10n('Previous');?>
</a> |
<?php }else{ ?>
  <?php echo l10n('First');?>
 |
  <?php echo l10n('Previous');?>
 |
<?php }?>
  <?php $_smarty_tpl->tpl_vars['prev_page'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navbar']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value){
$_smarty_tpl->tpl_vars['url']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['url']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value>$_smarty_tpl->tpl_vars['prev_page']->value+1){?>...<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['navbar']->value['CURRENT_PAGE']){?>
    <span class="pageNumberSelected"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
<?php }else{ ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php }?>
    <?php $_smarty_tpl->tpl_vars['prev_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value, null, 0);?>
<?php } ?>
<?php if (isset($_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'])){?>
  | <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'];?>
" rel="next"><?php echo l10n('Next');?>
</a>
  | <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_LAST'];?>
" rel="last"><?php echo l10n('Last');?>
</a>
<?php }else{ ?>
  | <?php echo l10n('Next');?>

  | <?php echo l10n('Last');?>

<?php }?>
</div>
<?php }} ?>