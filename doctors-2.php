<!-- header Start -->
<?php
session_start();
include('layout/header.php');
include('config.php');
?>
<?php
$fetch = "SELECT * FROM `doctors`";
$result = $conn->query($fetch);

?>
<!-- header ends -->
<!-- begin main content -->
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">All Doctors</span>
          <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Doctors</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                </div>
            </div>
        </div>

      <div class="col-12 text-center  mb-5">
	        <div class="btn-group btn-group-toggle " data-toggle="buttons">
			
	          <label class="btn active">
				<form action="" method="post">
					<input type="radio" name="all" value="all" checked="checked">All
				</form>
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="cat1">Cardiology
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="cat2">GeneralSurgery
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="cat3">Haematology
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="cat4">Microbiology
	          </label>
	           <label class="btn">
	            <input type="radio" name="shuffle-filter" value="cat5">Dermatology
	          </label>
	          <label class="btn">
	            <input type="radio" name="shuffle-filter" value="cat6">Gastroenterology
	          </label>
			  
	        </div>
      </div>

    <div class="row shuffle-wrapper portfolio-gallery shuffle" style="position: relative; overflow: hidden; height: 1113px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
	<?php
			if (isset($_POST['all'])) {
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
?>
<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="<?php echo ($row['doctor_image']);	?>" alt="doctor-image" class="img-fluid w-100">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php"><?php echo ($row['doctor_name']);	?></a></h4>
                	<p><?php echo ($row['doctor_specialization']);	?></p>
                </div> 
	      	</div>
      	</div>
<?php
			}
		}	}
			?>
	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Thomas Henry</a></h4>
                	<p>Cardiology</p>
                </div> 
	      	</div>
      	</div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat2&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(285px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/2.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Harrision Samuel</a></h4>
                	<p>Radiology</p>
                </div> 
	      	</div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat3&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(570px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Alexandar James</a></h4>
                	<p>Dental</p>
                </div> 
	      	</div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat3&quot;,&quot;cat4&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(855px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/4.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Edward john</a></h4>
                	<p>Pediatry</p>
                </div> 
	      	</div>
      </div>

      	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat5&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 371px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Thomas Henry</a></h4>
                	<p>Neurology</p>
                </div> 
	      	</div>
      	</div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat6&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(285px, 371px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
       		 <div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Henry samuel</a></h4>
                	<p>Palmology</p>
                </div> 
	      	</div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat4&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(570px, 371px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Thomas alexandar</a></h4>
                	<p>Cardiology</p>
                </div> 
	        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(855px, 371px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
		             </div>
	             </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">HarissonThomas </a></h4>
                	<p>Traumatology</p>
                </div> 
	      	</div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration shuffle-item--visible" data-groups="[&quot;cat2&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 742px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/4.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Jonas Thomson</a></h4>
                	<p>Cardiology</p>
                </div> 
	      	</div>
        </div>

         <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(285px, 742px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
		            </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Henry Forth</a></h4>
                	<p>hematology</p>
                </div> 
	      	</div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration shuffle-item--visible" data-groups="[&quot;cat2&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(570px, 742px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <img src="images/team/4.jpg" alt="doctor-image" class="img-fluid w-100">
		             </div>
	             </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="doctor-single.php">Thomas Henry</a></h4>
                	<p>Dental</p>
                </div> 
	      	</div>
        </div>
    </div>
  </div>
</section>
<!-- /portfolio -->
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<a href="appointments.php" class="btn btn-main-2 btn-round-full">Get appointment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end main content -->
<!-- footer Start -->
<?php
include('layout/footer.php');
?>
<!-- footer ends -->