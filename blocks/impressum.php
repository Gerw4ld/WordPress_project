<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<?php $impressum = get_field('impressum'); ?>

<div class="m-5">

        <?php
        if (!empty($impressum['title'])): ?>
            <input  type="checkbox" id="impressumToggle">
            <label for="impressumToggle" style="cursor: pointer">
                <p style="padding-right: 8px; margin: auto"><?php echo $impressum['title']; ?></p>
            </label>
        <?php endif; ?>
        <i id="arrow" class="arrow down"></i>


    <div class="m-2 px-3" id="impressumText">
        <?php
        if (!empty($impressum['text'])): ?>
            <p><?php echo $impressum['text']; ?></p>
        <?php endif; ?>
    </div>
</div>
