<?php
defined( 'ABSPATH' ) or die();
?>

	<div class="project-gallery project-media-list">
		<div class="project-media-inner">
			<?php foreach ( get_field( 'projectGallery' ) as $item ): ?>
				
				<div class="project-media-item">
					<?php nanosoft_project_media_item( $item ) ?>
				</div>

			<?php endforeach ?>
		</div>
	</div>
