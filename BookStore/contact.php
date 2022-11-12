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

<?php include('header.php'); ?>

<div class="container">
    <div class="text-center mt-5">
        <h2>Contact Us</h2>
    </div>
    
    <div class="row mt-5">

        <div class="col-md-6">
        <form class="bg-dark p-3 shadow rounded pt-4">
            <p class="text-white h2 pb-4">Send Us An Email:</p>
  <div class="form-group mb-4">
    <label for="exampleFormControlInput1" class="h5 text-white">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
  </div>
  <div class="form-group mb-4">
    <label for="exampleFormControlInput1" class="h5 text-white">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
  </div>
  <div class="form-group mb-4">
    <label for="exampleFormControlInput1" class="h5 text-white">Subject</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Subject">
  </div>
  
  <div class="form-group mb-4">
    <label for="exampleFormControlTextarea1" class="h5 text-white">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Your Message"></textarea>
  </div>
</form>
        </div>

        <div class="col-md-6">
        <p class="text-dark h2 pb-2">Contact Information</p>
        <p class="text-dark pb-4">Reach us on a given address below or Email Us at for any query.</p>
        <div class="mb-4">
            <span><i class="fa fa-phone h3 bg-dark text-white p-3 rounded-circle" aria-hidden="true"></i></span> &nbsp; <span class="h4">1234567890</span>
        </div>
        <div class="mb-4">
            <span><i class="fa fa-envelope h3 bg-dark text-white p-3 rounded-circle" aria-hidden="true"></i></span> &nbsp; <span class="h4">bookstore@gmail.com</span>
        </div>
        <div class="mb-4">
            <span><i class="fa fa-map-marker h3 bg-dark text-white p-3 rounded-circle" aria-hidden="true"></i></span> &nbsp; <span class="h4">Khilkhet 1229, Dhaka, Bangladesh</span>
        </div>
        </div>
        
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>

</html>

<?php 
// } 
?>