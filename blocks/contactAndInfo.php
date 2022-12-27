<?php $contactAndInfo = get_field('contactAndInfo'); ?>

<div class="container  d-flex">
    <div class="d-flex w-50 justify-content-between">
        <div>
            <p class="mb-3"><?php echo $contactAndInfo['textLeft']; ?></p>
        </div>
        <div>
            <p class="mb-3"><?php echo $contactAndInfo['text_right']; ?></p>
        </div>
    </div>
    <div class="w-50 p-lg-3">
        <?php echo $contactAndInfo['googleMaps']; ?>
    </div>
</div>



