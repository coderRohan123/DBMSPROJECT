<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<!-- votingsystem/index.php -->

<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f9ebc5; /* Light orange background color */
        }

        .login-box {
            display: flex;
            justify-content: space-between;
            margin: 50px auto;
            max-width: 800px;
        }

        .login-container {
            width: 45%;
            margin-right: 5%;
            padding: 20px;
            background-color: #fff; /* White background color */
            border: 1px solid #e0e0e0; /* Light gray border */
            border-radius: 5px;
        }

        .login-container h2 {
            text-align: center;
            color: #333; /* Dark text color */
        }
    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- Administrator Login Box -->
        <div class="login-container">
            <h2>Admin</h2>
            <form action="admin/login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="admin" placeholder="Administrator's ID" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="admin_password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="admin_login">
                            <i class="fa fa-sign-in"></i> Admin Sign In
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Voter Login Box -->
        <div class="login-container">
            <h2>Voter</h2>
            <form action="login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">
                            <i class="fa fa-sign-in"></i> Voter Sign In
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ... (rest of your code) ... -->

    <?php include 'includes/scripts.php' ?>
</body>
</html>
