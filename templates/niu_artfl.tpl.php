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
  <div class="niu-artfl-object-metadata niu-metadata">
    <?php print $description; ?>
    <?php if ($parent_collections): ?>
      <div>
        <h2><?php print t('In collections'); ?></h2>
        <ul>
          <?php foreach ($parent_collections as $collection): ?>
        <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php print $metadata; ?>
  </div>
</div>
