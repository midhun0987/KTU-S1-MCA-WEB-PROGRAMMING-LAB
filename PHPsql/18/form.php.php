<?php
       $conn = mysqli_connect("localhost", "root", "", "books");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully<br>";

        if (isset($_POST['register'])) {
            $book_id = $_POST['id'];    
            $title = $_POST['title'];
            $book_author = $_POST['author'];
            $book_edition = $_POST['edition'];
            $publisher = $_POST['publisher']; 

            $sql1 = "INSERT INTO tb_books (`book_id`, `title`, `book_author`, `book_edition`,`publisher`) VALUES ('$book_id', '$title', '$book_author', '$book_edition','$publisher')";
            if (mysqli_query($conn, $sql1)) {
                echo "<br>New record created successfully";
            } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
        }

        if (isset($_POST['search'])) {
            $book_author2 = $_POST['author'];  
            echo "book_author: " . $book_author2 . '<br>';
            $sql = "SELECT * FROM tb_books WHERE book_author='$book_author2' ";
            $res = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
                echo "Bookid" . '<br>'; echo $row["book_id"] . '<br>';
                echo "Title" .'<br>'; echo $row["title"] . '<br>';
                echo "Author" .'<br>';echo $row["book_author"] . '<br>';
                echo "Edition" .'<br>';echo $row["book_edition"] . '<br>';
                echo "Publisher". '<br>';echo $row["publisher"] . '<br>';
            }
        }
        ?>