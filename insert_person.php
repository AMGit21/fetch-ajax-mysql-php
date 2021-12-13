<?php
header('Content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $json = json_decode(file_get_contents('php://input'));
    // echo json_encode($json->fname . " " . $json->lname);

     $fn = trim($json->fname);
    $ln = trim($json->lname);
    $data = [];
    if (!empty($fn) && !empty($ln)) 
    {
        require_once('./connect_db.php');

        $sql = "SELECT first_name, last_name
            FROM person 
            WHERE first_name = '$fn' 
            AND last_name = '$ln'";
            $result = $conn->query($sql);

        if (mysqli_num_rows($result) == 0) 
        {
            $sql = "INSERT INTO person (first_name, last_name) VALUES ('$fn', '$ln')";
            
            if ($conn->query($sql) === TRUE) 
            {
                $msg = "New record created successfully";
                // $data = ["first_name"=>$fn, "last_name"=>$ln];
                // array_push($data, $fn, $ln, $msg);
                $data["first_name"] = $fn;
                $data["last_name"] = $ln;
            } 
            else 
                $msg = "Error: " . $sql . "<br>" . $conn->error;
        } 
        else 
            $msg = "this person exist";
            
        $conn->close();

    } 
    else
        $msg = "please enter the data";
    
    $data["message"] = $msg;
    echo json_encode($data);
}
?>