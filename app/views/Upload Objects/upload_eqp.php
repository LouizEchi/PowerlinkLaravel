

<?php
if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
  require("dbcon.php");
$new="INSERT INTO  `equipment`(eqp_name,eqp_rentprice,eqp_type,eqp_qty,eqp_desc,eqp_Image) VALUES ('{$_POST['ename']}', '{$_POST['price']}', '{$_POST['etype']}', '{$_POST['eavail']}','{$_POST['description']}','{$_FILES['FileInput']['name']}')";
$add=mysql_query($new) or die(mysql_error());
  echo $_FILES['FileInput']['name'];
  ############ Edit settings ##############
  $UploadDirectory  = '../Powerlink/Equipment Images/'; //specify upload directory ends with / (slash)
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