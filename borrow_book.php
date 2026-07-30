<?php
include("config.php");

if(isset($_POST['borrow']))
{
    $book_id = $_POST['book_id'];
    $borrower = $_POST['borrower'];

    $result = mysqli_query($conn,"SELECT * FROM books WHERE id='$book_id'");
    $book = mysqli_fetch_assoc($result);

    if($book && $book['quantity'] > 0)
    {
        $title = $book['title'];
        $date = date("Y-m-d");

        mysqli_query($conn,"INSERT INTO borrow_records(book_title, borrower_name, borrow_date)
        VALUES('$title','$borrower','$date')");

        mysqli_query($conn,"UPDATE books SET quantity = quantity - 1 WHERE id='$book_id'");

        echo "<script>
        alert('Book Borrowed Successfully');
        window.location='borrow_records.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Book Not Available');
        window.location='books.php';
        </script>";
    }
}
?>
