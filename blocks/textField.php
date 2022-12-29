<?php $textField = get_field('text_field');
$button = $textField['button'] ?>


<div class="d-block py-5"
    <?php
    if (!empty($textField['color'])): ?>
        style="background: <?php echo $textField['color']; ?>"
    <?php endif; ?>
>
    <div class="">
        <?php
        if (!empty($textField['text'])): ?>
            <p><?php echo $textField['text']; ?></p>
        <?php endif; ?>
    </div>
    <div class="d-flex justify-content-center">
        <?php
        if (!empty($button)): ?>
            <a class="btn btn-outline-light btn-lg" href={<?php echo $button['buttonLink']; ?>} role="button">
                <?php echo $button['buttonText']; ?>
            </a>
        <?php endif; ?>
    </div>

</div>
