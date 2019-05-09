<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$random_keys = array_rand($allBook, 3);

$allBook[$random_keys[0]];
$allBook[$random_keys[1]];
$allBook[$random_keys[2]];
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            div.stars {
		width: 270px;
		display: inline-block;
		margin-left: 90px;
		margin-top: -35px;
	    }

            input.star { display: none; }

            label.star {
		float: right;
		padding: 10px;
		font-size: 24px;
		color: #444;
		transition: all .2s;
	    }

            input.star:checked ~ label.star:before {
                content: '\f005';
                color: #FD4;
                transition: all .25s;
            }

            input.star-5:checked ~ label.star:before {
                color: #FE7;
                text-shadow: 0 0 20px #952;
            }

            input.star-1:checked ~ label.star:before { color: #F62; }

            label.star:hover { transform: rotate(-15deg) scale(1.3); }

            label.star:before {
                content: '\f006';
                font-family: FontAwesome;
            }

            .star-icon {
                color: #ddd;
                font-size: 34px;
                position: relative;
            }

            .star-icon.full:before {
                color: #FDE16D;
                content: '\2605'; /* Full star in UTF8 */
                position: absolute;
                left: 0;
                text-shadow: 0 0 2px rgba(0,0,0,0.7);
            }
        </style>
        <title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Single :: w3layouts</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href=" <?php echo base_url(); ?>css/editstyle.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/menu.css" type="text/css" media="screen">
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
        <script type="text/javascript" src="jquery/jquery.js"></script>
        <!-- cart -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" />

    </head>
    <body>

        <!-- content-section-starts -->
        <div class="container">
            <div class="products-page">
                <div class="products">

		    <div class="container">
			<div class="row">
			    <div class="col-sm-3 col-md-3">
				<div class="panel-group" id="accordion">



				    <h3 class="chead">Category</h3>
				    <ul id="nav">
					<?php
					foreach ($browseData[0] as $data1)
					{
					    ?>
    					<li><a href="#" class="sub" tabindex="1"><?php echo $data1->name; ?></a><img src="" alt="" />
    					    <ul>
						    <?php
						    foreach ($browseData[1] as $data)
						    {
							if ($data->categoryid == $data1->id)
							{
							    ?>
	    						<li><a target="_blank" href="<?php echo base_url(); ?>Ebook/subcat_details"><?php echo $data->name; ?></a></li>
							<?php
							}
						    }
						    ?>
    					    </ul>
    					</li>
                                            
					    <?php
					}
					?>
				    </ul>


				</div>
			    </div>

			</div>
		    </div>

                </div>

		<?php
		foreach ($bookdt[2] as $bdt)
		{
		    $bid = $bdt->id;
		    $subcatid = $bdt->subcategoryid
		    ?>
    		<div class="new-product">
    		    <div class="col-md-5 zoom-grid">
    			<div class="flexslider">
    			    <ul class="slides">
    				<li data-thumb="images/si.jpg">
    				    <div class="thumb-image">  
    <?php echo "<img src='" . base_url() . "books/book_{$bdt->id}.{$bdt->picture}" . "' width='350' height='450' class='img-responsive' data-imagezoom='true' alt=''/>"; ?>
    				    
                        <nav aria-label="...">
                          <ul class="pager">
                              <?php
                              if(isset($bdt->id)){
                              ?>
                            <li><a href="<?php echo base_url() . "ebook/book_details/" . $bdt->id-=1; ?>">Previous</a></li>
                            <li><a href="<?php echo base_url() . "ebook/book_details/" . $bdt->id+=2; ?>">Next</a></li>
                            <?php
                            
                              }
                            ?>
                          </ul>
                        </nav>
                                    
                                    </div>
    				</li> 
    			    </ul>
    			</div>

    		    </div>





    		    <div class="col-md-7 dress-info">
    			<div class="dress-name">
    			    <h3><?php echo $bdt->title; ?></h3>


				<?php
				$rat[0] = 0;
				$vote[0] = 0;
				foreach ($rating as $rate)
				{
				    if ($rate->bookid == $bid)
				    {
					$rat[] = $rate->rating_point;
					$vote[] = $rate->person;
				    }
				}

				$r_r = 0;
				$v_v = 0;
				$rat[0] = 0;
				$vote[0] = 0;
				for ($i = 1; $i < sizeof($rat); $i++)
				{
				    $r_r += $rat[$i];
				    $v_v += $vote[$i];
				}

				function div_zero()
				{
				    echo '';
				}

				set_error_handler("div_zero");

				try
				{
				    $av_rate = round($r_r / $v_v);

				    throw new Exception("");
				}
				catch (Exception $e)
				{
				    echo $e->getMessage();
				}
				?>

				<?php
				if ($av_rate == 0)
				{
				    ?>
				    <span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon">☆</span>
				    <?php
				}
				?>



				<?php
				if ($av_rate == 1)
				{
				    ?>
				    <span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon full">☆</span>
				    <br>
				    <?php
				}
				?>
				<?php
				if ($av_rate == 2)
				{
				    ?>
				    <span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span>
				    <br>
				    <?php
				}
				?>

				<?php
				if ($av_rate == 3)
				{
				    ?>
				    <span class="star-icon">☆</span><span class="star-icon">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span>
				    <br>
				    <?php
				}
				?>

				<?php
				if ($av_rate == 4)
				{
				    ?>

				    <span class="star-icon">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span>
				    <br>
				    <?php
				}
				?>

				<?php
				if ($av_rate >= 5)
				{
				    ?>
				    <span class="star-icon full">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span><span class="star-icon full">☆</span>
				    <?php
				}
				?>
    			    <br>



    			    <div class="clearfix"></div>
                            

    			</div>
    			<div class="span span1">
    			    <p class="left">Author :</p>
    			    <p class="right"><?php echo $bdt->author; ?></p>
    			    <div class="clearfix"></div>
    			</div>
    			<div class="span span2">
    			    <p class="left">Publisher :</p>
    			    <p class="right"><?php echo $bdt->publisher; ?></p>
    			    <div class="clearfix"></div>
    			</div>

    			<div class="span span3">
    			    <p class="left">First publishing date :</p>
    			    <p class="right"><?php echo $bdt->publishingdate; ?></p>
    			    <div class="clearfix"></div>
    			</div>

    			<div class="span span4">
    			    <p class="left">Category :</p>
    			    <p class="right">
				    <?php
				    foreach ($bookdt[1] as $scdt)
				    {
					if ($scdt->id == $bdt->subcategoryid)
					{
					    $cid = $scdt->categoryid;
					    foreach ($bookdt[0] as $cdt)
					    {
						if ($cid == $cdt->id)
						{
						    echo $cdt->name;
						}
					    }
					}
				    }
				    ?>
    			    </p>
    			    <div class="clearfix"></div>
    			</div>

    			<div class="span span4">
    			    <br>
    			    <p class="left">Sub-Category :</p>
    			    <p class="right">
				    <?php
				    foreach ($bookdt[1] as $scdt)
				    {
					if ($scdt->id == $bdt->subcategoryid)
					{
					    echo $scdt->name;
					    $dt['cdt'] = $scdt->categoryid;
					}
				    }
				    $this->session->set_userdata($dt);
				    ?>
    			    </p>
    			    <div class="clearfix"></div>
    			</div>
    			<br/>
    			<p color="red">ei boita bikrir jonno noheei boita bikrir
    			    jonno noheei boita bikrir jonno noheei boita bikrir
    			    jonno noheei boita bikrir jonno noheei boita bikrir
    			    jonno noheei boita bikrir jonno nohe</p>
    			<br/>

			    <?php
			    if ($this->session->userdata("myid") != "")
			    {
				?>
				<div class="span span3.3">
				    <br>
				    <p class="left">pdf</p>

				    <div class="btn-group btn-group-sm" role="group" aria-label="...">

					<button type="button" class="btn btn-default download">Download</button>

				    </div>

				    <div class="clearfix"></div>
				</div>

				<div class="span span3">
				    <br>
				    <p class="left">ePub</p>
				    <div class="btn-group btn-group-sm" role="group" aria-label="...">

					<button type="button" class="btn btn-default download">Download</button>

				    </div>
				    <div class="clearfix"></div>
				</div>

				<div class="span span3.3">
				    <p class="left">Mobile</p>
				    <div class="btn-group btn-group-sm" role="group" aria-label="...">

					<button type="button" class="btn btn-default download">Download</button>

				    </div>
				    <div class="clearfix"></div>
				</div>
                        
                        

				<?php
			    }
			    ?>
                        
    			<div class="span span3">
    			    <p class="left">Your rating :</p>
    			    <div class="stars">
    				<form action="">
    				    <input class="star star-5" id="star-5" type="radio" value="5" name="4"/>
    				    <label class="star star-5" for="star-5"></label>
    				    <input class="star star-4" id="star-4" type="radio" value="4" name="4"/>
    				    <label class="star star-4" for="star-4"></label>
    				    <input class="star star-3" id="star-3" type="radio" value="3" name="3"/>
    				    <label class="star star-3" for="star-3"></label>
    				    <input class="star star-2" id="star-2" type="radio" value="2" name="2"/>
    				    <label class="star star-2" for="star-2"></label>
    				    <input class="star star-1" id="star-1" type="radio" value="1" name="1"/>
    				    <label class="star star-1" for="star-1"></label>
    				</form>
    			    </div>




    			    <p class="right"></p>

    			    <div class="clearfix"></div>
    			</div>

			    <?php
			}
			?>



                        <div class="purchase">
                            <div class="social-icons">
                                <ul>
                                    <li><a class="facebook1" href="<?php echo base_url(); ?>#"></a></li>
                                    <li><a class="twitter1" href="<?php echo base_url(); ?>#"></a></li>
                                    <li><a class="googleplus1" href="<?php echo base_url(); ?>#"></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <script src="<?php echo base_url(); ?>js/imagezoom.js"></script>
                        <!-- FlexSlider -->
                        <script defer src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script>
                        <script>
// Can also be used with $(document).ready()
			    $(window).load(function ()
			    {
				$('.flexslider').flexslider({
				    animation: "slide",
				    controlNav: "thumbnails"
				});
			    });
                        </script>
                    </div>
                    <div class="clearfix"></div>
                    <div class="reviews-tabs">
                        <!-- Main component for a primary marketing message or call to action -->
                        <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
                            <li class="test-class active"><a class="deco-none misc-class" href="<?php echo base_url(); ?>#how-to"> More Information</a></li>
                            <li class="test-class"><a href="<?php echo base_url(); ?>#features">Specifications</a></li>
                            <li class="test-class"><a class="deco-none" href="<?php echo base_url(); ?>#source">Reviews
                                </a></li>
                        </ul>

                        <div class="tab-content responsive hidden-xs hidden-sm">
                            <div class="tab-pane active" id="how-to">

                                <p><?php echo read_file("description/book_{$bdt->id}.txt"); ?></p>

                            </div>
                            <div class="tab-pane" id="features">
                                <p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.This tab has icon in consectetur adipiscing eliconse consectetur adipiscing elit. Vestibulum nibh urna, ctetur adipiscing elit. Vestibulum nibh urna, t.consectetur adipiscing elit. Vestibulum nibh urna,  Vestibulum nibh urna,it.</p>
                                <p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="tab-pane" id="source">
                                <div class="response">
				    <?php
				    $id = "";
				    foreach ($allData as $d)
				    {
					$id = $d->id;
					$pic = $d->picture;
					?>

    				    <form action="<?php echo base_url(); ?>comment/comment_post" method="post">
    					<div class="media response-info">
    					    <div class="media-left response-text-left">
    						<a href="<?php echo base_url(); ?>#">
    						    <img height="100" width="50" class="media-object" src="<?php echo base_url() . "uesrpic/upic_" . $d->id . "." . $d->picture; ?>" alt="" />
    						</a>
    						<h5><a href="<?php echo base_url(); ?>#"><?php echo $d->name; ?></a></h5>
    					    </div>
    					    <div class="media-body response-text-right">
    						<textarea style="width: 700px; height: 100px;" name="cmnt" id="com" placeholder=""></textarea>

    						<input type="hidden" id="user" value="<?php echo $d->id; ?>">
    						<input type="hidden" id="username" value="<?php echo $d->name; ?>">
						    <?php
						    foreach ($allCountry as $alcnt)
						    {
							if ($alcnt->id == $d->countryid)
							{
							    $ucn = $alcnt->name;
							}
							?>
							<input type="hidden" id="usercountry" value="<?php $ucn ?>">
							<?php
						    }
						    ?>
						    <?php
						    foreach ($bookdt[2] as $bdt)
						    {
							?>
							<input type="hidden" id="bid" value="<?php echo $bdt->id; ?>">
							<?php
						    }
						    ?>
    						<ul>

    						    <li><button style="color: green" type="submit" name="cpost" id="csub">post</button></li>
    						</ul>
    					    </div>
    					    <div class="clearfix"> </div>
    					</div>
    				    </form>

					<?php
				    }
				    ?>



                                    <div id="jpost">


                                    </div>
                                    <hr>
				    <?php
				    foreach ($allComment as $cmnt)
				    {
					if ($cmnt->booksid == $bid)
					{
					    $comid = $cmnt->id;
					    $com = $cmnt->description;
					    $bkid = $cmnt->booksid;

					    foreach ($allUser as $u)
					    {
						if ($u->id == $cmnt->userid)
						{
						    $name = $u->name;
						    $picture = $u->picture;
						    $uid = $u->id;
						    foreach ($allCountry as $cn)
						    {
							if ($u->countryid == $cn->id)
							{
							    $country = $cn->name;
							}
						    }
						}
					    }
					    ?>

					    <input type="hidden" id="uid-<?php echo $cmnt->id; ?>" value="<?php echo $uid; ?>">
					    <input type="hidden" id="bkid-<?php echo $cmnt->id; ?>" value="<?php echo $bkid; ?>">
					    <div class="media response-info" id="r-<?php echo $cmnt->id; ?>">

						<div class="media-left response-text-left">
						    <a href="<?php echo base_url(); ?>#">
							<img height="100" width="80" class="media-object" src="<?php echo base_url() . "uesrpic/upic_" . $uid . "." . $picture; ?>" alt="" />
						    </a>
						    <h5 id="">
	<?php echo $name; ?>
							<b><p style="color: grey;font-family: initial"><?php echo $country; ?></p></b>
						    </h5>

						</div>
						<div class="media-body response-text-right">
						    <p id=""><span id="com-<?php echo $cmnt->id; ?>"><b><?php echo $cmnt->description; ?></b></span></p>

						    <ul>
							<li id="cdate" style="color: green"><span id="date-<?php echo $cmnt->id; ?>"><?php echo $cmnt->datetime; ?></span></li>
							<li><a href="<?php echo base_url(); ?>single.html"> </a></li>
						    </ul>
						    <?php
						    if ($this->session->userdata("myid") == $uid)
						    {
							?>
	    					    <button type="button" value="<?php echo $cmnt->id; ?>" style="color:green" class="com_d" id="<?php echo $cmnt->id; ?>">Delete</button>
	    					    <button style="color: green" data-toggle="modal" data-target="#myModal" name="cpost" id="csub">edit</button>



	    					    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    						<div class="modal-dialog" role="document">
	    						    <div class="modal-content">
	    							<div class="modal-header">
	    							    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    							    <h4 class="modal-title" id="myModalLabel">Edit comment</h4>
	    							</div>
	    							<div class="modal-body">
	    							    <div class="form-group">
	    								<label for="message-text" class="control-label">Edit:</label>
	    								<textarea class="form-control" id="message-text"></textarea>
	    							    </div>
	    							</div>
	    							<div class="modal-footer">
	    							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    							    <button type="button" class="btn btn-primary">Save changes</button>
	    							</div>
	    						    </div>
	    						</div>
	    					    </div>
							<?php
						    }
						    ?>

						</div>
						<div class="clearfix"> </div>
						<hr>
					    </div>
					    <div id="comed_j">

					    </div>


					    <?php
					}
				    }
				    ?>







                                    <div class="media response-info">
                                        <div class="media-left response-text-left">
                                            <a href="<?php echo base_url(); ?>#">

                                            </a>

                                        </div>
                                        <div class="media-body response-text-right">
                                            <ul>
                                                <li><h4>User name</h4></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul>
                                                <li >MAY 25, 2015</li>
                                                <li><a href="<?php echo base_url(); ?>single.html">Reply</a></li>
                                            </ul>		
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                </div>
                            </div>
                        </div>		
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="other-products products-grid">
            <div class="container">
                <header>
                    <h3 class="like text-center">Other Books</h3>   
                </header>


                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[0]]->id; ?>"><img width='150' height='500' src="<?php echo base_url() . "books/book_" . $allBook[$random_keys[0]]->id . "." . $allBook[$random_keys[0]]->picture; ?>" alt="" /></a>
                    <div class="mask">
                        <a href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[0]]->id; ?>">Quick View</a>
                    </div>
                    <a class="product_name" href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[0]]->id; ?>"><?php echo $allBook[$random_keys[0]]->title; ?></a>
                    <p><a class="item_add" href="<?php echo base_url(); ?>#"></p>
                </div>

                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[1]]->id; ?>"><img width='150' height='500' src="<?php echo base_url() . "books/book_" . $allBook[$random_keys[1]]->id . "." . $allBook[$random_keys[1]]->picture; ?>" alt="" /></a>
                    <div class="mask">
                        <a href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[1]]->id; ?>">Quick View</a>
                    </div>
                    <a class="product_name" href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[1]]->id; ?>"><?php echo $allBook[$random_keys[1]]->title; ?></a>
                    <p><a class="item_add" href="<?php echo base_url(); ?>#"></p>
                </div>

                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[2]]->id; ?>"><img width='150' height='500' src="<?php echo base_url() . "books/book_" . $allBook[$random_keys[2]]->id . "." . $allBook[$random_keys[2]]->picture; ?>" alt="" /></a>
                    <div class="mask">
                        <a href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[2]]->id; ?>">Quick View</a>
                    </div>
                    <a class="product_name" href="<?php echo base_url() . "ebook/book_details/" . $allBook[$random_keys[2]]->id; ?>"><?php echo $allBook[$random_keys[2]]->title; ?></a>
                    <p><a class="item_add" href="<?php echo base_url(); ?>#"></p>
                </div>



                <div class="clearfix"></div>
            </div>
        </div>
        <!-- content-section-ends -->

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

        <script type="text/javascript">
	    $(document).ready(function () {
		$("#csub").click(function () {
		    var comment = $("#com").val();
		    var user = $("#user").val();
		    var bid = $("#bid").val();
		    var uname = $("#username").val();
		    var ucnt = $("#usercountry").val();
		    var strlen = comment.length;

		    function getDateTime() {
			var now = new Date();
			var year = now.getFullYear();
			var month = now.getMonth() + 1;
			var day = now.getDate();
			var hour = now.getHours();
			var minute = now.getMinutes();
			var second = now.getSeconds();
			if (month.toString().length == 1)
			{
			    var month = '0' + month;
			}
			if (day.toString().length == 1)
			{
			    var day = '0' + day;
			}
			if (hour.toString().length == 1)
			{
			    var hour = '0' + hour;
			}
			if (minute.toString().length == 1)
			{
			    var minute = '0' + minute;
			}
			if (second.toString().length == 1)
			{
			    var second = '0' + second;
			}
			var dateTime = year + '/' + month + '/' + day + ' ' + hour + ':' + minute + ':' + second;
			return dateTime;
		    }

		    if (strlen > 200)
		    {
			alert("There are too many charecter we can effort only under 200.");
			return false;
		    }


		    if (comment != "")
		    {
			var dataString = 'pcomment=' + comment + '&uid=' + user + '&bid=' + bid + '&uname=' + uname + '&comid=' +<?php echo $comid; ?>;
			//alert(dataString);

			$.ajax({
			    type: 'POST',
			    data: dataString,
			    url: "<?php echo base_url(); ?>comment/comment_post",
			    success: function (data)
			    {

				var hh = "<hr><div class='media response-info'><div class='media-left response-text-left'><a href=''><img height='100' width='50' src='<?php echo base_url() . "uesrpic/upic_" . $id . "." . $pic; ?>'/></a><h5>" + uname + "<p style='color: grey;font-family: initial'><b><?php echo $country; ?></b></p></h5></div><div class='media-body response-text-right'><p><b>" + comment + "</b></p><ul><li style='color: green'>" + getDateTime() + "</li><li><a href=''> </a></li></ul></div><div class='clearfix'> </div> </div>";


				$("#jpost").html(hh);
				$("#com").val('');
			    }
			});

		    }

		    return false;
		});
	    });
        </script>

        <script type="text/javascript">
	    $(document).ready(function () {
		$("#star-5").click(function () {
		    var num = 5;
		    var bid = <?php echo $bid; ?>;
		    var user = <?php echo $this->session->userdata("myid"); ?>;

		    var dataString = 'num=' + num + '&uid=' + user + '&bid=' + bid;
		    //alert(dataString);

		    $.ajax({
			type: 'POST',
			data: dataString,
			url: "<?php echo base_url(); ?>comment/rating",
			success: function (data)
			{
			    alert(data);
			}
		    });

		});
		$("#star-4").click(function () {
		    var num = 4;
		    var bid = <?php echo $bid; ?>;
		    var user = <?php echo $this->session->userdata("myid"); ?>;

		    var dataString = 'num=' + num + '&uid=' + user + '&bid=' + bid;
		    //alert(dataString);

		    $.ajax({
			type: 'POST',
			data: dataString,
			url: "<?php echo base_url(); ?>comment/rating",
			success: function (data)
			{
			    alert(data);
			}
		    });
		});
		$("#star-3").click(function () {
		    var num = 3;
		    var bid = <?php echo $bid; ?>;
		    var user = <?php echo $this->session->userdata("myid"); ?>;

		    var dataString = 'num=' + num + '&uid=' + user + '&bid=' + bid;
		    //alert(dataString);

		    $.ajax({
			type: 'POST',
			data: dataString,
			url: "<?php echo base_url(); ?>comment/rating",
			success: function (data)
			{

			}
		    });
		});
		$("#star-2").click(function () {
		    var num = 2;
		    var bid = <?php echo $bid; ?>;
		    var user = <?php echo $this->session->userdata("myid"); ?>;

		    var dataString = 'num=' + num + '&uid=' + user + '&bid=' + bid;
		    //alert(dataString);

		    $.ajax({
			type: 'POST',
			data: dataString,
			url: "<?php echo base_url(); ?>comment/rating",
			success: function (data)
			{

			}
		    });
		});
		$("#star-1").click(function () {
		    var num = 1;
		    var bid = <?php echo $bid; ?>;
		    var user = <?php echo $this->session->userdata("myid"); ?>;

		    var dataString = 'num=' + num + '&uid=' + user + '&bid=' + bid;
		    //alert(dataString);

		    $.ajax({
			type: 'POST',
			data: dataString,
			url: "<?php echo base_url(); ?>comment/rating",
			success: function (data)
			{

			}
		    });
		});
	    });
        </script>

        <script>
	    $(document).ready(function () {
		$(".com_d").click(function () {


		    var cid = $(this).attr("id");

		    var dataString = 'cid=' + cid + '&comment=' + $("#com-" + cid).text() + '&uid=' + $("#uid-" + cid).val() + '&bkid=' + $("#bkid-" + cid).val() + '&date=' + $("#date-" + cid).text();

		    //alert(dataString);



		    $.ajax({
			type: 'POST',
			data: dataString,
			url: "<?php echo base_url(); ?>comment/comment_delete",
			success: function (data)
			{
			    $("#r-" + cid).fadeOut();
			    //alert(data);
			}
		    });
		});
	    });

        </script>

    </body>
</html>

<?php
echo '<pre>';
print_r($bookdt);
echo '</pre>';
?>