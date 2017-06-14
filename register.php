<!--shortened php code-->
<?php
    if(isset($_POST['button_save'])){
     include_once '../myfirstproject/classes/RegisterController.php';
   }
?>
<!DOCTYPE html>
<html>
   <head>
       <link rel="stylesheet" href="css/bootstrap.css">
       <link rel="stylesheet" href="css/mystyle.css">

      <title>Register:: Page</title> 
   </head>
   <body>
         <div id="myModalDialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">SYSTEM RESPONSE</h4>
            </div>
            <div class="modal-body">
                <p id="info">Successful</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
          
        <div class="overlay"></div>
<br/>
<br/>
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 tilligetdivclass">
            <form method="post">
                 <input type="text" placeholder="Name" name="name" class="form-control"/>
                 <br/>
                 <input type="email" placeholder="Email" name="email" class="form-control"/>
                  <br/>
                 <input type="text" placeholder="Country" name="country" class="form-control"/>
                  <br/>
                  
                      <button type="submit" class="btn btn-xlg btn-block btn-primary" name="button_save"><span class="button-text" >Register</span></button>
                  
            </form>
            </div>
            </div>
       </div>
      </body>
</html>