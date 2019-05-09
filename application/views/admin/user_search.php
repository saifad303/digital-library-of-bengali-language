<div class="" role="tabpanel" data-example-id="togglable-tabs">



    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <div class="title_right">
            <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right user-profile">
                <form action="<?php echo base_url(); ?>search/search_user" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for name or country..." name="serchu">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </ul>

    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

            <!-- start Bangladesh -->


            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box clearfix">
                            <div class="table-responsive">
                                <table class="table user-list">
                                    <thead>
                                        <tr>
                                            <th><span>User</span></th>
                                            <th><span>Email</span></th>
                                            <th><span>Country</span></th>
                                            <th class="text-center"><span>Status</span></th>
                                            <th><span>Joining date</span></th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                                        if ($searchu)
                                        {
                                            foreach ($searchu as $upro)
                                            {
                                                ?>



                                                <tr>
                                                    <td>
                                                        <img src="<?php echo base_url() . "uesrpic/upic_" . $upro->id . "." . $upro->picture; ?>" alt="">
                                                        <a href="#" class="user-link"><?php echo $upro->name; ?></a>
                                                        <span class="user-subhead">
                                                            <?php
                                                            if ($upro->type == "a")
                                                            {
                                                                echo 'Admin';
                                                            }
                                                            else
                                                            {
                                                                echo 'User';
                                                            }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#"><?php echo $upro->email; ?></a>
                                                    </td>

                                                    <td>
                                                        <a href="#">
                                                            <?php
                                                            foreach ($allCountry as $ucnt)
                                                            {
                                                                if ($ucnt->id == $upro->countryid)
                                                                {
                                                                    echo $ucnt->name;
                                                                }
                                                            }
                                                            ?>
                                                        </a>
                                                    </td>

                                                    <td class="text-center">
                                                        <?php
                                                        if ($upro->activation == 1)
                                                        {
                                                            ?>
                                                            <span class="badge bg-green">Active</span>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <span class="badge bg-red">Inactive</span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $upro->datetime; ?>
                                                    </td>

                                                    <td style="width: 20%;">

                                                        <?php
                                                        if ($upro->activation == 0)
                                                        {
                                                            ?>

                                                            <a href="<?php echo base_url() . "user/enable/" . $upro->id; ?>"><button type="button" class="btn btn-success btn-xs">
                                                                    Enable
                                                                </button></a>

                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url() . "user/disable/" . $upro->id; ?>"><button type="button" class="btn btn-danger btn-xs">
                                                                    Disable
                                                                </button></a>

                                                            <?php
                                                        }
                                                        ?>



                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else if ($searcnt)
                                        {
                                            foreach ($searcnt as $upro)
                                            {
                                                ?>

                                                <tr>
                                                    <td>
                                                        <img src="<?php echo base_url() . "uesrpic/upic_" . $upro->uid . "." . $upro->upic; ?>" alt="">
                                                        <a href="#" class="user-link"><?php echo $upro->uname; ?></a>
                                                        <span class="user-subhead">
                                                            <?php
                                                            if ($upro->utype == "a")
                                                            {
                                                                echo 'Admin';
                                                            }
                                                            else
                                                            {
                                                                echo 'User';
                                                            }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#"><?php echo $upro->uemail; ?></a>
                                                    </td>

                                                    <td>
                                                        <a href="#">
                                                            <?php
                                                            foreach ($allCountry as $ucnt)
                                                            {
                                                                if ($ucnt->id == $upro->ucntid)
                                                                {
                                                                    echo $ucnt->name;
                                                                }
                                                            }
                                                            ?>
                                                        </a>
                                                    </td>

                                                    <td class="text-center">
                                                        <?php
                                                        if ($upro->uactive == 1)
                                                        {
                                                            ?>
                                                            <span class="badge bg-green">Active</span>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <span class="badge bg-red">Inactive</span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $upro->udate; ?>
                                                    </td>

                                                    <td style="width: 20%;">

                                                        <?php
                                                        if ($upro->uactive == 0)
                                                        {
                                                            ?>

                                                            <a href="<?php echo base_url() . "user/enable/" . $upro->uid; ?>"><button type="button" class="btn btn-success btn-xs">
                                                                    Enable
                                                                </button></a>

                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url() . "user/disable/" . $upro->uid; ?>"><button type="button" class="btn btn-danger btn-xs">
                                                                    Disable
                                                                </button></a>

                                                            <?php
                                                        }
                                                        ?>



                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            foreach ($searchem as $upro)
                                            {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo base_url() . "uesrpic/upic_" . $upro->id . "." . $upro->picture; ?>" alt="">
                                                        <a href="#" class="user-link"><?php echo $upro->name; ?></a>
                                                        <span class="user-subhead">
                                                            <?php
                                                            if ($upro->type == "a")
                                                            {
                                                                echo 'Admin';
                                                            }
                                                            else
                                                            {
                                                                echo 'User';
                                                            }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#"><?php echo $upro->email; ?></a>
                                                    </td>

                                                    <td>
                                                        <a href="#">
                                                            <?php
                                                            foreach ($allCountry as $ucnt)
                                                            {
                                                                if ($ucnt->id == $upro->countryid)
                                                                {
                                                                    echo $ucnt->name;
                                                                }
                                                            }
                                                            ?>
                                                        </a>
                                                    </td>

                                                    <td class="text-center">
                                                        <?php
                                                        if ($upro->activation == 1)
                                                        {
                                                            ?>
                                                            <span class="badge bg-green">Active</span>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <span class="badge bg-red">Inactive</span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $upro->datetime; ?>
                                                    </td>

                                                    <td style="width: 20%;">

                                                        <?php
                                                        if ($upro->activation == 0)
                                                        {
                                                            ?>

                                                            <a href="<?php echo base_url() . "user/enable/" . $upro->id; ?>"><button type="button" class="btn btn-success btn-xs">
                                                                    Enable
                                                                </button></a>

                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url() . "user/disable/" . $upro->id; ?>"><button type="button" class="btn btn-danger btn-xs">
                                                                    Disable
                                                                </button></a>

                                                            <?php
                                                        }
                                                        ?>



                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                        ?>



                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination pull-right">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




            <!-- end Bangladesh -->

        </div>




        <!-- start USA user -->
        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">



            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        </div>
        <!-- end USA user -->
    </div>
</div>
