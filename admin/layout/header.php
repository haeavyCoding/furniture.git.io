<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg">
  <div class="container dashboard-nav">
  <i onclick="burger()" class=" adminToggle fa-solid fa-bars" id="adminToggle"></i>
  <div class="adminsidebar" id="adminsidebar">
    <a href="portfolio.php"><div class="portfolio">
      <img src="im" alt="">
  </div></a>
      <ul class="ul_sidebar">
        <a href="dashboard.php"><li>Dashboard</li></a>
        <a href="addproduct.php"><li>Add Product</li></a>
        <a href="product.php"><li>Product</li></a>
        <a href="users.php"><li>User List</li></a>
        <a href="order.php"><li>Order</li></a>
        <a href="user_contact.php"><li>Contact</li></a>
        <a href="brand.php"><li>Brand</li></a>
        <a href="categorylist.php"><li>Category</li></a>
        <a href="slider.php"><li>Slider</li></a>
      </ul>
    </div>
    <a class="navbar-brand text-white fs-3" href="#">Furni.</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User Interface
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="../index.php">Home</a></li>
            <li><a class="dropdown-item" href="../shop.php">Shope</a></li>
            <li><a class="dropdown-item" href="../contact.php">Contact Us</a></li>
            <li><a class="dropdown-item" href="../about.php">About Us</a></li>
            <li><a class="dropdown-item" href="../blog.php">Blog</a></li>
            <li><a class="dropdown-item" href="../signup.php">User</a></li>
            <li><a class="dropdown-item" href="../cart.php">cart</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="users.php">users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="order.php">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="brand.php">Brand</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="categorylist.php">Category</a>
        </li>
      </ul>
    </div>
  </div>
</nav>