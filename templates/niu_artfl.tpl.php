<?php
/**
* @file
*
* This is the template file for the object page for the NIU Viewer
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
<fieldset class="collapsible collapsed niu-metadata islandora">
  <legend><span class="fieldset-legend"><?php print t('Details'); ?></span></legend>
  <div class="fieldset-wrapper">
    <dl class="islandora-inline-metadata niu-fields">
      <?php $row_field = 0; ?>
      <?php foreach($dc_array as $key => $value): ?>
        <dt class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
          <?php print $value['label']; ?>
        </dt>
        <dd class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
          <?php print $value['value']; ?>
        </dd>
        <?php $row_field++; ?>
      <?php endforeach; ?>
    </dl>
  </div>
</fieldset>
