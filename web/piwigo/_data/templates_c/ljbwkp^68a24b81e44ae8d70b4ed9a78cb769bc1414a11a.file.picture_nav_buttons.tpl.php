<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:06:05
         compiled from ".\themes\default\template\picture_nav_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1340354a5c4cd3bdf97-64733739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a24b81e44ae8d70b4ed9a78cb769bc1414a11a' => 
    array (
      0 => '.\\themes\\default\\template\\picture_nav_buttons.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1340354a5c4cd3bdf97-64733739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISPLAY_NAV_BUTTONS' => 0,
    'slideshow' => 0,
    'U_UP' => 0,
    'previous' => 0,
    'next' => 0,
    'first' => 0,
    'last' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4cd781602_19168576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4cd781602_19168576')) {function content_54a5c4cd781602_19168576($_smarty_tpl) {?><div class="navigationButtons">
<?php if ($_smarty_tpl->tpl_vars['DISPLAY_NAV_BUTTONS']->value||isset($_smarty_tpl->tpl_vars['slideshow']->value)){?>
<?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value)){?>
<?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_INC_PERIOD'])){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_INC_PERIOD'];?>
" title="<?php echo l10n('Reduce diaporama speed');?>
" class="pwg-state-default pwg-button">
		<span class="pwg-icon pwg-icon-clock-minus"></span><span class="pwg-button-text"><?php echo l10n('Reduce diaporama speed');?>
</span>
	</a>
<?php }else{ ?>
	<span class="pwg-state-disabled pwg-button">
		<span class="pwg-icon pwg-icon-clock-minus"></span><span class="pwg-button-text"><?php echo l10n('Reduce diaporama speed');?>
</span>
	</span>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_DEC_PERIOD'])){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_DEC_PERIOD'];?>
" title="<?php echo l10n('Accelerate diaporama speed');?>
" class="pwg-state-default pwg-button">
		<span class="pwg-icon pwg-icon-clock-plus"></span><span class="pwg-button-text"><?php echo l10n('Accelerate diaporama speed');?>
</span>
	</a>
<?php }else{ ?>
	<span class="pwg-state-disabled pwg-button">
		<span class="pwg-icon pwg-icon-clock-plus"></span><span class="pwg-button-text"><?php echo l10n('Accelerate diaporama speed');?>
</span>
	</span>
<?php }?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_START_REPEAT'])){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_START_REPEAT'];?>
" title="<?php echo l10n('Repeat the slideshow');?>
" class="pwg-state-default pwg-button">
		<span class="pwg-icon pwg-icon-repeat-play"></span><span class="pwg-button-text"><?php echo l10n('Repeat the slideshow');?>
</span>
	</a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_REPEAT'])){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_REPEAT'];?>
" title="<?php echo l10n('Not repeat the slideshow');?>
" class="pwg-state-default pwg-button">
		<span class="pwg-icon pwg-icon-repeat-stop"></span><span class="pwg-button-text"><?php echo l10n('Not repeat the slideshow');?>
</span>
	</a>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['U_UP']->value)&&!isset($_smarty_tpl->tpl_vars['slideshow']->value)){?> <a href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" title="<?php echo l10n('Thumbnails');?>
" class="pwg-state-default pwg-button"> <span class="pwg-icon pwg-icon-arrow-n"></span><span class="pwg-button-text"><?php echo l10n('Thumbnails');?>
</span> </a> <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['previous']->value)){?> <a href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" title="<?php echo l10n('Previous');?>
 : <?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
" class="pwg-state-default pwg-button"> <span class="pwg-icon pwg-icon-arrow-w"></span><span class="pwg-button-text"><?php echo l10n('Previous');?>
</span> </a> <?php }else{ ?> <span class="pwg-state-disabled pwg-button"> <span class="pwg-icon pwg-icon-arrow-w"></span><span class="pwg-button-text"><?php echo l10n('Previous');?>
</span> </span> <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY'])){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY'];?>
" title="<?php echo l10n('Play of slideshow');?>
" class="pwg-state-default pwg-button">
		<span class="pwg-icon pwg-icon-play"></span><span class="pwg-button-text"><?php echo l10n('Play of slideshow');?>
</span>
	</a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY'])){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY'];?>
" title="<?php echo l10n('Pause of slideshow');?>
" class="pwg-state-default pwg-button">
		<span class="pwg-icon pwg-icon-pause"></span><span class="pwg-button-text"><?php echo l10n('Pause of slideshow');?>
</span>
	</a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['next']->value)){?> <a href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" title="<?php echo l10n('Next');?>
 : <?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
" class="pwg-state-default pwg-button pwg-button-icon-right"> <span class="pwg-icon pwg-icon-arrow-e"></span><span class="pwg-button-text"><?php echo l10n('Next');?>
</span> </a> <?php }else{ ?> <span class="pwg-state-disabled pwg-button pwg-button-icon-right"> <span class="pwg-icon pwg-icon-arrow-e"></span><span class="pwg-button-text"><?php echo l10n('Next');?>
</span> </span> <?php }?>

<?php }?>
</div>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 document.onkeydown = function(e){ e=e||window.event; if (e.altKey) return true; var target=e.target||e.srcElement; if (target && target.type) return true; var keyCode=e.keyCode||e.which, docElem=document.documentElement, url; switch(keyCode){ <?php if (isset($_smarty_tpl->tpl_vars['next']->value)){?> case 63235: case 39: if (e.ctrlKey || docElem.scrollLeft==docElem.scrollWidth-docElem.clientWidth)url="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
"; break; <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['previous']->value)){?> case 63234: case 37: if (e.ctrlKey || docElem.scrollLeft==0)url="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
"; break; <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['first']->value)){?> case 36: if (e.ctrlKey)url="<?php echo $_smarty_tpl->tpl_vars['first']->value['U_IMG'];?>
"; break; <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['last']->value)){?> case 35: if (e.ctrlKey)url="<?php echo $_smarty_tpl->tpl_vars['last']->value['U_IMG'];?>
"; break; <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['U_UP']->value)&&!isset($_smarty_tpl->tpl_vars['slideshow']->value)){?> case 38: if (e.ctrlKey)url="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
"; break; <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY'])){?> case 32: url="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY'];?>
"; break; <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY'])){?> case 32: url="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY'];?>
"; break; <?php }?> } if (url) {window.location=url.replace("&amp;","&"); return false;} return true; } <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }} ?>