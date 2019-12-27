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
     <a href="/satyam/">
     <img src="makaut.jpg"style="height:65px;width:80px"  class="responsive">
    </a>

    
     <div class="col-auto"> 
        <div class="heading1">
        <a href="/satyam/">Maulana Abul Kalam Azad University Of Technology</a>
        </div>
        <div class="heading2">formerly known as
                <a href="/satyam/x">West Bengal University Of Technology</a>
                </div>
                <div class="heading3">
                        B.F 142, Sector 1, Salt Lake City, Kolkata-70064
                        </div>      
        </div>
   </div>
    </div>
    <h3 style="text-align:center; color:red;  font-weight:bold;"> Please Enter Your details below to get registered</h1>
    <div class="container-fluid" style="margin-top:40px">
        
        <form method="POST" action="register.php"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name (*)</label>
                  <input type="text" class="form-control" id="inputEmail4" name="FirstName" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name (*)</label>
                  <input type="text" class="form-control" id="inputPassword4" name="LastName" placeholder="Last Name" required>
                </div>
              </div>
        
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email (*)</label>
                <input type="email" class="form-control" id="inputEmail4" name="Email" placeholder="Email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputMobile4">Mobile</label>
                <input type="text" class="form-control" id="inputMobile4" name="Mobile" placeholder="Mobile Number">
              </div>
              <div class="form-group col-md-6">
              <label for="yearOfBtech">Starting year Of Btech (*)</label>
              <input type="number" class="form-control" name="StartingYear" id="inputYear" placeholder="2015" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputState">Stream  (*)</label>
            <select id="inputState" name="Stream" class="form-control" required>
              <option selected>Choose... </option>
              <option value="IT">Information Technology</option>
              <option value="CSE">Computer Science</option>
            </select>
            
          </div>
          <div class="form-group col-md-6">
              <label for="yearOfBtech">Link of Facebook profile</label>
              <input type="text" class="form-control" name="FBProfile" id="inputYear" placeholder="Facebook Profile">
            </div>
            <div class="form-group col-md-6">
              <label for="yearOfBtech">Link of LinkedIn profile (*) </label>
              <input type="text" class="form-control" name="LinkedInProfile" id="inputYear" placeholder="LinkedIn Profile" required>
            </div>
            </div>

        
            
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City  (*)</label>
                <input type="text" class="form-control" name="City" id="inputCity" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State (*)</label>
                <input type="text" class="form-control" name="State" id="inputState" required>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" name="Zip" id="inputZip">
              </div>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Bio</label>
                    <textarea class="form-control" name="Bio" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <p style="color:red;"> <b> NOTE: </b> All starred fields are manadatory</p>
            <button type="submit" class="btn btn-primary offset-sm-5">Submit</button>
          </form>
    </div>
    
</html>';

?>