<?php
get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
<section class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h2 color-white"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
<section class="page-content p-t-70 p-b-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>		
		</div>	
	</div>
</section>
		<?php
	}
}
get_footer(); ?>