
<!DOCTYPE html >
<html>
<head>
  <title>Equipment</title>
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/jquery-2.1.0.js" type="text/javascript"> </script>
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
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
            case 'image/png': 
      case 'image/gif': 
      case 'image/jpeg': 
      case 'image/pjpeg':
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
<a href='index.php'><button class="btn btn btn-info" style="font-color: white;">Back</button></a>
      <div class="bs-docs-example">
        <div class="tabbable tabs-left">

           <div class="tab-content" >
  
              <div class="tab-pane active">
             <br>
                <div class="container-fluid well" >
                   
                      <div id="mydiv">
                        
    <form class="form-horizontal" action="addrecord.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
                 
          <div align="center">
          <table class="table" >

         <thead>
                      <tr>
              <th>Equipment Name</th>
            <th>Rental Price</th>
            <th>Type</th>
            <th>Quantity</th>
          </tr>
            
                </thead>
            <tbody>
              <tr>
              <td>
              <input required type="text" id="inputEmail" placeholder="Name" name="ename">
                           </td>
               <td>
                           <input required type="float" min='0' id="inputEmail" placeholder="price" name="price">
                             </td> 
                               <td>              
                           <input required type="text" id="inputEmail" placeholder="Type" name="etype">
                              </td>
                <td>
                           <input required type="number" step='1' min='0' id="inputEmail" placeholder="Quantity" name="eavail">
                           </td>
                   </tr>
                   <tr>   <th>Desription</th>  <th>Image</th></td>
                  <tr align = "center">
                            <td>
                              <input  required type="text" id="inputEmail" placeholder="Description" name="description">
                            </td>
                      <td>

            
              <form action="upload_eqp.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
              <input name="FileInput" id="FileInput" type="file" />
           
              </td>

                   </div>
                    </tbody>
                </form>
                 </table>
                    </div>
           <div id="upload-wrapper">
                   <div align="center">
                       <input type="submit" class="btn btn-success" value = "Add"style="margin-top:5px" id="submit-btn"/>
                                   <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                              <div id="output"></div>

                     </div>
                   </div>

                    <div align="center" style="font-color: black;"><?php include"upload_eqp.php";?></div>
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


