<div class="x_panel">
                  <div class="x_title">
                    <h2>Input category</h2>
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
                  <div class="x_content">
                    <br />
                    
                    
                    <?php 
                    echo validation_errors();
                    $action = base_url() . "cat_management/insert";
                    $attr = array(
                        "class" => "form-horizontal form-label-left",
                        "name" => "bookForm",
                        "enctype" => "multipart/form-data",
                        "novalidate" => "novalidate"
                    );
                    echo form_open($action, $attr);
                    
                    //Category
                     echo '<div class="form-group">';
                    $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
                    echo form_label("Category <sup>*</sup>", "first-name", $data);
                    echo '<div class="col-md-6 col-sm-6 col-xs-12">';
                    $data = array(
                        "name" => "bcategory",
                        "class" => "form-control col-md-7 col-xs-12",
                        "placeholder" => "Category",
                        "required" => "required",
                        "value" => set_value("category")
                    );
                    echo form_input($data);
                    echo '</div>';
                    echo '</div>';
                    
                     //Submit
                    echo '<div class="ln_solid"></div>';
                    echo '<div class="form-group">';
                    echo '<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">';
                    $data = array(
                        "class" => "btn btn-success",
                        "name" => "sub",
                        "value" => "Save",
                        "required" => "required"
                    );
                    echo form_submit($data);
                    echo '</div>';
                    echo '</div>';
                    
                    
                    echo form_close();
                    ?>
                    
                    
                  </div>
                </div>

