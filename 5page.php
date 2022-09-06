<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <style>
    .head{
        background-color: #0d6efd;
        text-align: center;
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 20px;
        color: white;
        border:1px solid blue;
        padding-top:10px;
        padding-bottom: 7px;
        border-radius: 10px;
    }
    .block1{
        color:blue;
        margin: 100px 30px;

    }
    .block2{
        color:blue;
        margin: 20px 30px;
    }
    .block3{
        color:blue;
        margin: 20px 30px;
        
    }
    .block4{
        color:blue;
        margin: 20px 30px;
    }
    .block5{
        color:blue;
        margin: 100px 30px;
        margin-top: 10px;
    }
    .container text-center{
        align-items: center;
    }
    .button1{
            
            align-items: center;
            padding: 10px 58px;
            margin-left:600px;
           border-radius: 10px;
            background-color: #4169a9;
            margin-top: 80px;
    }  
    .a{
        margin-top: 50px;
        margin-left:70px;
        color: #0d6efd;
    }
      
   .b{
        margin-left:500px;
        margin-top:-35px;
        color:#0d6efd;
        

    } 
    .c{
        margin-left:1100px;
        margin-top:-34px;
        color:#0d6efd;
    }
    h5{
   margin-left: 1210px; 
 margin-top:  -35px;
 color: #663ef9;
}
    
    
</style>
</head>
<div class="head">
    <h3>INDENT MANAGEMENT SYSTEM</h3>
    </div>
    <div>
        <img src="home1.jpg" style="width:45px;height:50px; margin-left:1150px; margin-top:20px;">
        <h5>welcome<?php echo($_SESSION['username'] ); ?></h5>
       </div>
<body>
    <div class="head1">
        <div class="a"> <h4>Institute:<?php echo($_SESSION['Institute'] ); ?> </h5></div> 
        <div class="b"><h4> Category:<?php echo($_SESSION['Category'] ); ?> </h5></div> 
        <div class="c"><h4>Type:<?php echo($_SESSION['Type'] ); ?> </h5></div>
    </div>
    <div class="container text-center">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="block1">
                <div class="mb-2 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Block: </label>
                  <div class="col-sm-10">
                    <input type="text" style="padding: 9px;border-color: 1px  #7394e098;border-radius: 10px;">
                  </div>
                </div>
            </div>
            <div class="block2">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Room No: </label>
                    <div class="col-sm-10">
                      <input type="text" style=" padding: 9px;border-color: 1px  #7394e098;border-radius: 10px;" >
                    </div>
                </div>
            </div>
            <div class="block3">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Department: </label>
                    <div class="col-sm-10">
                        <input type="text" style="padding: 9px;border-color:1px  #7394e098;border-radius: 10px;" >
                    </div>
                </div>
            </div>
            <div class="block4">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">HoD: </label>
                        <div class="col-sm-10">
                            <input type="text" style= "padding: 9px;border-radius: 10px;border-color:  #7394e098;">
                        </div>
                    </div>
                </div>
            </div>
          <div class="col-6 col-sm-4">
            <div class="block5">
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label " style="margin-left:40px; margin-top:100px;">Description: </label>
                  <div class="col-sm-10">
                    <input type="text" style="padding: 130px;margin-top:-50px; margin-left: 150px; border-radius: 15px; border-color: 1px  #7394e098;padding-left:350px;" >
                  </div>
                  <div class="button">
                    <button class="button button1" type="submit">SUMBIT</button>
                    </div>
                </div>
                </div>
          </div>
      </div>
</body>
</html>