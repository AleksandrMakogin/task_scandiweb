<?php
namespace RepositotyBD;

use mysqli;


interface CreateDB {

    public  function connectDB();

}

interface CRUD_operation_DB  {

    public  function insert_DB($sku, $name, $price,$type, $size, $weight, $width, $height , $length);
    public  function delete_DB($id);

}

interface GetProdctDB {

    public  function GetProduct();

}

class  Project implements CreateDB ,CRUD_operation_DB, GetProdctDB {

    public function connectDB()
    {
        $this->conn = new mysqli('localhost','root','root','scandiweb');
        if( $this->conn->connect_errno){
            die('Ошибка подключение к базк данных');
        }else{
            echo "Подключение успешно ";
            return $this;
        }
    }

    public function insert_DB($sku, $name, $price,$type, $size, $weight, $width, $height, $length)
    {
        $this->conn = new mysqli('localhost','root','root','scandiweb');
        $data = $this->conn->query("insert into product (sku, name, price, type, size, weight, width, height, length ) 
                                  values ('$sku','$name',$price, '$type', $size, $weight,$width,$height,$length)");
    }

    public function delete_DB($id)
    {
        $this->conn = new mysqli('localhost','root','root','scandiweb');
        $data = $this->conn->query("delete from product where sku = '$id'");
    }

    public function GetProduct()
    {
        $this->conn = new mysqli('localhost','root','root','scandiweb');
        $data = $this->conn->query("select * from product order by sku DESC  ");
        return $data;
    }
}

