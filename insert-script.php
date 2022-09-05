<?php 
if(isset($_POST['submit'])){

  $Institute = $_POST['Institute'];
  $Category = $_POST['Category'];
  $Type = $_POST['Type'];

     if(!empty($Institute) && !empty($Category ) && !empty($Type)){
      $query = "INSERT INTO collegedetails (Institute,Category,Type) VALUES('$Institute', '$Category','$Type')";
      $result = $conn->query($query);
     
      if($result){
        header("location:5page.html");
      }  
    }
  }

?>