<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="http://slateproject.me/assets/css/style.css">
  <!--      <link rel="stylesheet" href="<?php// echo base_url('../assets/css/style.css')?>">-->
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,200' rel='stylesheet' type='text/css'>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.min.js"></script>


    </head>

    <body>
        <div class="container-fluid">
            <div class="wrapper">
                <div class="col-xs-12 col-sm-8" id="bgleft"></div>
                <div class="col-xs-12 col-sm-4 col-sm-offset-8" id="bgright"></div>
                    <div class="col-xs-12 col-sm-8" id="left">
                        <p class="row" id="title">SLATE</p>
                        <div class="row" id="caption">
                            <div class="col-xs-12 col-sm-6">
                                <h2><a href="#">For Teachers</a></h2>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <h2><a href="#">For Students</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4" id="right">
                        <form action="/home" class="row col-xs-12 col-sm-10 col-sm-offset-1" id="signin">
                        <h1>Sign-In</h1>
                        <?php echo form_open('LoginController/index'); ?>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="username" name="username" placeholder="Email" value="<?php echo set_value('username'); ?>" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" >
                          </div>
                          <button type="submit" class="btn btn-default" href="http://slateproject.me/index.php/LoginController/index">Sign-in</button>
                        </form>
                        <div class="row col-xs-12" id="signup">
                          <h3>Need an account?<br><a href="http://slateproject.me/index.php/LoginController/register">Sign Up</a></h3>
                          <!-- <h3>Need an account?<br><a href="registration.php">Sign Up</a></h3>-->
                        </div>
                        <?php echo form_close(); ?>
                    </div>
            </div>
        </div>
    </body>

</html>
