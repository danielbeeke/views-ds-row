<?php

/**
* @file
* Default simple view template to display a list of rows.
*
* @ingroup views_templates
*/
?>
<?php if (!empty($title)): ?>
<h3><?php print $title; ?></h3>
<?php endif; ?>

<table>
<?php if(isset($table_headers)): ?>
  <thead>
  <tr>
    <?php foreach ($table_headers as $table_header): ?>
      <th><?php print $table_header; ?></th>
    <?php endforeach; ?>
  </tr>
  </thead>
<?php endif; ?>
  <tbody>
    <?php foreach ($rows as $id => $row): ?>
      <?php print $row; ?>
    <?php endforeach; ?>
  </tbody>
</table>
