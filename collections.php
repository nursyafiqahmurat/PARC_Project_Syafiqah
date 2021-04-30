<?php

session_start();
if(!isset($_SESSION["key"])) { 
    header('location:register.php');
}

include 'conn.php';

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>Collections</title>
</head>
<body>
    <div class="full-page">
        <div class="sub-page">
            <div class="navigation-bar">
                <div class="logo">
                    <a href='index1.php'>LALA Library</a>
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href='index1.php'>Home</a></li>
                        <li><a href='collections.php'>Collections</a></li>
                        <li><a href='logout.php'>Log out</a></li>                        
                    </ul>
                </nav>
            </div>
 
<div class="col-lg-4">
  <h2 style="color: white">Collection Data</h2>
  <br>
  <form name="collection" method="post">
    <div class="form-group">
      <label for="Title_and_Statement_of_Responsibilities" style="color: white">Title and Statement of Responsibilities:</label>
      <input type="text" class="form-control" placeholder="Enter author or SOR here" name="Title_and_Statement_of_Responsibilities">
    </div>
    <div class="form-group">
      <label for="Edition" style="color: white">Edition:</label>
      <input type="text" class="form-control" placeholder="Enter edition here if any" name="Edition">
    </div>
    <div class="form-group">
      <label for="Publication_and_Distribution" style="color: white">Publication and Distribution:</label>
      <input type="text" class="form-control" placeholder="Enter publication details here" name="Publication_and_Distribution">
    </div>
    <div class="form-group">
      <label for="Physical_Description" style="color: white">Physical Description:</label>
      <input type="text" class="form-control" placeholder="Enter physical description details here" name="Physical_Description">
    </div>
    <div class="form-group">
      <label for="Series" style="color: white">Series:</label>
      <input type="text" class="form-control" placeholder="Enter book series here if any" name="Series">
    </div>
    <div class="form-group">
      <label for="Notes" style="color: white">Notes:</label>
      <input type="text" class="form-control" placeholder="Enter notes here if any" name="Notes">
    </div>
    <div class="form-group">
      <label for="ISBN_Number" style="color: white">ISBN Number:</label>
      <input type="text" class="form-control" placeholder="Enter ISBN number here" name="ISBN_Number">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="edit" class="btn btn-default">Edit</button>
    <button type="submit" name="remove" class="btn btn-default">Remove</button>
  </form>
</div>
</div>


<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Title_and_Statement_of_Responsibilities</th>
        <th>Edition</th>
        <th>Publication_and_Distribution</th>
        <th>Physical_Description</th>
        <th>Series</th>
        <th>Notes</th>
        <th>ISBN_Number</th>
      </tr>
    </thead>
    <tbody>

    <?php 
        $res=mysqli_query($conn,"SELECT * FROM books");
        while($row=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>"; echo $row["Title_and_Statement_of_Responsibilities"]; echo"</td>";
            echo "<td>"; echo $row["Edition"]; echo"</td>";
            echo "<td>"; echo $row["Publication_and_Distribution"]; echo"</td>";
            echo "<td>"; echo $row["Physical_Description"]; echo"</td>";
            echo "<td>"; echo $row["Series"]; echo"</td>";
            echo "<td>"; echo $row["Notes"]; echo"</td>";
            echo "<td>"; echo $row["ISBN_Number"]; echo"</td>";
            echo "</tr>";

        }
    ?>
    </tbody>
  </table>


</div>

</body>

<?php
    if(isset($_POST['insert'])) {
        $Title_and_Statement_of_Responsibilities = $_POST ["Title_and_Statement_of_Responsibilities"];
        $Edition = $_POST["Edition"];
        $Publication_and_Distribution = $_POST["Publication_and_Distribution"];
        $Physical_Description = $_POST["Physical_Description"];
        $Series = $_POST["Series"];
        $Notes = $_POST["Notes"];
        $ISBN_Number = $_POST["ISBN_Number"];
        
        $sql= "INSERT INTO books (Title_and_Statement_of_Responsibilities, Edition, Publication_and_Distribution, Physical_Description, Series, Notes, ISBN_Number)
        VALUES ('".$Title_and_Statement_of_Responsibilities."','".$Edition."','".$Publication_and_Distribution."','".$Physical_Description."','".$Series."','".$Notes."','".$ISBN_Number."');";
        
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "Success";
        }else {
            echo "Failed";
        }
    }

    if(isset($_POST['remove'])) {
      $Title_and_Statement_of_Responsibilities = $_POST ["Title_and_Statement_of_Responsibilities"];
      $Edition = $_POST["Edition"];
      $Publication_and_Distribution = $_POST["Publication_and_Distribution"];
      $Physical_Description = $_POST["Physical_Description"];
      $Series = $_POST["Series"];
      $Notes = $_POST["Notes"];
      $ISBN_Number = $_POST["ISBN_Number"];
      
      $sql= "DELETE FROM books (Title_and_Statement_of_Responsibilities, Edition, Publication_and_Distribution, Physical_Description, Series, Notes, ISBN_Number)
      VALUES ('".$Title_and_Statement_of_Responsibilities."','".$Edition."','".$Publication_and_Distribution."','".$Physical_Description."','".$Series."','".$Notes."','".$ISBN_Number."');";
        echo $sql;
      $query = mysqli_query($conn, $sql);
      if ($query) {
          echo "Success";
      }else {
          echo "Failed";
      }
  }
?>
</body>
</html>