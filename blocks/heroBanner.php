<?php $heroBanner = get_field('heroBanner');?>

<div class="container">

    <h1><?php echo $heroBanner['title'];?></h1>
    <p><?php echo $heroBanner['text'];?></p>

    <p>
    <a href={<?php echo $heroBanner['link'];?>}>
        <?php echo $heroBanner['link_text'];?>
    </a>
    </p>


</div>


