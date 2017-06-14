
<html>
   <head>
       <link rel="stylesheet" href="css/bootstrap.css">
       <link rel="stylesheet" href="css/mystyle.css">
       <script src="js/jquery.js"></script>

      <title>Search:: Page</title> 
     
           
   </head>
   
   <body>
          
        <div class="overlay"></div>
<br/>
<br/>
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 tilligetdivclass">
            <form method="post" action="">
                 <div row="">
                    <div class="col-md-8">
                        <input type="text" placeholder="Country" name="country" class="form-control"/>
                    </div>
                    <div class="col-md-4">
                        <input type="submit" name="do-search" value="Search" class="btn btn-sm btn-block btn-warning"/>

                    </div>
                 </div>
            </form>
        </div>
            </div>
        <div class="col-sm-6 col-sm-offset-3">
        <table class="table table-striped table-bordered table-responsive">
            <thead>
                <th><span class="text">Name</span></th>
                <th><span class="text">Email</span></th>
            </thead>
            <tbody id="persondetails">
                <?php
                if(isset($_POST['do-search']))
                    {
                        include_once '../myfirstproject/classes/SearchController.php';
                    }
                ?>
                </tbody>
        </table>
        </div>
       </div>
      </body>
</html>