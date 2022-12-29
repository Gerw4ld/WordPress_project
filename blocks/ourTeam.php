<?php $ourTeam = get_field('theTeam');
$employee1 = $ourTeam['employee1'];
$employee2 = $ourTeam['employee2'];
$employee3 = $ourTeam['employee3']; ?>


<div style="background: #8882be">

    <div class="p-5 text-white">
        <h2 class="mb-3"><?php echo $ourTeam['title']; ?></h2>
    </div>

    <div class="pb-5 container d-flex justify-content-between">
        <div>
            <?php
            $image1 = $employee1['imageEmployee1'];
            if (!empty($image1)): ?>
                <img style="border-radius: 50%" width="200px" height="200px" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>"/>
            <?php endif; ?>
            <p style="font-weight: bold" class="mb-3 w-50"><?php echo $employee1['nameEmployee1']; ?></p>
            <p class="mb-3 w-50"><?php echo $employee1['roleEmployee1']; ?></p>
        </div>
        <div>
            <?php
            $image2 = $employee2['imageEmployee2'];
            if (!empty($image2)): ?>
                <img style="border-radius: 50%" width="200px" height="200px" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>"/>
            <?php endif; ?>
            <p style="font-weight: bold"  class="mb-3 w-50"><?php echo $employee2['nameEmployee2']; ?></p>
            <p class="mb-3 w-50"><?php echo $employee2['roleEmployee2']; ?></p>
        </div>
        <div>
            <?php
            $image3 = $employee3['imageEmployee3'];
            if (!empty($image3)): ?>
                <img style="border-radius: 50%" width="200px" height="200px" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>"/>
            <?php endif; ?>
            <p style="font-weight: bold" class="mb-3 w-50"><?php echo $employee3['nameEmployee3']; ?></p>
            <p class="mb-3 w-50"><?php echo $employee3['roleEmployee3']; ?></p>
        </div>

    </div>
</div>