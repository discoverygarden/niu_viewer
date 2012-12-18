<?php
/**
* @file
*
* This is the template file for the object page for basic image
*
* @TODO: add documentation about file and available variables
* @TODO: drupal_set_title shouldn't be called here
*/
?>

<div class="niu-artfl-object islandora clear-fix">
  <div class="niu-artfl">
    <?php print($artfl); ?>
  </div>
  <div class="niu-metadata">
    <?php print($metadata_table); ?>
  </div>
</div>
<fieldset class="collapsible collapsed" style="display: block; clear:both">
  <legend><span class="fieldset-legend"><?php print t('File details'); ?></span></legend>
  <div class="fieldset-wrapper">
    <?php print($datastream_table); ?>
  </div>
</fieldset>

