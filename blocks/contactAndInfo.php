<?php $contactAndInfo = get_field('contactAndInfo'); ?>

<div class="container">
    <p class="mb-3"><?php echo $contactAndInfo['textLeft']; ?></p>
    <p class="mb-3"><?php echo $contactAndInfo['textRight']; ?></p>
</div>


<?php
$location = $contactAndInfo['googleMaps'];
if ($location): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
             data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>
