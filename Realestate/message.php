<?php include 'header.php'; ?>
<body>
<?php
session_start();
include 'config.php';

$id= $_GET['id'];
$con = mysqli_connect('localhost','root','','demo6');
$userprofile = $_SESSION['username'];
$query = "SELECT * FROM registration  WHERE username = '$userprofile'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);



?>

<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader--> 





<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Favorite properties</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">My properties</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- My - Property Start -->
<section id="agent-2-peperty" class="my-pro padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <ul class="f-p-links margin_bottom">
          <li><a href="profile.php" ><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="my_properties.php" ><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="submit_property.php?username=<?php echo $result['username']; ?>"><i class="icon-icons215"></i> Submit Property</a></li>
          <li><a href="favorite_properties.php" ><i class="icon-icons215"></i> Send Feedback</a></li>
		  <li><a href="message.php"><i class="icon-lock-open3" class="active"></i>Messeges</a></li>
		  <li><a href="enquiry_Report.php"></i>Report</a></li>
          <li><a href="logout.php"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="row bottom30">
      <div class="col-md-12 text-center">
        <h2 class="text-uppercase">My Properties</h2>
      </div>
    </div>
  </div>
  
  <?php
  
		if(['username']== $Name)
		{
			
			$id=$_GET['id'];
			
			$con = mysqli_connect('localhost','root','','demo6');
			$Name= $_SESSION['username'];


			$query = "SELECT * FROM contact where contactto = '$Name'"; 
			$result = mysqli_query($con,$query);
		}
	?>
  <table id="example2" class="table table-bordered  ">
		<tr>
                  
				 
				  
				  <th>id</th>
				  <th>Full Name</th>
				  <th>Mobile</th>
				  <th>Email</th>
				  <th>Message</th>
				  
				  
         </tr>
		 <?php
		 while($row = mysqli_fetch_array($result))
		 { 
?>
		  <tr>
				
				
				
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['FullName']; ?></td>
				<td><?php echo $row['Number']; ?></td>
				<td><?php echo $row['Email']; ?></td>

				<td><?php echo $row['Msg']; ?></td>

				
				
				<?php
		 }
				?>
            </tr>
	  
     </table>
 
 <!-- <div class="container  list-t-border">
    <div class="row bg-hover">
      <div class="my-pro-list">
	  	 
	
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src='<?php echo $result['image'] ?>' alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4><?php echo $result['protype']; ?></h4>
            <p><?php echo $result['locality']; ?><?php echo $result['city']; ?></p>
            <span><b>Status:</b><?php echo $result['type']; ?></span><br>
            <div class="button-my-pro-list">
              <a href="#.">Rs.<?php echo $result['cost']; ?></a>
            </div>
          </div>
        </div>
	
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="submit_property.php"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
	
	
   <!-- <div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src='<?php echo $result['image'] ?>' alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4><?php echo $result['protype']; ?></h4>
            <p><?php echo $result['locality']; ?><?php echo $result['city']; ?></p>
            <span><b>Status:</b> <?php echo $result['type']; ?></span><br>
            <div class="button-my-pro-list">
              <a href="#.">Rs.<?php echo $result['cost']; ?></a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="submit_property.php"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
   <!-- <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="submit_property.php"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
    <!--<div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
   <!-- <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
    <!--<div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
   <!-- <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
    <!--<div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
  </div>
  <div class="container">
    <div class="row padding_top">
      <div class="col-md-12">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- My - Property end -->

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Favorite properties</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">Favorite properties</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<?php include'footer.php';?>
</body>
</html>
