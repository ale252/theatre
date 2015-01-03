<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:54
         compiled from ".\themes\default\template\menubar_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265754a5c4c214e376-84423250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c45cf3ae900dee1df98bef2dfeea7567ba02e8ca' => 
    array (
      0 => '.\\themes\\default\\template\\menubar_categories.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265754a5c4c214e376-84423250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'U_START_FILTER' => 0,
    'U_STOP_FILTER' => 0,
    'block' => 0,
    'cat' => 0,
    'ref_level' => 0,
    'ROOT_URL' => 0,
    'themeconf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c22b4829_90879950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c22b4829_90879950')) {function content_54a5c4c22b4829_90879950($_smarty_tpl) {?><dt>
<?php if (isset($_smarty_tpl->tpl_vars['U_START_FILTER']->value)){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_START_FILTER']->value;?>
" class="pwg-state-default pwg-button menubarFilter" title="<?php echo l10n('display only recently posted photos');?>
" rel="nofollow"><span class="pwg-icon pwg-icon-filter"> </span></a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['U_STOP_FILTER']->value)){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_STOP_FILTER']->value;?>
" class="pwg-state-default pwg-button menubarFilter" title="<?php echo l10n('return to the display of all photos');?>
"><span class="pwg-icon pwg-icon-filter-del"> </span></a>
<?php }?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['block']->value->data['U_CATEGORIES'];?>
"><?php echo l10n('Albums');?>
</a>
</dt>
<dd>
<?php $_smarty_tpl->tpl_vars['ref_level'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['cat']->value['LEVEL']>$_smarty_tpl->tpl_vars['ref_level']->value){?>
  <ul>
<?php }else{ ?>
    </li>
    <?php echo str_repeat('</ul></li>',($_smarty_tpl->tpl_vars['ref_level']->value-$_smarty_tpl->tpl_vars['cat']->value['LEVEL']));?>

<?php }?>
    <li <?php if ($_smarty_tpl->tpl_vars['cat']->value['SELECTED']){?>class="selected"<?php }?>>
      <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['IS_UPPERCAT']){?>rel="up"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['cat']->value['count_images']>0){?>
      <span class="<?php if ($_smarty_tpl->tpl_vars['cat']->value['nb_images']>0){?>menuInfoCat<?php }else{ ?>menuInfoCatByChild<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
">[<?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
]</span>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])){?>
      <img title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent<?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']){?>_by_child<?php }?>.png" class="icon" alt="(!)">
<?php }?>
  <?php $_smarty_tpl->tpl_vars['ref_level'] = new Smarty_variable($_smarty_tpl->tpl_vars['cat']->value['LEVEL'], null, 0);?>
<?php } ?>
<?php echo str_repeat('</li></ul>',$_smarty_tpl->tpl_vars['ref_level']->value);?>


	<p class="totalImages"><?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['block']->value->data['NB_PICTURE']);?>
</p>
</dd>
<?php }} ?>