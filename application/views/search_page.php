<style>
    #msg{
        color: red;
    }
</style>

<!-- content-section-starts-here -->
<div class="container">
    <div class="main-content">
        
        <div class="products-grid">

            <?php
            if($searchpdt != 0 || $searchauth != 0)
            {
                ?>
                <header>
                    <h3 class="head text-center">Search Books Result</h3>
                </header>
                <?php
            }
            else
            {
                ?>

                <header>
                    <h3 class="head text-center" id="msg">Books not available</h3>
                </header>

                <?php
            }
            ?>


            <?php
            if($searchpdt)
            {
                foreach($searchpdt as $hdata)
                {
                    ?>
                    <div class="col-md-4 product simpleCart_shelfItem text-center">
                        <a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>"><?php echo "<img src='" . base_url() . "books/book_{$hdata->id}.{$hdata->picture}" . "' width='350' height='450'/>"; ?></a>
                        <div class="mask">
                            <a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>">Quick View</a>
                        </div>
                        <a class="product_name" href="single.html"><?php echo $hdata->title; ?></a>
                        <a class="product_name" href="single.html">  </a>
                    </div>
                    <?php
                }
            }
            else
            {
                foreach($searchauth as $hdata)
                {
                    ?>

                    <div class="col-md-4 product simpleCart_shelfItem text-center">
                        <a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>"><?php echo "<img src='" . base_url() . "books/book_{$hdata->id}.{$hdata->picture}" . "' width='350' height='450'/>"; ?></a>
                        <div class="mask">
                            <a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>">Quick View</a>
                        </div>
                        <a class="product_name" href="single.html"><?php echo $hdata->title; ?></a>
                        <a class="product_name" href="single.html">  </a>
                    </div>


                    <?php
                }
            }
            ?>


            <div class="clearfix"></div>
        </div>
    </div>

</div>
<div class="other-products">
    <div class="container">
        <h3 class="like text-center">Featured Books</h3>        			
        <ul id="flexiselDemo3">

            <?php
            foreach($homeData[2] as $hdata)
            {
                ?>

                <li><a href="<?php echo base_url() . "ebook/book_details/" . $hdata->id; ?>"><?php echo "<img src='" . base_url() . "books/book_{$hdata->id}.{$hdata->picture}" . "' width='250' height='350'/>"; ?></a>
                    <div class="product liked-product simpleCart_shelfItem">
                        <a class="like_name" href="single.html"><?php echo $hdata->title; ?></a>
                        <a class="product_name" href="single.html">  </a>
                    </div>
                </li>
                <?php
            }
            ?>

        </ul>
        <script type="text/javascript">
            $(window).load(function()
                {
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


