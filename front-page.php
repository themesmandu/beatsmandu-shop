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
                    <div class="demoslide">
                        <div class="demo-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-slide-three.jpg" />
                        </div>

                        <div class="demo-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-slide-one.jpg" />
                        </div>

                        <div class="demo-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-slide-two.jpg" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 col-right">
                    <h2 class="section-heading clr-blk">
                        Create a professional <span class="uppercase clr-blu">website</span> within minutes.
                        <p class="section-sub-heading">This theme entails all the necessary features to get your
                            creativity out in the world and start selling your music instantly.</p>
                    </h2>

                    <ul class="col-count-2">
                        <li><i class="fas fa-chevron-circle-right"></i>Upload your beats and start selling</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Add Dynamic pages and blog posts</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Awesome modern designs to select from</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Supports WordPress plugins for additional
                            features</li>
                        <li><i class="fas fa-chevron-circle-right"></i>Loads Faster and SEO Friendly</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-facilities -->

    <section class="section-features" id="featuresection">
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
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <div class="content">
                                <h3>Responsive</h3>
                                <p>This theme is designed to be responsive thus fits automatically on the device used
                                    (phones, tablets or computers).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 column col-center">
                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="fas fa-percentage"></i></span>
                            <div class="content">
                                <h3>Coupons & Discounts</h3>
                                <p>You can create coupon codes or offer discounts to boost the sales.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-grey">
                            <span><i class="far fa-newspaper"></i></span>
                            <div class="content">
                                <h3>Unlimited content</h3>
                                <p>You can add unlimited beats, blog posts, pages, products and more.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-white">
                            <span><i class="far fa-edit"></i></span>
                            <div class="content">
                                <h3>Track Beat plays</h3>
                                <p>Keep track of the number of times a track has been played and purchased from the
                                    store.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center bg-clr-grey">
                            <span><i class="fas fa-plus"></i></span>
                            <div class="content">
                                <h3>Add Unlimited Beats</h3>
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
                            <span><i class="fas fa-code"></i></span>
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
                                <p>Loads faster and coded SEO friendly to make best use of SEO. Compatible with all
                                    available SEO plugins
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of feature-row -->
        </div> <!-- end of container -->
    </section> <!-- end of .section-features -->

    <section id="demoimport" class="section-demo-import">
        <div class="container">
            <h2 class="section-heading">
                <span class="underline clr-blu">Website Demo</span>
                <span class="clr-light">imports</span>
                <p class="section-sub-heading">Choose any of the ready-to-use demo styles below, import it and easily
                    customize the theme as per your requirements.</p>
            </h2>

            <div class="row mt-5">
                <div class="col-lg-4 column">
                    <a href="https://producerthemes.com/demo/beatsmandu" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-slide-one.jpg" />
                    </a>
                </div>

                <div class="col-lg-4 column">
                    <a href="https://producerthemes.com/demo/beatsmandu-blue" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-slide-two.jpg" />
                    </a>
                </div>

                <div class="col-lg-4 column">
                    <a href="https://producerthemes.com/demo/beatsmandu-alternet" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-slide-three.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </section> <!-- end of .section-demo-import -->

    <section class="section-personal-store">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oneclickdemoimport.gif"
                        class="sec-image-thumbnail thumbnail-right" />

                    <div class="imageapear">
                        <figure>
                            <i class="fas fa-times"></i>
                            <img src="">
                        </figure>
                    </div>
                </div>

                <div class="col-md-7 col-right">
                    <h2 class="section-heading clr-blu">One Click <span class="d-block">Demo Install</span>
                        <p class="section-sub-heading">Choose any of the ready-to-use demo styles below, import it
                            within seconds! And then customize the theme as per your requirements. </p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>Set up your site exactly as the demo</li>
                        <li><i class="checked"></i>Replace the demo contents with yours</li>
                        <li><i class="checked"></i>Add your beats</li>
                        <li><i class="checked"></i>Create Coupon Codes And Discounts</li>
                        <li><i class="checked"></i>Create Licenses</li>
                        <li><i class="checked"></i>Add payments</li>
                        <li><i class="checked"></i>Set up your own blog</li>
                        <li><i class="checked"></i>Set up basic SEO for your site</li>
                    </ul>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of .section-personal-store -->

    <section class="section-editor-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Live-Editor.gif"
                        class="sec-image-thumbnail thumbnail-right" />
                </div>

                <div class="col-md-7 col-right">
                    <h2 class="section-heading clr-blu">
                        Powerful Dashboard with live editor
                        <p class="section-sub-heading">No coding or design knowledge required to customize your website.
                            Watch the changes instantly as you make the changes!</p>
                        <p class="section-sub-heading">List of things that you can customize:</p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>Colors</li>
                        <li><i class="checked"></i>Fonts</li>
                        <li><i class="checked"></i>Images</li>
                        <li><i class="checked"></i>Animations</li>
                        <li><i class="checked"></i>Background Colors</li>
                        <li><i class="checked"></i>Layouts</li>
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
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Adaptable-Homepage.jpg"
                            class="sec-image-thumbnail" />
                    </figure>
                </div>

                <div class="col-md-7">
                    <h2 class="section-heading clr-blu">
                        <span>Adaptable Homepage</span>
                        <p class="section-sub-heading">Organize and Customize your homepage as per your needs!</p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>Reorganize the sections on the homepage</li>
                        <li><i class="checked"></i>Pick up your style of animations</li>
                        <li><i class="checked"></i>Add your own video and images</li>
                        <li><i class="checked"></i>Pricing Table</li>
                        <li><i class="checked"></i>Contact Form</li>
                        <li><i class="checked"></i>Testimonials</li>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/addcontent.gif"
                        class="sec-image-thumbnail thumbnail-right" />
                </div>

                <div class="col-md-7 col-right">
                    <h2 class="section-heading clr-blu">
                        Add As Much Content<span class="d-block">As You Want</span>
                        <p class="section-sub-heading">With the flexibility of Wordpress you can easily create unlimited
                            static pages and dynamic blog posts.</p>
                    </h2>

                    <ul class="col-count-2 list-check">
                        <li><i class="checked"></i>About Us</li>
                        <li><i class="checked"></i>Services</li>
                        <li><i class="checked"></i>Contact</li>
                        <li><i class="checked"></i>Photo Gallery</li>
                        <li><i class="checked"></i>Video Gallery</li>
                        <li><i class="checked"></i>Blog</li>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut
                                <span>Toribio Pedro</span>
                            </p>
                        </div>

                        <div class="rev-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Ut enim ad minim veniam, quis
                                nostrud
                                exercitation ullamco laboris nisi ut sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                                <span>Lorem ipsum</span>
                            </p>
                        </div>

                        <div class="rev-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg" />
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
                Why Choose <span class="clr-light">Producerthemes?</span>
            </h2>
            <p>Because our theme has been tailored according to your needs to create your own online music store at an
                affordable cost. With the powerful features and flexibility in the theme you can level up your business
                to new heights.</p>

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
                        GET YOUR MUSIC BUSINESS<span>ON THE SPOTLIGHT WITH OUR THEME!</span>
                    </h2>

                    <p class="section-sub-heading">Our template will enable you to build an amazing website where you
                        can sell music beats, products and make fortune.
                        Save money that you would have spent hiring a coder or website developer. Beatsmandu is
                        supercool WordPress theme that you can use without the need to
                        touch a single string of code.</p>
                    <h3 class="bg-blue btn-uni br-round bold-5">Begin selling your beats and make fortune.</h3>
                    <!-- <h6 class="clr-blu font-italic bold-8">Over 40,000 costumers satisfied</h6> -->
                </div> <!-- end of .column -->

                <div class="column">
                    <div class="column-purchase align-center">
                        <span class="price bold-8 clr-blu">$55</span>
                        <ul class="list-check">
                            <li>Powerful Music Player</li>
                            <li>Instant Payments</li>
                            <li>Access to training videos</li>
                            <li>Single Site License</li>
                            <li>12 Months of Updates</li>
                            <li>New designs added every month.</li>
                            <li>Kickass Support</li>
                        </ul>
                        <a href="<?php echo home_url(); ?>/checkout?edd_action=add_to_cart&download_id=18"
                            class="btn-purchase btn-uni bold-7 br-round">Purchase This</a>
                    </div>
                </div> <!-- end of .column -->
            </div> <!-- end of .row -->
        </div> <!-- end of .container -->
    </section> <!-- end of .section-purchase -->
</div> <!-- end of .front-page-sections -->

<?php
get_footer();