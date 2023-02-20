<?php

class init
{
    private $db_host;
    private $db_user_name;
    private $db_user_pswd;
    private $db_name;
    public $con;
    public $result;

    public function __construct()
    {
        $this->db_host = "localhost";
        $this->db_user_name = "root";
        $this->db_user_pswd = "";
        $this->db_name = "jenny's_edress_book";
        $this->con = new mysqli($this->db_host,$this->db_user_name,$this->db_user_pswd,$this->db_name,);
        if($this->con)
        {
            // echo "<script>console.log('connection established')</script>";
        }
        else
        {
            // echo "<script>console.log('error in connection')</script>";
        }
    }


    public function get($feild='',$tbl_name='',$condition='',$equals='',$sql_syntax='')
    {
        $sql = "SELECT $feild FROM `$tbl_name`";
        if($condition != '' && $equals != ''){
            $sql .=" WHERE `$condition` = '$equals'";
        }
        if($sql_syntax != ''){
            $sql .=" $sql_syntax";
        }
        // echo "<pre>";
        // echo $sql;
        // die();
        $result = $this->con->query($sql);
            if($result->num_rows > 0){
                $args = array();
                while($row = $result->fetch_assoc()){
                    array_push($args, $row);
                }
                // echo "<script>console.log('successfully fetch')</script>";
                return $args;
            }
            else{
                // echo "<script>console.log('error in fetch')</script>";
            }
    }

    public function sql($sql){
        $sql = "$sql";
        $result = $this->con->query($sql);
        if($result->num_rows > 0){
            $args = array();
            while($row = $result->fetch_assoc()){
                array_push($args, $row);
            }
            echo "<script>console.log('successfully fetch')</script>";

        }
        else{
            echo "<script>console.log('error in fetch')</script>";
        }
    }



    public function update($tbl_name,$values = array(),$where = '')
    {
            $args = array();
            foreach($values as $keys=> $value)
            {
                $args[] = "$keys = '$value'";
            }
            $sql = "UPDATE $tbl_name SET ".implode(', ',$args);
            if($where != '')
            {
                $sql .= " WHERE $where";
            }
            if($this->con->query($sql))
            {
                echo "<script>console.log('updated')</script>";
            }

    }




    
    public function delete($tbl_name,$where = '')
    {
        $sql = "DELETE FROM $tbl_name" ;
        
        if($where != '')
        {
            $sql .= " WHERE $where";
        }
        $this->con->query($sql);
      
    }

    public function add($tbl_name,$values = array())
    {
        $tbl_columns = implode(', ',array_keys($values));
        $tbl_values = implode("', '",$values);
        $sql = "INSERT INTO `$tbl_name` ($tbl_columns) VALUES('$tbl_values')";
        //echo $sql;
        $this->con->query($sql);

    }

    public function query($query)
    {
        if($this->con->query($query))
        {
        
            echo "<script>console.log('query exicuted')</script>";
            return $query;
        }

    }




    public function con($query)
    {
        $con = mysqli_connect('localhost','root','',"jenny's_edress_book");
    if($con){
        echo "<script>console.log('connection established')</script>";
        }else{
        echo "<script>console.log('error in connection')</script>";
        }
        return mysqli_query($con,$query);
    }
}
@session_start();
// ->$feild == */name/email/lastname/city,etc;
// ->$tbl_name == tablename;
// ->$first_condition == where id/name/city/gender =;
// ->$second_condition == your sencond codition where you want to eqauls to the $first_condition; 
// ->$third_condition == YOUR third condition like AND/OR/
?>
