<section class="service-list section bg-gray">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>What we do best</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php for ($i = 1; $i <= 6; $i++) : ?>

                <?php
                $title       = get_field("service_{$i}_title");
                $description = get_field("service_{$i}_description");

                if (!$title && !$description) {
                    continue;
                }
                ?>

                <div class="col-lg-4 col-sm-6">
                    <div class="block">

                        <?php if ($title) : ?>
                            <h3 class="mb-3">
                                <?php echo esc_html($title); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($description) : ?>
                            <p>
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php endif; ?>

                    </div>
                </div>

            <?php endfor; ?>

        </div>

    </div>

</section>

