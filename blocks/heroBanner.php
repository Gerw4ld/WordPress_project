<?php $heroBanner = get_field('heroBanner');
$button = $heroBanner['button'] ?>

<div class="text-center bg-image "
     style="background-image:url(<?php $image = $heroBanner['image'];
     if (!empty($image)): ?><?php echo $image['url']; ?><?php endif; ?>);
             height: 600px; background-position: center;">

    <div class="mask text-white h-100 w-100 d-flex flex-column justify-content-center align-items-center"
         style="background-color: rgba(0, 0, 0, 0.1);">
        <h1 class="mb-3"><?php echo $heroBanner['title']; ?></h1>
        <p class="mb-3"><?php echo $heroBanner['text']; ?></p>
        <a class="btn btn-outline-light btn-lg" href={<?php echo $button['buttonLink']; ?>} role="button">
            <?php echo $button['buttonText']; ?>
        </a>
    </div>
</div>




