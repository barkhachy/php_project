<?php
    echo '
    <html>
    <head>
    <title>Makaut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="makaut.js"></script>
    
<link rel="stylesheet" href="makaut.css">
</head>


<div class="container-fluid" style="height:75px;border-bottom:5px solid red">
     <div class="row"> 
    <img src="makaut.jpg"style="height:65px;width:80px"  class="responsive">

    
     <div class="col-auto" style="text-align:center;"> 
        <div class="heading1">
        <a href="loginpage.html">Maulana Abul Kalam Azad University Of Technology</a>
        </div>
        <div class="heading2">formerly known as
                <a href="loginpage.html">West Bengal University Of Technology</a>
                </div>
                <div class="heading3">
                        B.F 142, Sector 1, Salt Lake City, Kolkata-70064
                        </div>      
        </div>
   </div>
    </div>
    <div class="container-fluid" style="background-image: url(`makati.jpg`);height:500px">
        <div class="offset-sm-4" style="margin-top: 250px;">
            <a href="newpro.html">
            <button type="button" class="btn btn-danger btn-lg">Alumuni Registration</button>
            </a>
            <button style="margin-left:30px" type="button" class="btn btn-danger btn-lg"> Alumuni Login</button>
          </div>  
    </div>
    <div class="container-fluid"style="height:80px;background-color:black">
            <p   style="text-align:center;color:white;margin-top:30px">Design and developed By SATYAM KUMAR</p>
    </div>
    '
    // include './db_connect.php';
    // include './router.php';
    // $conn = OpenCon();
    // // echo "Connected Successfully";

    // $name = strval($_REQUEST['Name']);
    // $userName = strval($_REQUEST['UserName']);
    // $email = strval($_REQUEST['Email']);
    // $password = strval($_REQUEST['Password']);
    // $mobile = intval($_REQUEST['Mobile']);
    // $address = strval($_REQUEST['Address']);

    // // echo $name,$userName,$email, $address;
    // $sql = "INSERT INTO users (Name, UserName, Email, Password, Mobile, Address)
    //     VALUES ('$name', '$userName', '$email', '$password', '$mobile', '$address')";
    
    // if ($conn->query($sql) === TRUE) {
    //     home($name);
    // } else {
    //     echo "<html>
    //             <h1> Error!!! Please enter all unique fileds</h1>
    //         </html>
    //         ";
    // }


    // CloseCon($conn);
?>
