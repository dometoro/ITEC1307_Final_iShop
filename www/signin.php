<?php
    include('topmenu.php');
?>
<html>
<head>
<style> 
#scle {text-align: center;
		font-size: 3em;
		color : #336666;}
    body {
    background-color: black;
   
}
</style>

</head>
    <body>
    <form action="validateuser.php" method="post">
    
    <table border="0" cellspacing="1" cellpadding="3">
    
    <div id = scle>Login</div>
    <label></label>
    <div>
    </div>
    <label for="exampleInputEmail1" style="color: white" >Email address</label>
    <form action="validateuser.php" method="post">
  <div>
    <input type="email" class="form-group" id="exampleInputEmail1" placeholder="Email" name="emailaddress" style="border: 1px #0000FF solid">
  </div>
  
  
  <label for="exampleInputPassword1" style="color: white">Password</label>
  <div class="form-group">
    
    <input type="password" class="form-group" id="exampleInputPassword1" placeholder="Password" name="password"style="border: 1px #0000FF solid">
  </div>  
  <button type="submit" class="btn btn-default">Login</button>
</form>
</html>
