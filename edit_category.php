<!doctype html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#edit").validate();
        })
    </script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<?php
include 'adminheader.php';
?>
<body>
<?php
$s= /** @lang en */
    "SELECT * FROM categories WHERE category_id='".$_REQUEST["category_id"]."'";
include "connection.php";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<style>

    hr {
        margin-top: 10px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }
    body {
        background: #FFF;
        font-family: 'Dosis', sans-serif;
    }


</style>
<hr>
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <form id="myForm" action="edit_action_category.php" method="post">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading"><h2>EDIT CATEGORY</h2></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="category_id">Category ID</label>
                            <input readonly type="text" value="<?php echo $_REQUEST["category_id"]?>" class="form-control" name="category_id" id="category_name" data-rule-required="true" data-msg-required="please enter the category id">
                        </div>


                        <div class="form-group">
                            <label for="category_id">Category Name</label>
                            <input value="<?php echo $row[1];?>" class="form-control" id="category_name"
                                   name="category_name" data-rule-required="true"
                                   data-msg-required="please enter the category"/>
                        </div>
                
    <button type="submit" id="btn-submit" class="btn btn-success" >Submit</button>
 </form> 
                    

  
 <script>  
 $(document).on('click', '#btn-submit', function(e) {
    e.preventDefault();
    swal({
         title: "Good job!",
            text: "Category Edit Successfully",
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