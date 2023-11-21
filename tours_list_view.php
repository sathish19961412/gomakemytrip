<?php
//getting id from url
include_once('server.php');

$id = $_GET['view']; 

//selecting data associated with this particular id
$query= mysqli_query($conn, "SELECT * FROM admin_artist_insertion WHERE id=$id");
?>

<!DOCTYPE html>
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
    <link rel="stylesheet" media="screen" href="assets/css/responsive.css">
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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=League+Gothic&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=League+Gothic&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <!--Animate CSS-->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>shinestarz</title>
  </head>
  <style>
    #padding-1
    {
        padding-top:15px;
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
        background:url("assets/banner/artist.gif");
        background-size: cover;
        background-position: center;
        background-repeat:no-repeat;
        height: 30vh;
    }
    #icon-size
{
    font-size: 35px;
    position: absolute;
    left: 25px;
    top: 40px;
    color: #ffffff;
}
#icon-size1
{
    font-size: 35px;
    position: absolute;
    left: 25px;
    top: 132px;
    color: #ffffff;
}
  </style>
  <body>
   <?php include_once "header.php";?>
   <section id="artist">
       <div class="container">
           <div class="row">
                <div class="col-md-12">

                </div>
           </div>
       </div>
   </section>
   <section>
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pt-5">
                        <h3 style="font-weight: 800;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">ARTIST</h3>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                    </div>
                </div>
            </div>
            <div class="row" id="select">
                <div class="col-md-6">
                    <div class="text-center pt-2">
                        <div>
                            <h3 class="line">BEST ARTIST IN TAMILNADU</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">&nbsp;</div>
                <!-- <div class="col-md-2">
                    <select class="custom-select" id="inputGroupSelect03">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="custom-select" id="inputGroupSelect03">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="custom-select" id="inputGroupSelect03">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div> -->
            </div>
       </div>
   </section>
   <section class="artist-2">
       <div class="container">
           <div class="row">
                <div class="col-md-9" id="artist-2">
                <?php while($row=mysqli_fetch_array($query)){?>
                    <div class="row" id="art" >
                        <div class="col-md-3">
                            <div class="artist-1">
                            <div class="text-center mt-3">
                                <img src="assets/upload/<?php echo $row['photo'];?>" class="img-fluid">
                            </div>
                            </div>
                        </div>
                     
                        <div class="col-md-9 p-3">
                            <!-- <div class="d-flex">
                                 <span class="text-muted">MBBS, MS</span>
                            </div> -->
                            <div class="d-flex">
                                <h5>
                                    <?php echo $row['name']; ?>
                                </h5>
                            </div>
                            <!-- <div class="d-flex">
                                 <span class="text-muted">Fee: Rs.350</span>
                            </div> -->
                            <div class="d-flex pt-2">
                                <p><img src="assets/img/verified.png" class="img-fluid"><span class="span-1">Registration Verified</span></p>
                            </div>
                            <div class="d-flex">
                                <p><span class="span-1">Rating:</span> <img src="assets/img/rating.png" class="img-fluid"> <span class="text-muted muted-1">10 Vote(s)</span></p>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Age </span><span class="muted-3">  <span class="muted-4"><?php echo $row['age']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Members</span><span class="muted-2"><?php echo $row['members']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Gender</span><span class="muted-2"><?php echo $row['gender']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Email</span><span class="muted-3"><?php echo $row['email']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Mobile</span> <span class="muted-4"><?php echo $row['mobile']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Country</span> <span class="muted-4"><?php echo $row['country']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">City</span> <span class="muted-4"><?php echo $row['city']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">State</span> <span class="muted-4"><?php echo $row['state']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">youtube Link</span> <span class="muted-4"><?php echo $row['youtubelink']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Facebook Link</span> <span class="muted-4"><?php echo $row['facebooklink']; ?></span>
                            </div>
                            <div class="d-flex">
                                <span class="span-2">Instagrama Link</span> <span class="muted-4"><?php echo $row['instagramlink']; ?></span>
                            </div>
                           
                            <div class="d-flex mt-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p align="justify" id="paragraph-2">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <p align="justify" id="paragraph-2">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <p align="justify" id="paragraph-2">
                                             There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                </div>
                <div class="col-md-3 mb-5">
                    <div style="background:#28a745;border-radius: 25px;" class="appointment">
                        <h6 class="text-white">SHARE YOUR FRIENDS</h6>
                    </div>
                    <div id="icon-size">
                      <i class="fa fa-whatsapp" aria-hidden="true" ></i>
                    </div>

                    <div style="background:#0062cc;border-radius: 25px;" class="appointment mt-5">
                        <h6 class="text-white">SHARE YOUR FRIENDS</h6>
                    </div>
                    <div id="icon-size1">
                      <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </div>
                </div>
           </div>
       </div>
   </section>
  
   
   <?php include_once "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--jQuery-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--Popper Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!--Bootstrap 4 Js-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <!-- SLIDER REVOLUTION -->
<!--BootNavbar Js-->
<script src="js/bootnavbar.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
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


</body>
</html>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script  type="text/css" src="js/bootstrap.min.js"></script>
	<script
	     src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
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