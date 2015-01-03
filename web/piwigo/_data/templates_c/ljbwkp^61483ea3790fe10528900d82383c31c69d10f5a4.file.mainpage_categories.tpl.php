<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:54
         compiled from ".\themes\default\template\mainpage_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2754954a5c4c2677583-25026438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61483ea3790fe10528900d82383c31c69d10f5a4' => 
    array (
      0 => '.\\themes\\default\\template\\mainpage_categories.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2754954a5c4c2677583-25026438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'derivative_params' => 0,
    'ROOT_URL' => 0,
    'themeconf' => 0,
    'maxRequests' => 0,
    'category_thumbnails' => 0,
    'cat' => 0,
    'pwg' => 0,
    'derivative' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c282d001_74784160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c282d001_74784160')) {function content_54a5c4c282d001_74784160($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\Users\\Alexandre\\hubiC\\www\\the\\web\\piwigo\\include\\smarty\\libs\\plugins\\modifier.replace.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 .thumbnailCategory .illustration{ width: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+5;?>
px; } .content .thumbnailCategory .description{ height: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+5;?>
px; } <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png", max_requests = <?php echo $_smarty_tpl->tpl_vars['maxRequests']->value;?>
;
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="loader"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['img_dir'];?>
/ajax_loader.gif"></div>
<ul class="thumbnailCategories">
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_thumbnails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cat_loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cat_loop']['index']++;
?>
<?php $_smarty_tpl->tpl_vars['derivative'] = new Smarty_variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl);?>

<?php }?>
  <li class="<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['cat_loop']['index'])){?>odd<?php }else{ ?>even<?php }?>">
		<div class="thumbnailCategory">
			<div class="illustration">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
				<img <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TN_ALT'];?>
" title="<?php echo strip_tags(smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['NAME'],'"',' '));?>
 - <?php echo l10n('display this album');?>
">
			</a>
			</div>
			<div class="description">
				<h3>
					<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])){?>
					<img title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent<?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']){?>_by_child<?php }?>.png" alt="(!)">
<?php }?>
				</h3>
		<div class="text">
<?php if (isset($_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'])){?>
				<p class="dates"><?php echo $_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'];?>
</p>
<?php }?>
				<p class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</p>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'])){?>
				<p><?php echo $_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'];?>
</p>
<?php }?>
		</div>
			</div>
		</div>
	</li>
<?php } ?>
</ul>
<?php }} ?>