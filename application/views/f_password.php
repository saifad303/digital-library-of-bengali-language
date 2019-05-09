<!--
Developer Information
-->
<!DOCTYPE html>
<html>
    <head>
        <title>DLOBL-Digital Library of Bengali Language</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
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
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    </head>
    <body>
        <!-- header-section-starts -->

        <!-- header-section-ends -->


        <!--End of Menu-->
    </div>
</div>
</div>
<!-- content-section-starts -->
<div class="content">
    <div class="container">
        <div class="login-page">
            <div class="dreamcrub">
                <ul class="breadcrumbs">
                    <li class="home">
                        <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                        <span>&gt;</span>
                    </li>
                    <li class="women">
                        Login
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="account_grid">
                <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                    <h2>NEW USER</h2>
                    <p>By creating an account with on DLOBL, you will be able to Download Books and more.</p>
                    <a class="acount-btn" href="register.html">Create an Account</a>
                </div>
                <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                    <h3>User email verification</h3>
                    
                    <?php
                    $msg = $this->session->userdata("msg");
                    
                    if($msg != NULL)
                    {
                        echo "<h4 style='color: red'>".$msg."</h4>";
                        $this->session->unset_userdata("msg");
                        
                    }
                    ?>
		    
		    <?php
		    $c_msg = $this->session->userdata("c_msg");
                    
                    if($c_msg != NULL)
                    {
                        echo "<h4 style='color: green'>".$c_msg."</h4>";
                        $this->session->unset_userdata("c_msg");
                        
                    }
		    ?>
                    <form action="<?php echo base_url();?>user/f_pass" method="post">
                        <div>
                            <span>Enter email to verify your account<label>*</label></span>
                            <input type="text" name="email"> 
                        </div>
                        <input type="submit" value="SUBMIT">
                    </form>
                </div>	
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

</body>
</html>