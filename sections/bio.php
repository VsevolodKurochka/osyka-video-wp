<section class="page-section">
	<div class="container">
		<div class="page-section__row page-section__row_reverse page-section__row_y-center row">
			<div class="col-12 col-sm-6">
				<div class="page-section__image">
					<img src="<?php the_field('image_1'); ?>">
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="group">
					<div class="group__title"><?php the_field('title_1'); ?></div>
				</div>
				<div class="page-section__content">
					<?php the_field('content_1'); ?>
					
				</div>
			</div>
		</div>
		<div class="page-section__row page-section__row_x-center row">
			<div class="col-12 col-sm-10">
				<div class="group text-center">
					<div class="group__title"><?php the_field('title_2'); ?></div>
				</div>
				<div class="page-section__content">
					<?php the_field('content_2'); ?>
				</div>
			</div>
		</div>
		<div class="page-section__row page-section__row_y-center row">
			<div class="col-12 col-sm-6">
				<div class="page-section__image">
					<img src="<?php the_field('image_3'); ?>">
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="group">
					<div class="group__title"><?php the_field('title_3'); ?>
					</div>
				</div>
				<div class="page-section__content">
					<?php the_field('content_3'); ?>
				</div>
			</div>
		</div>
	</div>
</section>