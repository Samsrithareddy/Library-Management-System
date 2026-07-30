<?php
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM books WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,"UPDATE books SET
        title='$title',
        author='$author',
        category='$category',
        quantity='$quantity'
        WHERE id='$id'");

    header("Location: books.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Book</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Edit Book</h2>

<form method="POST">

<div class="mb-3">
<label>Book Title</label>
<input type="text" name="title" class="form-control" value="<?= $row['title']; ?>" required>
</div>

<div class="mb-3">
<label>Author</label>
<input type="text" name="author" class="form-control" value="<?= $row['author']; ?>" required>
</div>

<div class="mb-3">
<label>Category</label>
<input type="text" name="category" class="form-control" value="<?= $row['category']; ?>" required>
</div>

<div class="mb-3">
<label>Quantity</label>
<input type="number" name="quantity" class="form-control" value="<?= $row['quantity']; ?>" min="1" required>
</div>

<button type="submit" name="update" class="btn btn-primary">Update Book</button>
<a href="books.php" class="btn btn-secondary">Back</a>

</form>

</div>

</body>
</html>
