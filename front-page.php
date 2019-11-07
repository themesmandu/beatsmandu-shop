<?php

/**
 *
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Beatsmandu-shop
 */

get_header();
?>

<div class="front-page-sections">
	<!-- div to wrap whole sections of front page -->
	<section class="section-facilities">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
						class="thumbnail-right" />
				</div>

				<div class="col-lg-6 col-md-7 col-right">
					<h2 class="section-heading clr-blk">
					Create a Powerful & a Professional
						<span class="uppercase clr-blu">website</span>
						<p class="section-sub-heading">This theme entails all the necessary features to get your creativity out in the world and make money out of it.</p>
					</h2>

					<ul class="col-count-2">
						<li><i class="fas fa-chevron-circle-right"></i>Add as many beats you want</li>
						<li><i class="fas fa-chevron-circle-right"></i>Add as many pages and blog posts</li>
						<li><i class="fas fa-chevron-circle-right"></i>Sell any digital products</li>
						<li><i class="fas fa-chevron-circle-right"></i>Supports WordPress plugins for additional features</li>
						<li><i class="fas fa-chevron-circle-right"></i>Includes Free Music Graphics</li>
					</ul>
				</div>
			</div>
		</div>
	</section> <!-- end of .section-facilities -->

	<section class="section-features">
		<div class="container">
			<h2 class="section-heading clr-blk align-center">
				<span class="clr-blu"> Outstanding </span>
				<span class="underline">features</span>
			</h2>

			<div class="feature-row">
				<div class="row">
					<div class="col-md-4 column">
						<div class="d-flex align-items-center bg-clr-grey">
							<span><i class="fas fa-music"></i></span>
							<div class="content">
								<h3>Beat Store</h3>
								<p>Add unlimited beats and set your own prices with the built-in beat store.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-white">
							<span><i class="fas fa-download"></i></span>
							<div class="content">
								<h3>Instant Beat Downloads</h3>
								<p>Once your customers made the payments, beats are delivered to them automatically.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-grey">
							<span><i class="far fa-money-bill-alt"></i></span>
							<div class="content">
								<h3>Instant Payments</h3>
								<p>Payments are immediately sent to your PayPal account after the purchase is made.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-white">
							<span><i class="far fa-newspaper"></i></span>
							<div class="content">
								<h3>Responsive</h3>
								<p>This theme is designed to be responsive thus fits automatically on the device used (phones, tablets or computers).
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 column col-center">
						<div class="d-flex align-items-center bg-clr-white">
							<span><i class="fas fa-mobile-alt"></i></span>
							<div class="content">
								<h3>Coupons & Discounts</h3>
								<p>You can create coupon codes or offer discounts to boost the sales.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-grey">
							<span><i class="fas fa-percentage"></i></span>
							<div class="content">
								<h3>Unlimited content</h3>
								<p>You can add unlimited beats, blog posts, pages, products and more.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-white">
							<span><i class="fas fa-code"></i></span>
							<div class="content">
								<h3>Track Beat plays</h3>
								<p>Keep track of the number of times a track has been played and purchased from the store.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-grey">
							<span><i class="far fa-play-circle"></i></span>
							<div class="content">
								<h3>Track Beat Plays</h3>
								<p>The built-in beat store allows you to add unlimited beats and set your own prices.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 column">
						<div class="d-flex align-items-center bg-clr-white">
							<span><i class="far fa-file-alt"></i></span>
							<div class="content">
								<h3>Music Contracts</h3>
								<p>Include music contracts to be sent out with beats that have been purchased. 
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-white">
							<span><i class="fab fa-wordpress-simple"></i></span>
							<div class="content">
								<h3>Add Plugins</h3>
								<p>Supports WordPress plugins for additional features.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-grey">
							<span><i class="far fa-envelope"></i></span>
							<div class="content">
								<h3>Custom CSS</h3>
								<p>Easily add custom CSS to overwrite styling to meet your personal style.
								</p>
							</div>
						</div>

						<div class="d-flex align-items-center bg-clr-white">
							<span><i class="fas fa-search"></i></span>
							<div class="content">
								<h3>SEO Friendly</h3>
								<p>Loads faster and coded SEO friendly to make best use of SEO. Compatible with all available SEO plugins
								</p>
							</div>
						</div>
					</div>
				</div> <!-- end of row -->
			</div> <!-- end of feature-row -->
		</div> <!-- end of container -->
	</section> <!-- end of .section-features -->

	<section class="section-demo-import">
		<div class="container">
			<h2 class="section-heading">
				<span class="underline clr-blu">Website Demo</span>
				<span class="clr-light">imports</span>
				<p class="section-sub-heading">Choose any of the ready-to-use demo styles below, import it and easily customize the theme as per your requirements.</p>
			</h2>

			<div class="row mt-5">
				<div class="col-lg-4 column scroll-animation scroll-1">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-two.png" />
				</div>

				<div class="col-lg-4 column scroll-animation scroll-2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-two.png" />
				</div>

				<div class="col-lg-4 column scroll-animation scroll-3">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-two.png" />
				</div>
			</div>
		</div>
	</section> <!-- end of .section-demo-import -->

	<section class="section-personal-store sec-bg-clr">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
						class="sec-image-thumbnail thumbnail-right" />

					<div class="imageapear">
						<figure>
							<i class="fas fa-times"></i>
							<img src="">
						</figure>
					</div>
				</div>

				<div class="col-md-7 col-right">
					<h2 class="section-heading clr-blu">personal <span class="d-block">beat store</span>
					<p class="section-sub-heading">The built-in beat store centers on your beats and sales.</p>
					</h2>

					<ul class="col-count-2 list-check">
						<li><i class="checked"></i>Instant Beat Delivery</li>
						<li><i class="checked"></i>Create Coupon Codes And Discounts</li>
						<li><i class="checked"></i>Provide Free Beat Downloads</li>
						<li><i class="checked"></i>Sort By Genre, Category, Price & Tags</li>
						<li><i class="checked"></i>Generate Unlimited Licenses </li>
						<li><i class="checked"></i>Sales Reports & Charts</li>
						<li><i class="checked"></i>Keep Tabs On Beat Plays</li>
						<li><i class="checked"></i>Instant Paypal Payments</li>
						<li><i class="checked"></i>Colorful Audio Player</li>
						<li><i class="checked"></i>Mp3, Wav, Zip Downloads</li>
						<li><i class="checked"></i>Comprise Music Contracts</li>
						<li><i class="checked"></i>Social Media Sharing</li>
					</ul>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</section> <!-- end of .section-personal-store -->

	<section class="section-product-info">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg"
						class="sec-image-thumbnail" />
				</div>

				<div class="col-md-7">
					<h2 class="section-heading clr-blu">
						<span>Products Store</span>
						<p class="section-sub-heading">You can sell digital as well as physical products.</p>
					</h2>

					<ul class="col-count-2 list-check">
						<li><i class="checked"></i>Sell Digital Or Physical Music Albums</li>
						<li><i class="checked"></i>Sell Clothing (T-Shirts, Hoodies, Cap, Etc.)</li>
						<li><i class="checked"></i>Sell Music Kits, Novelty Accessories Or Software </li>
						<li><i class="checked"></i>Sort By Categories</li>
						<li><i class="checked"></i>Show Related Products</li>
						<li><i class="checked"></i>Link To External Products </li>
					</ul>
					<a href="#" class="btn btn-uni br-round">view store</a>
				</div>
			</div>
		</div>
	</section> <!-- end of .section-product-info -->

	<section class="section-editor-info">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
						class="sec-image-thumbnail thumbnail-right" />
				</div>

				<div class="col-md-7 col-right">
					<h2 class="section-heading clr-blu">
						live website <span class="d-block">editor</span>
						<p class="section-sub-heading">Create an awesome website without any coding or design knowledge.</p>
						<p class="section-sub-heading">You can easily customize:</p>
					</h2>

					<ul class="col-count-2 list-check">
						<li><i class="checked"></i>Homepage</li>
						<li><i class="checked"></i>Beat Store</li>
						<li><i class="checked"></i>Website Colors</li>
						<li><i class="checked"></i>Background Image</li>
						<li><i class="checked"></i>Product Store</li>
						<li><i class="checked"></i>Page Animations</li>
					</ul>
					<a href="#" class="btn btn-uni br-round">view store</a>
				</div>
			</div>
		</div>
	</section> <!-- end of .section-editor-info -->

	<section class="section-homepage-info">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
						class="sec-image-thumbnail" />
				</div>

				<div class="col-md-7">
					<h2 class="section-heading clr-blu">
						<span>Adaptable Homepage</span>
						<p class="section-sub-heading">The homepage template offers 18 different sections that you can customize.</p>
					</h2>

					<ul class="col-count-2 list-check">
						<li><i class="checked"></i>Photos & Videos</li>
						<li><i class="checked"></i>Banner</li>
						<li><i class="checked"></i>Products</li>
						<li><i class="checked"></i>Services</li>
						<li><i class="checked"></i>Services</li>
						<li><i class="checked"></i>Contact Form</li>
						<li><i class="checked"></i>Price Table</li>
						<li><i class="checked"></i>Production Credits and more</li>
					</ul>
					<a href="#" class="btn btn-uni br-round">view store</a>
				</div>
			</div>
		</div>
	</section> <!-- end of .section-homepage-info -->

	<section class="section-content-info sec-bg-clr">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg"
						class="sec-image-thumbnail thumbnail-right" />
				</div>

				<div class="col-md-7 col-right">
					<h2 class="section-heading clr-blu">
					Add As Much Content<span class="d-block">As You Want</span>
						<p class="section-sub-heading">You can add as many pages and posts as you want.</p>
					</h2>

					<ul class="col-count-2 list-check">
						<li><i class="checked"></i><a href="#">About Us</a></li>
						<li><i class="checked"></i><a href="#">Contact Us</a></li>
						<li><i class="checked"></i><a href="#">Services</a></li>
						<li><i class="checked"></i><a href="#">Testimonials</a></li>
						<li><i class="checked"></i><a href="#">Discography</a></li>
						<li><i class="checked"></i><a href="#">Blog Posts</a></li>
						<li><i class="checked"></i><a href="#">Blog Posts</a></li>
						<li><i class="checked"></i><a href="#">License Options</a></li>
					</ul>
					<a href="#" class="btn btn-uni br-round">view store</a>
				</div>
			</div>
		</div>
	</section> <!-- end of .section-content-info -->

	<section class="section-review">
		<div class="container">
			<div class="content-wrap">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg"
						class="thumbnail-right" />
				</figure>

				<div class="slide-content align-center bg-clr-blu">
					<h2>Reviews</h2>
					<div class="reviewslide">
						<div class="rev-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg" />
							<p>
								Lorem ipsum dolor sit amet, Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.
								<span>Pedro Toribio</span>
							</p>
						</div>

						<div class="rev-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer.jpg" />
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut
								<span>Toribio Pedro</span>
							</p>
						</div>

						<div class="rev-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/beats.jpg" />
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, Ut enim ad minim veniam, quis
								nostrud
								exercitation ullamco laboris nisi ut sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.
								<span>Lorem ipsum</span>
							</p>
						</div>

						<div class="rev-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/faqs.jpg" />
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut magna aliqua.
								<span>Quis Nostrud</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- end of .section-review -->

	<section class="section-compare align-center">
		<div class="container">
			<h2 class="section-heading clr-blu">
				Feature <span class="clr-light">Comparison</span>
			</h2>

			<table class="table-compare mt-5">
				<thead>
					<tr>
						<th>Features</th>
						<th>Beatsmandu</th>
						<th>Beats Star</th>
						<th>Airbit</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>AInstant Beat Downloads</td>
						<td><span class="cross">&#10007;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Coupons & Discounts</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Sell Products</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Unlimited Pages</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>News Blog</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Add Features ( WP Plugins )</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Create Landing Pages</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Photo & Video Gallery</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>SEO Features</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Customize Code</td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="tick">&#10003;</span></td>
						<td><span class="cross">&#10007;</span></td>
					</tr>

					<tr>
						<td>Marketing Graphics</td>
						<td><span>90 Free Graphics</span></td>
						<td><span>90 Free Graphics</span></td>
						<td><span>90 Free Graphics</span></td>
					</tr>

					<tr>
						<td>Price</td>
						<td><span class="price"> $55 </span></td>
						<td><span class="price"> $239 / Year </span></td>
						<td><span class="price"> $239 / Year </span></td>
					</tr>

					<tr>
						<td><strong>Website Hosting <span class="required">*</span></strong></td>
						<td><span class="strong">Not Included</span></td>
						<td><span class="strong">Hosted ( Limited Pages )</span></td>
						<td><span class="strong">Hosted ( 1 Page Profile )</span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section> <!-- end of .section-compare -->

	<section id="buytheme" class="section-purchase">

		<div class="container">
			<div class="row">
				<div class="column">
					<h2 class="section-heading clr-blu">
					GET YOUR MUSIC BUSINESS<span>ON THE SPOTLIGHT WITH BEATSMANDU!</span>
					</h2>

					<p class="section-sub-heading">Our template will enable you to build an amazing website where you can sell music beats, products and make fortune. 
					Save money that you would have spent hiring a coder or website developer. Beatsmandu is supercool WordPress theme that you can use without the need to 
					touch a single string of code.</p>
					<h3 class="bg-blue btn-uni br-round bold-5">Begin selling your beats and make fortune.</h3>
					<h6 class="clr-blu font-italic bold-8">Over 40,000 costumers satisfied</h6>
				</div> <!-- end of .column -->

				<div class="column">
					<div class="column-purchase align-center">
						<span class="price bold-8 clr-blu">$55</span>
						<ul class="list-check">
							<li>90 Free Marketing Graphics</li>
							<li>Add unlimited beats</li>
							<li>Instant Payments</li>
							<li>Access to training videos</li>
							<li>Single Site License</li>
							<li>All Theme Features</li>
							<li>12 Months of Updates</li>
						</ul>
						<a href="<?php echo home_url(); ?>/checkout?edd_action=add_to_cart&download_id=924"
							class="btn-purchase btn-uni bold-7 br-round">Purchase This</a>

						<p class="clr-blu bold-5">Both paypal And Credit card accepted</p>
					</div>
				</div> <!-- end of .column -->
			</div> <!-- end of .row -->
		</div> <!-- end of .container -->
	</section> <!-- end of .section-purchase -->
</div> <!-- end of .front-page-sections -->

<?php
get_footer();
