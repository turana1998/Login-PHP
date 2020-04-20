<?php require_once "code.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<style>
body{
    background:url('../FbLogin/image/bg.jpg') ;
    background-attachment: fixed;
	background-size: cover;
	background-position: center;
}
.main{
    height: auto;
    width: 400px;
    background-color: #335ea8;
    border-radius: 5px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.icon{
    margin-top:15px;
    margin-left:15px;
}
#ttl{
    font-size: 30px;
    color: #ffffff;
    font-weight: bold;
    text-align: center;
    display:block;
}
#email{
    height:50px;
    outline:none;
    background-color:#293852;
    border-radius: 5px;
    width:250px;
    font-size: 15px;
    color: #ffffff;
    font-weight: 500;
    filter: drop-shadow(0px 1px 0px #000000);
    margin: auto;
    display: block;
    padding-left:15px;
    margin-top:20px;


}
#password{
    height:50px;
    background-color:#293852;
    border-radius: 5px;
    width:250px;
    font-size: 15px;
    color: #ffffff;
    font-weight: 500;
    filter: drop-shadow(0px 1px 0px #000000);
    margin: auto;
    display: block;
    padding-left:15px;
    margin-top:20px;


}
#submit{
    height:50px;
    background-color:#bdd4fd;
    border-radius: 5px;
    width:250px;
    font-size: 17px;
    color: #28467b;
    font-family: "Helvetica Neue";
    font-weight: bold;
    margin: auto;
    display: block;
    padding-left:15px;
    margin-top:20px;
}
#link{
    display:block;
    text-align:center;
    font-size: 20px;
    color: #ffffff;
    font-weight: 200;
    margin-top:20px;
}
</style>
</head>
<body>
    <div class="main">
      <div class="icon">
         <img src="image/icon.png"/>
         <img src="image/icon.png"/>
         <img src="image/icon.png"/>
      </div>
      <a id="ttl">Registri</a>
      <form id="signup"   method="POST" action="#" enctype="multipart/form-data">
        <div class="col-12">
          <input id="email" type="text" class="validate" name="z" placeholder="Name Surname">
          <input id="sts" type="hidden"  value="<?= @$_GET['status'] ?>"/>
        </div>
        <div class="col-12">
          <input id="email" type="text" class="validate" name="y" placeholder="User Name">
        </div>
        <div class="col-12">
          <input id="email" type="email" class="validate" name="x" placeholder="Email">
        </div>
        <div class="col-12">
          <input id="password" type="password" class="validate" name="pass" placeholder="Password">
        </div>  
        <div class="col-12">
          <button onclick="Sign()"  id="submit" type="submit" name="signin" class="validate" >Sign Up</button>
        </div>   
        <div class="col-12">
            <a href="#" onclick="SignIn()" id="link">Do you have an account Sign In?</a>

        </div>  
       
    </form>
    <form style="display:none;" id="signin"  method="POST" action="" enctype="multipart/form-data">
        <div class="col-12">
          <input id="email" type="email" class="validate" name="login_email" placeholder="Email Address">
        </div>
        <div class="col-12">
          <input id="password" type="password" class="validate" name="login_pass" placeholder="Password">
        </div>  
        <div class="col-12">
          <button  type="submit" name="login" class="validate" > Login</button>
        </div>   
          <a href="#" id="link">Forgot Password?</a>
    </form>
  </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    
    function SignIn() {
      document.getElementById('signup').style.display="none";
      document.getElementById('signin').style.display="block";
      
    }

    function Status(){
      let sts =   document.getElementById('sts').value;
      if(sts=="ok"){
        swal({
            title: "Good job!",
            text: "Your registrition was accepted!",
            icon: "success",
        });
      }else  if(sts=="no"){
        swal({
            title: "Good job!",
            text: "Your registrition was accepted!",
            icon: "error",
        });
      } 
    }
    Status();   
      //    function Sign() {
      //  sen onclicik nie sildin rahat olsun deye duzelderem eseblesme)))
      //     var tag = document.getElementById('password').value;
      //   var lngth=tag.length;
      //    var word = document.getElementById('password').value;
      //   //  console.log( word[0].toUpperCase() );
      //   //    console.log(lngth);
      //    if(lngth<=8 && word[0]!=word[0].toUpperCase() ){ 
      //       swal("Warning", "You password must be longer than 8 and  Start with Big letter", "error");
      //    }
      //    else {
      //     swal({
      //       title: "Good job!",
      //       text: "Your registrition was accepted!",
      //       icon: "success",
      //     });

      //     }

      // }
      

     /*function Login()
      {
        var tag = document.getElementById('password').value;
        var lngth=tag.length;
         var word = document.getElementById('password').value;
        //  console.log( word[0].toUpperCase() );
        //    console.log(lngth);
         if(lngth<=8 && word[0]!=word[0].toUpperCase() ){ 
            swal("Warning", "You password must be longer than 8 and  Start with Big letter", "error");
         }
         else {
          swal({
            title: "Good job!",
            text: "Your registrition was accepted!",
            icon: "success",
          });

          }

      }*/
      
    </script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  -->
</body>
</html>