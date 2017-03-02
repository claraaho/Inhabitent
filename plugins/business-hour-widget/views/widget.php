<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $monday_friday ) ) > 0 ): ?>
    <p>
        <span class="days">Monday to Friday:</span> <?php echo $monday_friday;?>
    </p>
<?php endif; ?>


<?php if ( strlen( trim( $saturday ) ) > 0 ): ?>
    <p>
        <span class="days">Saturday:</span> <?php echo $saturday;?>
    </p>
<?php endif; ?>


<?php if ( strlen( trim( $sunday ) ) > 0 ): ?>
    <p>
        <span class="days">Sunday:</span> <?php echo $sunday;?>
    </p>
<?php endif; ?>
