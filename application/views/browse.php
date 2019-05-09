<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Books
                        <small>Chose your book</small>
                    </h1>
                </div>
            </div>
            <div class="products-page">




		<div class="container-fluid">
		    <div class="row row-offcanvas row-offcanvas-left">
			<div class="col-xs-12 col-sm-9 col-sm-push-3">
			    <p class="pull-left visible-xs">
				<button type="button" class="btn btn-primary btn-xs category" data-toggle="offcanvas" title="Toggle sidebar"><span class="glyphicon glyphicon-triangle-left">Category</span></button>
			    </p>

			    <div class="row">

				<?php
				foreach ($browseData[2] as $bdata)
				{
				    ?>


    				<div class="col-xs-12 col-sm-6 col-lg-4">



    				    <a href="<?php echo base_url() . "ebook/book_details/" . $bdata->id; ?>">
					    <?php echo "<img class='img-responsive'; src='" . base_url() . "books/book_{$bdata->id}.{$bdata->picture}" . "' width='240' height='340'/>"; ?>

    				    </a>
    				    <h4 class="brosize"><?php echo $bdata->title; ?></h4>


    				</div><!--/.col-xs-6.col-lg-4-->

				    <?php
				}
				?>





			    </div><!--/row-->
			</div><!--/.col-xs-12.col-sm-9-->

			<div class="col-xs-6 col-sm-3 col-sm-pull-9 sidebar-offcanvas" id="sidebar">
			    <div class="list-group">

				<a class="list-group-item active catcolor"><h4>Category</h4></a>



				<ul class="panel-body" id="nav">
				    <?php
				    foreach ($allCategory as $catData)
				    {
					?>
    				    <li><a href="#" class="sub" tabindex="1"><?php echo $catData->name; ?> &nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a><img src="" alt="" />
					    <?php
					    foreach ($allSubCategory as $subcatData)
					    {
						if ($catData->id == $subcatData->categoryid)
						{
						    ?>
	    					<ul class="panel-body">
	    					    <li><a target="_blank" href="<?php echo base_url() . "ebook/subcat_details/" . $subcatData->id; ?>"><?php echo $subcatData->name; ?></a></li>
	    					</ul>
						    <?php
						}
					    }
					    ?>

    				    </li>
					<?php
				    }
				    ?>

				</ul>



			    </div>
			</div><!--/.sidebar-offcanvas-->
		    </div><!--/row-->



		</div><!--/.container-->


                <div class="clearfix"></div>
            </div>
        </div>




        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">

		    <?php
		    $total = 0;
		    foreach ($browseData[3] as $num)
		    {
			$total = $num->total;
		    }
		    $pg = 1;
		    if ($start > 1)
		    {
			$temp = $start - 1;
			echo "<a href='" . base_url('ebook/browse') . "?page=$temp' class='page'>PREV</a>";
		    }
		    for ($i = 1; $i <= $total; $i = $i + $per_page)
		    {
			if ($pg == $start)
			{
			    echo "<a href='" . base_url('ebook/browse') . "?page=$pg' class='page-active'>$pg</a>";
			}
			else
			{
			    echo "<a href='" . base_url('ebook/browse') . "?page=$pg' class='page'>$pg</a>";
			}
			$pg++;
		    }
		    if ($start * $per_page < $total)
		    {
			$temp = $start + 1;
			echo "<a href='" . base_url('ebook/browse') . "?page=$temp' class='page'>NEXT</a>";
		    }
		    ?>

                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->


	<script src="<?php echo base_url(); ?>js/responsive-tabs.js"></script>
        <script type="text/javascript">
	    $('#myTab a').click(function (e)
	    {
		e.preventDefault();
		$(this).tab('show');
	    });

	    $('#moreTabs a').click(function (e)
	    {
		e.preventDefault();
		$(this).tab('show');
	    });

	    (function ($)
	    {
		// Test for making sure event are maintained
		$('.js-alert-test').click(function ()
		{
		    alert('Button Clicked: Event was maintained');
		});
		fakewaffle.responsiveTabs(['xs', 'sm']);
	    })(jQuery);

        </script>

    </body>
</html>
