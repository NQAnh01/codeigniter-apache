<div class="page-header">
	<h3 class="page-title"> <?php echo $bread->title; ?> </h3>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<?php foreach($bread->cums as $b): ?>
			<li class="breadcrumb-item <?php echo !$b->url ? 'active' : ''; ?>" <?php echo !$b->url? 'aria-current="page"' : ''?>>
				<?php if($b->url) {
					echo anchor($b->url, $b->title);
				}else{
					echo $b->title;
				} ?>
			</li>
			<?php endforeach; ?>
		</ol>
	</nav>
</div>