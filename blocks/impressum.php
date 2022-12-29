<?php $impressum = get_field('impressum'); ?>

    <div class="m-5">
        <?php
        if (!empty($impressum['title'])): ?>
            <p><?php echo $impressum['title']; ?></p>
        <?php endif; ?>
    </div>
    <div class="m-2 px-3">
        <?php
        if (!empty($impressum['text'])): ?>
            <p><?php echo $impressum['text']; ?></p>
        <?php endif; ?>
    </div>