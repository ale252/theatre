<?php /* Smarty version Smarty-3.1.13, created on 2015-01-01 23:01:57
         compiled from ".\admin\themes\default\template\photos_add_direct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3207254a5c3d5182192-13055453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230c1c1d65a824dda996e66200292c8e80d69e41' => 
    array (
      0 => '.\\admin\\themes\\default\\template\\photos_add_direct.tpl',
      1 => 1420149514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3207254a5c3d5182192-13055453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_info' => 0,
    'plupload_i18n' => 0,
    'themeconf' => 0,
    'CACHE_KEYS' => 0,
    'ROOT_URL' => 0,
    'pwg_token' => 0,
    'file_exts' => 0,
    'TABSHEET_TITLE' => 0,
    'setup_errors' => 0,
    'error' => 0,
    'setup_warnings' => 0,
    'warning' => 0,
    'hide_warnings_link' => 0,
    'form_action' => 0,
    'selected_category' => 0,
    'level_options' => 0,
    'level_options_selected' => 0,
    'original_resize_maxheight' => 0,
    'original_resize_maxwidth' => 0,
    'upload_max_filesize_shorthand' => 0,
    'upload_file_types' => 0,
    'max_upload_resolution' => 0,
    'max_upload_width' => 0,
    'max_upload_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54a5c3d54326a0_19111716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a5c3d54326a0_19111716')) {function content_54a5c3d54326a0_19111716($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\Users\\Alexandre\\hubiC\\www\\the\\web\\piwigo\\include\\smarty\\libs\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.jgrowl','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.jgrowl_minimized.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.plupload','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/plupload/plupload.full.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.plupload.queue','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ui.progressbar','load'=>'footer'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/plugins/jquery.jgrowl.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/plugins/plupload/jquery.plupload.queue/css/jquery.plupload.queue.css"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["plupload_i18n"] = new Smarty_variable("themes/default/js/plugins/plupload/i18n/".((string)$_smarty_tpl->tpl_vars['lang_info']->value['plupload_code']).".js", null, 0);?>
<?php if (file_exists((constant("PHPWG_ROOT_PATH")).($_smarty_tpl->tpl_vars['plupload_i18n']->value))){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"plupload_i18n-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['plupload_code']),'load'=>"footer",'path'=>$_smarty_tpl->tpl_vars['plupload_i18n']->value,'require'=>"jquery.plupload.queue"),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('include/add_album.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


var categoriesCache = new CategoriesCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['categories'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

categoriesCache.selectize(jQuery('[data-selectize=categories]'), {
  filter: function(categories, options) {
    if (categories.length > 0) {
      jQuery("#albumSelection, .selectFiles, .showFieldset").show();
    }
    
    return categories;
  }
});

jQuery('[data-add-album]').pwgAddAlbum({ cache: categoriesCache });

var pwg_token = '<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
';
var photosUploaded_label = "<?php echo l10n('%d photos uploaded');?>
";
var batch_Label = "<?php echo l10n('Manage this set of %d photos');?>
";
var albumSummary_label = "<?php echo htmlspecialchars(l10n('Album "%s" now contains %d photos'), ENT_QUOTES, 'UTF-8', true);?>
";
var uploadedPhotos = [];
var uploadCategory = null;


jQuery(document).ready(function(){
  jQuery("#uploadWarningsSummary a.showInfo").click(function() {
    jQuery("#uploadWarningsSummary").hide();
    jQuery("#uploadWarnings").show();
    return false;
  });

  jQuery("#showPermissions").click(function() {
    jQuery(this).parent(".showFieldset").hide();
    jQuery("#permissions").show();
    return false;
  });

	jQuery("#uploader").pluploadQueue({
		// General settings
    browse_button : 'addFiles',
    container : 'uploadForm',
    
		// runtimes : 'html5,flash,silverlight,html4',
		runtimes : 'html5',

		// url : '../upload.php',
		url : 'ws.php?method=pwg.images.upload&format=json',
		
		chunk_size: '500kb',
		
		filters : {
			// Maximum file size
			max_file_size : '1000mb',
			// Specify what files to browse for
			mime_types: [
				{title : "Image files", extensions : "<?php echo $_smarty_tpl->tpl_vars['file_exts']->value;?>
"}
			]
		},

		// Rename files by clicking on their titles
		// rename: true,

		// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
		dragdrop: true,

    preinit: {
      Init: function (up, info) {
        jQuery('#uploader_container').removeAttr("title"); //remove the "using runtime" text
        
        jQuery('#startUpload').on('click', function(e) {
            e.preventDefault();
            up.start();
          });
        
        jQuery('#cancelUpload').on('click', function(e) {
            e.preventDefault();
            up.stop();
            up.trigger('UploadComplete', up.files);
          });
      }
    },

    init : {
      // update custom button state on queue change
      QueueChanged : function(up) {
        jQuery('#startUpload').prop('disabled', up.files.length == 0);
      },
      
      UploadProgress: function(up, file) {
        jQuery('#uploadingActions .progressbar').width(up.total.percent+'%');
      },
      
      BeforeUpload: function(up, file) {
        //console.log('[BeforeUpload]', file);
        
        // hide buttons
        jQuery('#startUpload, #addFiles').hide();
        jQuery('#uploadingActions').show();

        // warn user if she wants to leave page while upload is running
        jQuery(window).bind('beforeunload', function() {
          return "<?php echo htmlspecialchars(l10n('Upload in progress'), ENT_QUOTES, 'UTF-8', true);?>
";
        });

        // no more change on category/level
        jQuery("select[name=level]").attr("disabled", "disabled");

        // You can override settings before the file is uploaded
        up.setOption(
          'multipart_params',
          {
            category : jQuery("select[name=category] option:selected").val(),
            level : jQuery("select[name=level] option:selected").val(),
            pwg_token : pwg_token
            // name : file.name
          }
        );
      },

      FileUploaded: function(up, file, info) {
        // Called when file has finished uploading
        //console.log('[FileUploaded] File:', file, "Info:", info);
        
        // hide item line
        jQuery('#'+file.id).hide();
      
        var data = jQuery.parseJSON(info.response);
      
        jQuery("#uploadedPhotos").parent("fieldset").show();
      
        html = '<a href="admin.php?page=photo-'+data.result.image_id+'" target="_blank">';
        html += '<img src="'+data.result.src+'" class="thumbnail" title="'+data.result.name+'">';
        html += '</a> ';
      
        jQuery("#uploadedPhotos").prepend(html);

        // do not remove file, or it will reset the progress bar :-/
        // up.removeFile(file);
        uploadedPhotos.push(parseInt(data.result.image_id));
        uploadCategory = data.result.category;
      },

      UploadComplete: function(up, files) {
        // Called when all files are either uploaded or failed
        //console.log('[UploadComplete]');

        jQuery(".selectAlbum, .selectFiles, #permissions, .showFieldset").hide();

        jQuery(".infos").append('<ul><li>'+sprintf(photosUploaded_label, uploadedPhotos.length)+'</li></ul>');

        html = sprintf(
          albumSummary_label,
          '<a href="admin.php?page=album-'+uploadCategory.id+'">'+uploadCategory.label+'</a>',
          parseInt(uploadCategory.nb_photos)
        );

        jQuery(".infos ul").append('<li>'+html+'</li>');

        jQuery(".infos").show();

        // TODO: use a new method pwg.caddie.empty +
        // pwg.caddie.add(uploadedPhotos) instead of relying on huge GET parameter
        // (and remove useless code from admin/photos_add_direct.php)

        jQuery(".batchLink").attr("href", "admin.php?page=photos_add&section=direct&batch="+uploadedPhotos.join(","));
        jQuery(".batchLink").html(sprintf(batch_Label, uploadedPhotos.length));

        jQuery(".afterUploadActions").show();
        jQuery('#uploadingActions').hide();

        // user can safely leave page without warning
        jQuery(window).unbind('beforeunload');
      }
    }
	});

});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="titrePage">
  <h2><?php echo l10n('Upload Photos');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<div id="photosAddContent">

<div class="infos" style="display:none"></div>

<p class="afterUploadActions" style="margin:10px; display:none;"><a class="batchLink"></a> | <a href=""><?php echo l10n('Add another set of photos');?>
</a></p>

<?php if (count($_smarty_tpl->tpl_vars['setup_errors']->value)>0){?>
<div class="errors">
  <ul>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setup_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php } ?>
  </ul>
</div>
<?php }else{ ?>

<?php if (count($_smarty_tpl->tpl_vars['setup_warnings']->value)>0){?>
<div class="warnings">
  <ul>
<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setup_warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
<?php } ?>
  </ul>
  <div class="hideButton" style="text-align:center"><a href="<?php echo $_smarty_tpl->tpl_vars['hide_warnings_link']->value;?>
"><?php echo l10n('Hide');?>
</a></div>
</div>
<?php }?>
<form id="uploadForm" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
">
    <fieldset class="selectAlbum">
      <legend><?php echo l10n('Drop into album');?>
</legend>

      <span id="albumSelection" style="display:none">
      <select data-selectize="categories" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['selected_category']->value), ENT_QUOTES, 'UTF-8', true);?>
"
        data-default="first" name="category" style="width:600px"></select>
      <br><?php echo l10n('... or ');?>
</span>
      <a href="#" data-add-album="category" title="<?php echo l10n('create a new album');?>
"><?php echo l10n('create a new album');?>
</a>
    </fieldset>

    <p class="showFieldset" style="display:none"><a id="showPermissions" href="#"><?php echo l10n('Manage Permissions');?>
</a></p>

    <fieldset id="permissions" style="display:none">
      <legend><?php echo l10n('Who can see these photos?');?>
</legend>

      <select name="level" size="1">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['level_options_selected']->value),$_smarty_tpl);?>

      </select>
    </fieldset>

    <fieldset class="selectFiles" style="display:none">
      <legend><?php echo l10n('Select files');?>
</legend>
      
      <button id="addFiles" class="buttonLike icon-plus-circled"><?php echo l10n('Add Photos');?>
</button>
 
<?php if (isset($_smarty_tpl->tpl_vars['original_resize_maxheight']->value)){?>
      <p class="uploadInfo"><?php echo l10n('The picture dimensions will be reduced to %dx%d pixels.',$_smarty_tpl->tpl_vars['original_resize_maxwidth']->value,$_smarty_tpl->tpl_vars['original_resize_maxheight']->value);?>
</p>
<?php }?>
      <p id="uploadWarningsSummary"><?php echo $_smarty_tpl->tpl_vars['upload_max_filesize_shorthand']->value;?>
B. <?php echo $_smarty_tpl->tpl_vars['upload_file_types']->value;?>
. <?php if (isset($_smarty_tpl->tpl_vars['max_upload_resolution']->value)){?><?php echo $_smarty_tpl->tpl_vars['max_upload_resolution']->value;?>
Mpx<?php }?> <a class="icon-info-circled-1 showInfo" title="<?php echo l10n('Learn more');?>
"></a></p>

      <p id="uploadWarnings">
        <?php echo l10n('Maximum file size: %sB.',$_smarty_tpl->tpl_vars['upload_max_filesize_shorthand']->value);?>

        <?php echo l10n('Allowed file types: %s.',$_smarty_tpl->tpl_vars['upload_file_types']->value);?>

<?php if (isset($_smarty_tpl->tpl_vars['max_upload_resolution']->value)){?>
        <?php echo l10n('Approximate maximum resolution: %dM pixels (that\'s %dx%d pixels).',$_smarty_tpl->tpl_vars['max_upload_resolution']->value,$_smarty_tpl->tpl_vars['max_upload_width']->value,$_smarty_tpl->tpl_vars['max_upload_height']->value);?>

<?php }?>
      </p>

      <div id="uploader">
        <p>Your browser doesn't have HTML5 support.</p>
      </div>

    </fieldset>
    
    <div id="uploadingActions" style="display:none">
      <button id="cancelUpload" class="buttonLike icon-cancel-circled"><?php echo l10n('Cancel');?>
</button>
      
      <div class="big-progressbar">
        <div class="progressbar" style="width:0%"></div>
      </div>
    </div>
      
    <button id="startUpload" class="buttonLike icon-upload" disabled><?php echo l10n('Start Upload');?>
</button>

</form>

<fieldset style="display:none">
  <legend><?php echo l10n('Uploaded Photos');?>
</legend>
  <div id="uploadedPhotos"></div>
</fieldset>

<?php }?> 

</div> <!-- photosAddContent -->
<?php }} ?>