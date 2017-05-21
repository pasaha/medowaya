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
							<h3 class="slider-header"><?php echo $gallery_data['title'] ?> <span class="highlight">Gallery</span></h3>

									<div class="slider">
										<?php foreach ($gallery_data['items'] AS $index => $item): ?>
											<div>
												<img
													alt="Slide <?php echo $index + 1; ?>" src="<?php echo $item['image']; ?>"
													data-preview="<?php echo $item['preview'] ? $item['preview'] : $item['image']; ?>"
												 />
											</div>
										<?php endforeach; ?>
									</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php endif; ?>
