
<?php

class Db{
  private $pdo;
  private $final_query;
  
  function __construct($dsn,$username,$password)
  {
      $this->pdo=new PDO($dsn,$username,$password);
    
  }

/******** Run Query ******* */
function runQuery()
{
  $stmt=$this->pdo->prepare($this->final_query);
  $stmt->execute();
  // echo $this->final_query;
  return $stmt->fetchAll(PDO::FETCH_OBJ);
}


  /******** insert FUNCTION ******* */
  function insert($table_name,$data)
  {
    $query = "INSERT INTO ".$table_name." (";            
    $query .= implode(",", array_keys($data)) . ') VALUES (';            
    $query .= "'" . implode("','", array_values($data)) . "')";
    $this->final_query = $query ;
   return $this;
  }

   /******** QUERY FUNCTION ******* */
   
   function select($table,$list=null)
   {
     if(!$list)
    $this->final_query="select * from $table";
    else
   $this->selectlist($table,$list);
     return $this;
   }
   
   function selectlist($table,$list)
   {
  
    $this->final_query =implode(",",$list);
    $this->final_query ="select $this->final_query from $table";
    return $this;
   }
   function selectCount($table,$counted_column,$list) 
   {
    $this->final_query =implode(",",$list);
    $this->final_query ="select count($counted_column) , $this->final_query from $table";
    return $this;
   }
   function where($column,$value)
   {
    $this->final_query.=" where $column = '$value'";
   
    return $this;
   }
   function Or($column,$value)
   {
    $this->final_query.=" Or $column = '$value'";
   
    return $this;
   }
   function And($column,$value)
   {
    $this->final_query.=" And $column = '$value'";
   
    return $this;
   }


   function orderby($column,$typeOfOrder=null)
   {
    $this->final_query.=" order by $column";
    return $this;
   }
   function groupBy($column)
   {
    $this->final_query.=" group by $column";
  

    return $this;

   }
   function outerjoin($table2,$T1_column,$T2_column)
   {
     $this->final_query.=" JOIN $table2 on $T1_column = $T2_column ";
    return $this;
   }

   
   function innerjoin($table2,$T1_column,$T2_column)
   {
     $this->final_query.=" INNER JOIN $table2 on $T1_column = $T2_column ";
    return $this;
   }

   function leftJoin($table2,$T1_column,$T2_column)
   {
     $this->final_query.=" LEFT JOIN $table2 on $T1_column = $T2_column ";
    return $this;
   }
   function rightJoin($table2,$T1_column,$T2_column)
   {
     $this->final_query.=" RIGHT JOIN $table2 on $T1_column = $T2_column ";
    return $this;
   }


   public function delete($table,$where=null){
    // $count=$this->pdo->exec("delete from $table set $col='$col_val' where $condit_col='$condit_val'");
    if($where==null){
        $stmt=$this->pdo->prepare("delete from $table");
        $count=$stmt->execute();
       return $count;
    }
    else{
        $stmt=$this->pdo->prepare("delete from $table where $where");
        $count=$stmt->execute();
       return $count;
    }
    

}

public function deleteById($table,$id){
  // $count=$this->pdo->exec("delete from $table set $col='$col_val' where $condit_col='$condit_val'");

     $this->final_query=("delete from $table where id =$id");
     return $this;

  

}


   public function update($table_name,$list,$where_condition){
    $query = '';  
    $condition = ''; 
      foreach($list as $key => $value)  
      {  
           $query .= $key . "='".$value."', ";  
      }  
     $query = substr($query, 0, -2);  

     foreach($where_condition as $key => $value)  
      {  
           $condition .= $key . "='".$value."' AND ";  
      }  
       $condition = substr($condition, 0, -5);  
        $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
        $stmt=$this->pdo->prepare( $query);
        $stmt->execute();
  

    }

    
   
    


}

/*********  testing the code******** */
$database="blog";
$dsn="mysql:host=localhost;dbname=$database;charset=utf8mb4";
$username="root";
$password="";
$column=array("name,age");
$column2=array("product.product_name,category.category_name");
$db_obj=new Db($dsn,$username,$password);
/**inserted data */
/*
$insert_data = array(  
          
  'name'          => "mmmmm" ,
  'age'           =>  17 ,
  'major'         => "lapppms" 
 
);
$count =$db_obj->insert("users",$insert_data)->runQuery();
print_r($count);
*/
/*  test quere for all users
print_r($db_obj->select("users")->runQuery());
             
test whrer in query
print_r($db_obj->select("users")->where(' name ','lapppms')->runQuery());
test order by
print_r($db_obj->select("users")->where(' name ','lapppms')->orderby('name',"DESC")->runQuery());


test group and count by
print_r($db_obj->selectCount("users","name",$column)->where(' major ','lapppms')->groupBy('name')->runQuery());

test outerjoin
print_r($db_obj->select("product",$column2)->outerjoin("category","product.category_id","category.category_id")->orderby("product_name")->runQuery());

testing inner join 
print_r($db_obj->select("product",$column2)->innerjoin("category","product.category_id","category.category_id")->runQuery());

testing left join 
print_r($db_obj->select("product",$column2)->leftJoin("category","product.category_id","category.category_id")->runQuery());

testing right join 
print_r($db_obj->select("product",$column2)->rightJoin("category","product.category_id","category.category_id")->runQuery());
print_r($db_obj->selectCount("users","name",$column)->where(' major ','lapppms')->Or(' name ','afaf')->groupBy('name')->runQuery());*/


?>
