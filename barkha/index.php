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
    
     <div class="col-auto" style="text-align:center;"> 
        <div class="heading1">
        <a href="/satyam/">Maulana Abul Kalam Azad University Of Technology</a>
        </div>
        <div class="heading2">formerly known as
                <a href="/satyam/">West Bengal University Of Technology</a>
                </div>
                <div class="heading3">
                        B.F 142, Sector 1, Salt Lake City, Kolkata-70064
                        </div>      
        </div>
   </div>
    </div>
    <body>
      <div id="hide">  
        <image name="slide"height="500px"width="100%object-fit: cover;"></image>
            <h1 style="text-align:center">Alumuni Association</h1>
            <h2 style="text-align: center;">Maulana Abul Kalam Azad University Of Technology</h2>
            <div class="container-fluid">
                <h1 style="text-align: center;">Our Members</h1>
                <div class="row" style="margin-top:50px">
                    <div class="col-sm-1 offset-sm-1">
                        <img src="makati.jpg" alt="..." class="img-thumbnail"style="height:100px;width:200px"onclick="shiva()">
                        <a style="color:black;margin-top:6px;display:block"href="image.html">Satyam Vats</a>
                    </div>
                    <div class="col-sm-1 offset-sm-1">
                        <img src="makati.jpg" alt="..." class="img-thumbnail"style="height:100px;width:200px"onclick="shiva()">
                        <a style="color:black;margin-top:6px;display:block"href="image.html">Anand Rana</a>
                    </div>
                    <div class="col-sm-1 offset-sm-1">
                        <img src="makati.jpg" alt="..." class="img-thumbnail"style="height:100px;width:200px"onclick="shiva()">
                        <a style="color:black;margin-top:6px;display:block"href="image.html">Sintu Kumar</a>
                    </div> 
                    <div class="col-sm-1 offset-sm-1">
                        <img src="makati.jpg" alt="..." class="img-thumbnail"style="height:100px;width:200px"onclick="shiva()">
                        <a style="color:black;margin-top:6px;display:block"href="image.html">Bablu Kumar</a>
                    </div>    
                    <div class="col-sm-1 offset-sm-1">
                       <img src="makati.jpg" alt="..." class="img-thumbnail"style="height:100px;width:200px"onclick="shiva()">
                       <a style="color:black;margin-top:6px;display:block"href="image.html">Prakash Kumar</a>
                    </div> 
                    <div class="col-sm-1 offset-sm-1">
                        <img src="makati.jpg" alt="..." class="img-thumbnail"style="height:100px;width:200px"onclick="shiva()">
                        <a style="color:black;margin-top:6px;display:block"href="image.html">Manish Kumar</a>
                    </div>                
                </div>
            </div>
            <h3 class="offset-sm-2">Please<a href="fulllist.html">Click here</a>to see full list of Members</h3>
          </div>
          <div id="show">

          </div>  
          <script>
                var i=0;
                var images=[];
                var time=3000;
                images[0]="makati.jpg";
                images[1]="makut2.jpg";
                images[2]="makaut1.jpg";
                function changeImg(){
                    document.slide.src=images[i];
                    if(i<images.length-1){
                        i++;
               
                    }
                    else{
                        i=0;
                    }
                    setTimeout("changeImg()",time);
                   
                }
                window.onload=changeImg;
               function shiva(){
                   var shiva=document.getElementById("hide");
                   var shows=document.getElementById("show");
                   shiva.style.display="none";
                   var panel = document.createElement("div");
                   shows.appendChild(panel);
                   var image1 = document.createElement("img");
                   image1.setAttribute("src","makati.jpg");
                   image1.style.marginLeft="150px";
                   image1.style.marginTop="30px";
                   var closeBtn = document.createElement("img");
                   closeBtn.setAttribute("src","cross.png");
                   closeBtn.style.marginLeft="1450px";
                   closeBtn.style.marginTop="40px";
                   panel.appendChild(closeBtn);
                   panel.appendChild(image1);
                   closeBtn.addEventListener("click",function(){
                   panel.parentNode.removeChild(panel);
                   hide.style.display="inherit";
                    
                });
            }
               
                   </script>
    </body>
    </html>
    
    '
?>