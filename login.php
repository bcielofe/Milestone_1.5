<?php

  // $users = [
  //   ['email'=>'admin@a', 
  //   'password'=>'adminpass',
  //   'role'=>'admin'], 
  //   ['email'=>'cielo@b', 
  //   'password'=>'cielopass',
  //   'role'=>'regular']
  //   ];


// json step by step process to add username content on php login directory

  // $fp = fopen('user.json', 'w');
  // fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
  // fclose($fp);

// run previous code first to create a json file  

  $string = file_get_contents("user.json");

  $users =json_decode($string, true); 

  if (isset($_POST['login'])) 
  {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    // $i=0;
    foreach ($users as $user) 
    {
      if ($email==$user['email'] && $password==$user['password']) 
      {
        echo "login succesful";
        // session_start();
        $_SESSION['email'] = $email;
          if($email=='admin@a')
          $_SESSION['role'] = 'admin';  
          else
          $_SESSION['role'] = 'regular';
      } 
      // else {
      //   $i++;
      //   // echo "Invalid login credentials.";
      // }
      // if ($i== count($users)) {
      //   echo "Invalid login credentials.";
      // }
    }
  }


  if(isset($_POST['register'])){
    $new_user = ['email'=>$_POST['email'],
          'password'=>sha1($_POST['password']),
          'role'=>'regular'];

    if($_POST['password']==$_POST['confirmpw']){
      $string = file_get_contents("user.json");
      $users = json_decode($string, true);

      $users[] = $new_user;
      //array_push($users, $new_user);

      $fp = fopen('user.json', 'w');
      fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
      fclose($fp);

      // echo "<script type='text/javascript'> alert ('Registration Sucessful.'); </script>";
    }
  }
function display_forms(){
?>

<form method="POST">

<!-- style was inserted to emphasize -->
  <h4 style="font-weight: bold;">CUSTOMER LOGIN </h4> 
  <br>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>

  <div class="form-group">
    <div>
      <span class="leftLogin">
      <label for="pwd"> Password: </label>
      </span>
      <span class="rightLogin"> 
      <a href="#" id="PwdBtn"> Forgot your password? </a> 
    </span>
    </div>
    
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
  </div>

  <div class="clear">
    <button type="submit" class="btn btn-default leftLogin" name="login" data-dismiss="modal">
      Login
    </button>
    </form>
    <span class="rightLogin">
      New Customer? <br>
      <a href="#" id="RegBtn"> Sign Up </a> 
    </span>
  </div>

<!-- Modal -->
  <div class="modal fade" id="RegModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-weight: bold"> CREATE ACCOUNT </h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="firstname"> First Name: </label>
              <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
            </div>
            <div class="form-group">
              <label for="lastname"> Last Name: </label>
              <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
            </div>

            <div class="form-group">
              <label for="email"> Email: </label>
              <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email">
            </div>

            <div class="form-group">
              <label for="contactNum"> Contact Number: </label>
              <input type="text" class="form-control" id="contactNum" placeholder="Enter mobile number">
            </div>
            <div class="form-group">
              <label for="psw"> Password: </label>
              <input type="password" class="form-control" id="pwd" name="password"  placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="psw"> Confirm Password: </label>
              <input type="password" class="form-control" id="conpwd" name="confirmpw" placeholder="Enter password">
            </div>

            <!-- <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div> -->
              <button type="submit" class="btn btn-default btn-block" name="register"> Sign Up </button>
          </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div> -->
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#RegBtn").click(function(){
        $("#RegModal").modal();
    });
});
</script>

<!-- Modal for Forget password-->
  <div class="modal fade" id="PwdModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-weight: bold;"> RESET PASSWORD </h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">

            <div class="form-group">
              <label for="email"> Email: </label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>

            <p> We will send you an email to reset your password. </p>

            <!-- <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div> -->
              <button type="submit" class="btn btn-default btn-block" data-dismiss="modal"> Submit </button>
          </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div> -->
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#PwdBtn").click(function(){
        $("#PwdModal").modal();
    });
});
</script>

<?php } ?>

