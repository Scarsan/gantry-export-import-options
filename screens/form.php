<form id="gantry-import-export" action="" method="POST" enctype="multipart/form-data">
<div class="custom-gantry-import-export-spacer">
<h4>Import Settings</h4>
<input type="file" name="file" />
<input type="submit" name="upload" id="upload" class="button-secondary" value=" Upload ">
</div>

<div class="custom-gantry-import-export-spacer">
<h4>Export Settings</h4>
<a href="<?php echo admin_url('admin.php?page=gantry-theme-settings&action=download'); ?>" class="button-secondary">Download as file</a>
</div>
</form>

<script> jQuery('#gantry-import-export').insertAfter('#g4-container').show(); </script>
