        <?php $ng1 = get_field('nitty_gritty_1'); ?>
        <?php $ng2 = get_field('nitty_gritty_2'); ?>
        <?php $ng3 = get_field('nitty_gritty_3'); ?>
        <?php $ng4 = get_field('nitty_gritty_4'); ?>
        <?php if (!empty($ng1)) { ?>
        <div class="nittygritty">
          <p><strong>Nitty Gritty</strong></p>
          <?php if ( !empty($ng1) ) { echo "<p>" . $ng1 . "</p>"; } ?>
          <?php if ( !empty($ng2) ) { echo "<p>" . $ng2 . "</p>"; } ?>
          <?php if ( !empty($ng3) ) { echo "<p>" . $ng3 . "</p>"; } ?>
          <?php if ( !empty($ng4) ) { echo "<p>" . $ng4 . "</p>"; } ?>
        </div>
        <?php } ?>