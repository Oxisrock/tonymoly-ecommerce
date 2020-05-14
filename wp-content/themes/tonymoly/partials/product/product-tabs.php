<?php if (have_posts()) : the_post(); ?>
<div class="tabs-description mt-4 pb-4 mb-4">
        <ul class="nav nav-pills nav-justified mb-4" id="pills-tab" role="tablist">
           <?php if (get_field('product')):?>
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">PRODUCTO</a>
                </li>
           <?php endif;?>
           <?php if (get_field('how_use')):?>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">MODO DE USO</a>
                </li>
            <?php endif;?>
            <?php if (get_field('ingredients')):?>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">INGREDIENTES</a>
                </li>
            <?php endif;?>
        </ul>
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                <?php if (get_field('product')):?>
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="tabs-text"><?= get_field('product'); ?></div>
                    </div>
                <?php endif;?>
                <?php if (get_field('how_use')):?>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="tabs-text"><?= get_field('how_use'); ?></div>
                    </div>
                <?php endif;?>
                <?php if (get_field('ingredients')):?>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="tabs-text"><?= get_field('ingredients'); ?></div>
                    </div>
                <?php endif;?>
            </div>
        </div>
</div>
<?php endif; ?>