<?php $mainInfo = get_field('mainInfo');
$images = $mainInfo['images'];
$text = $mainInfo['texts']; ?>

<div style="background: #beaf82">

    <div class="p-5 text-white">
        <h2 class="mb-3"><?php echo $mainInfo['title']; ?></h2>
        <p class="mb-3 w-50"><?php echo $mainInfo['text']; ?></p>
    </div>

    <div class="pb-5 container d-flex justify-content-center">
        <?php
        $image1 = $images['image1'];
        if (!empty($image1)): ?>
            <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>"/>
        <?php endif; ?>

        <?php
        if (!empty($text['text1'])): ?>
            <p><?php echo $text['text1']; ?></p>
        <?php endif; ?>

        <?php
        $image2 = $images['image2'];
        if (!empty($image2)): ?>
            <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>"/>
        <?php endif; ?>

        <?php
        if (!empty($text['text2'])): ?>
            <p><?php echo $text['text2']; ?></p>
        <?php endif; ?>

        <?php
        $image3 = $images['image3'];
        if (!empty($image3)): ?>
            <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>"/>
        <?php endif; ?>

        <?php
        if (!empty($text['text3'])): ?>
            <p><?php echo $text['text3']; ?></p>
        <?php endif; ?>
    </div>
</div>


