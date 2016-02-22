<?php
//************************************************************************
// подключение данный фото-галереи
//************************************************************************

include 'template/portfolio/data/' . $alias . '.php';

//************************************************************************

?>
<?php if ($gallery_data && $gallery_data['items'] && is_array($gallery_data['items'])): ?>
	<div class="view gallery-page">
		<div class="content">
			<div class="view-wrapper">
				<div class="view">
					<div class="item-content">
						<div class="">
							<h3><?php echo $gallery_data['title'] ?> <span class="highlight">Gallery</span></h3>
							<div class="row">
								<div class="col-md-12">
									<div class="slider">
										<?php foreach ($gallery_data['items'] AS $index => $item): ?>
											<div><img style="margin: 0 auto;max-width:100%;max-height:900px;width: auto;" alt="Slide <?php echo $index + 1; ?>" src="<?php echo $item['image']; ?>" /></div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
