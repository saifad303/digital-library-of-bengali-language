

<!--
Developer Information
-->
<!DOCTYPE html>
<html>
    <head>

        <script src="https://use.fontawesome.com/b5a3e6a786.js"></script>
        <title>DLOBL-Digital Library of Bengali Language</title>
        <link href=" <?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href=" <?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href=" <?php echo base_url(); ?>css/editstyle.css" rel="stylesheet" type="text/css" media="all" />
	<!--<meta HTTP-EQUIV="REFRESH" content="3; url=<?php echo base_url();?>">-->
        <!-- Custom Theme files -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>images/ico/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Digital Library of Bengali Language" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--Front Page-->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <!-- cart -->
        <!-- We Dont need It yet -->
        <!-- cart -->
        <link rel="stylesheet" href=" <?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" />
    </head>
    <body>
	<?php
	/*
	if (($this->session->userdata("myid")) != "")
	{
	    if (time() - $this->session->userdata("last_time") > 30)
	    {
		redirect(base_url() . "user/logout", "refresh");
	    }
	}
	 * 
	 */
	?>
        <!-- header-section-starts -->
        <div class="header">
            <div class="header-top-strip">
                <div class="container">
                    <div class="header-top-left">
                        <ul>

			    <?php
			    $mytype = $this->session->userdata("mytype");
			    if ($mytype == NULL)
			    {
				?>
    			    <li><a href="<?php echo base_url(); ?>ebook/login"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
    			    <li><a href="<?php echo base_url(); ?>ebook/ragistration"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>

				<?php
			    }
			    ?>

			    <?php
			    $mytype = $this->session->userdata("mytype");
			    if ($mytype == 'a')
			    {
				?>
    			    <li><a href="<?php echo base_url(); ?>ebook/admin"><i class="fa fa-superpowers" aria-hidden="true"></i>
    				    Admin</a></li>
				<?php
			    }
			    ?>
                        </ul>
                    </div>      
                        
                  
   
                    
              
                    <!-- Single button -->
		    <?php
		    $mytype = $this->session->userdata("mytype");
		    $myid = $this->session->userdata("myid");
		    if ($mytype == 'a' || $mytype == 'u')
		    {
			foreach ($allData as $udt)
			{
			    ?>


			    <div class="header-right">

				<div class="btn-group profile">
				    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					My Profile <span class="caret"></span>
				    </button>
				    <ul class="dropdown-menu">
					<li><a href="#">Hello... <?php echo $udt->name; ?>
						<?php
						if ($mytype == 'a')
						{
						    echo '(Admin)';
						}
						?></a></li>
					<li align="center" class="well">
					    <div><?php echo "<img src='" . base_url() . "uesrpic/upic_{$myid}.{$udt->picture}" . "' width='150' height='100' class='img-responsive' style='padding:5%; margin: 0 auto;' />"; ?><a class="change" data-toggle="modal" data-target="#exampleModal" href="">Change Picture</a></div>
					    <a href="#" class="btn btn-sm btn-default probutton">Name: <?php echo $udt->name; ?></a>
					    <a href="#" class="btn btn-sm btn-default probutton">Email: <?php echo $udt->email; ?></a>
					    <a href="#" class="btn btn-sm btn-default probutton">Country:
						<?php
						foreach ($Ucountry as $ucnt)
						{
						    echo $ucnt->name;
						}
						?>
					    </a>
					    <a href="#" class="btn btn-sm btn-default probutton">Remaining days: </a>
					    <a href="#" class="btn btn-sm btn-default probutton">Renew days</a>
					    <a href="<?php echo base_url(); ?>ebook/change_pass" class="btn btn-sm btn-default probutton">Change password</a>
					    <a href="<?php echo base_url(); ?>user/logout" class="btn btn-sm btn-default probutton"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
					</li>
				    </ul>

				    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
						<form action="<?php echo base_url(); ?>user/changproepic" method="post" enctype="multipart/form-data">
						    <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="exampleModalLabel">change your profile picture</h4>
							<h4 class="modal-title" id="exampleModalLabel"><small>Your picture must be within <b>(2000 X 1500)px</b></small></h4>
						    </div>
						    <div class="modal-body">

							<p><input type="file" name="pic"></p>


						    </div>
						    <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">SUBMIT PICTURE</button>
						    </div>
						</form>
					    </div>
					</div>
				    </div>
                                    
				</div>
				<?php
			    }
			}
			?>



		    </div>
		    <div class="clearfix"> </div>
		</div>
	    </div>
	</div>
        
        
        <div class="container">
    <div class="row">
        <div id="filter-panel" class="collapse filter-panel">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                   <div class="news-letter">
	    <div class="container">
		<div class="join">
		   <h6>SEARCH BOX</h6>
		    <div class="sub-left-right">
			<form action="<?php echo base_url(); ?>search" method="get">
			    <input type="text" name="title" value="Search for books or author..." onfocus="this.value = '';" onblur="if (this.value == '')
				    {
					this.value = 'Search for books or author...';
				    }" />
			    <button type="submit" class="btn btn-primary glyphicon glyphicon-search hasan"></button>
			</form>
		    </div>
		    <div class="clearfix"> </div>
		</div>
	    </div>
	</div>
                    
                    
                        </div>
                   
                </div>
            </div>
        </div>
        
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-search"></span>Search
        </button>
	</div>

        
        
	<!-- header-section-ends -->
	<div class="banner-top">
	    <div class="container">
		<nav class="navbar navbar-default" role="navigation">
		    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<div class="logo">
			    <h1><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/DLOBL-logo.png" height="40" width="40" alt="" /> DLOBL</a></h1>
			</div>
		    </div>
		    <!--/.navbar-header-->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			    <li><a href="<?php echo base_url(); ?>">Home</a></li>

			    <li><a href="<?php echo base_url(); ?>ebook/signup_help">Signup Help</a></li>
			    <li><a href="<?php echo base_url(); ?>ebook/faq">FAQ</a></li>
			    <li><a href="<?php echo base_url(); ?>ebook/blog">Blog</a></li>
			    <li><a href="<?php echo base_url(); ?>ebook/quiz">Monthly Quiz</a></li>
			    <li><a href="<?php echo base_url(); ?>ebook/contact">CONTACT</a></li>
			</ul>
		    </div>
		    <!--/.navbar-collapse-->
		</nav>
		<!--/.navbar-->
	    </div>
	</div>

	<!--End of Menu-->

	<!--Content start-->
	<div>
	    <?php
	    if (isset($content))
	    {
		echo $content;
	    }
	    ?>
	</div>
	<!--Content end-->


	<!-- content-section-ends-here -->
	
	<div class="footer">
	    <div class="container">
		<div class="footer_top">
		    <div class="span_of_4">
			
			<div class="col-md-3 span1_of_4">
			    <h4>With us</h4>
			    <ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>

			    </ul>	
			</div>
			<div class="col-md-3 span1_of_4">
			    <h4>account</h4>
			    <ul class="f_nav">
				<li><a href="<?php echo base_url(); ?>ebook/login">login</a></li>
				<li><a href="<?php echo base_url(); ?>ebook/ragistration">create an account</a></li>
				<li><a href="#">Make a Book Request</a></li>

			</div>
			<div class="col-md-3 span1_of_4">
			    <h4>popular</h4>
			    <ul class="f_nav">
				<li><a href="#">New arrivals</a></li>
				<li><a href="#">Fiction</a></li>
				<li><a href="#">Non Fiction</a></li>
				<li><a href="#">Poem/a></li>
				<li><a href="#">Classic</a></li>
				<li><a href="#">অনুবাদ</a></li>
				<li><a href="#">রচনা সমগ্র</a></li>
				<li><a href="#">আলোচনা</a></li>
			    </ul>			
			</div>
			<div class="clearfix"></div>
		    </div>
		</div>
		<div class="cards text-center">
		    <h4>Text</h4>
		</div>
		<div class="copyright text-center">
		    <p>© 2017 DLOBL. All Rights Reserved | Design by   <a href="<?php echo base_url(); ?>">  DLOBL</a></p>
		</div>
	    </div>
	</div>
    </body>
</html>

