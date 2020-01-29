<?php
/**
 * Email Header
 *
 * @author 		Easy Digital Downloads
 * @package 	Easy Digital Downloads/Templates/Emails
 * @version     2.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline. !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
$body = "
	background-color: #f6f6f6;
	font-family: 'Montserrat', sans-serif;
	line-height: 1.5;
	box-sizing: border-box;

";
$wrapper = "
	width:100%;
	-webkit-text-size-adjust:none !important;
	margin:0;
	padding: 40px 0;
";
$template_container = "
	padding: 42px 0px 42px;
	background-color: #ffffff;
";

$body_content = "
display: block;
	margin-bottom: 38px;
";
$body_content_inner = "
	color: #000000;
	font-size: 14px;
	text-align:left;
";
$header_content_h1 = "
	line-height: 1.5;
	margin: 0;
";

$table_wrap = "
	max-width: 600px;
	margin: 0 auto;
";

$template_header_image = "
	background-color: #000000;
	padding: 30px 40px 31px;
	text-align: center;
";

$template_header = "
	text-align: center;
";

$header_img = edd_get_option( 'email_logo', '' );
$heading    = EDD()->emails->get_heading();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo get_bloginfo( 'name' ); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,800&display=swap" rel="stylesheet">
		<style>
			#template_header p {
				font-size: 36px;
    			font-weight: 800;
    			color: #151515;
				margin: 0 0 48px;
				letter-spacing: -2px;
				padding: 0 40px;
			}

			p,
			table li {
				font-size: 16px;
    			font-weight: 400;
    			color: #9B9B9B;
				line-height: 1.5;
				margin: 0;
			}

			table th {
				padding: 0;
				width: 50%;
				text-align: left;
			}

			table tr td {
				padding: 0;
				vertical-align: top;
			}

			table li,
			table li small {
				font-size: 14px;
			}

			table a{
				font-weight: 600;
				color: #1595E7;
				text-decoration: none;
			}

			table a:hover {
				text-decoration: underline;
			}

			#social a {
				margin-right: 15px;
				line-height: 1;
			}

			#social img {
				height: 20px;
				width: 20px;
			}

			#social img:last-child {
				margin: 0;
			}

			#template_footer h4 {
				font-size: 18px;
				font-weight: 600;
				color: #1B1B1B;
				padding: 0;
				margin: 0 0 12px;
			}

			#template_footer span {
				display: block;
			}

			.mar-bot a {
				font-size: 14px;
				display: block;
				margin-bottom: 5px;
			}

			#social {
				display: flex;
				padding: 0 40px;
				margin-top: 32px;
			}

			#template_body {
				padding: 0 40px;
				margin-bottom: 32px;
			}

			strong {
				font-weight: 600;
			}

			#template_body a {
				pointer-events: none;
				color: #9B9B9B;
				font-weight: 400;
			}

			#template_body ul a {
				pointer-events: unset;
				color: #1595E7;
				font-weight: 600;
			}

			#mail-to span {
				display: flex;
			}

			#mail-to span a{
				margin: 0 0 0 5px;
			}

		</style>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="<?php echo $body; ?>">
		<div style="<?php echo $wrapper; ?>">
		<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="<?php echo $table_wrap; ?>">
			<tr>
				<td valign="top">
					<?php if( ! empty( $header_img ) ) : ?>
						<div id="template_header_image" style="<?php echo $template_header_image; ?>">
							<?php echo '<img src="' . esc_url( $header_img ) . '" alt="' . get_bloginfo( 'name' ) . ' height="20px" width="286px" " />'; ?>
						</div>
					<?php endif; ?>
					<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_container" style="<?php echo $template_container; ?>">
						<?php if ( ! empty ( $heading ) ) : ?>
							<tr>
								<td>
									<!-- Header -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header" style="<?php echo $template_header; ?>">
										<tr>
											<td>
												<h1 style="<?php echo $header_content_h1; ?>"><?php echo $heading; ?></h1>
											</td>
										</tr>
									</table>
									<!-- End Header -->
								</td>
							</tr>
						<?php endif; ?>
						<tr>
							<td align="center" valign="top">
								<!-- Body -->
								<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_body">
									<tr>
										<td valign="top" style="<?php echo $body_content; ?>">
											<!-- Content -->
											<table border="0" cellpadding="20" cellspacing="0" width="100%">
												<tr>
													<td valign="top">
														<div style="<?php echo $body_content_inner; ?>">