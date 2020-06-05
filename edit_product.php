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
<body>
<?php
include 'adminheader.php';
?>
<?php
$s="select * from products WHERE product_id='".$_REQUEST["product_id"]."'";
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
             <form id="myForm" method="post" action="edit_product_action.php">
                 <div class="login-panel panel panel-default">
                     <div class="panel-heading"><h2>EDIT PRODUCT</h2></div>
                     <div class="panel-body">
                         <div class="form-group">
                             <label>Product ID</label>
                             <input readonly type="text" value="<?php echo $_REQUEST["product_id"]?>" class="form-control" name="product_id" id="product_id" data-rule-required="true" data-msg-required="please enter the Product id">
                         </div>
                         <div class="form-group">
                             <label>Product Name</label>
                             <input type="text" name="product_name" value="<?php echo $row[2];?>"  placeholder= "Product Name" class="form-control" required/>
                         </div>

                         <div class="form-group">
                             <label>Product Keywords</label>
                             <input type="text" name="product_keywords" value="<?php echo $row[4];?>" placeholder= "Product keywords" class="form-control" required/>
                         </div>
                         <div class="form-group">
                             <label>Product Price</label>
                             <input type="text" name="product_price" value="<?php echo $row[5];?> " placeholder= "Product PRice" class="form-control" required/>
                         </div>
                         <div class="form-group">
                          <button  id="btn-submit" type="submit" value="submit" class=" btn btn-success">Submit</button> </div>
                      </div>
                 </div>
             </form>
        </div>
    </div>
</div> 

  
 <script>  
 $(document).on('click', '#btn-submit', function(e) {
    e.preventDefault();
    swal({
         title: "Good job!",
            text: "Product Edit Successfully",
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
</body>
</html>
