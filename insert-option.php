<?php 
if(isset($_POST['submit'])){
  $Institute = $_POST['Institute'];
  if(!empty($Institute)){
      $query = "INSERT INTO collegedetails (Institute) VALUES('$Institute')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
    $Category = $_POST['Category'];
  if(!empty($Category)){
      $query = "INSERT INTO collegedetails (Category) VALUES('$Category')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
    $Type = $_POST['Type'];
  if(!empty($Type)){
      $query = "INSERT INTO collegedetails (Type) VALUES('$Type')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
  }

?>