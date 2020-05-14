<div class="comentarios pt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Reviews de usuarios</h2>
            </div>
            <?php 		if ( comments_open() || get_comments_number() ) :
                comments_template( );
            endif;	 ?>
        </div>
    </div>
</div>