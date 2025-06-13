


<?php
include('connect.php'); // Adjust path if connect.php is in includes folder

if (isset($_POST['insert-cat'])) {
    if (!empty($_POST['cat_title'])) {
        // Escape user input to prevent SQL injection
        $category_title = mysqli_real_escape_string($con, $_POST['cat_title']);

        // Check if category already exists
        $select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title'";
        $result_select = mysqli_query($con, $select_query);
        $number = mysqli_num_rows($result_select);

        if ($number > 0) {
            echo "<script>alert('This category is already present in the database');</script>";
        } else {
            // Insert the category
            $insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
            $result = mysqli_query($con, $insert_query);

            if ($result) {
                echo "<script>alert('Category has been inserted successfully');</script>";
            } else {
                echo "<script>alert('Error inserting category');</script>";
            }
        }
    } else {
        echo "<script>alert('Category title cannot be empty');</script>";
    }
}
?>
<h2 class="text-center">Insert Categories</h2>








<form action="" method="post" class="mt-4">
  <div class="container w-50">

    <!-- Input group for category name -->
    <div class="input-group mb-3">
      <span class="input-group-text bg-info text-white" id="basic-addon1">
        <i class="fa-solid fa-clipboard-list me-2"></i> Category
      </span>
      <input type="text" class="form-control" placeholder="Insert category"
      name="cat_title" aria-label="Insert category" aria-describedby="basic-addon1" required>
    </div>

    <!-- Submit button -->
    <div class="input-group w-10 mb-3 m-auto">
      <input type="submit" class="bg-info border-0 p-2 my-3" name="insert-cat" value="Insert Category">
    </div>
  </div>
</form>
