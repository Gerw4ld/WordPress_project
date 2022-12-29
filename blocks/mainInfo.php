<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<?php $mainInfo = get_field('mainInfo');
$images = $mainInfo['images'];
$text = $mainInfo['texts']; ?>

<div style="background: #beaf82">

    <div class="p-5 text-white">
        <h2 class="mb-3"><?php echo $mainInfo['title']; ?></h2>
        <p class="mb-3 w-50"><?php echo $mainInfo['text']; ?></p>
    </div>

    <div class="pb-5 container d-flex justify-content-between">
        <div class="p-2">
            <?php
            $image1 = $images['image1'];
            if (!empty($image1)): ?>
            <input type="checkbox" id="toggle1">
            <label for="toggle1">

            <img style="cursor:pointer"  src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>"/>
           </label>
            <?php endif; ?>

            <?php
            if (!empty($text['text1'])): ?>
            <div id="text1">
                <p class="pt-3"><?php echo $text['text1']; ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="p-2">
            <?php
            $image2 = $images['image2'];
            if (!empty($image2)): ?>
            <input type="checkbox" id="toggle2">
            <label for="toggle2">

            <img style="cursor:pointer"  src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>"/>
            </label>
                <?php endif; ?>

            <?php
            if (!empty($text['text2'])): ?>
            <div id="text2">
                <p class="pt-3"><?php echo $text['text2']; ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="p-2">
            <?php
            $image3 = $images['image3'];
            if (!empty($image3)): ?>
                <input type="checkbox" id="toggle3">
                <label for="toggle3">

                    <img style="cursor:pointer" src="<?php echo esc_url($image3['url']); ?>"
                         alt="<?php echo esc_attr($image3['alt']); ?>"/>
                </label>
            <?php endif; ?>

            <?php
            if (!empty($text['text3'])): ?>
                <div id="text3">
                    <p class="pt-3"><?php echo $text['text3']; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


