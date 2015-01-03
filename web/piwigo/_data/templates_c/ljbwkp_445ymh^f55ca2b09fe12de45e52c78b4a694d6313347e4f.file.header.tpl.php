<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:05:54
         compiled from ".\themes\default\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2254654a5c4c28e6568-22942644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55ca2b09fe12de45e52c78b4a694d6313347e4f' => 
    array (
      0 => '.\\themes\\default\\template\\header.tpl',
      1 => 1420149522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2254654a5c4c28e6568-22942644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_info' => 0,
    'CONTENT_ENCODING' => 0,
    'meta_ref' => 0,
    'INFO_AUTHOR' => 0,
    'related_tags' => 0,
    'tag' => 0,
    'COMMENT_IMG' => 0,
    'INFO_FILE' => 0,
    'PAGE_TITLE' => 0,
    'GALLERY_TITLE' => 0,
    'ROOT_URL' => 0,
    'themeconf' => 0,
    'U_HOME' => 0,
    'first' => 0,
    'previous' => 0,
    'next' => 0,
    'last' => 0,
    'U_UP' => 0,
    'U_PREFETCH' => 0,
    'U_CANONICAL' => 0,
    'page_refresh' => 0,
    'themes' => 0,
    'theme' => 0,
    'head_elements' => 0,
    'elt' => 0,
    'BODY_ID' => 0,
    'header_msgs' => 0,
    'PAGE_BANNER' => 0,
    'header_notes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c4c2bb4d83_00794697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c4c2bb4d83_00794697')) {function content_54a5c4c2bb4d83_00794697($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\Users\\Alexandre\\hubiC\\www\\the\\web\\piwigo\\include\\smarty\\libs\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
">
<meta name="generator" content="Piwigo (aka PWG), see piwigo.org">

<?php if (isset($_smarty_tpl->tpl_vars['meta_ref']->value)){?> 
<?php if (isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value)){?>
<meta name="author" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value),'"',' ');?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['related_tags']->value)){?>
<meta name="keywords" content="<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tag_loop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tag_loop']['first']){?>, <?php }?><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
<?php } ?>">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value)){?>
<meta name="description" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');?>
<?php if (isset($_smarty_tpl->tpl_vars['INFO_FILE']->value)){?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;?>
<?php }?>">
<?php }else{ ?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['INFO_FILE']->value)){?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;?>
<?php }?>">
<?php }?>
<?php }?>

<title><?php if ($_smarty_tpl->tpl_vars['PAGE_TITLE']->value!=l10n('Home')&&$_smarty_tpl->tpl_vars['PAGE_TITLE']->value!=$_smarty_tpl->tpl_vars['GALLERY_TITLE']->value){?><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/favicon.ico">

<link rel="start" title="<?php echo l10n('Home');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" >
<link rel="search" title="<?php echo l10n('Search');?>
" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
search.php" >

<?php if (isset($_smarty_tpl->tpl_vars['first']->value['U_IMG'])){?><link rel="first" title="<?php echo l10n('First');?>
" href="<?php echo $_smarty_tpl->tpl_vars['first']->value['U_IMG'];?>
" ><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['previous']->value['U_IMG'])){?><link rel="prev" title="<?php echo l10n('Previous');?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" ><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['next']->value['U_IMG'])){?><link rel="next" title="<?php echo l10n('Next');?>
" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" ><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['last']->value['U_IMG'])){?><link rel="last" title="<?php echo l10n('Last');?>
" href="<?php echo $_smarty_tpl->tpl_vars['last']->value['U_IMG'];?>
" ><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['U_UP']->value)){?><link rel="up" title="<?php echo l10n('Thumbnails');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" ><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['U_PREFETCH']->value)){?><link rel="prefetch" href="<?php echo $_smarty_tpl->tpl_vars['U_PREFETCH']->value;?>
"><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['U_CANONICAL']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['U_CANONICAL']->value;?>
"><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['page_refresh']->value)){?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['TIME'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
"><?php }?>

 <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['theme']->value['load_css']){?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl);?>
 <?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['local_head'])){?> <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['theme']->value['local_head'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('load_css'=>$_smarty_tpl->tpl_vars['theme']->value['load_css']), 0);?>
 <?php }?> <?php } ?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"jquery",'load'=>"footer"),$_smarty_tpl);?>
 

<!-- BEGIN get_combined -->
<!-- COMBINED_CSS -->

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'header'),$_smarty_tpl);?>

<!-- END get_combined -->

<!--[if lt IE 7]>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/js/pngfix.js"></script>
<![endif]-->

<?php if (!empty($_smarty_tpl->tpl_vars['head_elements']->value)){?>
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value){
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php } ?>
<?php }?>
</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['BODY_ID']->value;?>
">

<div id="the_page">

<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)){?>
<div class="header_msgs">
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['header_msgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value){
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
<br>
<?php } ?>
</div>
<?php }?>

<div id="theHeader"><?php echo $_smarty_tpl->tpl_vars['PAGE_BANNER']->value;?>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['header_notes']->value)){?>
<div class="header_notes">
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['header_notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value){
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
  <p><?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
</p>
<?php } ?>
</div>
<?php }?>
<?php }} ?>