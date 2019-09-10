<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Real Estate</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
<link rel="icon" href="images/icon.png">


<style>
.image {
    height: 250px;
}
/*button of get details*/
.:hover {

    color: white;
    background-color: Darkblue;
}
</style>

</head>
<body>

<?php

// Include confi.php
include_once('config.php');
?>
<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader--> 
 
 

<!--Header-->


<?php include 'header.php';?>

<!--Slider-->
<div class="rev_slider_wrapper">
   <div id="rev_slider" class="rev_slider"  data-version="5.0">
      <ul>
         <!-- SLIDE  -->
         <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="images/banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
            <div class="slider-caption tp-caption tp-resizeme"
               data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
               data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
               data-responsive_offset="on"
               data-visibility="['on','on','off','off']"  
               data-start="1300"
               data-transition="fade"
               data-transform_idle="o:1;"
               data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
               data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;">
               <h4 class="bg_blue default_clr">$8,600 Per Month - Apartment</h4>
               <div class="bg_white text-left">
                  <h2>Family House in Hudson</h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br>power nonummy nibh...</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>More Details</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
               </div>
               <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>3 Bedrooms</span> 
                  <span><i class="icon-old-television"></i>TV Lounge</span> 
                  <span><i class="icon-garage"></i>1 Garage</span> 
               </div>
            </div>
         </li>
         <li data-transition="slideleft">
            <img src="images/banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
            <div class="slider-caption tp-caption tp-resizeme"
               data-x="['right','right','center','center']" data-hoffset="['0','0','0','15']" 
               data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
               data-responsive_offset="on" 
               data-visibility="['on','on','off','off']" 
               data-start="1300"
               data-transform_idle="o:1;"
               data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
               data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;">
               <h4 class="bg_blue default_clr pull-right">$8,600 Per Month - Apartment</h4>
               <div class="clearfix"></div>
               <div class="bg_white text-left">
                  <h2>Family House in Hudson</h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br>power nonummy nibh...</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>More Details</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
               </div>
               <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>3 Bedrooms</span> 
                  <span><i class="icon-old-television"></i>TV Lounge</span> 
                  <span><i class="icon-garage"></i>1 Garage</span> 
               </div>
            </div>
         </li>
         <li data-index="rs-106" data-transition="fade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0" data-param1="HTML5 Video" data-description="">
            <img src="video/thumb.jpg"  alt="video slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
            <div class="rs-background-video-layer" 
             data-volume="mute" 
             data-videowidth="100%" 
             data-videoheight="100%" 
             data-videomp4="video/video.mp4" 
             data-videopreload="preload" 
             data-videoloop="loop" 
             data-forceCover="1" 
             data-aspectratio="16:9" 
             data-autoplay="true" 
             data-autoplayonlyfirsttime="true" 
             data-nextslideatend="true">
            </div>
            <div class="slider-caption tp-caption tp-resizeme"
               data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
               data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
               data-responsive_offset="on" 
               data-visibility="['on','on','off','off']" 
               data-start="1500"
               data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
               data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;">
               <h4 class="bg_blue default_clr">$8,600 Per Month - Apartment</h4>
               <div class="bg_white text-left">
                  <h2>Family House in Hudson</h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br>power nonummy nibh...</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>More Details</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
               </div>
               <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>3 Bedrooms</span> 
                  <span><i class="icon-old-television"></i>TV Lounge</span> 
                  <span><i class="icon-garage"></i>1 Garage</span> 
               </div>
            </div>
         </li>
         <li data-transition="slideleft">
            <img src="images/banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
            <div class="slider-caption tp-caption tp-resizeme"
               data-x="['right','right','center','center']" data-hoffset="['0','0','0','15']" 
               data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
               data-responsive_offset="on"
               data-visibility="['on','on','off','off']" 
               data-start="1300"
               data-transform_idle="o:1;"
               data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
               data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;">
               <h4 class="bg_blue default_clr pull-right">$8,600 Per Month - Apartment</h4>
               <div class="clearfix"></div>
               <div class="bg_white text-left">
                  <h2>Family House in Hudson</h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br>power nonummy nibh...</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>More Details</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
               </div>
               <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>3 Bedrooms</span> 
                  <span><i class="icon-old-television"></i>TV Lounge</span> 
                  <span><i class="icon-garage"></i>1 Garage</span> 
               </div>
            </div>
         </li>
      </ul>
   </div>
</div>





<!--Advance Search-->
	<div class="container">
	  <div class="row">
			<div class="col-md-12">
				  <div class="propertydropdown">
					<span class="toggler uppercase default_clr">
						Advanced Search <i class="fa fa-angle-down"></i>
					</span>
				  </div>
			</div>
	  </div>
	</div>
<!-- Property Search area Start -->   
<section class="property-query-area bg_light" style="display:none;">
	<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="uppercase">Advanced Search</h2>
					<p class="heading_space"> Now you can search your property with more filters</p>
				</div>
			</div>
		<div class="row">
			<form class="callus" action="searchproperty.php" method="post">
					<div class="col-md-3 col-sm-6">
						<div class="single-query form-group">
							<input type="text" class="keyword-input" placeholder="Property type(eg.'Rent/Sell')" name="type">
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-query form-group">
							<div class="intro">
								<select name="city">
									<option selected="" value="any" >Location</option>
									<option value="All">All areas</option>
									<option value="Nashik">Nashik</option>
									<option  value="Mumbai">Mumbai</option>
									<option  value="Pune">Pune</option>
									<option  value="Nagpur">Nagpur</option>
									<option  value="Delhi">Delhi</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-query form-group">
							<div class="intro">
							  <select name="protype">
								<option class="active">Property Type</option>
								<option value="all">All Type</option>
								<option value="Apartment">Apartment</option>
								<option value="Vill">Villa</option>
								<option value="Plot">Plot</option>
								<option value="Independent House">Independent House</option>
								<option value="Independent floor">Independent Floor</option>
							  </select>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-query form-group">
							<div class="intro">
							  <select name="status">
								<option class="active">Property Status</option>
								<option value="all">All areas</option>
								<option value="Ready to move">Ready to move </option>
								<option value="Under Construction">Under Construction</option>
							  </select>
							</div>
						</div>
					</div>
				<div class="col-md-3 col-sm-6">
					<div class="row search-2">
							<div class="col-md-6 col-sm-6">
								<div class="single-query form-group">
									<div class="intro">
										<select name="bedroom">
											<option class="active">Min Beds</option>
											<option name="1">1</option>
											<option name="2">2</option>
											<option name="3">3</option>
											<option name="4">4</option>
											<option name="6">5</option>
											
										</select>
									</div>
								</div>
							</div>
						<div class="col-md-6 col-sm-6">
							<div class="single-query form-group">
								<div class="intro">
									  <select name="bathroom">
										<option class="active">Min Baths</option>
										<option name="1">1</option>
										<option name="2">2</option>
										<option name="3">3</option>
										<option name="4">4</option>
										<option name="5">5</option>
									   
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="row">
						<div class="col-sm-6">
							  <div class="single-query form-group">
								<input type="text" class="keyword-input" placeholder="Min Area(sq ft)" name="builtup">
							  </div>
						</div>
						<div class="col-sm-6">
							<div class="single-query form-group">
								<input type="text" class="keyword-input" placeholder="Max Area(sq ft)"  name="builtup">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="row">
									<div class="col-sm-6">
										  <div class="single-query form-group">
											<input type="text" class="keyword-input" placeholder="Min Price" name="cost">
										  </div>
									</div>
									<div class="col-sm-6">
										  <div class="single-query form-group">
											<input type="text" class="keyword-input" placeholder="Max Price" name="cost">
										  </div>
									</div>
							</div>
						</div>
							<div class="col-md-4 text-right form-group">
								<a href="searchproperty.php"> <button type="submit" class="btn-blue border_radius top15" name="search">Search</button></a>
							</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
	<!--</div>
		<div>

			<div class="group-button-search">
			  <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
				<i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
				<div class="text-1">Show more search options</div>
				<div class="text-2 hide">less more search options</div>
			  </a>
			</div>
			<div class="search-propertie-filters collapse">
				<div class="container-2">
					<div class="row">
					  <div class="col-md-3 col-sm-3 col-xs-4">
							<div class="search-form-group white">
							  <input type="checkbox" name="check-box" />
							  <span>Air Conditioning</span>
							</div>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-4">
							<div class="search-form-group white">
							  <input type="checkbox" name="check-box" />
							  <span>Balcony</span>
							</div>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-4">
							<div class="search-form-group white">
							  <input type="checkbox" name="check-box" />
							  <span>Gas Heat</span>
							</div>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-4">
							<div class="search-form-group white">
							  <input type="checkbox" name="check-box" />
							  <span>Washer and Dryer</span>
							</div>
					  </div>
					</div>
					<div class="row">
					  <div class="col-md-3 col-sm-3 col-xs-4">
						<div class="search-form-group white">
						  <input type="checkbox" name="check-box" />
						  <span>TV Cable</span>
						</div>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-4">
						<div class="search-form-group white">
						  <input type="checkbox" name="check-box" />
						  <span>Home Theater</span>
						</div>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-4">
							<div class="search-form-group white">
							  <input type="checkbox" name="check-box" />
							  <span>Swimming Pool</span>
							</div>
					  </div>
					  <div class="col-md-3 col-sm-3 col-xs-4">
						<div class="search-form-group white">
						  <input type="checkbox" name="check-box" />
						  <span>Rap music</span>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>	
	</div>-->


<!-- Property Search End -->

<!-- Latest Property -->
	<?php
		$id=$_GET['id'];
		$query = "SELECT * FROM propertydetails"; 
		$result = mysqli_query($con,$query);
	?>
	
<section id="property" class="padding">
  <div class="container">
    <div class="row">
		<div class="col-xs-12">
			<h2 class="uppercase">latest Properties</h2>
			<p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable 
			  prices. 
			</p>
		</div>
    </div>
		
    <div class="row">
	
	 <?php
	
		 while($row = mysqli_fetch_assoc($result))
		 { 
	
?>

      <div class="col-sm-6">
	  
        <div class="property_item heading_space">
			<div class="image"> 
				<a href="property_detail3.php?id=<?php echo $row['id']; ?>"><img src='<?php echo $row['image']; ?>'  alt="latest property" class="img-responsive" height="150px" ></a> 
			</div>
			<div class="price default_clr clearfix bottom20">
				<span class="tag pull-left">For <?php echo $row['type']; ?></span>
				<h4 class="pull-right"><?php echo $row['cost']; ?> <small><?php echo $row['protype']; ?></small></h4>
			</div>
			<div class="proerty_content">
				<div class="proerty_text">
				  <h3 class="bottom15"> <a href="property_detail1.html"><?php echo $row['protype']; ?> <?php echo $row['id']; ?></a></h3>
				  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta 
					nobis eleifend option congue nihil imperdiet doming…
				  </p>
				</div>
            <div class="favroute clearfix">
				<div class="col-md-12">
				  <p class="pull-md-left"><?php echo $row['locality']; ?>,<?php echo $row['city']; ?>
				 
				  </div>
				  <div class="col-md-12">
				  <p>Contact Persone</p>&nbsp;&nbsp;:&nbsp;<?php echo $row['nameby']; ?></p>
				  (<?php echo $row['category']; ?>)
				 
				  <a href="property_detail3.php?id=<?php echo $row['id']; ?>"><button>Get Details</button></a>
				  </div>
            </div>
            <div class="toggle_share collapse" id="one">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i><?php echo $row['builtup']; ?>sq.ft</span> <span><i class="icon-bed"></i><?php echo $row['bedroom']; ?>Bedroom</span> <span><i class="icon-safety-shower"></i><?php echo $row['bathroom']; ?>Bathroom</span><!-- <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> --></div>
          </div>
        </div>
		 
      </div>
	 <?php
		 }
				?>
	  </div>
	  
    <!-- <div class="col-sm-6">
        <div class="property_item heading_space">
          <div class="image"><a href="property_detail2.html"> <img src="images/best-deal2.jpg" alt="latest property" class="img-responsive"></a> </div>
          <div class="price default_clr clearfix bottom20">
            <span class="tag pull-left">For Rent</span>
            <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"> <a href="property_detail2.html">Unique Villa With Private Beach</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">45 Regent Street, London, UK</p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#two" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="two">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
          </div>
        </div>
      </div>-->
     <!-- <div class="col-sm-6">
        <div class="property_item heading_space">
          <div class="image"> <a href="property_detail3.html"><img src="images/latest3.jpg" alt="latest property" class="img-responsive"></a> </div>
          <div class="price default_clr clearfix bottom20">
            <span class="tag pull-left">For Rent</span>
            <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"> <a href="property_detail3.html">Unique Villa With Private Beach</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">45 Regent Street, London, UK</p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="three">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
          </div>
        </div>
      </div>-->
     <!-- <div class="col-sm-6">
        <div class="property_item heading_space">
          <div class="image"><a href="property_detail1.html"><img src="images/latest4.jpg" alt="latest property" class="img-responsive"></a> </div>
          <div class="price default_clr clearfix bottom20">
            <span class="tag pull-left">For Rent</span>
            <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"> <a href="property_detail1.html">Unique Villa With Private Beach</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">45 Regent Street, London, UK</p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#four" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="four">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
          </div>
        </div>
      </div>-->
     <!-- <div class="col-sm-6">
        <div class="property_item heading_space">
          <div class="image"><a href="property_detail2.html"><img src="images/latest5.jpg" alt="latest property" class="img-responsive"></a> </div>
          <div class="price default_clr clearfix bottom20">
            <span class="tag pull-left">For Rent</span>
            <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"> <a href="property_detail2.html">Unique Villa With Private Beach</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">45 Regent Street, London, UK</p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#five" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="five">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
          </div>
        </div>
      </div>-->
     <!-- <div class="col-sm-6">
        <div class="property_item heading_space">
          <div class="image"><a href="property_detail3.html"><img src="images/latest6.jpg" alt="latest property" class="img-responsive"></a> </div>
          <div class="price default_clr clearfix bottom20">
            <span class="tag pull-left">For Rent</span>
            <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"> <a href="property_detail3.html">Unique Villa With Private Beach</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">45 Regent Street, London, UK</p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="six">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
          </div>
        </div>
      </div>-->
	  	
    </div>

	
    <div class="row">
      <div class="col-md-12 text-center top15">
        <ul class="pager">
          <li><a href="#.">1</a></li>
          <li class="active"><a href="#.">2</a></li>
          <li><a href="#.">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
</form>
<!--Latest Property Ends-->
		


<!--Best Deal Properties-->
<section id="deals" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Best Deal Properties</h2>
        <p class="heading_space">We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable prices.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="full-slider" class="owl-carousel">
          <div class="item">
            <div class="media deal_media proerty_content">
              <div class="media-left">
                <a href="property_detail1.html">
                <img class="media-object" src="images/best-deal1.jpg" alt="...">
                </a>
              </div>
              <div class="media-body">
                <div class="price default_clr">
                  <h4>$8,600 Per Month - <small>Family Home</small></h4>
                </div>
                <div class="proerty_text">
                  <h3 class="bottom15"> <a href="property_detail1.html">Unique Villa With Private Beach</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
                </div>
                <div class="dealer clearfix">
                  <i class="author"><img src="images/author.png" alt="author"></i>
                  <h4>Bohdan Kononets &nbsp; <small>- agent</small></h4>
                  <span><i class="icon-phone4"></i>321 233 5566</span> 
                  <a href="mailto:michael@castle.com"><i class="icon-mail-envelope-closed3"></i>michael@castle.com</a> 
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">45 Regent Street, London, UK</p>
                  <ul class="pull-right">
                    <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                    <li><a href="#seven" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>
                <div class="toggle_share collapse" id="seven">
                  <ul>
                    <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                    <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                  </ul>
                </div>
                <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                  <span><i class="icon-bed"></i>3 Bedrooms</span> 
                  <span><i class="icon-safety-shower"></i>2 Bedrooms</span> 
                  <span><i class="icon-old-television"></i>TV Lounge</span> 
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="media deal_media proerty_content">
              <div class="media-left">
                <a href="property_detail2.html">
                <img class="media-object" src="images/best-deal2.jpg" alt="...">
                </a>
              </div>
              <div class="media-body">
                <div class="price default_clr">
                  <h4>$8,600 Per Month - <small>Family Home</small></h4>
                </div>
                <div class="proerty_text">
                  <h3 class="bottom15"> <a href="property_detail2.html">Unique Villa With Private Beach</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
                </div>
                <div class="dealer clearfix">
                  <i class="author"><img src="images/author.png" alt="author"></i>
                  <h4>Bohdan Kononets &nbsp; <small>- agent</small></h4>
                  <span><i class="icon-phone4"></i>321 233 5566</span> 
                  <a href="mailto:michael@castle.com"><i class="icon-mail-envelope-closed3"></i>michael@castle.com</a> 
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">45 Regent Street, London, UK</p>
                  <ul class="pull-right">
                    <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                    <li><a href="#eight" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>
                <div class="toggle_share collapse" id="eight">
                  <ul>
                    <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                    <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                  </ul>
                </div>
                <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                  <span><i class="icon-bed"></i>3 Bedrooms</span> 
                  <span><i class="icon-safety-shower"></i>2 Bedrooms</span> 
                  <span><i class="icon-old-television"></i>TV Lounge</span> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Best Deal Properties Ends-->



<!--Featured Property-->
<!--<section id="featured_property" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Featured Properties</h2>
        <p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable 
          prices. 
        </p>
      </div>
    </div>
    <div class="row">
      <div class="three-item owl-carousel">
        <div class="item feature_item">
          <div class="image"> <img src="images/featured1.jpg" alt="Featured Property"> 
            <span class="price default_clr">$8,600 Per Month</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="property_detail1.html">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
              <a href="property_detail1.html" class="btn-more">
              <i><img src="images/arrowl.png" alt="arrow"></i>
              <span>More Details</span>
              <i><img src="images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"> <img src="images/featured2.jpg" alt="Featured Property">
            <span class="price default_clr">$8,600 Per Month</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="property_detail2.html">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
              <a href="property_detail2.html" class="btn-more">
              <i><img src="images/arrowl.png" alt="arrow"></i>
              <span>More Details</span>
              <i><img src="images/arrowr.png" alt="arrow"></i>
              </a> 
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft </span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"> <img src="images/featured3.jpg" alt="Featured Property">
            <span class="price default_clr">$8,600 Per Month</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="property_detail3.html">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
              <a href="property_detail3.html" class="btn-more">
              <i><img src="images/arrowl.png" alt="arrow"></i>
              <span>More Details</span>
              <i><img src="images/arrowr.png" alt="arrow"></i>
              </a> 
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"> <img src="images/listing4.jpg" alt="Featured Property"> 
            <span class="price default_clr">$8,600 Per Month</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="property_detail1.html">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
              <a href="property_detail1.html" class="btn-more">
              <i><img src="images/arrowl.png" alt="arrow"></i>
              <span>More Details</span>
              <i><img src="images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"> <img src="images/listing5.jpg" alt="Featured Property"> 
            <span class="price default_clr">$8,600 Per Month</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="property_detail2.html">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
              <a href="property_detail2.html" class="btn-more">
              <i><img src="images/arrowl.png" alt="arrow"></i>
              <span>More Details</span>
              <i><img src="images/arrowr.png" alt="arrow"></i>
              </a> 
            </div>
            <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"> <img src="images/listing6.jpg" alt="Featured Property"> 
            <span class="price default_clr">$8,600 Per Month</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="property_detail3.html">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
              <a href="property_detail3.html" class="btn-more">
              <i><img src="images/arrowl.png" alt="arrow"></i>
              <span>More Details</span>
              <i><img src="images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta"> <span> <i class="icon-select-an-objecto-tool"></i>4800 sq ft </span> <span> <i class="icon-bed"></i>2 Office Rooms </span> <span> <i class="icon-safety-shower"></i>1 Bathroom </span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!--Featured Property Ends-->

<!--Parallax-->
<section id="parallax_four" class="padding ">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 bottom30">
        <h2>We Don’t Just Find <br> <span class="t_yellow">Great Deals</span> We Create Them</h2>
        <div class="bottom15"></div>
        <div class="row number-counters text-center">
      <div class="col-sm-4 col-xs-4 counters-item margin40">
        <i class="icon-icons215"></i>
        <strong data-to="4195">0</strong>
        <p>Properties Sale</p>
      </div>
      <div class="col-sm-4 col-xs-4 counters-item margin40">
        <i class="icon-icons230"></i>
        <strong data-to="123">0</strong>
        <p>Total Agents</p>
      </div>
      <div class="col-sm-4 col-xs-4 counters-item margin40">
        <i class="icon-smiling-face"></i>
        <strong data-to="100">0</strong> %
        <p>Satisfied customers</p>
      </div>
    </div>

      </div>
    </div>
  </div>
</section>
<!--About Owner ends-->

<!--Testinomials-->
<section id="testinomialBg" class="padding bg_light">
  <div id="agent-2" class="padding_bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">AGENTS YOU CAN TRUST</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent3.jpg" alt="Agents">
            <div class="img-info">
              <h3><?php echo $row['nameby']; ?></h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent1.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent2.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</section>
<!--Testinomials ends-->



<!--Testinomials-->
<section id="testinomial" class="padding" >
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">Happy Customers</h2>
        <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
      <div class="col-sm-6">
        <div class="testinomial_wrap heading_space clearfix">
          <div class="testinomial_text border_radius text-center bottom30">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing.</p>
            <i><img src="images/quote-left.png" alt=""></i>
          </div>
          <div class="col-xs-12 customer">
            <img src="images/author.png" alt="happy client">
            <h4> SAM NICHOLSON</h4>
            <span>( NorthMarq Capital  )</span>
            <img src="images/stars.png" alt="rating" class="rating pull-xs-right">
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="testinomial_wrap heading_space clearfix">
          <div class="testinomial_text border_radius text-center bottom30">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing.</p>
            <i><img src="images/quote-left.png" alt=""></i>
          </div>
          <div class="col-xs-12 customer">
            <img src="images/author.png" alt="happy client">
            <h4> SAM NICHOLSON</h4>
            <span>( NorthMarq Capital  )</span>
            <img src="images/stars.png" alt="rating" class="rating pull-xs-right">
          </div>
        </div>
      </div>
      <div class="col-xs-12 text-center">
        <a href="javascript:void(0)" class="cd-see-all btn-white border_radius"><i class="fa fa-th" aria-hidden="true"></i>view all</a>
      </div>
    </div>
  </div>
</section>
<!--testinomial collepse-->
<div class="cd-testimonials-all">
  <div class="cd-testimonials-all-wrapper">
    <ul>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
      </li>
    </ul>
    <a href="#0" class="close-btn">Close</a>
  </div>
</div>





<!--Footer-->
<footer class="padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="javascript:void(0)" class="logo bottom30"><img src="images/logo.png" alt="logo"></a>
          <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
            tempor cum consectetuer 
            adipiscing.
          </p>
          <p class="bottom15">If you are interested in castle do not wait and <a href="javascript:void(0)">BUY IT NOW!</a></p>
          <ul class="social_share">
            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
            <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Search by Area</h4>
          <ul class="area_search">
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Bayonne, New Jersey</a></li>
            <li class="active"><a href="javascript:void(0)"><i class="icon-icons74"></i>Greenville, New Jersey</a></li>
            <li><a href="javascript:void(0)"> <i class="icon-icons74"></i>The Heights, New Jersey</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>West Side, New York</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Upper East Side, New York</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Latest News</h4>
          <div class="media">
            <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Get in Touch</h4>
          <ul class="getin_touch">
            <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li>
            <li><a href="javascript:void(0)"><i class="icon-mail-envelope-open"></i>info@castle.com</a></li>
            <li><a href="javascript:void(0)"><i class="icon-global"></i>www.castle.com</a></li>
            <li><i class="icon-icons74"></i>Castle Melbourne, Merrick Way,FL 12345 australia</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--CopyRight-->
<div class="copyright">
  <div class="copyright_inner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <p>Copyright &copy; 2017 <span>Castle</span>. All rights reserved.</p>
        </div>
        <div class="col-md-5 text-right">
          <p>Designed by <a href="javascript:void(0)">Brighthemes</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery-2.1.4.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script src="js/selectbox-0.2.min.js"></script>
<script src="js/zelect.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
</body>
</html>

