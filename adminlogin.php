<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> LOGIN </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body {
        background: white;
        font-family: 'Dosis', sans-serif;
        background-size: cover;
    }

    .container {
        width: 100%;
        height: 60px;
        padding-right: 0;
        padding-left: 0;
        margin-right: 0;
        margin-left: 0;
        background: white;
        background-size: cover;
        border: solid transparent;
        text-align: center;
    }


    .container h1{
        margin: 5px;
        padding: 5px;
        font-family: sans-serif;
        color: black;
        font-weight: bold;
        font-size: 30px;
    }


    .f{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        padding: 40px;
        box-sizing: border-box;
        color: whitesmoke;
        box-shadow: 0 15px 25px darkgray;
        border-radius: 10px;
    }

    .f h1{
        margin: 0 0 30px;
        padding: 0;
        color: black;
        text-align: center;
    }

    .f .login{
        position: relative;
    }


    .f .login .form-control1{
        width: 100%;
        padding: 10px 0;
        font-size: 14px;
        color: black;
        margin-bottom: 20px;
        border: #2aabd2;
        border-bottom: 1px solid #cccccc;
        outline: black;
        background: transparent;
        text-align: center;
    }

    .f .login .form-control2{
        width: 100%;
        padding: 10px 0;
        font-size: 14px;
        color: black;
        margin-bottom: 20px;
        border: none;
        border-bottom: 1px solid #cccccc;
        outline: #0f0f0f;
        background: transparent;
        text-align: center;
    }

    .f .btn-primary{
        padding: 6px 12px;
        border: none;
        outline: none;
        color: white;
        background: #03a9f4;
        cursor: pointer;
        border-radius: 5px;
    }
</style>
<div class="container">
    <a href="dashboard.php">
        <h1>ADB WHOLESALERS</h1></a>

    <form id="myForm" action="adminloginprocess.php" method="post">
        <div class="f">
            <h1>Welcome To Login</h1>
            <div class="login">
                <input class="form-control1" placeholder="username" name="admin_user" type="text">
                <input class="form-control2" placeholder="password" name="admin_password" type="password">
            </div>
            <div class="button">

                <button  id="btn-submit" class="btn btn-primary" type="submit" name="login">Sign In </button>
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
        $('#myForm').submit();
    });
});
 </script>
    </form>
</body>
</html>
