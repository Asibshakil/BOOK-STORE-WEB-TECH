<?php

session_start();
include('config.php');
// if(empty($_SESSION['id'])){
//     header('Location: login.php');
//     exit;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Main</title>
</head>

<body>

<?php

if(isset($_POST['addWishlist']) )   
{

    if(empty($_SESSION['id'])){ 
        echo "<script type='text/javascript'>
        $(document).ready(function(){
            $('#exampleModal').modal('show');
            setTimeout(function() {
                $('#exampleModal').modal('hide');
            }, 2000);
        });
        </script>";
     }
else{
	$user_id = $_SESSION['id'];
	$p_id = $_POST['p_id'];

		$query = mysqli_query($db,"INSERT INTO wishlist (`user_id`, `p_id`)
        VALUES ('$user_id', '$p_id') "); 

    if($query){
        echo '<script type="text/javascript">
        swal({
            type: "success",
            title: "Success",
            text: "Added to wishlist",
            timer: 2000
          })
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
}

include('header.php');
?>

<div class="container">
    <div class="text-center mt-5">
        <h2>Book Store</h2>
    </div>

    <div class="col-12 mt-5 text-center">
        <div class="row">
        <?php $query = mysqli_query($db,"SELECT * FROM products"); 
        while($row = mysqli_fetch_array($query)){
        ?>
        
            
                <div class="col-4 d-flex justify-content-center align-items-center mb-2">
                    <div class="card" style="width: 18rem;">
                        <form action="" method="POST">
                            <input type="hidden" name="p_id" value="<?php echo $row['id'] ?>" hidden>
                            <img class="card-img-top" src="upload/<?php echo $row['image'] ?>" height="350">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $row['name'] ?></h5>
                                <p class="card-text book-price"><?php echo $row['cost'] ?></p>
                                <a onclick="addToCart(<?php echo $row['id'] ?>)" class="btn btn-dark">Add to cart</a>
                                <input type="submit" name="addWishlist" class="btn btn-dark" value="Add to wishlist">
                            </div>
                        </form>
                    </div>
                </div>
        <?php
        }
        ?>
        </div>
    </div>

    

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>
</html>

<?php 
// }
 ?>