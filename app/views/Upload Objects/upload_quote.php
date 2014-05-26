<?php
if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
  require("dbcon.php");
$date = date('Y-m-d');
$new="INSERT INTO  quotation(quot_name,quot_pkgid,quot_date)  VALUES ('{$_FILES['FileInput']['name']}','{$_POST['pkgid']}','$date')";
$add=mysql_query($new) or die(mysql_error());
  
  ############ Edit settings ##############
  $UploadDirectory  = '../Powerlink/Quotation/'; //specify upload directory ends with / (slash)
  ##########################################
  /*
  Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
  Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
  and set them adequately, also check "post_max_size".
  */
  

  
  //Is file size is less than allowed size.
  if ($_FILES["FileInput"]["size"] > 5242880) {
    die("File size is too big!");
  }
  
  //allowed file type Server side check
  switch(strtolower($_FILES['FileInput']['type']))
    {
      //allowed file types
            case 'image/png': 
      case 'image/gif': 
      case 'image/jpeg': 
      case 'image/pjpeg':
      case 'text/plain':
      case 'text/html': //html file
      case 'application/x-zip-compressed':
      case 'application/pdf':
      case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
      case 'application/msword':
      case 'application/vnd.ms-excel':
      case 'video/mp4':
        break;
      default:
        die('Unsupported File!'); //output error
  }
  
  $File_Name          = strtolower($_FILES['FileInput']['name']);
  $File_Ext           = substr($File_Name, strrpos($File_Name, '.'));  //get file extention
  if(move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory.$File_Name ))
     {
    die('Success! File Uploaded.');
    header('Location: Employee.php');
  }else{
    die('error uploading File!');
    header('Location: Employee.php');
  }
  
}
else
{
  die('Please Input The Necessary Information');
}
?>