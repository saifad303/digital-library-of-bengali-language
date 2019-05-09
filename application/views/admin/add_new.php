


<div class="x_panel">
    <div class="x_title">
        <h2>Upload New Book</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">




        <?php
        echo validation_errors();
        $action = base_url() . "books_management/insert";
        $attr = array(
            "class" => "form-horizontal form-label-left",
            "name" => "bookForm",
            "enctype" => "multipart/form-data",
            "novalidate" => "novalidate"
        );
        echo form_open($action, $attr);
        //Book Title
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Book Title <span>*</span>", "first-name", $data);


        echo '<div class= "col-md-7 col-sm-7 col-xs-12">';
        $data = array(
            "name" => "title",
            "class" => "form-control col-md-7 col-xs-12",
            "required" => "required",
            "value" => set_value("title")
        );
        echo form_input($data);
        echo '</div>';
        echo '</div>';

        //Author
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Author <span>*</span>", "first-name", $data);
        echo '<div class= "col-md-7 col-sm-7 col-xs-12">';
        $data = array(
            "name" => "author",
            "class" => "form-control col-md-7 col-xs-12",
            "required" => "required",
            "value" => set_value("author")
        );
        echo form_input($data);
        echo '</div>';
        echo '</div>';

        //Publisher
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Publisher ", "first-name", $data);
        echo '<div class= "col-md-7 col-sm-7 col-xs-12">';
        $data = array(
            "name" => "publisher",
            "class" => "form-control col-md-7 col-xs-12",
            "required" => "required",
            "value" => set_value("publisher")
        );
        echo form_input($data);
        echo '</div>';
        echo '</div>';

        //Publishing date
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Publishing date ", "first-name", $data);
        echo '<div class= "col-md-7 col-sm-7 col-xs-12">';
        $data = array(
            "name" => "publishdate",
            "id" => "birthday",
            "class" => "date-picker form-control col-md-7 col-xs-12",
            "required" => "required",
            "value" => set_value("publishdate")
        );
        echo form_input($data);
        echo '</div>';
        echo '</div>';

        //Category
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Category <sup>*</sup>", "first-name", $data);
        echo '<div class="col-md-7 col-sm-7 col-xs-12">';
        $attr = array(
            "class" => "select2_single form-control",
            "id" => "catid"
        );
        $data = array();
        $data[0] = "Choose Category";
        foreach ($allCat as $dt)
        {
            $data[$dt->id] = $dt->name;
        }
        echo form_dropdown("catid", $data, "", $attr);
        echo '</div>';
        echo '</div>';



        //Sub Category
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Sub-Category <sup>*</sup>", "first-name", $data);
        echo '<div class="col-md-7 col-sm-7 col-xs-12">';
        $attr = array(
            "class" => "select2_single form-control",
            "id" => "scatid"
        );
        $data = array();
        $data[0] = "Choose Category First";
        foreach ($allSCat as $dt)
        {
            $data[$dt->id] = $dt->name;
        }
        echo form_dropdown("scatid", $data, "", $attr);
        echo '</div>';
        echo '</div>';





        //Tags
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Tags <sup>*</sup>", "first-name", $data);
        echo '<div class="col-md-7 col-sm-7 col-xs-12">';
        $attr = array(
            "class" => "select2_multiple form-control",
            "multiple" => "multiple",
            "id" => "tagid"
        );
        $data = array();
        $data[0] = "Choose Tags";
        foreach ($allTag as $dt)
        {
            $data[$dt->id] = $dt->name;
        }
        echo form_dropdown("tagid[]", $data, "", $attr);
        echo '</div>';
        echo '</div>';




        //description
        echo '<div class="form-group">';
        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Book Description <span>*</span>", "first-name", $data);
        echo '<div class= "col-md-7 col-sm-7 col-xs-12">';
        $data = array(
            "name" => "descr",
            "class" => "form-control col-md-7 col-xs-12",
            "required" => "required",
            "value" => set_value("descr")
        );
        echo form_textarea($data);
        echo '</div>';
        echo '</div>';

        //Epub book upload
        echo '<br/>';
        echo '<div class="form-group">';

        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Epub file upload <sup>*</sup>", "middle-name", $data);
        echo '<div class="col-md-7 col-sm-7 col-xs-12">';

        $data = array(
            "id" => "middle-name",
            "class" => "form-control col-md-7 col-xs-12",
            "name" => "epub",
            "required" => "required",
            "value" => set_value("epub")
        );
        echo form_upload($data);
        echo '</div>';
        echo '</div>';

        //Mobi file upload
        echo '<br/>';
        echo '<div class="form-group">';

        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Mobi file upload <sup>*</sup>", "middle-name", $data);
        echo '<div class="col-md-7 col-sm-7 col-xs-12">';

        $data = array(
            "id" => "middle-name",
            "class" => "form-control col-md-7 col-xs-12",
            "name" => "mobi",
            "required" => "required",
            "value" => set_value("mobi")
        );
        echo form_upload($data);
        echo '</div>';
        echo '</div>';

        //Pdf file upload
        echo '<br/>';
        echo '<div class="form-group">';

        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("PDF file upload <sup>*</sup>", "middle-name", $data);
        echo '<div class="col-md-7 col-sm-7 col-xs-12">';

        $data = array(
            "id" => "middle-name",
            "class" => "form-control col-md-7 col-xs-12",
            "name" => "pdf",
            "required" => "required",
            "value" => set_value("pdf")
        );
        echo form_upload($data);
        echo '</div>';
        echo '</div>';



        //Picture
        echo '<br/>';
        echo '<div class="form-group">';

        $data = array("class" => "control-label col-md-3 col-sm-3 col-xs-12");
        echo form_label("Picture <sup>*</sup>", "middle-name", $data);
        echo '<div class="col-md-7 col-sm-7 col-xs-12">';

        $data = array(
            "id" => "middle-name",
            "class" => "form-control col-md-7 col-xs-12",
            "name" => "pic",
            "required" => "required",
            "value" => set_value("pic")
        );

        echo form_upload($data);
        echo '</div>';
        echo '</div>';



        //Submit
        echo '<div class="ln_solid"></div>';
        echo '<div class="form-group">';
        echo '<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">';
        $data = array(
            "class" => "btn btn-success",
            "name" => "sub",
            "value" => "Upload",
            "required" => "required"
        );
        echo form_submit($data);
        echo '</div>';
        echo '</div>';


        echo form_close();
        ?>





    </div>
</div>

<script>
    $(document).ready(function ()
    {
        $("#catid").change(function ()
        {
            var c = $(this).val();
            if (c == 0)
            {
                $("#scatid").html('');
                $("#scatid").append("<option value='0'>Choose Category First</option>");
            }
<?php
foreach ($allCat as $cat)
{
    echo "else if(c == $cat->id){";
    echo "$(\"#scatid\").html('');";
    foreach ($allSCat as $scat)
    {
        if ($scat->categoryid == $cat->id)
        {
            echo "$(\"#scatid\").append(\"<option value='" . $scat->id . "'>$scat->name</option>\");";
        }
    }
    echo "}";
}
?>

        });
    });
</script>