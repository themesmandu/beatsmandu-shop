<?php
/**
 * Email Footer
 *
 * @author      Easy Digital Downloads
 * @package     Easy Digital Downloads/Templates/Emails
 * @version     2.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline.
$template_footer = '
    color: #9B9B9B;
    font-size: 14px;
    padding: 0 40px;
';

?>
															</div>
														</td>
													</tr>
												</table>
												<!-- End Content -->
											</td>
										</tr>
									</table>
									<!-- End Body -->
								</td>
							</tr>

                            <tr>

							<tr>
								<td valign="top">
									<!-- Footer -->
									<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer" style="<?php echo $template_footer; ?>">
										<tr>
											<td valign="top">
												<table border="0" cellpadding="10" cellspacing="0" width="100%">
													<tr class="col-six mar-bot">
                                                        <th><h4><?php echo esc_html__( 'Follow Us.', 'beatsmandu-shop' ); ?></h4></th>
                                                        <th><h4><?php echo esc_html__( 'Contact Us.', 'beatsmandu-shop' ); ?></h4></th>
                                                    </tr>

                                                    <tr class="col-six mar-bot">
														<td id="credit" style="<?php echo $credit; ?>">
															<span><?php echo esc_html__( 'We are always open to meet new people like you.', 'beatsmandu-shop' ); ?></span>
														</td>

														<td id="mail-to" style="<?php echo $mailto; ?>">
														    <a href="mailto:hello@producerthemes.com"><?php echo esc_html__( 'hello@producerthemes.com', 'beatsmandu-shop' ); ?></a>
														    <span><?php echo esc_html__( '© 2020 ', 'beatsmandu-shop' ); ?><?php echo wp_kses_post( wptexturize( apply_filters( 'edd_email_footer_text', '<a href="' . esc_url( home_url() ) . '">' . get_bloginfo( 'name' ) . '</a>' ) ) ); ?></span>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>

							<tr>
                                <td colspan="2" valign="middle" id="social" style="<?php echo $social; ?>">
									<a href="https://www.facebook.com/ProducerThemes"><img src="https://www.producerthemes.com/wp-content/uploads/2020/01/facebook-gray.png" alt="facebook"></a>
                                    <a href="https://www.instagram.com/producer.themes/"><img src="https://www.producerthemes.com/wp-content/uploads/2020/01/twitter-gray.png" alt="instagram"></a>
                                    <a href="https://twitter.com/producerthemes"><img src="https://www.producerthemes.com/wp-content/uploads/2020/01/instagram-gray.png" alt="twitter"></a>
								</td>
							</tr>
							<!-- End Footer -->
						</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
