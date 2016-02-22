<?php

$portfolio_items = json_decode('[
	{
		"title":   "Fashion",
		"preview": "/images/portfolio/500x400-fashion.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-fashion"
	 },
	{
		"title":   "Fashion",
		"preview": "/images/portfolio/500x400-fashion.jpg",
		"url":     "#!index.php?action=portfolio-gallery&alias=gallery-fashion"
	 }
]',true);

?>

<div class="view">
	<img alt class="bg" src="images/bg/1920x1200-2.jpg" />
	<img alt class="bg" src="images/bg/1920x1200-0.jpg" />        
	<div class="content no-bottom-padding colors-e">
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

			
			<div class="item col-md-3 col-sm-4 col-xs-6">
							<a href="#!portfolio-item-5.html" class="hover-overlay">
								<img alt="Project 5" src="images/placeholders/500x400-2.jpg" />
								<div class="overlay background-90-e">
									<div class="hidden-xs">
										<p class="title heading-e">Honey&Dreams</p>
										<p class="text-center heading-e"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
										<p class="text-center"><i class="fa fa-th heading-e"></i></p>
									</div>
								</div>
							</a>
						</div>
			<div class="item col-md-3 col-sm-4 col-xs-6">
							<a href="#!portfolio-item-5.html" class="hover-overlay">
								<img alt="Project 5" src="images/placeholders/500x400-1.jpg" />
								<div class="overlay background-90-e">
									<div class="hidden-xs">
										<p class="title heading-e">Portaits</p>
										<p class="text-center heading-e"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
										<p class="text-center"><i class="fa fa-th heading-e"></i></p>
									</div>
								</div>
							</a>
						</div>
			<div class="item col-md-3 col-sm-4 col-xs-6">
							<a href="#!portfolio-item-5.html" class="hover-overlay">
								<img alt="Project 5" src="images/placeholders/500x400-2.jpg" />
								<div class="overlay background-90-e">
									<div class="hidden-xs">
										<p class="title heading-e">Street</p>
										<p class="text-center heading-e"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
										<p class="text-center"><i class="fa fa-th heading-e"></i></p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
	  
	  
			</div>
		</div>

	</div>
</div>