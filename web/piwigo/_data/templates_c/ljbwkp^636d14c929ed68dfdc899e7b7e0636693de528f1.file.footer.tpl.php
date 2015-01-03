<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:55
         compiled from ".\themes\default\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2543854a5c4c396b914-19652241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '636d14c929ed68dfdc899e7b7e0636693de528f1' => 
    array (
      0 => '.\\themes\\default\\template\\footer.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2543854a5c4c396b914-19652241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'PHPWG_URL' => 0,
    'VERSION' => 0,
    'CONTACT_MAIL' => 0,
    'TOGGLE_MOBILE_THEME_URL' => 0,
    'footer_elements' => 0,
    'elt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c3a9faa0_52535142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c3a9faa0_52535142')) {function content_54a5c4c3a9faa0_52535142($_smarty_tpl) {?><div id="copyright">
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['TIME'])){?>
    <?php echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
) -
<?php }?>


  <?php echo l10n('Powered by');?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
  <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['CONTACT_MAIL']->value)){?>
  - <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Contact webmaster');?>
</a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value)){?>
  - <?php echo l10n('View in');?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value;?>
"><?php echo l10n('Mobile');?>
</a> | <b><?php echo l10n('Desktop');?>
</b>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['footer_elements']->value)){?>
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value){
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php } ?>
<?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'])){?>
<div id="debug">
  <?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>
</div>

<!-- BEGIN get_combined -->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'footer'),$_smarty_tpl);?>

<!-- END get_combined -->

</body>
</html><?php }} ?>