<?php 
include 'connection.php';
session_start();
$noteinfo = array();
$noteinfo['note'] = $_POST['note'];
$_SESSION['noteinfo'] = $noteinfo;
 $last_id = mysqli_insert_id($conn);
 var_dump($noteinfo);
if (isset($_POST['submit'])) {
    if (empty($_POST['note'])) {
        echo "Dobavete Komentar";
    }
    if (!empty($_SESSION['noteinfo'])) {
        $check = mysqli_escape_string($conn,$_SESSION['userinfo']['fname']);
        echo "asdasdasd";
         $InsertSQL1 =    "INSERT INTO users (user_fname,user_mname,user_lname,user_login,user_email,user_phone) 
                VALUES ('{$_SESSION['userinfo']['fname']}',
                        '{$_SESSION['userinfo']['mname']}',
                        '{$_SESSION['userinfo']['lname']}',
                        '{$_SESSION['userinfo']['login']}',
                        '{$_SESSION['userinfo']['email']}',
                        '{$_SESSION['userinfo']['phone']}')";
        $ResultSQL1 = mysqli_query($conn, $InsertSQL1) or die(mysqli_error($conn)); 
        $UserID = mysqli_insert_id($conn); 
        
        $InsertSQL2 =    "INSERT INTO addresses (address_line_1,address_zip,address_city,address_province,address_country) 
                        VALUES ('{$_SESSION['addressinfo']['adr1']}',
                                '{$_SESSION['addressinfo']['zip']}',
                                '{$_SESSION['addressinfo']['city']}',
                                '{$_SESSION['addressinfo']['provinciq']}',
                                '{$_SESSION['addressinfo']['durjava']}')"; 
        $ResultSQL2 = mysqli_query($conn, $InsertSQL2) or die(mysqli_error($conn)); 
         $InsertSQL21 =    "INSERT INTO addresses (address_line_2) 
                        VALUES ('{$_SESSION['extraAddress']['adres']}')"; 
        $ResultSQL21 = mysqli_query($conn, $InsertSQL21) or die(mysqli_error($conn)); 
        $AddressID = mysqli_insert_id($conn); 
         
        $InsertSQL3 =    "INSERT INTO users_addresses (ua_user_id,ua_address_id) 
                        VALUES ($UserID,$AddressID)"; 
        
        $ResultSQL3 = mysqli_query($conn, $InsertSQL3) or die(mysqli_error($conn));  
                
        $InsertSQL4 = "INSERT INTO notes (note_text,note_user_id) 
                        VALUES ('{$_SESSION['noteinfo']['note']}',$UserID)";
        $ResultSQL4 = mysqli_query($conn, $InsertSQL4) or die(mysqli_error($conn));   
        header("refresh:1 ; url=Profile.php");
      
    }else{
        header("refresh:1 ; url=Profile.php");
    }
}
?>

