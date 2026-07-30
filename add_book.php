<?php
include("config.php");

if(isset($_POST['add']))
{
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,"INSERT INTO books(title,author,category,quantity)
    VALUES('$title','$author','$category','$quantity')");

    header("Location: books.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Book</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Add New Book</h2>

<form method="POST">

<div class="mb-3">
<label>Book Title</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="mb-3">
<label>Author</label>
<input type="text" name="author" class="form-control" required>
</div>

<div class="mb-3">
<label>Category</label>
<input type="text" name="category" class="form-control" required>
</div>

<div class="mb-3">
<label>Quantity</label>
<input type="number" name="quantity" class="form-control" min="1" required>
</div>

<button type="submit" name="add" class="btn btn-primary">
Add Book
</button>

<a href="books.php" class="btn btn-secondary">
Back
</a>

</form>

</div>

</body>
</html>
