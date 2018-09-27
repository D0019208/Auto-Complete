<?php 
$_SESSION["name"] = filter_input(INPUT_POST, "name");
$_SESSION["email"] = filter_input(INPUT_POST, "email");
$_SESSION["rooms"] = filter_input(INPUT_POST, "rooms");
$_SESSION["adults"] = filter_input(INPUT_POST, "adults");
$_SESSION["expiry-day"] = filter_input(INPUT_POST, "expiry-day");
$_SESSION["expiry-month"] = filter_input(INPUT_POST, "expiry-month");
$_SESSION["expiry-year"] = filter_input(INPUT_POST, "expiry-year");
$_SESSION["country"] = filter_input(INPUT_POST, "country");
$_SESSION["county"] = filter_input(INPUT_POST, "county");
$_SESSION["town"] = filter_input(INPUT_POST, "town");
$_SESSION["message"] = filter_input(INPUT_POST, "message");

include 'header_1.php';
?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Best hotels in the world</h1>
                <p class="animated fadeInUp">The most luxurious hotels of the world with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    
<h3>Reservation</h3>
<div class="limiter">
		<!--<div class="container-table100">-->
			<!--<div class="wrap-table100">-->
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
                                                                <th class="column100 column1" data-column="column1"></th>
                                                                <th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column3" data-column="column3">Email</th>
								<th class="column100 column4" data-column="column4">No. of Rooms</th>
								<th class="column100 column5" data-column="column5">No. of Adults</th>
								<th class="column100 column6" data-column="column6">Day</th>
								<th class="column100 column7" data-column="column7">Month</th>
								<th class="column100 column8" data-column="column8">Year</th>
                                                                <th class="column100 column9" data-column="column9">Country</th>
                                                                <th class="column100 column10" data-column="column10">County</th>
                                                                <th class="column100 column11" data-column="column11">Town</th>
                                                                <th class="column100 column11" data-column="column12">Message</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Home Details</td>
								<td class="column100 column2" data-column="column2"><?php echo $_SESSION["name"]; ?></td>
								<td class="column100 column3" data-column="column3"><?php echo $_SESSION["email"]; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $_SESSION["rooms"]; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $_SESSION["adults"]; ?></td>
								<td class="column100 column6" data-column="column6"><?php echo $_SESSION["expiry-day"]; ?></td>
								<td class="column100 column7" data-column="column7"><?php echo $_SESSION["expiry-month"]; ?></td>
								<td class="column100 column8" data-column="column8"><?php echo $_SESSION["expiry-year"]; ?></td>
                                                                <td class="column100 column9" data-column="column9"><?php echo $_SESSION["country"]; ?></td>
                                                                <td class="column100 column10" data-column="column10"><?php echo $_SESSION["county"]; ?></td>
                                                                <td class="column100 column11" data-column="column11"><?php echo $_SESSION["town"]; ?></td>
                                                                <td class="column100 column11" data-column="column12"><?php echo $_SESSION["message"]; ?></td>
                                                                
							</tr>
                                                        <tr class="row100">
								<td class="column100 column1" data-column="column1">Your private caretaker</td>
								<td class="column100 column2" data-column="column2">John Goodman</td>
								<td class="column100 column3" data-column="column3">john@gmail.com</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">15</td>
								<td class="column100 column7" data-column="column7">02</td>
								<td class="column100 column8" data-column="column8">18</td>
                                                                <td class="column100 column9" data-column="column9">Ireland</td>
                                                                <td class="column100 column10" data-column="column10">Cork</td>
                                                                <td class="column100 column11" data-column="column11">Cork</td>
                                                                <td class="column100 column11" data-column="column12">Hello! I am your caretaker!</td>
							</tr>
							
						</tbody>
					</table>
				</div>

				
			</div>
		</div>
	</div>
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>