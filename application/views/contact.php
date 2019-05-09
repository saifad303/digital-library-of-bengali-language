<!--
Developer Information
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Single :: w3layouts</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/menu.css" type="text/css" media="screen">
        <link href=" <?php echo base_url(); ?>css/editstyle.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href=" <?php echo base_url(); ?>css/base.css" rel="stylesheet" type="text/css" media="all" />
        <link href=" <?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
        <link href=" <?php echo base_url(); ?>css/font-awesome-ie7.css" rel="stylesheet" type="text/css" media="all" />
        <link href=" <?php echo base_url(); ?>css/prettify.css" rel="stylesheet" type="text/css" media="all" />
        <link href=" <?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <!-- cart -->
        <script src="<?php echo base_url(); ?>js/simpleCart.min.js"></script>
        <script type="<?php echo base_url(); ?>text/javascript" src="js/prettify.js"></script>
        <script type="<?php echo base_url(); ?>text/javascript" src="js/bootshop.js"></script>
        <script type="<?php echo base_url(); ?>text/javascript" src="js/jquery.lightbox-0.5.js"></script>
        
        <!-- cart -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" />
<script type="text/javascript">

     $(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
});

</script>
    </head>
<body>
	<!-- header-section-starts -->
	
	<!-- header-section-ends -->
			
	
	<!--End of Menu-->
<!-- contact-page -->
<div class="contact">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Contact
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		
		<div class="contact-form">
			<div class="contact-info">
				<h3>CONTACT FORM</h3>
			</div>
			<form action="<?php echo base_url();?>contact_management/insert" method="post">
				<div class="contact-left">
					<input type="text" name="name" placeholder="Name" required>
					<input type="text" name="email" placeholder="E-mail" required>
					<input type="text" name="subject" placeholder="Subject" required>
				</div>
				<div class="contact-right">
					<textarea name="message" placeholder="Message" required></textarea>
				</div>
				<div class="clearfix"></div>
				<input type="submit" value="SUBMIT">
			</form>
		</div>
	</div>
</div>
<!-- //contact-page -->

		
</body>
</html>