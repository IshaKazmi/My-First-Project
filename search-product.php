
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
<!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

     <!-- font aweosomw link -->
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
         <!-- cssfile -->
  <link  rel="stylesheet" href ="style.css"/>
</head>
<body>

<!-- navbar -->
<div class="container-fluid p-0">
<!-- first child -->

<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href ="#">My Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
    <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/</a>
        </li>
     
    
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search"  name="search_data" 
       aria-label="Search"/>
      <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- Login on the left side -->
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Login</a>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <!-- Welcome Guest on the right side -->
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Welcome Guest</a>
      </li>
    </ul>
  </div>
</nav>
<!-- third child -->
<div class="bg-light">
<h3 class="text-center">Hidden Store</h3>
<p class="text-center">Communication is the at the heart of E-Commerce and Community</p>
</div>
<!-- fourth child -->
    <!-- products -->
   <div class="container">
  <div class="row">
    <!-- Left Column: Products -->
    <div class="col-md-10">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-2">
          <div class="card mb-4">
            <img src="images (7).jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sweet Indulgence</h5>
              <p class="card-text">Dairy Milk chocolate blends creamy</p>
                <p><strong>Price:</strong> ₹100</p>
                <a href="#" class="btn btn-info">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="images8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fresh Apple</h5>
              <p class="card-text">Fresh apples crisp, juicy, and packed</p>
              <p><strong>Price:</strong>₹150</p>

              <a href="#" class="btn btn-info">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="images9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Spiced Biryani Delight</h5>
              <p class="card-text">Biryani flavorful rice dish</p>
              <p><strong>Price:</strong>₹250</p>

              <a href="#" class="btn btn-info">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="images (8).jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stylish  Hand Bag</h5>
              <p class="card-text">handbag combines style and functionality</p>
              <p><strong>Price:</strong>₹1200</p>

              <a href="#" class="btn btn-info">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="images10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Girls Stylish Kurti</h5>
              <p class="card-text">stylish kurti blends tradition and modern flair</p>
              <p><strong>Price:</strong>₹800</p>

              <a href="#" class="btn btn-info">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="images11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Elegant Bracelect</h5>
              <p class="card-text">An elegant bracelet adds a touch of sparkle</p>
              <p><strong>Price:</strong>₹500</p>

              <a href="#" class="btn btn-info">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row"> -->
    <!-- Main Card Section (Left 10 columns) -->
      <div class="col-md-10">
        <div class="row">

          <!-- Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (1).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fresh Apple Jiuce</h5>
                <p class="card-text">Fresh apple juice  with natural sweetness and refreshing flavors</p>
                <p><strong>Price:</strong>₹120</p>

                <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>


              </div>
            </div>
          </div>

          <!-- Repeat same structure for all cards below -->

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (2).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Crunch Chips</h5>
                <p class="card-text">Crunch chips deliver a satisfying crispy bite savory flavors</p>
                <p><strong>Price:</strong>₹60</p>

                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="images20.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A Journey Through Books</h5>
                <p class="card-text"> Books open doors to new worlds ideas, and soul</p>
                <p><strong>Price:</strong>₹300</p>

                
                
                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (3).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Stylish Frock</h5>
                <p class="card-text">A stylish girl’s frock blends playful charm with trendy designs</p>
                <p><strong>Price:</strong>₹900</p>

                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="images21.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Elegant Qurta</h5>
                <p class="card-text">A stylish kurta effortlessly combines classic tradition </p>
                <p><strong>Price:</strong>₹1100</p>

                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (10).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">  Tasty Vanilla Ice-Cream</h5>
                <p class="card-text">Vanilla ice cream is a creamy classic, delighting taste buds</p>
                <p><strong>Price:</strong>₹80</p>

                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (5).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fresh Pine-Apple Juice</h5>
                <p class="card-text">Pineapple juice  refreshing tropical treat with sweet</p>
                <p><strong>Price:</strong>₹130</p>

                    <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
             </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (6).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Delight Biryani</h5>
                <p class="card-text">Delight Biryani with flavorful spice and its taste awesome</p>
                <p><strong>Price:</strong>₹280</p>

                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="images23.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fresh Friuts</h5>
                <p class="card-text">Fruits are nature’s sweet gift freshness</p>
                <p><strong>Price:</strong>₹200</p>

                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (7).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Elegant Stylish Shirt</h5>
                <p class="card-text">   An elegant, stylish shirt combines design with modern sophistication</p>
                <p><strong>Price:</strong>₹900</p>

                   <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (8).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Crunch  Chips Delight</h5>
                <p class="card-text">Chips are the ultimate crunchy snack flavor that’s perfect</p>
                <p><strong>Price:</strong> ₹60</p>

                <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
              <img src="download (9).jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Literature Books</h5>
                <p class="card-text">A literature book opens the mind to timeless stories</p>
                <p><strong>Price:</strong> ₹350</p>
                <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>

              </div>
            </div>
          </div>
        </div>
      </div>
   <!-- Right Side Nav (2 columns) -->
      <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Delivery Brands</h4>
          </a>
  </li>
   <li class="nav-item">
      <a href="#" class="nav-link text-light">Mac Donalds</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Zomato</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Alahabadi</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Nike</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Adidas</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link text-light">Amazon</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link text-light">Flip Cart</a>
    </li>
  </ul>

  <!-- Categories Section -->
  <ul class="navbar-nav text-center mt-3">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light">
        <h4>Categories</h4>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Juices</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Milk Products</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Chips</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Fruits</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Books1</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Biryani</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Clothes</a>
    </li>
  </ul>
</div>
   <!-- Last Footer Section -->
  <div class="bg-info p-3 text-center mt-3">
    <p>All rights reserved | Designed by Syeda Nuzhat Fatima</p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>