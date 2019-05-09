<style>
table, td {
    border: 1px solid #e6e6e6;
}

</style>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Sub-category view</h2>
            <div class="title_right">
                                <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
                                    
                                </div>
                            </div>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">



            <div class="table-responsive">
               
               <?php
                        $msg = $this->session->userdata("msg");
                        if($msg != NULL){
                            echo "<p>$msg</p>";
                            $this->session->unset_userdata("msg");
                        }
                    ?>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            
                            <th class="column-title">Sub-category </th>
                            <th class="column-title">Category </th>

                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr class="odd pointer">
                            <?php
                            foreach($allSCat as $pdt)
                            {
                                echo '<tr>';
                                echo "<td>{$pdt->name}</td>";
                                echo "<td>{$pdt->cgname}</td>";
                                echo "<td>";
                                echo "<a href='" . base_url() . "subcat_management/edit/{$pdt->id}" . "'>Edit </a>";
                                echo"</td>";
                                echo '</tr>';
                            }
                            ?>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
