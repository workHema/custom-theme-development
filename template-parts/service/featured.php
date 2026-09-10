<section class="service-arrow">
    <div class="container-fluid">
        <div class="row">

            <?php
            $featured_services = [
                [
                    'icon'        => get_field('featured_service_1_icon'),
                    'title'       => get_field('featured_service_1_title'),
                    'description' => get_field('featured_service_1_description'),
                    'class'       => 'bg-primary',
                ],
                [
                    'icon'        => get_field('featured_service_2_icon'),
                    'title'       => get_field('featured_service_2_title'),
                    'description' => get_field('featured_service_2_description'),
                    'class'       => 'bg-primary bg-primary-dark',
                ],
                [
                    'icon'        => get_field('featured_service_3_icon'),
                    'title'       => get_field('featured_service_3_title'),
                    'description' => get_field('featured_service_3_description'),
                    'class'       => 'bg-primary bg-primary-darker',
                ],
            ];
            ?>

            <?php foreach ($featured_services as $service) : ?>

                <div class="col-lg-4 col-sm-6 <?php echo esc_attr($service['class']); ?>">
                    <div class="block">

                        <?php if ($service['icon']) : ?>
                            <i class="<?php echo esc_attr($service['icon']); ?> text-white"></i>
                        <?php endif; ?>

                        <?php if ($service['title']) : ?>
                            <h3 class="text-white mb-3">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($service['description']) : ?>
                            <p>
                                <?php echo esc_html($service['description']); ?>
                            </p>
                        <?php endif; ?>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>
