<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:58
         compiled from ".\themes\default\template\thumbnails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:902354a5c4c69c4bb0-15581757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2046909ed185bb0ad8abe55208669dfa11837bff' => 
    array (
      0 => '.\\themes\\default\\template\\thumbnails.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '902354a5c4c69c4bb0-15581757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumbnails' => 0,
    'derivative_params' => 0,
    'ROOT_URL' => 0,
    'themeconf' => 0,
    'maxRequests' => 0,
    'thumbnail' => 0,
    'pwg' => 0,
    'derivative' => 0,
    'SHOW_THUMBNAIL_CAPTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c6c2cf42_60249693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c6c2cf42_60249693')) {function content_54a5c4c6c2cf42_60249693($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)){?>  <?php $_smarty_tpl->smarty->_tag_stack[] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
  .thumbnails SPAN, .thumbnails .wrap2 A, .thumbnails LABEL{ width: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+2;?>
px; } .thumbnails .wrap2{ height: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+3;?>
px; } <?php if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()>600){?> .thumbLegend {font-size: 130%} <?php }else{ ?> <?php if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()>400){?> .thumbLegend {font-size: 110%} <?php }else{ ?> .thumbLegend {font-size: 90%} <?php }?> <?php }?> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png", max_requests = <?php echo $_smarty_tpl->tpl_vars['maxRequests']->value;?>
; <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php  $_smarty_tpl->tpl_vars['thumbnail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumbnail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thumbnails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->key => $_smarty_tpl->tpl_vars['thumbnail']->value){
$_smarty_tpl->tpl_vars['thumbnail']->_loop = true;
?> <?php $_smarty_tpl->tpl_vars['derivative'] = new Smarty_variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']), null, 0);?> <?php if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl);?>
 <?php }?> <li> <span class="wrap1"> <span class="wrap2"> <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
"> <img class="thumbnail" <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE'];?>
"> </a> </span> <?php if ($_smarty_tpl->tpl_vars['SHOW_THUMBNAIL_CAPTION']->value){?> <span class="thumbLegend"> <span class="thumbName"><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];?>
</span> <?php if (!empty($_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts'])){?> <img title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent.png" alt="(!)"> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS'])){?> <span class="<?php if (0==$_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']){?>zero <?php }?>nb-comments"> <br> <?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d comment','%d comments',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']);?>
 </span> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS'])){?> <span class="<?php if (0==$_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']){?>zero <?php }?>nb-hits"> <br> <?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d hit','%d hits',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']);?>
 </span> <?php }?> </span> <?php }?> </span> </li> <?php } ?>
<?php }?>
<?php }} ?>