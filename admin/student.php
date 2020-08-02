<?php
    include 'connection.php';
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style type="text/css">
        .srch  
        {
            padding-left: 1300px;
        }
    </style>
</head>
<body>

<!--_______________ search bar -->
 <div class="srch">

    <form class="navbar-form" method="post" name="form1">
       
            <input class="" type="text" name="search" placeholder="Student Username..." required="">
            <button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
            <span class="glyphicon glyphicon-search"></span>
            </button>
    </form>
 </div>
    <h2>List of Students</h2>
    <?php

            if(isset($_POST['submit']))
            {
                $q=mysqli_query($db, "SELECT  first, last, username, roll, email, contact  FROM student WHERE username like '%$_POST[search]%' ");
                if(mysqli_num_rows($q)==0)
                {
                    echo "Sorry! No student found with that username. Try Searching again.";
                }
                else 
                {
                    echo "<table class='table table-bordered table-hover'>";
                    echo "<tr style='background-color: #6db6b9e6;'>";
                        echo "<th>"; echo "First Name"; echo "</th>";
                        echo "<th>"; echo "Last Name"; echo "</th>";
                        echo "<th>"; echo "Username"; echo "</th>";
                        echo "<th>"; echo "Roll"; echo "</th>";
                        echo "<th>"; echo "Email"; echo "</th>";
                        echo "<th>"; echo "Contact"; echo "</th>";
                    echo "</tr>";
            
                    while($row=mysqli_fetch_assoc($q))
                    {
                        echo "<tr>";
                        echo "<td>"; echo $row['first']; echo "</td>";
                        echo "<td>"; echo $row['last']; echo "</td>";
                        echo "<td>"; echo $row['username']; echo "</td>";
                        echo "<td>"; echo $row['roll']; echo "</td>";
                        echo "<td>"; echo $row['email']; echo "</td>";
                        echo "<td>"; echo $row['contact']; echo "</td>";
                        echo "</tr>";
                    }
            
                    echo "</table>";
                }
            }

            else
            {
                $res=mysqli_query($db, "SELECT first, last, username, roll, email, contact FROM student;");

                echo "<table class='table table-bordered table-hover'>";
                echo "<tr style='background-color: #6db6b9e6;'>";
                    echo "<th>"; echo "First Name"; echo "</th>";
                    echo "<th>"; echo "Last Name"; echo "</th>";
                    echo "<th>"; echo "Username"; echo "</th>";
                    echo "<th>"; echo "Roll"; echo "</th>";
                    echo "<th>"; echo "Email"; echo "</th>";
                    echo "<th>"; echo "Contact"; echo "</th>";
                echo "</tr>";
        
                while($row=mysqli_fetch_assoc($res))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row['first']; echo "</td>";
                    echo "<td>"; echo $row['last']; echo "</td>";
                    echo "<td>"; echo $row['username']; echo "</td>";
                    echo "<td>"; echo $row['roll']; echo "</td>";
                    echo "<td>"; echo $row['email']; echo "</td>";
                    echo "<td>"; echo $row['contact']; echo "</td>";
                    echo "</tr>";
                }
        
                echo "</table>";
            }
       

    ?>
</body>
</html>