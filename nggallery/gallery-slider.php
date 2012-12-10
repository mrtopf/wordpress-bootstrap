<?php
/**
 * Template for Orbit slider Gallery + Captions
 * **/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>
    <div class="slideshow">
    <?php foreach ( $images as $image ) : ?>
        <div data-caption="#htmlCaption-<?php echo $image->pid ?>">
            <a href="<?php echo $image->imageURL ?>">
                <img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" />
            </a>
        </div>
    <?php endforeach; ?>
    </div>
    <?php foreach ( $images as $image ) : ?>
        <div class="orbit-caption" id="htmlCaption-<?php echo $image->pid ?>">
            <?php echo $image->alttext ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

