<?php
session_start();
 if(!isset($_REQUEST['id'])){
    
    header("location:index.php");}
include_once 'blogic.php';
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="img/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file)&& ($file_type=='gif' || $file_type=='jpg' || $file_type= 'jpeg' || $file_type=='png' || $file_type=='mp4' || $file_type=='3gp'))
 {  $sql="INSERT INTO images_tbl(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  ExecuteNonQuery($sql);
  ?>
  <script>
  alert('Successfully Uploaded');
    if($file_type=='jpg' || $file_type=='jpeg' || $file_type=='png')
        window.location.href='index.php';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='index-4.php';
        </script>
  <?php
 }
}
?>