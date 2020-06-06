<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php include 'connection.php'; ?>
<?php include 'adminheader.php'; ?>
<?php
$select= "SELECT * FROM admins";
$query = mysqli_query($conn,$select);
$data_fetch=mysqli_fetch_assoc($query);
$oldpass = $data_fetch['admin_password'];
if(isset($_POST['submit']))
{
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $cnfnewpass=$_POST['cnfnewpass'];

    if($oldpass==$oldpass) {
        if ($newpass == $cnfnewpass) {
            $update = "update admins set admin_password='$newpass' WHERE admin_id=1";
            $query1 = mysqli_query($conn, $update);
            if ($query1) {
                echo "<h4 align='center'><span style=\"color: green; \"><b>Password Succesfully Changed !</b></span></h4>";
            }
            else
            {
                echo "error";
            }
        }
            else {
                echo "<h4 align='center'><span style=\"color: red; \"><b>Your both password do not match !</span></h4>";
            }
        }

    else
    {
        echo "<h4 align='center'><span style=\"color: red; \"><b>You Entered Wrong Password</span></b></h4>";
    }
 
}

?><!doctype html>
<html lang="en">
<head>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>  <body>
<style>
    hr {
        margin-top: 20px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }
    body {
        background: #FFF;
        font-family: 'Dosis', sans-serif;
    }
    h1{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        font-size: 40px;
        font-weight: bold;
        text-align: center;
    }
</style>
<hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
    </div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-yellow">
                        <div class="panel-body">
                            <form action="" id="myForm" method="post">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" name="oldpass" placeholder= "*******" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="newpass" placeholder="*******" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="cnfnewpass" placeholder="*******" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <a href="dashboard.php" class="btn btn-danger btn-sm">Cancel</a>
                            
							<button type="submit" id="btn-submit" value="Update" name="submit" class=" btn btn-success">Update</button>       
              </div>
			  
							</form>		


 <script>  
 $(document).on('click', '#btn-submit', function(e) {
    e.preventDefault();
    swal({
         title: "your Password",
            text: "Succesfully Changed !",
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

							</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
	</body>
