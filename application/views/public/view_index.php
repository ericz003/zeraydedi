<?php $this->load->view('public/partials/view_public_header.php'); ?>
<div class="banner">
	<div class="container">
		<script src="<?= base_url('assets/js/responsiveslides.min.js'); ?>"></script>
		<script>
		$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
		namespace: "callbacks",
		pager: true,
		});
		});
		</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					
					<div class="banner-text">
						<h3>Racing</h3>
						<p>Cheap, Fast and reliable</p>
						
					</div>
					
				</li>
				<li>
					
					<div class="banner-text">
						<h3>Sporty</h3>
						<p>Racing is the best way to cpnvert money into noise</p>
						
					</div>
					
				</li>
				<li>
					<div class="banner-text">
						<h3>Wow</h3>
						<p>The cars we drive say a lot about us</p>
						
					</div>
					
				</li>
			</ul>
		</div>
	</div>
</div>
<!--content-->
<div class="clearfix">
</div>
	<div class="cont">
		<div class="content">
			<div class="content-top">
				<h2>Featured Products</h2>
				<?php foreach($featured as $feature) : ?>
					<div class="grid-in">
						
					<div class="col-md-4 men grid-top simpleCart_shelfItem">

						<a href="<?php echo base_url('pages/show') . '/' . $feature['vehicle_id']; ?> " class="b-link-stripe b-animate-go  thickbox">
							<img style="height: 260px;" class="img-responsive" src="<?= base_url('uploads'); ?>/<?php echo $feature['image']; ?>" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in   b-delay03 ">
								<span><?php echo $feature['model_name']; ?></span>
								</h3>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
			<div class="content-top">
				<h1>NEW PRODUCTS</h1>
				
				<div class="grid-in">
					{vehicles}
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="<?= base_url(); ?>pages/show/{vehicle_id}" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="<?= base_url('uploads/'); ?>/{image}" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
									<span>{model_name}</span>
									
									</h3>
								</div>
							</a>
							
							<p><a href="single.html">{model_name}</a></p>
						</div>
					{/vehicles}
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
<?php $this->load->view('public/partials/view_public_footer.php'); ?>