<html>
<head><title> Admin Login</title></head>
 <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

 <body><br>
<center><h1>Admin Login</h1></center><br>
<form class="form-inline" action="login.php">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>

</body>



<footer>
    
</footer>


</html>