<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        include_once('db_config.php');
        include_once('navbar.php');

        $fetch_query =  mysqli_query($con,"select * from users");
        $query_rows = mysqli_num_rows($fetch_query);
        

        if($query_rows > 0){
            echo "<table class='table table-bordered'><tr><th>Name</th><th>Mobile</th><th>Email</th><th></th></tr>";
            while($row = mysqli_fetch_array($fetch_query)){ 
                echo "<tr><td>".$row['name']."</td>";
                echo "<td>".$row['mobile']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td> <a href='./delete.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a> <a href='./edit.php?id=".$row['id']."'> <button class='btn btn-success'>Update</button></a></td></tr>";
            }
            echo "</table>";
            
        }else{
            echo "No Data found";
        }
    ?>
</body>
</html>