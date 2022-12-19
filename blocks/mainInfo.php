<?php $mainInfo = get_field('mainInfo'); ?>

<div style="background: #354a60">

    <div class="p-5 text-white">
        <h2 class="mb-3"><?php echo $mainInfo['title']; ?></h2>
        <p class="mb-3 w-[50px]"><?php echo $mainInfo['text']; ?></p>
    </div>

    <div class="pb-5 container d-flex justify-content-center">
        <?php
        $image1 = $mainInfo['image1'];
        if (!empty($image1)): ?>
            <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>"/>
        <?php endif; ?>
        <?php
        $image2 = $mainInfo['image2'];
        if (!empty($image2)): ?>
            <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>"/>
        <?php endif; ?>
        <?php
        $image3 = $mainInfo['image3'];
        if (!empty($image3)): ?>
            <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>"/>
        <?php endif; ?>
    </div>
</div>


