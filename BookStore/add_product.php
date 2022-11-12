<?php

session_start();
include('config.php');
// if(empty($_SESSION['id'])){
//   header('Location: login.php');
//   exit;
// }
// else{


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">


    <title>Add Book</title>
</head>

<body>


<?php


if(isset($_POST['submit']) )   
  
{
	$name = $_POST['name'];
	$cost = '৳'.' '.$_POST['cost'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "upload/".$_FILES['image']['name']);

		$query = mysqli_query($db,"INSERT INTO products (`name`, `cost`, `image`)
        VALUES ('$name', '$cost', '$image') "); 

    if($query){
        echo '<script type="text/javascript">
        swal({
            type: "success",
            title: "Success",
            text: "Add successfully",
            timer: 2000
          }).then(function() {
            window.location = "main.php";
        });
        </script>';
    }
    else{
      echo '<script type="text/javascript">
      swal({
          type: "error",
          title: "Error",
          text: "Something went wrong",
          timer: 2000
        })
      </script>';
    }
}

include('header.php');
?>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <div class="mb-md-5 mt-md-4 pb-1">

              <h2 class="fw-bold mb-2 text-uppercase text-center">Add Book</h2>

            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-outline form-white mb-4">
                <label for="typeNameX">Name</label>
                <input type="text" id="typeNameX" name="name" class="form-control form-control-lg mt-1" autocomplete="off"/>
              </div>

              <div class="form-outline form-white mb-4 mt-4">
                <label for="typeEmailX">Cost</label>
                <input type="text" id="" name="cost" class="form-control form-control-lg mt-1" autocomplete="off"/>
              </div>

              <div class="form-outline form-white mb-4 mt-4">
                <label for="typeEmailX">Image</label>
                <input type="file" name="image" class="form-control form-control-lg mt-1"/>
              </div>

              <div class="text-center">
                <input type="submit" name="submit" class="btn btn-outline-light btn-lg px-5" value="Save">
              </div>
            </form>

          </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>

</html>

<?php
// }
 ?>