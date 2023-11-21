<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from html.physcode.com/travel/tours-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 07:51:09 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width">
	<title>go make yours trips|india</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.html">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
    
</head>
<style>
    .d-flex{
        display:flex;
        justify-content:center;
    }
.content-area {
    padding-top: 0px;
    padding-bottom: 30px;
}
.wrapper-content {
    background-color:#f9f8f8;
}
  /*Paganition*/
  .pagination {
	 display: block;
	 width: 75%;
	 margin: 1em auto;
	 text-align: center;
     padding: 10px;
}
 .pagination:after {
	 content: '';
	 clear: both;
}
 .pagination-button {
	 display: inline-block;
	 padding: 5px 10px;
	 border: 1px solid #e0e0e0;
	 background-color: #eee;
	 color: #333;
	 cursor: pointer;
	 transition: background 0.1s, color 0.1s;
}
 .pagination-button:hover {
	 background-color: #ddd;
	 color: #36c;
}
 .pagination-button.active {
	background-color: #ec2b20;
    border-color: #f1f8ea;
    color: #fff;
}
 .pagination-button:first-of-type {
	 border-radius: 18px 0 0 18px;
}
 .pagination-button:last-of-type {
	 border-radius: 0 18px 18px 0;
}
/* arbitrary styles */
 .heading {
	 text-align: center;
	 max-width: 500px;
	 margin: 20px auto;
}
 .article-loop {
	 display: block;
	 width: 100%;
	 padding: 1em 2em;
	 margin: 1em auto;
	 border: 1px solid #ddd;
}

</style>
<body class="archive travel_tour travel_tour-page">
<div class="wrapper-container">
    <?php include_once('header.php'); ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background:linear-gradient(45deg, #0000005e, transparent),url('assets/upload/UDAIPUR.jpg');">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li>Best Visit In Cambodia</li>
					</ul>
				</div>
				<h1 class="heading_primary">Best Visit In Cambodia</h1></div>
		</div>
        <section>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                             <h2 class="text-black" style="font-weight:500;">Best Visit In Cambodia Places</h2>
                        </div>
                    </div>
                </div>
             </div>
        </section>
	   
        <section>
            <div class="container">
                    <!-- <div class="row">
                      
                        <div class="col-md-2 mt-5">&nbsp;</div>
                        <div class="col-md-1 mt-5">
                           <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    3 star
                                </label>
                            </div>
                        </div>
                        <div class="col-md-1 mt-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    4 star
                                </label>
                            </div>
                        </div>

                        <div class="col-md-1 mt-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                                <label class="form-check-label" for="exampleRadios3">
                                    5 star
                                </label>
                            </div>
                        </div>
                        <div class="col-md-1 mt-5">&nbsp;</div>
                        <div class="col-md-2">
                            <div class="card-body">
                                <form id="price-range-form">
                                    <label for="min-price" class="form-label">Min price: </label>
                                    <span id="min-price-txt">₹0</span>
                                    <input type="range" class="form-range" min="0" max="50000" id="min-price" step="1" value="0">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">&nbsp;</div>
                    </div> -->
            <?php
                include_once 'server.php'; 
                $query=mysqli_query($conn,"SELECT*FROM tourslist WHERE country='cambodia';");
                while($row=mysqli_fetch_array($query))
                {
                                       
                    $title = $row['title'];
                    $subtitle = $row['subtitle'];
                    $description = $row['description'];
                    $detailstatus = $row['detailstatus'];
                    $price = $row['price'];
                    $toursimage=$row['toursimage'];
                    $tripprice=$row['tripprice'];
                    $lowprice  = $row['lowprice'];
                ?>
                <div class="article-loop" >
                    <div id="myTable">
                        <div  class="row des-border shadow-lg " id="display-items-div">
                            <div class="col-md-3 p-10px">
                                <img src="assets/upload/<?php echo  $photo  = $row['toursimage']; ?>" class="img-height">
                            </div>

                            
                            <div class="col-md-6 part-2">
                                <div class="" >
                                    <span>
                                        <a href="#" rel="bookmark" id="shape-1"><span><i class="fa fa-plane" aria-hidden="true"></i> 
                                        <?php echo $row['title']; ?></span> 
                                        <span style="color:#0e850c;margin-left:20px;"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                        </a>
                                    </span>
                                </div>
                                <div class="">
                                    <span>
                                    <a href="#" rel="bookmark" id="shape-1"><span><i class="fa fa-tags" aria-hidden="true"></i>   <?php echo $row['subtitle']; ?></span></a>
                                    </span>
                                </div>
                                <div class="description d-flex text-justify" id="span-font">
                                    <span class="campodia-des"><?php echo $row['description']; ?></span>
                                </div>
                                <div>
                                    <a href="hotel_details.php?view=<?php echo $row['id'];?>"><button class="read-more-btn-style">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
                                </div>
                            </div>
                        
                            <div class="col-md-3 padding-15px part-3">
                                <div>
                                    <div class="makemytrip-border">
                                        <p class="makemytrip">GoMakeMyTrip<br><i class="fa fa-check icon-tick-free-can" aria-hidden="true"></i><span class="free-can"><?php echo $row['detailstatus']; ?></span></p>
                                        <div class="flex-price">
                                            <p class="price-amount">₹<?php echo $row['price'];?></p>
                                            <div class="ml-auto">
                                                <a href="view_deals.php"><button class="button-view-deal">view deal  <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-price">
                                        <p class="trip">Highest Price<br>₹<?php echo $row['tripprice'];?></p>
                                        <p class="our-lowest trip">lowest price:<br>₹<?php echo $row['lowprice'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </section>
	</div>
   <?php include_once('footer.php'); ?>
</div>
<!--end coppyright-->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='assets/js/vendors.js'></script>
<script type='text/javascript' src='assets/js/theme.js'></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<script>
    /*
 * jQuery Pagination
 * Author: Austin Wulf (@austinwulf)
 *
 * Call the paginate method on an array
 * of elements. Accepts # of items per page
 * as an argument. Defaults to 5.
 *
 * Example:
 *     $(selector).paginate(3);
 *
 * Released under the MIT License.
 *
 * v 1.0
 */

(function($){
     
    var paginate = {
        startPos: function(pageNumber, perPage) {
            // determine what array position to start from
            // based on current page and # per page
            return pageNumber * perPage;
        },

        getPage: function(items, startPos, perPage) {
            // declare an empty array to hold our page items
            var page = [];

            // only get items after the starting position
            items = items.slice(startPos, items.length);

            // loop remaining items until max per page
            for (var i=0; i <perPage; i++) {
                page.push(items[i]); }

            return page;
        },

        totalPages: function(items, perPage) {
            // determine total number of pages
            return Math.ceil(items.length / perPage);
        },

        createBtns: function(totalPages, currentPage) {
            // create buttons to manipulate current page
            var pagination = $('<div class="pagination" />');

            // add a "first" button
            pagination.append('<span class="pagination-button">&laquo;</span>');

            // add pages inbetween
            for (var i=1; i <= totalPages; i++) {
                // truncate list when too large
                if (totalPages > 5 && currentPage !== i) {
                    // if on first two pages
                    if (currentPage === 1 || currentPage === 2) {
                        // show first 5 pages
                        if (i > 5) continue;
                    // if on last two pages
                    } else if (currentPage === totalPages || currentPage === totalPages - 1) {
                        // show last 5 pages
                        if (i < totalPages - 4) continue;
                    // otherwise show 5 pages w/ current in middle
                    } else {
                        if (i < currentPage - 2 || i > currentPage + 2) {
                            continue; }
                    }
                }

                // markup for page button
                var pageBtn = $('<span class="pagination-button page-num" />');

                // add active class for current page
                if (i == currentPage) {
                    pageBtn.addClass('active'); }

                // set text to the page number
                pageBtn.text(i);

                // add button to the container
                pagination.append(pageBtn);
            }

            // add a "last" button
            pagination.append($('<span class="pagination-button">&raquo;</span>'));

            return pagination;
        },

        createPage: function(items, currentPage, perPage) {
            // remove pagination from the page
            $('.pagination').remove();

            // set context for the items
            var container = items.parent(),
                // detach items from the page and cast as array
                items = items.detach().toArray(),
                // get start position and select items for page
                startPos = this.startPos(currentPage - 1, perPage),
                page = this.getPage(items, startPos, perPage);

            // loop items and readd to page
            $.each(page, function(){
                // prevent empty items that return as Window
                if (this.window === undefined) {
                    container.append($(this)); }
            });

            // prep pagination buttons and add to page
            var totalPages = this.totalPages(items, perPage),
                pageButtons = this.createBtns(totalPages, currentPage);

            container.after(pageButtons);
        }
    };

    // stuff it all into a jQuery method!
    $.fn.paginate = function(perPage) {
        var items = $(this);

        // default perPage to 5
        if (isNaN(perPage) || perPage === undefined) {
            perPage = 5; }

        // don't fire if fewer items than perPage
        if (items.length <= perPage) {
            return true; }

        // ensure items stay in the same DOM position
        if (items.length !== items.parent()[0].children.length) {
            items.wrapAll('<div class="pagination-items" />');
        }

        // paginate the items starting at page 1
        paginate.createPage(items, 1, perPage);

        // handle click events on the buttons
        $(document).on('click', '.pagination-button', function(e) {
            // get current page from active button
            var currentPage = parseInt($('.pagination-button.active').text(), 10),
                newPage = currentPage,
                totalPages = paginate.totalPages(items, perPage),
                target = $(e.target);

            // get numbered page
            newPage = parseInt(target.text(), 10);
            if (target.text() == '«') newPage = 1;
            if (target.text() == '»') newPage = totalPages;

            // ensure newPage is in available range
            if (newPage > 0 && newPage <= totalPages) {
                paginate.createPage(items, newPage, perPage); }
        });
    };

})(jQuery);

/* This part is just for the demo,
not actually part of the plugin */
$('.article-loop').paginate(5);
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

<!-- Mirrored from html.physcode.com/travel/tours-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 07:51:09 GMT -->
</html>





