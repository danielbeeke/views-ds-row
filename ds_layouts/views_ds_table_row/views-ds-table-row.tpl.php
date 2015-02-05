<?php
/**
 * @file
 * Display Suite views_ds_table_row template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $left: Rendered content for the "Left" region.
 * - $left_classes: String of classes that can be used to style the "Left" region.
 * - $left_wrapper: wrapper surrounding the left region.
 *
 * - $right: Rendered content for the "Right" region.
 * - $right_classes: String of classes that can be used to style the "Right" region.
 * - $right_wrapper: wrapper surrounding the right region.
 */
?>
<tr class="<?php print $classes;?>">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php print render($content); ?>

  <!-- Needed to activate display suite support on forms -->
  <?php if (!empty($drupal_render_children)): ?>
    <?php print $drupal_render_children ?>
  <?php endif; ?>
</tr>