<?php 
include 'connection.php';
			session_start();
			$_SESSION['username'] = $_POST['Fname'];
			echo "Welcome," . $_SESSION['userinfo']['fname']." " . $_SESSION['userinfo']['lname'];


 ?>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">User Details</h2>
                       
                    </div>
                    <?php
                    // Include config file
                    require_once 'connection.php';
                    
                    // Attempt select query execution
                   $sql="SELECT * FROM addresses left join users on address_id=user_id left join notes on note_id=user_id ORDER BY address_id DESC LIMIT 1 ;";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Phone</th>";
                                        echo "<th>Note</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['user_id'] .  "</td>";
                                        echo "<td>" . $row['user_fname'] . " " . $row['user_lname'] ; "</td>";
                                        echo "<td>" . $row['user_email'] . "</td>";
                                        echo "<td>" . $row['address_line_1'] . "</td>";
                                          echo "<td>" . $row['user_phone'] . "</td>";
                                            echo "<td>" . $row['note_text'] . "</td>";
                                        echo "<td>";
                                                $adresi = array ();
                                                 $adresi['adr1'] = $row['"address_line_1'];
                                                 $_SESSION['adresi']=$adresi;
                                            
                                            echo "<a href='updateLog.php?id=". $row['user_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                           
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
            
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>