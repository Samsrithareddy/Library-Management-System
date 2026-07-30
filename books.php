<?php
include("config.php");
$result = mysqli_query($conn,"SELECT * FROM books");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Books</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-4">

<h2 class="mb-3">Books</h2>

<a href="index.php" class="btn btn-secondary mb-3">Home</a>
<a href="add_book.php" class="btn btn-primary mb-3">Add Book</a>

<table class="table table-bordered table-hover">
<thead class="table-dark">
<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Category</th>
<th>Quantity</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['id']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['author']; ?></td>
<td><?= $row['category']; ?></td>
<td><?= $row['quantity']; ?></td>

<td>

<a href="edit_book.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete_book.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Delete this book?')">Delete</a>

<form action="borrow_book.php" method="POST" class="mt-2">

<input type="hidden" name="book_id" value="<?= $row['id']; ?>">

<input type="text"
name="borrower"
placeholder="Borrower Name"
class="form-control mb-2"
required>

<button class="btn btn-success btn-sm" name="borrow">
Borrow
</button>

</form>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>
</html>
