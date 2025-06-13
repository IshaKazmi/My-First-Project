
<?php
include('connect.php');

if (isset($_POST['insert-brand'])) {
    if (!empty($_POST['brand_title'])) {
        $brand_title = mysqli_real_escape_string($con, $_POST['brand_title']);

        
        // Check if brand already exists
        $select_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
        $result_select = mysqli_query($con, $select_query);
        $number = mysqli_num_rows($result_select);

        if ($number > 0) {
            echo "<script>alert('This brand is already present in the database');</script>";
        } else {
            // Insert the brand
            $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
            $result = mysqli_query($con, $insert_query);

            if ($result) {
                echo "<script>alert('brand has been inserted successfully');</script>";
            } else {
                echo "<script>alert('Error inserting brand');</script>";
            }
        }
    } else {
        echo "<script>alert('brand title cannot be empty');</script>";
    }

        
}
?>
<h2 class="text-center">Insert Brands</h2>


<!-- Insert Brands Form -->
<form action="" method="post" class="mt-4">
<div class="input-group w-90 mb-2">
      <span class="input-group-text bg-info text-white" id="basic-addon1">
        <i class="fa-solid fa-receipt"></i>
      </span>
      <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand"
        aria-label="Insert brand" aria-describedby="basic-addon1" required>
    </div>
    <div class="input-group w-10 mb-2 m-auto">
      <input type="submit" class="bg-info border-0 p-2 my-3 text-white" name="insert-brand"
      value="Insert Brand">
    </div>
</form>
