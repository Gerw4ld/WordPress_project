<?php $interest = get_field('interest'); ?>

<div class="container  d-flex">
    <div class="d-flex justify-content-between ">
        <div class="w-50 m-5">
            <p><?php echo $interest['text']; ?></p>
        </div>
        <div class="  w-50 m-5 d-flex justify-content-center">
            <?php
            $image = $interest['image'];
            if (!empty($image)): ?>
                <img width="200px" height="200px" src="<?php echo esc_url($image['url']); ?>"
                     alt="<?php echo esc_attr($image['alt']); ?>"/>
            <?php endif; ?>
        </div>
    </div>
</div>