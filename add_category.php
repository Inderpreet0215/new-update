<?php
include "connection.php";
?>
<?php
include 'adminheader.php';
?>

<!doctype html>
<html lang="en">
<head>
<style>
    hr {
        margin-top: 60px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }

    body {
        background: #FFF;
        font-family: 'Dosis', sans-serif;
    }

    .panel {
        margin: 20px 20px;
        background-color: #fff;
        border: 1px solid #d0caca;
        border-radius: 6px;
        -webkit-box-shadow: 0 1px 1px #555;
        box-shadow: 0 1px 1px #555;
        text-align: center;
    }
    .panel-heading {
        font-size: 30px;
        font-weight: bold;
        letter-spacing: 0.025em;
        height: 80px;
        line-height: 20px;
        text-align: center;
    }



</style>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head><hr>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <form action="add_category_process.php" method="post">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading"><h2>Add Category</h2></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category_name" placeholder="Enter the category" class="form-control" required/>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <a href="category.php" class="btn btn-danger btn-sm">CANCEL</a>
                         <button type="submit" name="add" value="Add" class="btn btn-success btn-sm" onclick="document.getElementById('id02').style.display='block'">Add</button>
</div>
                    </div>
				<div id="id02" class="modal">
						<form class="modal-content" action="" method="post">
						 <div id="id02" class="swal-overlay swal-overlay--show-modal" tabindex="-1">
						  <div class="swal-modal" role="dialog" aria-modal="true">
							<div class="swal-icon swal-icon--success">
								<span class="swal-icon--success__line swal-icon--success__line--long"></span>
								<span class="swal-icon--success__line swal-icon--success__line--tip"></span>

								<div class="swal-icon--success__ring"></div>
								<div class="swal-icon--success__hide-corners"></div>
							  </div>
						  <div class="swal-title" style="">Congratulations </div><div class="swal-text" style="">Your request has been accepted..!</div><div class="swal-footer"><div class="swal-button-container">

					
						  </div><div class="swal-button-container">

						     <a href="category.php" class="swal-button swal-button--confirm swal-button--danger" onclick="document.getElementById('id01').style.display='none'" style="margin-right: 8px;">OK</a>
						   
							<div class="swal-button__loader">
							  <div></div>
							  <div></div>
							  <div></div>
							</div>

							  </div>
							  </div>
							  </div>
						  </div>
							</form>
				
                </div>
        </div>
        </form>
    </div>