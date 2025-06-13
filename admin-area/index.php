<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
     <!-- font icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

       <!-- font aweosomw link -->
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
         <!-- cssfile -->
         <link  rel="stylesheet" href ="style.css"/>
</head>
<body>
<!-- navbar -->
<div class="container-fluid p-0">
    <!-- first child -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container-fluid">
    <a class="navbar-brand" href ="#">My Store</a>
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link">Welcome Guest</a>
            </li>
         </ul>
    </nav>
</div>
</nav>
<!-- second child -->
   <div class="bg-light"> 
    <h3 class="text-center p-2">Manage Details</h3>
</div>

 <div class="row">
  <div class="col-md-12 bg-secondary p-3 d-flex align-items-center">
    <!-- third child -->
     <div class="me-3">
      <a href="#"><img src="../images12.jpg" alt="Admin" class="admin-image" style="height: 100px; width: 100px; object-fit: cover; border-radius: 50%;"></a>
    </div>
    <div> 
     <p class="text-light text-center mb-0">Admin Name</p>
    </div>
  </div>
  <!-- forth child -->
  <!-- Forth Child -->
<div class="container my-3">
<?php
  if (isset($_GET['insert_category'])) {
    include('insert_categories.php');
  }
  if (isset($_GET['insert_brand'])) {
    include('insert-brands.php'); // ✅ correct filename and inside container
  }
?>
</div>
<!-- Sidebar -->
<div class="col-md-12 bg-light text-center py-3">
  <a href="insert-product.php" class="btn btn-info text-light my-1 w-50">Insert Products</a><br>
  <a href="#" class="btn btn-info text-light my-1 w-50">View Products</a><br>
  <a href="index.php?insert-category" class="btn btn-info text-light my-1 w-50">Insert Categories</a><br>
  <a href="#" class="btn btn-info text-light my-1 w-50">View Categories</a><br>
  <a href="index.php?insert_brand" class="btn btn-info text-light my-1 w-50">Insert Brands</a><br>
  <a href="#" class="btn btn-info text-light my-1 w-50">View Brands</a><br>
  <a href="#" class="btn btn-info text-light my-1 w-50">All Orders</a><br>
  <a href="#" class="btn btn-info text-light my-1 w-50">All Payments</a><br>
  <a href="#" class="btn btn-info text-light my-1 w-50">List Users</a><br>
  <a href="#" class="btn btn-info text-light my-1 w-50">Logout</a>
</div>

<!-- Main Content Area -->
<div class="container my-5">
  <?php 
  // If "insert-category" is in the URL, include the category form
  if (isset($_GET['insert-category'])) {
      include('insert-categories.php');
  }
  if (isset($_POST['insert_brand'])) 
  {
   include('insert-brands.php');    
  }
?>
</div>



<!-- Last Footer Section -->
  <div class="bg-info p-3 text-center mt-3">
    <p>All rights reserved | Designed by Syeda Nuzhat Fatima</p>
  </div>
</div>

<!-- bootstrap js link -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>

