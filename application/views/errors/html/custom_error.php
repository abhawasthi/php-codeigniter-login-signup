<!DOCTYPE HTML>
<html>
    <head>
	<title>Page Not Found</title>
	<link href="<?php echo base_url(); ?>css/404.css" rel="stylesheet" type="text/css"  media="all" />
    </head>
    <body>

	<div class="wrap">

	    <div class="header">
		<div class="logo">
		    <h1><a href="#" style="color: white"><?php echo $heading;?></a></h1>
		</div>
	    </div>

	    <div class="content">
		<img src="<?php echo base_url(); ?>images/error-img.png" title="error" />
		<p><?php //echo $message;?></p>
                <p>Please contact Admin Team for update.</p>
		<a href="<?php echo base_url(); ?>">Back To Home</a>
		<div class="copy-right">

		</div>
	    </div>

	</div>

    </body>
</html>