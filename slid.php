<?php
                            $db_name = "nadar";
                            $mysql_username = "root";
                            $mysql_password = "";
                            $server_name = "localhost";
                            $conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
                            if(isset($_POST['fileuploadsubmit1'])){
                                $file = rand(1000,100000)."-".$_FILES['file']['name'];
                                $file_loc = $_FILES['file']['tmp_name'];
                                $file_type = $_FILES['file']['type'];
                                $folder="upload/";
                                $final_file=str_replace(' ','-',$file);
                                if(move_uploaded_file($file_loc,$folder.$final_file)){
                                   
                                    $sql="INSERT INTO slider(image,header1,header2,header3,header4,header5) VALUES('$final_file','$head1',$head2,$head3,$head4,$head5)";
                                    $rr=mysqli_query($conn,$sql);
                                    if($rr){
                                        echo "<script type='text/javascript'>alert('Successfully uploaded');</script>";
                                        header("refresh:0;url=sh2.php");
                                    }
                                    else
                                        echo "Error";                                        
                                    // $select = "SELECT * FROM `image`";
                                    // $query = mysqli_query($conn, $select) ;
                                    // while($row = mysqli_fetch_array($query)) 
                                    // {
                                    //     $link = $row['file'];
                                    //     echo "<img src='upload/$link'>";
                                    // }

                                    }
                                    else
                                    {
                                    
                                    echo "Error.Please try again";
                                            
                                            }
                                        }
                                    // $img = $_POST['image'];
                                    // if(!empty($_FILES["file"]["image"])){
                                    //     echo "success";
                                    // }
                                    // $post = $_POST['code'];
                                    // $sql = "INSERT INTO `bh108`(`item_name`, `item_code`, `image`) VALUES ('$post', 'oooo', '$img')";
                                    // $qry = mysqli_query($conn, $sql);
                            
    
                            ?>
