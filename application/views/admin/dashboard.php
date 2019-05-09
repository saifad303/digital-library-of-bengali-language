
<?php
$bd = 0;
$all = 0;
$other = 0;
foreach ($allUser as $udt) {
    if ($udt->countryid == 1) {
        $bd++;
    } else {
        $other++;
    }
    $all++;
}
?>
<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i>সর্বমোট সদস্য totalp</span>
        <div class="count"><?php echo $all; ?></div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> বাংলাদেশ</span>
        <div class="count green"><?php echo $bd; ?></div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i>বিদেশ</span>
        <div class="count"><?php echo $other; ?></div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> সর্বমোট সংগ্রহ</span>
        <div class="count">2,315 </div>
        <span class="count_bottom"><i class="green">টাকা </i> </span>
    </div>
</div>
<?php ?>
<!-- /top tiles -->


<br />




<div class="col-md-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Message&nbsp;&nbsp;&nbsp;<?php
$count = 0;
foreach ($allContact as $ac) {
    $count++;
}

echo $count;
?><i class="glyphicon-envelope"></i> </button></h2>

            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
<?php
foreach ($allContact as $ac) {
    ?>
            <div class="mail_list">

                <div class="right">
                    <h3><?php echo $ac->name; ?> <small><?php echo $ac->time; ?></small></h3>
                    <span style="color:#444;"><?php echo $ac->email; ?></span><span style="float:right; color:#444;"><?php echo $ac->subject; ?></span>
                    <p><?php echo read_file("message/message_{$ac->id}.txt"); ?></p>
                    <a href="<?php echo base_url() . "contact_management/delete_message/" . $ac->id; ?>"><button type="button" class="btn btn-danger btn-xs">
                            Delete Message
                        </button></a>

                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Reply</button>



                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            
                                            
                                            <p><?php echo $ac->email; ?></p>
                                            
                                                
                                                                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
    <?php
}
?>
    </div>
</div>







<div class="row">




</div>




