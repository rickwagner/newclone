<?php
// $Id: comment.tpl.php,v 1.1 2009/08/19 04:28:07 sociotech Exp $
?>

<div class="comment <?php print $comment_classes;?> clear-block">
 
  
  <?php if ($comment->new): ?>
  <a id="new"></a>
  <span class="new"><?php print $new ?></span>
  <?php endif; ?>
 
 
  
  <h3 class="title"><?php print $title ?></h3>
  <?php if ($submitted): ?>
    <div class="meta submitted">
      <?php print $picture ?>
      <span class="submitted"><?php print $submitted ?></span>
    </div>
  <?php endif; ?>
  
  <div class="content">
    <?php print $content ?>
    
    <?php if ($signature): ?>
    <div class="signature">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>
  
  <?php if ($links): ?>
  <div class="links">
    <?php print $links ?>
  </div>
  <?php endif; ?>
  
</div><!-- /comment -->