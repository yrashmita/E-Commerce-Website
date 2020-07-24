 <link href="../css/style.css" rel="stylesheet">
 
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h2 class="pull-left">LOGIN</h2>   
        
        </div>
        <div class="modal-body">


          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">

              <p>Don't have an account? <a href="./signup.php">Register</a></p>
              <br>
              <label><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" class="form-control"  name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" placeholder="Enter  your password" name="password" required>
            </div>

            
            <?php if(isset($_GET["error"])){ echo $_GET['error'];} ?><br>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit"  class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Login</button>

              
          </form>
        </div>
        <div class="modal-footer">
          <br>
          <p class="pull-left"><a href="#">Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div> 
