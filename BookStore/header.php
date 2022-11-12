
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
 
<input type="hidden" id="sessionID" value="<?php echo (!empty($_SESSION['id'])) ?>" hidden>
  <!-- <a class="navbar-brand" href="#">Logo</a> -->
  <a href="main.php" class="navbar-brand" >Home</a>
  <!-- <a href="add_product.php" class="navbar-brand">Add Book</a> -->
  <a href="contact.php" class="navbar-brand">Contact Us</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  </div>
  
  <?php  if(!empty($_SESSION['id'])){ ?>
    <a href="wishlist.php" class="navbar-brand"><i class="fa fa-heart-o"></i></a>
    <a class="navbar-brand" href="logout.php">Logout</a>
  <?php } else { ?>
  <a href="login.php" class="btn btn-outline-light btn-lg px-3">Login</a>
  <?php }  ?>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
  
      <div class="modal-body text-center">
        <h6>You must be logged in to continue</h6>
      </div>
      
    </div>
  </div>
</div>

