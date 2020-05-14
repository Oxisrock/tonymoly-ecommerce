<?php if (have_posts()) : the_post(); ?>
<section>
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>