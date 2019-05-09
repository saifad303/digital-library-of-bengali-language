


<!-- content-section-starts-here -->
<div class="container">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->

	<ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	    <div class="item active">
		<img src="<?php echo base_url(); ?>images/slider.jpg" alt="...">
		<div class="carousel-caption">
		    <h3>ePUB</h3>
		    <p>ePub is an open format defined by the Open eBook Forum of the International Digital Publishing Forum</p>
		</div>
	    </div>
	    <div class="item">
		<img src="<?php echo base_url(); ?>images/slider1.jpg" alt="...">
		<div class="carousel-caption">
		    <h3>Mobi</h3>
		    <p>MOBI is the name given to the format developed for the MobiPocket Reader</p>
		</div>
	    </div>

	    <div class="item">
		<img src="<?php echo base_url(); ?>images/slider2.jpg" alt="...">
		<div class="carousel-caption">
		    <h3>AZW</h3>
		    <p>Amazon Word, is an eBook format used exclusively on the Amazon Kindle and compatible Kindle software</p>
		</div>
	    </div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>

    </div>

    <div class="main-content">
        <div class="online-strip">
            <div class="col-md-4 follow-us">
                <h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
            </div>
            <div class="col-md-4 shipping-grid">
                <div class="shipping">

                </div>
                <div class="shipping-text">
                    <h3>Get a Membership Today</h3>
                    <p>Read ove 1000 Books</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 online-order">

                <div class="btn-group" role="group" aria-label="...">
		    <a href="<?php echo base_url(); ?>ebook/browse">
			<button type="button" class="btn btn-lg btn-default saif">Browse Books</button>
		    </a>
		</div>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="products-grid">
            <header>
                <h3 class="head text-center">Latest Books</h3>
            </header>


	    <?php
	    foreach ($homeData[2] as $hdata)
	    {
		?>
    	    <div class="col-md-4 product simpleCart_shelfItem text-center">
    		<a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>"><?php echo "<img src='" . base_url() . "books/book_{$hdata->id}.{$hdata->picture}" . "' width='384' height='480'/>"; ?></a>
    		<div class="mask">
    		    <a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>">Quick View</a>
    		</div>
    		<a class="product_name fonts" href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>"><?php echo $hdata->title; ?></a>

    	    </div>
		<?php
	    }
	    ?>
	    <div class="clearfix"></div>

	    <div class="row text-center">
		<div class="col-lg-12">
		    <ul class="pagination">

			<?php
			$total = 0;
			foreach ($homeData[3] as $num)
			{
			    $total = $num->total;
			}
			$pg = 1;
			if ($start > 1)
			{
			    $temp = $start - 1;
			    echo "<a href='" . base_url() . "?page=$temp' class='page'>PREV</a>";
			}
			for ($i = 1; $i <= $total; $i = $i + $per_page)
			{
			    if ($pg == $start)
			    {
				echo "<a href='" . base_url() . "?page=$pg' class='page-active'>$pg</a>";
			    }
			    else
			    {
				echo "<a href='" . base_url() . "?page=$pg' class='page'>$pg</a>";
			    }
			    $pg++;
			}
			if ($start * $per_page < $total)
			{
			    $temp = $start + 1;
			    echo "<a href='" . base_url() . "?page=$temp' class='page'>NEXT</a>";
			}
			?>
		    </ul>
		</div>
	    </div>
	    <!-- /.row -->

	    <hr>



            <div class="clearfix"></div>
        </div>
    </div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
</div>
<div class="other-products">
    <div class="container">
	<h3 class="like text-center">Featured Books</h3>        			
	<ul id="flexiselDemo3">

<?php
foreach ($homeData[2] as $hdata)
{
    ?>

    	    <li><a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>"><?php echo "<img src='" . base_url() . "books/book_{$hdata->id}.{$hdata->picture}" . "' width='250' height='350'/>"; ?></a>
    		<div class="product liked-product simpleCart_shelfItem">
    		    <a class="like_name font" href="single.html"><?php echo $hdata->title; ?></a>
    		    <a class="product_name" href="single.html">  </a>
    		</div>
    	    </li>
    <?php
}
?>

	</ul>
	<script type="text/javascript">
	    $(window).load(function () {
		$("#flexiselDemo3").flexisel({
		    visibleItems: 4,
		    animationSpeed: 1000,
		    autoPlay: true,
		    autoPlaySpeed: 3000,
		    pauseOnHover: true,
		    enableResponsiveBreakpoints: true,
		    responsiveBreakpoints: {
			portrait: {
			    changePoint: 480,
			    visibleItems: 1
			},
			landscape: {
			    changePoint: 640,
			    visibleItems: 2
			},
			tablet: {
			    changePoint: 768,
			    visibleItems: 3
			}
		    }
		});

	    });
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<!-- content-section-ends-here -->

