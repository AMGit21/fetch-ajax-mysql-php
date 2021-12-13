<?php

class Person
{
    public $fname;
    public $lname;
}

require_once('./connect_db.php');
$sql = "SELECT first_name, last_name FROM person";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $data = [];
    // output data of each row
    for($i =0; $row = $result->fetch_assoc(); $i++) {
        $per = new Person();
        $per->fname = $row['first_name'];
        $per->lname = $row['last_name'];
        array_push($data, $per);
    }
  } 
  // $data["sub_count"] = $result->num_rows;
$conn->close();
echo json_encode($data);

?>