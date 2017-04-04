<?php

class query{
    public $db;
    public function __construct($conn)
    {
        $this->db = $conn;
    }
    public function insert(){
        $query = "INSERT INTO table (`field1`, `field2`, `field3`) VALUES ('1','2','3')";
        $res = mysqli_query($this->db, $query);
    }
    public function select($where=""){
        $query = "SELECT * FROM table WHERE 1";
        if($where)
            $query .= " $where";

        $res = mysqli_query($this->db, $query);
        foreach ($res as $res){
            echo $res['field1']."<br />";
            echo $res['field2']."<br />";
            echo $res['field3']."<br />";
        }
    }
    public function update($where=""){
        $query = "UPDATE table SET field1 = 'value1' WHERE 1";
        if($where)
            $query .= " $where";

        $res = mysqli_query($this->db, $query);
    }
    public function delete($where = ""){
        $query = "DELETE FROM table WHERE 1";
        if($where)
            $query .= " $where";
        $res = mysqli_query($this->db, $query);
    }

}
?>