<div id="sd-installer"></div>
<script id="tmpl-sd-installer" type="text/x-template">
	<div id="sd-installer" class="sd-installer wrap about-wrap">
		<h1><?php esc_html_e( 'Sample Data Installation', 'nanosoft' ) ?></h1>
		<p class="sd-description about-description">
			<?php esc_html_e( 'Importing demo data (post, pages, images, theme settings, ...) is the easiest way to setup your theme.	It will allow you to quickly edit everything instead of creating content from scratch.', 'nanosoft' ) ?>
		</p>

		<div :class="containerClasses()">
			<div v-for="package in info.packages" v-bind:key="package" :class="packageClasses(package)">
				<div class="sd-package-preview">
					<img v-bind:src="package.preview" v-bind:alt="package.title" />
				</div>
				<ul v-show="state.package == package" class="sd-package-tasks">
					<li v-for="task in tasks" :class="taskClasses(task)">{{ t(task.caption) }}</li>
					<li v-if="completedTasks.length == tasks.length" class="sd-task sd-task-finished">{{ t('Import completed!!!') }}</li>
				</ul>
				<div class="sd-package-footer sd-clearfix">
					<div class="sd-package-title">{{ package.title }}</div>
					<div class="sd-package-actions">
						<button v-if="installedPackage.file != package.file" v-on:click.prevent="start(package)" v-bind:disabled="state.package" class="button button-primary">{{ t('Import') }}</button>
						<button v-else class="button button-primary" disabled>Installed</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</script>
