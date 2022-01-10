<?php

use RepositotyBD\Creator;
use RepositotyBD\Project;

include ('application/Repository/RepositoryDB.php');
class Model_Main extends Model
{
    public function get_data()
    {

        if(isset($_POST['add_product'])){

            $sku =    $_POST['sku'];
            $name =   $_POST['name'];
            $price=   $_POST['price'];
            $type  =  $_POST['type'];
            $size =   $_POST['size'];
            $weight = $_POST['weight'];
            $width =  $_POST['width'];
            $height = $_POST['height'];
            $length = $_POST['length'];

            $project = new Project();
            $project->insert_DB($sku,$name, $price,$type, $size, $weight, $width, $height ,$length );
            $data = $project->GetProduct();
            return $data;
        }elseif(isset($_POST['delete'])){
            $arr = $_POST['check'];
            $project = new Project();
            foreach ($arr as $id){
               $project->delete_DB($id);
            }
            $data =  $project->GetProduct();
            return $data;

        } else{
            $project = new Project();
            $data =  $project->GetProduct();
            return $data;
        }



    }









}