<?php
    include 'connection.php';
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <h2>List of Books</h2>
    <?php
        $res=mysqli_query($db, "SELECT * FROM books;");

        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color: white;'>";
            echo "<th>"; echo "ID"; echo "</th>";
            echo "<th>"; echo "Book-Name"; echo "</th>";
            echo "<th>"; echo "Authors Name"; echo "</th>";
            echo "<th>"; echo "Edition"; echo "</th>";
            echo "<th>"; echo "Status"; echo "</th>";
            echo "<th>"; echo "Quantity"; echo "</th>";
            echo "<th>"; echo "Department"; echo "</th>";
        echo "</tr>";

        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['edition']; echo "</td>";
            echo "<td>"; echo $row['status']; echo "</td>";
            echo "<td>"; echo $row['quantity']; echo "</td>";
            echo "<td>"; echo $row['department']; echo "</td>";
            echo "</tr>";
        }

        echo "</table>";

    ?>
</body>
</html>