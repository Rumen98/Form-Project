<?php 
	include 'connection.php';
    ////Масив 1
	$noteinfo = array();
	$noteinfo['note'] = $_POST['note'];
	$_SESSION['noteinfo'] = $noteinfo;
     /////Масив 2 
    $noteinfo2=array();
    $noteinfo2['noteExtra']=$_POST['note2'];
    $_SESSION['noteinfo2'] = $noteinfo2;  
 	$last_id = mysqli_insert_id($conn);
            
 		
	 

               
    
                        if (isset($_POST['submit'])) 
                        {   if (empty($_POST['note'])) 
                            {
                            echo "Molq dobavete komentar";
                            }else 
                                {


                            $check = mysqli_escape_string($conn,$_SESSION['userinfo']['fname']); 
                             $InsertSQL1 =    "INSERT INTO users (user_fname,user_mname,user_lname,user_login,user_email,user_phone) 
                                    VALUES ('{$_SESSION['userinfo']['fname']}',
                                            '{$_SESSION['userinfo']['mname']}',
                                            '{$_SESSION['userinfo']['lname']}',
                                            '{$_SESSION['userinfo']['login']}',
                                            '{$_SESSION['userinfo']['email']}',
                                            '{$_SESSION['userinfo']['phone']}')";
                            $ResultSQL1 = mysqli_query($conn, $InsertSQL1) or die(mysqli_error($conn)); 
                            $UserID = mysqli_insert_id($conn); 
                            /* Добавяне на user */
                            $check = mysqli_escape_string($conn,$_SESSION['addressinfo']['adr1']);
                            $InsertSQL2 =    "INSERT INTO addresses (address_line_1,address_line_2,address_zip,address_city,address_province,address_country) 
                                            VALUES ('{$_SESSION['addressinfo']['adr1']}',
                                            		'{$_SESSION['extraAddress']['adres']}',
                                                    '{$_SESSION['addressinfo']['zip']}',
                                                    '{$_SESSION['addressinfo']['city']}',
                                                    '{$_SESSION['addressinfo']['provinciq']}',
                                                    '{$_SESSION['addressinfo']['durjava']}')"; 
                            $ResultSQL2 = mysqli_query($conn, $InsertSQL2) or die(mysqli_error($conn));                         
                            $AddressID = mysqli_insert_id($conn); 
                            /* Добавяне на адрес */                            
                            $InsertSQL3 =    "INSERT INTO users_addresses (ua_user_id,ua_address_id) 
                                            VALUES ($UserID,$AddressID)";                             
                            $ResultSQL3 = mysqli_query($conn, $InsertSQL3) or die(mysqli_error($conn));  
                            /* Добавяне на ID-та */         
                            $InsertSQL4 = "INSERT INTO notes (note_text,note_user_id) 
                                            VALUES ('{$_SESSION['noteinfo']['note']} ',$UserID)";
                            $ResultSQL4 = mysqli_query($conn, $InsertSQL4) or die(mysqli_error($conn));
                            $NoteId = mysqli_insert_id($conn);    
                            header("refresh:1 ; url=Profile.php");
                                }
                        
                      
                         }else {

                            echo '
                            <html>
                            <head>
                                <title>Бележки</title>
                                <style>
                            body {background-color: grey} ;
                            </style>
                            </head>
                            <body>  
                            <form method="post">
                                <textarea name="note1">';echo $noteinfo['note'];echo'</textarea>
                                 <h1>New Note</h1>
                                <textarea  name="note2"></textarea>
                                Добави:<input type="submit" name="extra" value="Добави" id="submit"/>
                                </form>

                                </body>
                                </html>';
                                $belejka=$_POST['note1'];
                                
                                    if (isset($_POST['extra'])) {
                              $noteinfo2=array();
                              $noteinfo2['noteExtra']=$_POST['note2'];
                              $_SESSION['noteinfo2'] = $noteinfo2; 
                                $check = mysqli_escape_string($conn,$_SESSION['userinfo']['fname']); 
                             $InsertSQL1 =    "INSERT INTO users (user_fname,user_mname,user_lname,user_login,user_email,user_phone) 
                                    VALUES ('{$_SESSION['userinfo']['fname']}',
                                            '{$_SESSION['userinfo']['mname']}',
                                            '{$_SESSION['userinfo']['lname']}',
                                            '{$_SESSION['userinfo']['login']}',
                                            '{$_SESSION['userinfo']['email']}',
                                            '{$_SESSION['userinfo']['phone']}')";
                            $ResultSQL1 = mysqli_query($conn, $InsertSQL1) or die(mysqli_error($conn)); 
                            $UserID = mysqli_insert_id($conn); 
                            /* Добавяне на user */
                            $check = mysqli_escape_string($conn,$_SESSION['addressinfo']['adr1']);
                            $InsertSQL2 =    "INSERT INTO addresses (address_line_1,address_line_2,address_zip,address_city,address_province,address_country) 
                                            VALUES ('{$_SESSION['addressinfo']['adr1']}',
                                                    '{$_SESSION['extraAddress']['adres']}',
                                                    '{$_SESSION['addressinfo']['zip']}',
                                                    '{$_SESSION['addressinfo']['city']}',
                                                    '{$_SESSION['addressinfo']['provinciq']}',
                                                    '{$_SESSION['addressinfo']['durjava']}')"; 
                            $ResultSQL2 = mysqli_query($conn, $InsertSQL2) or die(mysqli_error($conn));                         
                            $AddressID = mysqli_insert_id($conn); 
                            /* Добавяне на адрес */                            
                            $InsertSQL3 =    "INSERT INTO users_addresses (ua_user_id,ua_address_id) 
                                            VALUES ($UserID,$AddressID)";                             
                            $ResultSQL3 = mysqli_query($conn, $InsertSQL3) or die(mysqli_error($conn));  
                            /* Добавяне на ID-та */         
                            $InsertSQL4 = "INSERT INTO notes (note_text,note_user_id) 
                                            VALUES ('$belejka','$UserID')";
                            $ResultSQL4 = mysqli_query($conn, $InsertSQL4) or die(mysqli_error($conn));
                            $NoteId = mysqli_insert_id($conn); 
                            $INSERTSQL5="INSERT INTO notes (note_text,note_user_id) VALUES ('{$_SESSION['noteinfo2']['noteExtra']}',$UserID)";
                            $ResultSQL5=mysqli_query($conn,$INSERTSQL5) or die(mysqli_error($conn));    
                            header("refresh:1 ; url=Profile.php");

                          }
                                
                          
                         }   


 	
    
    

                


 ?>
 
