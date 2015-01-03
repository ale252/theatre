<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:01:49
         compiled from "C:\Users\Alexandre\hubiC\www\the\web\piwigo\plugins\TakeATour\tpl\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1124354a5c3cd588bf6-14404964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f027c4aeed9002b9983fef737fc23ed21801bb00' => 
    array (
      0 => 'C:\\Users\\Alexandre\\hubiC\\www\\the\\web\\piwigo\\plugins\\TakeATour\\tpl\\admin.tpl',
      1 => 1420149511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1124354a5c3cd588bf6-14404964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAT_tour_ignored' => 0,
    'F_ACTION' => 0,
    'pwg_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c3cd683e45_51555667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c3cd683e45_51555667')) {function content_54a5c3cd683e45_51555667($_smarty_tpl) {?><div class="titrePage">
  <h2><?php echo l10n('takeatour_configpage');?>
</h2>
</div>
<div id="helpContent">
  <p><?php echo l10n('TAT_descrp');?>
</p>
<?php if (!isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)||(isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)&&in_array('first_contact',$_smarty_tpl->tpl_vars['TAT_tour_ignored']->value))){?>
  <fieldset>
    <legend><?php echo l10n('First Contact');?>
</legend>
    <div class="TAT_description"><?php echo l10n('first_contact_descrp');?>
</div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="submited_tour_path" value="tours/first_contact">
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
">
      <input type="submit" name="button2" id="button2" value="<?php echo l10n('Start the Tour');?>
">
    </form>
  </fieldset>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)||(isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)&&in_array('privacy',$_smarty_tpl->tpl_vars['TAT_tour_ignored']->value))){?>
  <fieldset>
    <legend><?php echo l10n('Privacy');?>
</legend>
    <div class="TAT_description"><?php echo l10n('privacy_descrp');?>
</div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="submited_tour_path" value="tours/privacy">
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
">
      <input type="submit" name="button2" id="button2" value="<?php echo l10n('Start the Tour');?>
">
    </form>
  </fieldset>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)||(isset($_smarty_tpl->tpl_vars['TAT_tour_ignored']->value)&&in_array('2_7_0',$_smarty_tpl->tpl_vars['TAT_tour_ignored']->value))){?>
  <fieldset>
    <legend><?php echo l10n('2.7 Tour');?>
</legend>
    <div class="TAT_description"><?php echo l10n('2_7_0_descrp');?>
</div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="submited_tour_path" value="tours/2_7_0">
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
">
      <input type="submit" name="button2" id="button2" value="<?php echo l10n('Start the Tour');?>
">
    </form>
  </fieldset>
<?php }?>
</div><?php }} ?>