<?php if ($portfolio_items && is_array($portfolio_items)): ?>
<div class="view">
	<img alt class="bg" src="images/bg/1920x1200-2.jpg" />
	<img alt class="bg" src="images/bg/1920x1200-0.jpg" />        
	<div class="content full-size no-bottom-padding colors-e">
		<h2>My Recent <span class="highlight">Works</span></h2>
		<br /> <br />
		<div class="gallery background-e" data-default-group="all" data-overlay=".gallery-overlay">
			<div class="container-fluid">
				<div class="row">
					<div class="grid">

						<?php foreach ($portfolio_items AS $index => $item): ?>
							<div class="item col-md-3 col-sm-4 col-xs-6">
								<a href="<?php echo $item['url'] ?>" class="hover-overlay">
									<img alt="<?php echo $item['title'] ?>" src="<?php echo $item['preview'] ?>" />
									<div class="overlay background-90-e">
										<div class="hidden-xs">
											<p class="title heading-e"><?php echo $item['title'] ?></p>
											<p class="text-center"><i class="fa fa-th heading-e"></i></p>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>

					</div>
				</div> 
			</div>
		</div>
	</div>
</div>
<?php endif; ?>