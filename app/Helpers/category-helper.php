<?php

use App\Models\Category;
use App\Models\SelectedCategory;

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();
}

function getSelectedCategoy(){
    
    

  return  $categories = SelectedCategory::where('status','=','1')->get();

}

?>
