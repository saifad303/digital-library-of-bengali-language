<style>
    table, td {
        border: 1px solid #e6e6e6;
    }

</style>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Book shelf</h2>
            <h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total Book -
                <?php
                $count = 0;
                foreach ($searchpdt as $pdt)
                {
                    $count++;
                }

                echo $count;
                ?> 
            </h2>
            <div class="title_right">

                <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
                    <form action="<?php echo base_url(); ?>search/search_b" method="get">
                        <div class="input-group">
                            <input type="text" name="searchbks" class="form-control" placeholder="Search for ..." >
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </span>

                        </div>
                    </form>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">



            <div class="table-responsive">
                <?php
                $msg = $this->session->userdata("msg");
                if ($msg != NULL)
                {
                    echo "<p>$msg</p>";
                    $this->session->unset_userdata("msg");
                }
                ?>
                <table class="table table-striped jambo_table bulk_action" style="width:100%">
                    <thead>
                        <tr class="headings" >
                            <th class="column-title text-center" >Book ID </th>
                            <th class="column-title text-center" >Book name </th>
                            <th class="column-title text-center" >Author </th>
                            <th class="column-title text-center" >Publisher </th>
                            <th class="column-title text-center" >Publishing date</th>
                            <th class="column-title text-center" >Category </th>
                            <th class="column-title text-center" >Sub-category </th>
                            <th class="column-title text-center" >Picture </th>
                            <th class="column-title no-link last" text-center><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="9">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if ($searchpdt)
                        {
                            foreach ($searchpdt as $pdt)
                            {
                                echo '<tr class="even pointer">';
                                echo "<td align='center'>{$pdt->id}</td>";
                                echo "<td align='center'>{$pdt->title}</td>";
                                echo "<td align='center'>{$pdt->author}</td>";
                                echo "<td align='center'>{$pdt->publisher}</td>";
                                echo "<td align='center'>{$pdt->publishingdate}</td>";
                                echo "<td align='center'>{$pdt->cname}</td>";
                                echo "<td align='center'>{$pdt->scname}</td>";
                                echo "<td><img src='" . base_url() . "books/book_{$pdt->id}.{$pdt->picture}" . "' width='100' /></td>";
                                echo "<td align='center'>";
                                echo "<a href='" . base_url() . "books_management/edit/{$pdt->id}" . "'>Edit /</a>";
                                echo "<a href='" . base_url() . "books_management/delete/{$pdt->id}" . "'> Delete</a>";
                                echo"</td>";
                                echo '</tr>';
                            }
                        }
                        else if($searchauth)
                        {
                            foreach ($searchauth as $pdt)
                            {
                                echo '<tr class="even pointer">';
                                echo "<td align='center'>{$pdt->id}</td>";
                                echo "<td align='center'>{$pdt->title}</td>";
                                echo "<td align='center'>{$pdt->author}</td>";
                                echo "<td align='center'>{$pdt->publisher}</td>";
                                echo "<td align='center'>{$pdt->publishingdate}</td>";
                                echo "<td align='center'>{$pdt->cname}</td>";
                                echo "<td align='center'>{$pdt->scname}</td>";
                                echo "<td><img src='" . base_url() . "books/book_{$pdt->id}.{$pdt->picture}" . "' width='100' /></td>";
                                echo "<td align='center'>";
                                echo "<a href='" . base_url() . "books_management/edit/{$pdt->id}" . "'>Edit /</a>";
                                echo "<a href='" . base_url() . "books_management/delete/{$pdt->id}" . "'> Delete</a>";
                                echo"</td>";
                                echo '</tr>';
                            }
                        }
                        ?>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
