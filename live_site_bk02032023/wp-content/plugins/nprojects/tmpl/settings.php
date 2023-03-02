<div class="wrap">
	<h1>Projects Settings</h1>

	<?php if ( ! empty( $message ) ): ?>
		<div class="updated notice is-dismissible">
		    <p><strong><?php echo $message ?></strong></p>
		</div>
	<?php endif ?>

	<form action="" method="post">
		<h2 class="title">Permalink Settings</h2>
		<p>
			If you like, you may enter custom structures for your project URLs here.
			For example, using <code>project</code> would make your product links like
			<code><?php echo home_url( '/' ) ?>project/sample-project/</code>. 
			This setting affects projects URLs only, not things such as projects categories.
		</p>

		<table class="form-table permalink-structure">
			<tr>
				<th><label for="permalink_slug">Slug Base</label></th>
				<td><input id="permalink_slug" name="permalink_slug" type="text" class="regular-text code" value="<?php echo get_option( '_nproject_permalink_slug', 'nproject' ) ?>" /></td>
			</tr>
		</table>

		<h2 class="title">Optional</h2>
		<p>
			If you like, you may enter custom structures for your category and tag URLs here.
			For example, using <code>topics</code> as your category base would make your category links like 
			<code><?php echo home_url( '/' ) ?>topics/uncategorized/</code>. 
			If you leave these blank the defaults will be used.
		</p>
		<table class="form-table permalink-structure">
			<tr>
				<th><label for="permalink_category">Category Base</label></th>
				<td><input id="permalink_category" name="permalink_category" type="text" class="regular-text code" value="<?php echo get_option( '_nproject_permalink_category', 'nproject-category' ) ?>" /></td>
			</tr>
			<tr>
				<th><label for="permalink_tag">Tag Base</label></th>
				<td><input id="permalink_tag" name="permalink_tag" type="text" class="regular-text code" value="<?php echo get_option( '_nproject_permalink_tag', 'nproject-tag' ) ?>" /></td>
			</tr>
		</table>
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php esc_html_e( 'Save Changes' ) ?>" />
		</p>
	</form>
</div>