<?php $argsBanner = [
        'post_type' => 'post',
        'showposts' => 12,
        'orderby' =>'date',
        'order' => 'DESC',
      ];
      global $product;
      $loop = new WP_Query($argsBanner); ?>
<div class="container">
	<div class="row">
		<?php if ($loop->have_posts()) : while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-12">
                  <article class="art p-4">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
                        <p class="date-blog"><?php the_date(); ?></p>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <a href="<?php the_permalink(); ?>">Leer más</a>
                  </article>
            </div>
		<?php endwhile; endif; ?>
	</div>
</div>