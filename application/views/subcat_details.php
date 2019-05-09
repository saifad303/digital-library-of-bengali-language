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
	
    </head>

<div class="container">
    <div class="main-content">
	<div class="products-grid">
	    <header>
		<h3 class="head text-center">বইয়ের উপবিভাগ সমূহ</h3>
	    </header>

	    <?php
	    if ($books)
	    {
		foreach ($books as $bookData)
		{
		    ?>
		    <div class="col-md-2 product simpleCart_shelfItem text-center">
			<a href="<?php echo base_url() . "Ebook/book_details/" . $bookData->id; ?>"><img src="<?php echo base_url() . "books/book_" . $bookData->id . "." . $bookData->picture; ?>" alt="" /></a>
			
			<a class="product_name" href="<?php echo base_url() . "Ebook/book_details/" . $bookData->id; ?>"><?php echo $bookData->title; ?></a>
		    </div>
		    <?php
		}
	    }
	    else
	    {
		echo '<h3 style="color:red">No books available</h3>';
	    }
	    ?>

	    <div class="clearfix"></div>
	</div>
    </div>

</div>
<hr>