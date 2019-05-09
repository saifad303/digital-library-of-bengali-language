
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">

                    <table class="table user-list">
                        <thead>
                            <tr>
                                <th class="column-title text-center"><span>User</span></th>
                                <th class="column-title text-center"><span>Email</span></th>
                                <th class="column-title text-center"><span>Country</span></th>
                                <th class="column-title text-center"><span>Bank</span></th>
                                <th class="column-title text-center"><span>TxD ID</span></th>
                                <th class="column-title text-center"><span>Taka</span></th>
                                <th class="column-title text-center"><span>Duration</span></th>
                                <th class="column-title text-center"><span>Payment-date and time</span></th>
                                <th class="column-title text-center"><span>Actions</span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>


                        <?php
                        foreach ($allNtData as $ntdt)
                        {
                            ?>

                            <tr>
                                <td>
                                    <?php echo "<img src='" . base_url() . "uesrpic/upic_{$ntdt->uid}.{$ntdt->upic}" . "'' />"; ?>
                                    <a href="#" class="badge bg-red"><?php echo $ntdt->uname; ?></a>
                                </td>
                                <td align='center' >
                                    <a href="#" class="badge bg-green"><?php echo $ntdt->uemail; ?></a>
                                </td>

                                <td align='center'>
                                    <a href="#"><?php echo $ntdt->cntname; ?></a>
                                </td>
                                <td align='center'>
                                    <a href="#"><?php echo $ntdt->pmname; ?></a>
                                </td>

                                <td align='center'>
                                    <a href="#"><span class="badge bg-blue-sky"><?php echo $ntdt->transferid; ?></span></a>
                                </td>

                                <td align='center'>
                                    <a href="#"><span class="badge bg-purple"><?php echo $ntdt->taka; ?> tk</span></a>
                                </td>

                                <td align='center'>
                                    <a href="#"><span class="badge bg-success"><?php echo $ntdt->duration; ?> days</span></a>
                                </td>

                                <td align='center'>
                                    <a href="#"><span class="badge bg-orange"><?php echo $ntdt->paymentdate; ?></span></a>
                                </td>



                                <td style="width: 20%;" align='center'>

                                    <?php
                                    foreach ($allUser as $dt)
                                    {

                                        if ($dt->id == $ntdt->uid)
                                        {
                                            if ($dt->activation == 0)
                                            {
                                                ?>
                                                <a href="<?php echo base_url() . "user/activation/" . $ntdt->uid; ?>"><button type="button" class="btn btn-success btn-xs">
                                                        Activate
                                                    </button></a>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>

                                                <a href="<?php echo base_url() . "user/delete_notification/" . $ntdt->id; ?>"><button type="button" class="btn btn-danger btn-xs">
                                                        Delete Notification
                                                    </button></a>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>


                            <?php
                        }
                        ?>   





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
