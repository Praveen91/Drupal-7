<?php print render($title_prefix); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php if($header): ?>
				<?php print $header; ?>
			<?php endif; ?>
			<div class="plugin-container riva-sorting" id="projects6">
			<?php if($footer): ?>
				<?php print $footer; ?>
			<?php endif; ?>
				<?php if($rows): ?>
				<div class="listing">
					<?php print $rows; ?>
				</div>
				<?php endif ?>
			</div>
			<div class="clearfix"></div>
			<?php if($pager): ?>
			<div class="manis-portfolio">
				<?php print $pager; ?>
			</div>
			<?php endif ?>
		</div>
	</div>
</div>

