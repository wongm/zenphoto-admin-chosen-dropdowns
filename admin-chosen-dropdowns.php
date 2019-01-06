<?php

/**
 * Add the Chosen.js jQuery plugin to the 'album' select list, so that you can search by name. 
 *
 * @author Marcus Wong (wongm)
 */
$plugin_is_filter = 5 | ADMIN_PLUGIN;
$plugin_description = gettext("Add the Chosen.js jQuery plugin to the 'album' select list, so that you can search by name.");
$plugin_author = "Marcus Wong (wongm)";
$plugin_category = gettext('Admin');
$plugin_URL = "https://github.com/wongm/zenphoto-admin-chosen-dropdowns/";

zp_register_filter('admin_head', 'adminChosenDropdownsRenderHead');

function adminChosenDropdownsRenderHead() {
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.3/chosen.jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.3/chosen.min.css" />
<script>$(function() { $(".box-edit select").chosen({ width: '100%' }); });</script>
<?php
}

?>