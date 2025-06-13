<?php
include('connect.php');

if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $description = $_POST['product_description'];
    $product_keyword = $_POST['product_keyword'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // Accessing images
    $product_img1 = $_FILES['product_image1']['name'];
    $product_img2 = $_FILES['product_image2']['name'];
    $product_img3 = $_FILES['product_image3']['name'];

    // Accessing image temp names
    $temp_img1 = $_FILES['product_image1']['tmp_name'];
    $temp_img2 = $_FILES['product_image2']['tmp_name'];
    $temp_img3 = $_FILES['product_image3']['tmp_name'];

    // Checking for empty fields
    if ($product_title == '' || $description == '' || $product_keyword == '' || $product_category == '' ||
        $product_brands == '' || $product_price == '' || $product_img1 == '' || $product_img2 == '' || $product_img3 == '') {
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
    } else {
        // Uploading images
        move_uploaded_file($temp_img1, "$product_img1");
        move_uploaded_file($temp_img2, "$product_img2");
        move_uploaded_file($temp_img3, "$product_img3");

        // Insert query
        $insert_products = "INSERT INTO `products` 
        (product_title, product_description, product_keywords, category_id, brand_id, 
        product_image1, product_image2, product_image3, product_price, date, status)
        VALUES 
        ('$product_title', '$description', '$product_keyword', '$product_category', '$product_brands',
        '$product_img1', '$product_img2', '$product_img3', '$product_price', NOW(), '$product_status')";

        $result_query = mysqli_query($con, $insert_products);
        if ($result_query) {
            echo "<script>alert('Product inserted successfully!')</script>";
        } else {
            echo "<script>alert('Error inserting product: " . mysqli_error($con) . "')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="mb-3">
                <label class="form-label">Product Title:</label>
                <input type="text" name="product_title" class="form-control" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Product Description:</label>
                <textarea name="product_description" rows="4" class="form-control" required></textarea>
            </div>

            <!-- Keywords -->
            <div class="mb-3">
                <label class="form-label">Product Keyword:</label>
                <input type="text" name="product_keyword" class="form-control" required>
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label class="form-label">Select Category:</label>
                <select name="product_category" class="form-select" required>
                    <option value="">Select Category</option>
                    <option value="1">Juices</option>
                    <option value="2">Milk Products</option>
                    <option value="3">Chips</option>
                    <option value="4">Fruits</option>
                    <option value="5">Books</option>
                    <option value="6">Biryani</option>
                    <option value="7">Clothes</option>
                </select>
            </div>

            <!-- Brands -->
            <div class="mb-3">
                <label class="form-label">Select Brands:</label>
                <select name="product_brands" class="form-select" required>
                    <option value="">Select Brand</option>
                    <option value="1">Mac Donalds</option>
                    <option value="2">Zomato</option>
                    <option value="3">Nike</option>
                    <option value="4">Amazon</option>
                    <option value="5">Flipkart</option>
                    <option value="6">Adidas</option>
                    <option value="7">Alahabadi</option>
                </select>
            </div>

            <!-- Images -->
            <div class="mb-3">
                <label class="form-label">Product Image 1:</label>
                <input type="file" name="product_image1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Product Image 2:</label>
                <input type="file" name="product_image2" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Product Image 3:</label>
                <input type="file" name="product_image3" class="form-control" required>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label class="form-label">Product Price:</label>
                <input type="number" name="product_price" class="form-control" required>
            </div>

            <!-- Submit -->
            <div class="d-grid">
                <input type="submit" name="insert_product" class="btn btn-success" value="Insert Product">
            </div>
        </form>
    </div>
</body>
</html>


