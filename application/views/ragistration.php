<!--
Developer Information
-->
<!DOCTYPE html>
<html>
    <head>
        <style>
            .btn-file {
                position: relative;
                overflow: hidden;
            }
            .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
            }
        </style>
        <title>DLOBL-Digital Library of Bengali Language</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
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
<!-- registration-form -->
<div class="registration-form">
    <div class="container">
        <div class="dreamcrub">
            <ul class="breadcrumbs">
                <li class="home">
                    <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li class="women">
                    Registration
                </li>
            </ul>
            <ul class="previous">
                <li><a href="index.html">Back to Previous Page</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <h2>Registration</h2>
        <div class="registration-grids">
            <div class="reg-form">
                <div class="reg">
                    <p>Welcome, please enter the following details to continue.</p>
                    <p>If you have previously registered with us, <a href="#">click here</a></p>
                    <form action="<?php echo base_url(); ?>user" method="post" enctype="multipart/form-data">
                        <ul>
                            <li class="text-info">Name: </li>
                            <li><input type="text" value="" name="uname" required=""></li>
                        </ul>				 
                        <ul>
                            <li class="text-info">Email: </li>
                            <li><input type="text" value="" id="em" name="email" required=""></li>
                            <p class="em_er">&nbsp;&nbsp;&nbsp;&nbsp;<p>
                        </ul>

                        <?php
//Country
                        echo '<ul>';
                        echo '<li class= "text-info">';
                        echo form_label("Country: ");
                        echo '<li>';
                        $attr = array(
                            "class" => "form-control",
                            "id" => "cntid",
                            "required" => "required"
                        );
                        $data = array();
                        $data[0] = "Choose Country";
                        foreach ($allCountry as $cnt) {
                            $data[$cnt->id] = $cnt->name;
                        }
                        echo form_dropdown("cntid", $data, "", $attr);
                        echo '<div class="cnt"></div>';
                        echo '</li>';
                        echo '</li>';
                        echo '</ul>';
                        ?>

                        <ul>
                            <li class="text-info">Password: </li>
                            <li><input type="password" value="" id="password" required=""></li>
                        </ul>
                        <ul>
                            <li class="text-info">Re-enter Password:</li>
                            <li><input type="password" value="" id="confirm_password" required=""></li>
                        </ul>

<?php
//PAYMENT METHOD
echo '<ul>';
echo '<li class= "text-info">';
echo form_label("PAYMENT METHOD: ");
echo '<li>';
$attr = array(
    "class" => "form-control",
    "id" => "pm",
    "required" => "required"
);
$data = array();
$data[0] = "Choose your payment method";
foreach ($allBank as $bnk) {
    $data[$bnk->id] = $bnk->bank_name;
}
echo form_dropdown("payid", $data, "", $attr);
echo '<div class="p_m"></div>';
echo '</li>';
echo '</li>';
echo '</ul>';
?>

                        <ul>
                            <li class="text-info">Transaction ID/Bank Transfer ID:</li>
                            <li><input type="text" value="" required=""></li>
                        </ul>

<?php
//MEMBERSHIP
echo '<ul>';
echo '<li class= "text-info">';
echo form_label("MEMBERSHIP: ");
echo '<li>';
$attr = array(
    "class" => "form-control",
    "id" => "memb",
    "name" => "mem",
    "required" => "required"
);
$data = array();
$data[0] = "Choose membership duration month's";
foreach ($months as $mnt) {
    $data[$mnt->id] = $mnt->months;
}
echo form_dropdown("membership", $data, "", $attr);
echo '<div class="mem"></div>';
echo '</li>';
echo '</li>';
echo '</ul>';
?>

                        <?php
                        
//Picture
                        echo '<ul>';
                        echo '<li class= "text-info">';
                        echo form_label("Picture: ");
                        echo '<li>';
                        $data = array(
                            "name" => "pic",
                            "id" => "pic",
                            "required" => "required",
                            "value" => set_value("pic")
                        );
                        echo form_upload($data);
                        echo '<div class="picture"></div>';
                       
                        echo '</li>';
                         echo '<p class="kb">don\'t talk</p>';
                        echo '</li>';
                        echo '</ul>';
                        
                       
                        ?>

                        <input type="submit" id="subm" value="REGISTER NOW">
                        <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
                    </form>
                </div>
            </div>
            <div class="reg-right">
                <h3>Membership</h3>
                <div class="strip"></div>
                <p>আমরা এই সুযোগটি পুরোপুরি ফ্রি দিতে পারছিনা বলে দুঃখিত। প্রতি মাসে ৩০৳ হিসাবে </p>
                <p>৬ মাসের ফি ১৮০৳</p>
                <p>১২ মাসের ফি ৩৬০৳</p>
                <p>২৪ মাসের ফি ৭২০৳</p>
                <h3 class="lorem">Lorem ipsum dolor.</h3>
                <div class="strip"></div>
                <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- registration-form -->

<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>Text</h6>
            <div class="sub-left-right">

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="span_of_4">
                <div class="col-md-3 span1_of_4">
                    <h4>Shop</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                    </ul>	
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>help</h4>
                    <ul class="f_nav">
                        <li><a href="#">frequently asked  questions</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>	
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>account</h4>
                    <ul class="f_nav">
                        <li><a href="account.html">login</a></li>
                        <li><a href="register.html">create an account</a></li>
                        <li><a href="#">create wishlist</a></li>
                        <li><a href="checkout.html">my shopping bag</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">create wishlist</a></li>
                    </ul>				
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>popular</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>			
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="cards text-center">
            <img src="images/cards.jpg" alt="" />
        </div>
        <div class="copyright text-center">
            <p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
        </div>
    </div>
</div>
</body>
</html>


<script>
    $(document).ready(function () {
    $("#subm").click(function () {


    var email = $("#em").val();
    var cntid = $("#cntid").val();
    var paym = $("#pm").val();
    var mem = $("#memb").val();
    //alert("ok");
    if (email != "")
    {
    var n1 = email.includes(".");
    var n2 = email.includes("@");
    var n3 = email.includes("<>");
    var n4 = email.startsWith("@");
    var n5 = email.startsWith("<>");
    var n6 = email.startsWith("[]");
    var n7 = email.includes("[]");
    var n9 = email.includes("@@");
    $(".em_er").html("");

    if (n1 != true)
    {
    var hh = "<p style='color:red'>You miss the dot(.) in your email.</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n2 == false)
    {
    var hh = "<p style='color:red'>You miss the at(@) in your email.</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n3 != false)
    {
    var hh = "<p style='color:red'>Invalid email.</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n4 != false)
    {
    var hh = "<p style='color:red'>An email should not be start with @</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n5 != false)
    {
    var hh = "<p style='color:red'>Invalid email</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n6 != false)
    {
    var hh = "<p style='color:red'>Invalid email</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n7 != false)
    {
    var hh = "<p style='color:red'>Invalid email</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n8 != false)
    {
    var hh = "<p style='color:red'>Invalid email</p>";

    $(".em_er").html(hh);

    return false;
    } else if (n9 != false)
    {
    var hh = "<p style='color:red'>Invalid email</p>";

    $(".em_er").html(hh);

    return false;
    }
    }

    if (cntid == 0)
    {
    var hh = "<p style='color:red'>Country required.</p>";

    $(".cnt").html(hh);

    return false;
    }

    if (paym == 0)
    {
    var hh = "<p style='color:red'>Payment method required.</p>";

    $(".p_m").html(hh);

    return false;
    }

    if (mem == 0)
    {
    var hh = "<p style='color:red'>Membership duration required.</p>";

    $(".mem").html(hh);

    return false;
    }

    });
    });
</script>

<script>
    var password = document.getElementById("password")
    var confirm_password = document.getElementById("confirm_password");

    function validatePassword()
    {
    if (password.value != confirm_password.value)
    {
    confirm_password.setCustomValidity("Passwords Don't Match");
    } else
    {
    confirm_password.setCustomValidity('');
    }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;    
</script>





