<?php
session_start();
if(isset($_SESSION["user_id"])){
    header("location:profile.php");
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta charset="UTF-8">
        <title>ADB Wholesaler</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Dosis', sans-serif;
            font-size: 14px;
            line-height: 2;
            color: #333;
            background-color: #fff;
            display: block;
            box-sizing: border-box;
        }
        .navbar-inverse {
            background-color: #222;
            border-color: #080808;
        }
        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px;
            border-radius: 0;
        }
        .container-fluid {
            padding: 10px 15px;
            margin-right: 15px;
            margin-left: 15px;
        }
        .container-fluid {
            padding-left: 15px;
        }
        .navbar-header{
            float: left;
            margin: 10px;
        }
        .navbar-brand{
            color: #9d9d9d;
            margin-left: 15px;
            margin-right: 15px;
            font-size: 38px;
            font-family: 'Dosis', sans-serif;
            font-weight: bold;
            line-height: 20px;
        }
        .navbar-nav{
            float: right;
            margin: 10px;
            list-style: none;
        }
        .nav li{
            float: right;
            position: relative;
            display: block;
        }
        a{
            padding-top: 15px;
            padding-bottom: 15px;
            line-height: 20px;
            color: #2b2b2b;
        }
        .glyphicon {
            position: relative;
            top: 2px;
            display: inline-block;
            font-family: 'Glyphicons Halflings', sans-serif;
            font-style: normal;
            font-size: 20px;
            font-weight: bold;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        p{
            margin: 0 0 5px;
        }

        .container{
            padding: 20px 20px;
            margin-right: auto;
            margin-left: auto;
        }
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
        h1 {
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
            font-weight: bold;
            font-family: 'Dosis', sans-serif;
            font-size: 36px;
            color: #0A0A0A;
        }
        h4{
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
            font-weight: normal;
            font-family: 'Dosis', sans-serif;
            font-size: 18px;
            color: #0A0A0A;
            line-height: 1.1;
        }
        .panel-default{
            border-color: #dddddd;
        }
        .panel {
            margin-top: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 15px 25px darkgray;
        }
        .panel-heading {
            color: #333;
            background-color: #f5f5f5;
            border-color: #ddd;
            padding: 10px 30px;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Dosis', sans-serif;
            text-align: center;
        }
        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 2px;
            font-weight: bold;
            font-size: 14px;
        }
        .form-control{
            width: 100%;
            display: block;
            padding: 6px 12px;
            font-size: 14px;
            height: 34px;
            line-height: 1.4285;
            color: black;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            outline: black;
            background-color: #FFFFFF;
            text-align: left;
        }
        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid rgba(0, 0, 0, 0.52);
            border-radius: 4px;
        }
        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
    </style>
    <body>
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">ADB Wholesaler</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
            </ul>
        </div>
    </div>
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                 <h1>ADB Wholesalers</h1>
                <h4> Welcome To ADB Wholesaler B2B ecommerce platform</h4>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-heading">
                        <form onsubmit="return false" id="login" class="myform">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required/>
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required/>
                           
<button id="btn-submit" class="btn btn-primary" type="submit" name="login" id="submit">Login</button>
                         <p><br></p>
                            <button class="btn btn-default" type="submit" name="Sign Up"><a href="customer_registration.php"> Create New Account</button>
                        </form>
                    </div>
                    <div class="panel-footer" id="e_msg"></div>
                </div>

            </div>
        </div>
    </div>
<script>  
 $(document).on('click', '#btn-submit', function(e) {
    e.preventDefault();
    swal({
            title: "Good job!",
            text: "Login Successfully",
            icon: "success",
            button: "Yes!",
        input: 'checkbox',
        inputValue: 0,
        inputPlaceholder: ' I agree with the Terms',
        confirmButtonText: 'Continue',
        inputValidator: function (result) {
            return new Promise(function (resolve, reject) {
                if (result) {
                    resolve();
                } else {
                    reject('You need to agree with the Terms');
                }
            })
        }
    }).then(function (result) {
        $('.myform').submit();
    });
});
 </script>
    </body>
</html>













































