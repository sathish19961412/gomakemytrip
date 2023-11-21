<?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--BootNavbar CSS-->
    <link rel="stylesheet" href="css/bootnavbar.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--Medeia Scrren-->
    <link rel="stylesheet" media="screen" href="assets/css/media.css">
    <!--Aos animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Aos Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Font style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=League+Gothic&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <!--Animate CSS-->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href='assets/DataTables/datatables.min.css' rel='stylesheet' type='text/css'> -->
    <!-- DataTables CSS library -->
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
     <!--DataTables Use Excel,Pdf Libirary-->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <!--Custom Paganation -->
    <title>gomakemytrip | Admin</title>
  </head>
  <style>
    #padding-1
    {
        padding-top:15px;
    }
    .title-size
    {
        font-size:12px;
    }
    .line-3
    {
        background: #ff5b00;
        width: 163px;
        height: 3px;
        text-align: center;
        display: flex;
        position: relative;
        left:0%;
    }
    .line-4
    {
        background: #ff5b00;
        width: 50px;
        height: 8px;
        text-align: center;
        display: flex;
        position: relative;
        left: 7%;
        top: -6px;
    }
    .button--1
    {
        background: #ff5b00;
        color: white;
        font-weight: 500;
        text-decoration: none;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
        padding-left: 10px;
        display: flex;
        justify-content: center;
        width: 34%;
    }
    .button--1:hover
    {
       
        background: #353d50;
        color: white;
        font-weight: 500;
        text-decoration: none;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
        padding-left: 10px;
        display: flex;
        justify-content: center;
        width: 34%;
    }
    #model-1
    {
        margin-top: 100px;
        padding-top: 30px;
        padding-bottom: 30px;
        background:#ebebeb;
    }
    .img-1
    {
        width: 122%;
        height: auto;
        position: relative;
        left: -83px;
    }
    #services
    {
        margin-top:60px;
        background-color: #151515;
        background-image:url("assets/img/ppstern2.jpg");
        background-repeat: repeat;
        padding: 0px 60px 60px 60px;
    }
    .icon-1
    {
        background: #ff5b00;
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        border-radius: 100%;
        transition: transform .5s ease-out ; 
    }
    .icon-1:hover {
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        border-radius: 100%;
        transform: rotate(360deg);
    }
    #icon--2
    {
        font-size:28px;
    }
    #artist
    {
        background:url("assets/img/banner/admin.png");
        background-size: cover;
        background-position: center;
        background-repeat:no-repeat;
        height:26vh;
    }
    #logout
    {
        position: absolute;
        right: -42px;
        top: 95px;
    }
    #photo
    {
        width: 100%;
        height: 285px;
    }
    
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

  </style>
  <body>
 
   <section id="artist">
       <div class="container">
           <div class="row">
                <div class="col-md-12">
                    <div id="logout">
                       <a href="admin-logout.php" class="btn btn-danger">Logout</a>
                    </div> 
                </div>
           </div>
       </div>
   </section>
   <section>
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" mt-5">
                      
                    </div>
                    <div class="text-center pt-5">
                        <h3 style="font-weight: 800;color:#ff5b00;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">Hello, <?php echo $_SESSION['name']; ?></h3>

                        <div class="line-1"></div>
                        <div class="line-2"></div>
                    </div>
                </div>
            </div>
       </div>
   </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <!-- <div class="d-flex  mb-3">
                            <button onclick="ExportToExcel('xlsx')" class="bg-success text-white font-weight-bold p-1">Export table to excel</button>
                        </div> -->
                        <table id="tbl_exporttable_to_xls" class="table table-striped table-responsive example" >
                                                            <thead>
                                                                <tr>
                                                                    <th>SNO</th>
                                                                    <th>Title</th>
                                                                    <th>SubTitle</th>
                                                                    <th>Country</th>
                                                                    <th>Description</th>
                                                                    <th>detailstatus</th>
                                                                    <th>price</th>
                                                                    <th>toursimage</th>
                                                                    <th>tripprice</th>
                                                                    <th>lowprice</th>
                                                                    <th>Delete</th>
                                                                    <th>Edit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody> 
                                                            
                                                            <tr>
                                                            <?php
                                                                    include_once 'server.php'; 
                                                                    $query=mysqli_query($conn,"SELECT*FROM tourslist");
                                                                    while($row=mysqli_fetch_array($query))
                                                                    {
                                                                            $artistid=$row['id'];
                                                                            $title = $row['title'];
                                                                            $subtitle = $row['subtitle'];
                                                                            $country= $row['country'];
                                                                            $description = $row['description'];
                                                                        
                                                                            $detailstatus = $row['detailstatus'];
                                                                            $price = $row['price'];
                                                                            $toursimage=$row['toursimage'];
                                                                      
                                                                            $tripprice=$row['tripprice'];
                                                                            $lowprice  = $row['lowprice'];
                                                            
                                                            ?>
                                                                   
                                                                    <td class="td-questionlist ">
                                                                        <div>
                                                                            <h6>
                                                                                <?php echo $row['id']; ?> 
                                                                    
                                                                            </h6>
                                                                        </div>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                            <?php echo $row['title']; ?>
                                                                          
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <div>
                                                                            <h6>
                                                                               <?php echo $row['subtitle']; ?> 
                                                                            </h6>
                                                                        </div>
                                                                    </td>
                                                                    <td class="td-questionlist ">
                                                                        <div>
                                                                            <h6>
                                                                                <?php echo $row['country']; ?> 
                                                                            </h6>
                                                                        </div>
                                                                    </td>
                                                                    <td class="td-questionlist ">
                                                                        <div>
                                                                            <h6>
                                                                                <?php echo $row['description']; ?> 
                                                                            </h6>
                                                                        </div>
                                                                    </td>
                                                                   
                                                                    <td class="td-questionlist">
                                                                            <h6>
                                                                                <?php echo $row['detailstatus']; ?> 
                                                                              
                                                                            </h6>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                            <h6>
                                                                                <?php echo $row['price']; ?> 
                                                                              
                                                                            </h6>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <div>
                                                                            <img src="assets/upload/<?php echo  $photo  = $row['toursimage']; ?>" id="photo" name="id[]" style="width:50px;height:auto;">
                                                                           
                                                                        </div>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span>
                                                                                <?php echo $row['tripprice']; ?> 
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span> 
                                                                                <?php echo $row['lowprice']; ?> 
                                                                               
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span class="d-flex"> 
                                                                            <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this Place?');" class="bg-danger text-white btn">Delete</a> |   
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                           <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $row['id']?>"><span class="glyphicon glyphicon-edit"></span> Update</button></td>
                                                                            <div class="modal fade" id="edit<?php echo $row['id']?>" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <form method="POST" enctype="multipart/form-data" action="edit.php">
                                                                                            <div class="modal-header">
                                                                                                <h3 class="modal-title">Edit User</h3>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div class="col-md-2"></div>
                                                                                                <div class="col-md-8">
																									<!-- <div class="form-group">
                                                                                                        <h3>Current Photo</h3>
                                                                                                        <img src="assets/products/<?php echo $row['images']?>" height="120" width="150" />
                                                                                                        <input type="hidden" name="previous" value="<?php echo $row['images']?>"/>
                                                                                                        <h3>New Photo</h3>
                                                                                                        <input type="file" class="form-control" name="file" value="<?php echo $row['images']?>" required="required"/>
                                                                                                    </div> -->
 																								
                                                                                                    <div class="form-group">
                                                                                                        <label>Title</label>
                                                                                                        <input type="text" class="form-control" value="<?php echo $row['title']?>" name="title" required="required"/>
                                                                                                    </div>
                                                                                                 
                                                                                                  
                                                                                                    <div class="form-group">
                                                                                                        <label>Country</label>
                                                                                                        <input type="hidden" value="<?php echo $row['id']?>" name="id"/>
                                                                                                        <input type="text" class="form-control" value="<?php echo $row['country']?>" name="country" required="required"/>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label>Subtitle</label>
                                                                                                        <input type="text" class="form-control" value="<?php echo $row['subtitle']?>" name="subtitle" required="required"/>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label>Description</label>
                                                                                                        <input type="text" class="form-control" value="<?php echo $row['description']?>" name="description" required="required"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br style="clear:both;"/>
                                                                                            <div class="modal-footer">
                                                                                                <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                                                                                <button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span> Update</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>		
                                                                    </td>
                                                                   
                                                                </tr> 
                                                                
                                                                <?php    
                                                                    }
                                                                ?>
                                
                                                            </tbody>
                        </table>   
                </div>
            </div>
        </div>
    </section>
<script >
$( document ).ready(function() {
    $('.example').DataTable({
            "processing": true,
            "sAjaxSource":"response.php",
            "dom": 'lBfrtip',
            "buttons": [
                {
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf',
                        'print'
                    ]
                    checkbox:
                    [
                        
                    ]
                }
            ]
            });
});
</script>

 
<script>

function ExportToExcel(type, fn, dl) {
    var elt = document.getElementById('tbl_exporttable_to_xls');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
}

</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Datatable JS -->
<script src="assets/DataTables/datatables.min.js"></script>
<!--Popper Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!--Bootstrap 4 Js-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <!-- SLIDER REVOLUTION -->
<!--BootNavbar Js-->
<script src="js/bootnavbar.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
     $(document).ready(function() {
            $('.example').DataTable();
        } );
</script>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("memListTable");
    li = ul.getElementsByTagName("span");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("input")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<script>
    $(function(){
    $("#bootnavbar").bootnavbar();
    });
</script>
<script>
  AOS.init();
</script>
<script>
    // vars
'use strict'
var	testim = document.getElementById("testim"),
	testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}
</script>

<script>
    //Filter Recruiters
$('select#sort-recruiters').change(function() {
	var filter = $(this).val();
	filterList(filter);
});

// Recruiters filter function
function filterList(value) {
	var list = $(".actor .recruiter-info");
	$(list).hide();
	if (value == "All") {
		$(".actor").find("article").each(function (i) {
			$(this).show();
		});
	} else {
		// *=" means that if a data-custom type contains multiple values, it will find them
		$(".actor").find("article[data-custom-type*=" + value + "]").each(function (i) {
			$(this).show();
		});
	}
}
</script> 
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
     header("Location: index.php");
     exit();
}
 ?>