
<!DOCTYPE html >
<html>
<head>
  <title>Quotation</title>
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/jquery-2.1.0.js" type="text/javascript"> </script>
    
  <script src="/js/modal.js" type="text/javascript"> </script>
  <link href="/Powerlink/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
$(document).ready(function() { 
  var options = { 
      target:   '#output',   // target element(s) to be updated with server response 
      beforeSubmit:  beforeSubmit,  // pre-submit callback 
      success:       afterSuccess,  // post-submit callback 
      uploadProgress: OnProgress, //upload progress callback 
      resetForm: true       // reset the form after successful submit 
    }; 
    
   $('#MyUploadForm').submit(function() { 
      $(this).ajaxSubmit(options);        
      // always return false to prevent standard browser submit and page navigation 
      return false; 
    }); 
    

//function after succesful file upload (when server response)
function afterSuccess()
{
  $('#submit-btn').show(); //hide submit button
  $('#loading-img').hide(); //hide submit button
  $('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
  {
    
    if( !$('#FileInput').val()) //check empty input filed
    {
      $("#output").html("Are you kidding me?");
      return false
    }
    
    var fsize = $('#FileInput')[0].files[0].size; //get file size
    var ftype = $('#FileInput')[0].files[0].type; // get file type
    

    //allow file types 
    switch(ftype)
        {
        case 'application/pdf':
      case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
      case 'application/vnd.ms-excel':
      case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
        return false
        }
    
    //Allowed file size is less than 5 MB (1048576)
    if(fsize>5242880) 
    {
      $("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
      return false
    }
        
    $('#submit-btn').hide(); //hide submit button
    $('#loading-img').show(); //hide submit button
    $("#output").html("");  
  }
  else
  {
    //Output error to older unsupported browsers that doesn't support HTML5 File API
    $("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
    return false;
  }
}

//progress bar function
function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
  $('#progressbox').show();
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>

</head>

<body style=" background: url(/android.png);">
    <?php 
    include"Navbar.php";
?>

  
     <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">
        <div class="tabbable tabs-left">

           <div class="tab-content" >
  
              <div class="tab-pane active">
            
                <div class="container-fluid well" >
                      <div id="mydiv">
    <form class="form-horizontal" action="addquotation.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
                 
            <div align="center">
          <table class="table" >
          <thead>
            <th >Package Name</th>
          </thead>
          <tbody>
            <tr>
            <td>
                  <?php
                    $RentQuery= "select * from package";
                    $RentResult = mysql_query($RentQuery);
                  ?>
                
                    <select name='pkgid' class="btn btn-lg btn-info">
                    <?php
                    while($rowRent=mysql_fetch_array($RentResult))
                     {
                    ?>
                    <option value = <?=$rowRent['pkg_id'];?>>
                      <?=$rowRent['pkg_name'];?>
                    </option>

                    <?php
                     }
                      ?>
                  </select>
                  </ul>
    
            </td>
            </tr>
            <tr>
            <td>

             <strong>Upload Quotation</strong>
              <form action="upload_quote.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
              <input name="FileInput" id="FileInput" type="file" />
           
              </td>
            </tr>
          </div>
        </table>
          <tr>
           <div id="upload-wrapper">
                   <div align="center">
                       <input type="submit" class="btn btn-success" value = "Add"style="margin-top:5px" id="submit-btn"/>
                                   <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                              <div id="output"></div>

                     </div>
                   </div>

                    <div align="center" style="font-color: black;"><?php include"upload_quote.php";?></div>
                    </tbody>
                </form>
                 </table>
</div>
           
             </div>
          </div>
        </div> 
      </div>
   </div>
  </div>

 </body>

 
</html>