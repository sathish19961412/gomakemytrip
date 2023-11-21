<?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourslist Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex justify-content-center">
                       <p>&nbsp;</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        <form action="tourlist_add.php" method="post" enctype="multipart/form-data" class="bg-danger p-5">
                                <div class="row">
                                        <div class="col-md-4">
                                            <input type="file" class="form-control" name="file" id="file" aria-label="file" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="title" name="title" id="title" aria-label="title" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="country" name="country" id="country" aria-label="country" required>
                                        </div>
                                </div>
                                <div class="row mt-2">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="subtitle" name="subtitle" id="subtitle" aria-label="subtitle" required>
                                        </div>
                                        <div class="col">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="description"  name="description" id="description" required></textarea>
                                        </div>
                                </div>
                                <div class="row mt-2">
                                
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Detailstatus" name="detailstatus" id="detailstatus" aria-label="detailstatus" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Price" name="price" id="price" aria-label="price" required>
                                        </div>
                                </div>
                                <div class="row mt-2">
                                        
                                        <!-- <div class="col">
                                            <input type="text" class="form-control" placeholder="Viewdeals" name="viewdeals" id="viewdeals" aria-label="price">
                                        </div> -->
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Best price" name="tripprice" id="tripprice" aria-label="tripprice" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="lowprice" name="lowprice" id="lowprice" aria-label="lowprice" required>
                                        </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Location" name="location" id="Location" aria-label="Location" required>
                                    </div>
                                    <div class="col">
                                        <input type="file" class="form-control" name="galleryone" id="galleryone" aria-label="galleryone" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                            <input type="file" class="form-control" name="gallerytwo" id="gallerytwo" aria-label="gallerytwo" required>
                                    </div>
                                    <div class="col">
                                            <input type="file" class="form-control" name="gallerythree" id="gallerythree" aria-label="gallerythree" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                            <input type="file" class="form-control" name="galleryfour" id="galleryfour" aria-label="galleryfour" required>
                                    </div>
                                  
                                </div>
                            <input type="submit" name="submit" class="btn btn-success text-white font-weight-bold mt-2" value="Add">
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex justify-content-center">
                      <a href="admin_dashboard.php" style="text-decoration:none;" class="btn btn-danger text-white">Dashboard</a>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                      <a href="admin-logout.php" style="text-decoration:none;" class="btn btn-danger text-white">Logout</a>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script >
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>
<script type="text/javascript">

    $(document).ready(function () {

        //Disable full page

        $("body").on("contextmenu",function(e){

            //alert("right click functionality is disabled for this page.");

            return false;

        });        

    });
     $(document).ready(function () {       

       //Disable cut copy paste

        $('body').bind('cut copy paste', function (e) {

            //alert("cut copy paste functionalities are disabled for this page.");

            e.preventDefault();

        });       

    });

 </script>
  </body>
</html>
<?php 
}else{
     header("Location:index.php");
     exit();
}
 ?>