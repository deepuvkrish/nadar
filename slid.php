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
                                $final_file=str_replace(' ','-',$file);

                                $file1 = rand(1000,100000)."-".$_FILES['file1']['name'];
                                $file_loc1 = $_FILES['file1']['tmp_name'];
                                $file_type1 = $_FILES['file1']['type'];
                                $final_file1=str_replace(' ','-',$file1);

                                $file2 = rand(1000,100000)."-".$_FILES['file2']['name'];
                                $file_loc2 = $_FILES['file2']['tmp_name'];
                                $file_type2 = $_FILES['file2']['type'];
                                $final_file2=str_replace(' ','-',$file2);

                                echo $final_file."<br>".$final_file1."<br>".$final_file2;

                                $folder="upload/slider/";

                                if(move_uploaded_file($file_loc,$folder.$final_file)){
                                    if(move_uploaded_file($file_loc1,$folder.$final_file1)){
                                        if(move_uploaded_file($file_loc2,$folder.$final_file2)){
                                            $head1 = $_POST['hd1'];
                                            $head2 = $_POST['hd2'];
                                            $head3 = $_POST['hd3'];
                                            $head4 = $_POST['hd4'];
                                            $head11 = $_POST['hd11'];
                                            $head12 = $_POST['hd12'];
                                            $head13 = $_POST['hd13'];
                                            $head14 = $_POST['hd14'];
                                            $head111 = $_POST['hd111'];
                                            $head112 = $_POST['hd112'];
                                            $head113 = $_POST['hd113'];
                                            $head114 = $_POST['hd114'];
                                    $sql="INSERT INTO slider(image,header1,header2,header3,header4) VALUES('$final_file','$head1','$head2','$head3','$head4')";
                                    $rr=mysqli_query($conn,$sql);
                                    $sql1="INSERT INTO slider(image,header1,header2,header3,header4) VALUES('$final_file1','$head11','$head12','$head13','$head14')";
                                    $rr1=mysqli_query($conn,$sql1);
                                    $sql2="INSERT INTO slider(image,header1,header2,header3,header4) VALUES('$final_file2','$head111','$head112','$head113','$head114')";
                                    $rr2=mysqli_query($conn,$sql2);
                                    if($rr && $rr1 && $rr2){
                                        echo "<script type='text/javascript'>alert('Successfully uploaded');</script>";
                                        header("refresh:0;url=sh2.php");
                                    }
                                    else
                                        echo "Error";     
                                        }
                                    }
                                                                      
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
