    <?php 
        include 'connection.php';
        
        $address="";  
        $id=$_GET['id'];
        $sql1="SELECT * FROM addresses WHERE address_id = $id ";

        $result=mysqli_query($conn,$sql1);
        $row = mysqli_fetch_array($result);
        $address=$_POST['address'];
       
        if (isset($_POST['submit'])) {
            if (empty($_POST['address'])) {
                echo "Empty field <br>";
            } else {
            $sql = "UPDATE addresses SET address_line_1='$address' WHERE address_id=$id";
           
        $result=mysqli_query($conn,$sql);
        }
            if (mysqli_query($conn,$sql)) {
               echo "Updated";
            }else{
                echo "Not updated";
            }
        }
       


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group ">
                            <label>Address</label>
                            <br>
                            Адрес 1:<input type="text" name="address" class="form-control" value="<?php echo $row["address_line_1"]; ?>">
                            Адрес2:<input type="text" name="address" class="form-control" value="<?php echo $row["address_line_2"]; ?>">

                        </div>

                       
                      
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <a href="Profile.php" class="btn btn-default">Back</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html> 



