<?php

defined('BASEPATH') OR exit('No direct script access allowed');

define('EXT', '.php');

$route['default_controller'] = 'ebook';
$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;



require_once( BASEPATH . 'database/DB' . EXT );
$db = & DB();
$query = $db->get('category');
$result = $query->result();
foreach ($result as $value) {
    $route[ReplaceR($value->name) . "/details/(:num)/(:any)"] = "category/items/$1/$1";
    $route[ReplaceR($value->name) . "/details/(:num)"] = "category/items/$1";
    $route[ReplaceR($value->name) . ""] = "category" . "";
    $route[ReplaceR($value->name) . '/:any'] = "category";
}
$query = $db->get('subcategory');
$result1 = $query->result();
foreach ($result as $cat) {
    foreach ($result1 as $scat) {
        $route[ReplaceR($cat->name) . "/" . ReplaceR($scat->name) . "/(:num)"] = "subcategory/subcat/$1";
        $route[ReplaceR($cat->name) . "/(:num)"] = "subcategory/subcat/$1";
        $route[ReplaceR($cat->name) . ""] = "subcategory" . "";
        $route[ReplaceR($cat->name) . '/:any'] = "subcategory";
    }
}

function ReplaceR($data) {
    $data = str_replace("'", "", $data);
    $data = str_replace("!", "", $data);
    $data = str_replace("@", "", $data);
    $data = str_replace("#", "", $data);
    $data = str_replace("$", "", $data);
    $data = str_replace("%", "", $data);
    $data = str_replace("^", "", $data);
    $data = str_replace("&", "", $data);
    $data = str_replace("*", "", $data);
    $data = str_replace("(", "", $data);
    $data = str_replace(")", "", $data);
    $data = str_replace("+", "", $data);
    $data = str_replace("=", "", $data);
    $data = str_replace(",", "", $data);
    $data = str_replace(":", "", $data);
    $data = str_replace(";", "", $data);
    $data = str_replace("|", "", $data);
    $data = str_replace("'", "", $data);
    $data = str_replace('"', "", $data);
    $data = str_replace("?", "", $data);
    $data = str_replace("  ", "_", $data);
    $data = str_replace("'", "", $data);
    $data = str_replace(".", "-", $data);
    $data = strtolower(str_replace(" ", "_", $data));
    $data = strtolower(str_replace(" ", "_", $data));
    return str_replace("_", "-", $data);
}
