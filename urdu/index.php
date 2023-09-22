<?php
session_start();
include('config.php');
include('layout/header.php');
$error_msg = "";
if (isset($_POST['submit'])) {
  $dept_name = $_POST['dept'];
  $doc_name = $_POST['doc'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $query = "INSERT INTO `appointments`(`dept`, `doctor`, `appointment_date`, `appointment_time`, `fullname`, `phone`, `message`) VALUES ('$dept_name','$doc_name','$date','$time','$name','$phone','$message')";
  $result = $conn->query($query);
  $query2 = "INSERT INTO `patients`( `patient_name`, `patient_phone`, `doctor_name`) VALUES ('$name','$phone','$doc_name')";
  $result2 = $conn->query($query2);

  if ($result == true && $result2 == true) {
?>
    <script>
      window.location.assign('form-success.php');
    </script>
<?php
  } else {
    $error_msg = "&#9888; Oops! Something went wrong, Please try again";
  }
}

?>
<!-- header ends -->
<!-- begin main content -->
<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">کل صحت کی دیکھ بھال کا حل</span>
					<h1 class="mb-3 mt-3">آپ کا سب سے قابل اعتماد ہیلتھ پارٹنر</h1>

					<p class="mb-4 pr-5">صحت کی دیکھ بھال کرنے والے تجربہ کار پیشہ ور، ڈیجیٹل ماہرین صحت جو مریضوں کی زندگیوں میں تبدیلی لانے کے لیے وقف ہیں۔</p>
					<div class="btn-container ">
						<?php
						if (isset($_SESSION['user_id'])) {
						?>
							<a href="appointments.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">ملاقات طے کرو<i class="icofont-simple-right ml-2  "></i></a>
						<?php
						} else {
						?>
							<a href="login.php" class="btn btn-main-2 btn-icon btn-round-full">ملاقات طے کرو<i class="icofont-simple-right ml-2  "></i></a>
						<?php
						}

						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 گھنٹے سروس</span>
						<h4 class="mb-3">آن لائن ملاقات</h4>
						<p class="mb-4">بکنگ اپائنٹمنٹ کے لیے 24/7 سپورٹ کی پیشکش </p>
						<?php
						if (isset($_SESSION['user_id'])) {
						?>
							<a href="appointments.php" class="btn btn-main btn-round-full">ملاقات کا وقت حاصل کریں۔</a>
						<?php
						} else {
						?>
							<a href="login.php" class="btn btn-main btn-round-full">ملاقات کا وقت حاصل کریں۔</a>
						<?php
						}

						?>

					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>ٹائمنگ شیڈول</span>
						<h4 class="mb-3">ڈاکٹر کی دستیابی</h4>
						<ul class="w-hours list-unstyled">
							<li class="d-flex justify-content-between">اتوار - بدھ : <span>8:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">جمعرات - جمعہ : <span>9:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">ہفتہ-اتوار: <span>10:00 - 17:00</span></li>
						</ul>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>ایمرجنسی کیسز</span>
						<h4 class="mb-3">+92 3152288535</h4>
						<p>ایمرجنسی کے لیے ہمہ وقت مدد حاصل کریں۔ ہم نے فیملی میڈیسن کا اصول متعارف کرایا ہے۔ کسی بھی ہنگامی صورتحال کے لیے ہم سے رابطہ کریں۔</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="images/about/img-1.jpg" alt="" class="img-fluid">
					<img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="images/about/img-3.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">ذاتی نگہداشت <br>اور تندرست زندگی</h2>
					<p class="mt-4 mb-5">چاہے وہ بنیادی دیکھ بھال ہو، فوری دیکھ بھال ہو، ورچوئل وزٹ ہو یا ہنگامی دیکھ بھال ہو، ہم آپ کی ضرورت کی دیکھ بھال تلاش کرنے میں آپ کی مدد کریں گے۔ آپ کی دیکھ بھال کا اختیار آپ کی ضروریات کے مطابق ہونا چاہیے۔ اب آپ کے لیے دستیاب اختیارات تلاش کریں۔ اپنی ضرورت کی دیکھ بھال کے انتخاب میں آپ کی مدد کرنے کے لیے ہمارے محکموں کو براؤز کریں۔</p>

					<a href="departments.php" class="btn btn-main-2 btn-round-full btn-icon">ڈیپارٹمنٹ <i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3 counter" data-count="58">58</span>k
						<p>مطمئن مریض</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3 counter" data-count="700">700</span>+
						<p>سرجری مکمل ہوئی۔</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3 counter" data-count="40">40</span>+
						<p>ماہر ڈاکٹرز</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3 counter" data-count="20">20</span>
						<p>دنیا بھر میں</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>ایوارڈ یافتہ مریض کی دیکھ بھال</h2>
					<div class="divider mx-auto my-4"></div>
					<p>ہم ان چیلنجوں کو سمجھتے ہیں جن کا مریضوں اور صحت کی دیکھ بھال فراہم کرنے والوں کو آج کی دنیا میں سامنا کرنا پڑتا ہے، اور ہم ان چیلنجوں کے لیے اختراعی حل تلاش کرنے کے لیے پرعزم ہیں۔</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-laboratory text-lg"></i>
						<h4 class="mt-3 mb-3">لیبارٹری ٹیسٹنگ</h4>
					</div>

					<div class="content">
						<p class="mb-4">بیماری کی تشخیص، روک تھام یا علاج یا خرابی، یا صحت کی تشخیص کے لیے معلومات فراہم کرنے کے لیے انسانوں سے اخذ کردہ نمونوں پر لیبارٹری ٹیسٹنگ حاصل کرنے کا ایک پلیٹ فارم۔</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-plus text-lg"></i>
						<h4 class="mt-3 mb-3">بیماری</h4>
					</div>
					<div class="content">
						<p class="mb-4">بند شریانوں سے لے کر انفیکشن تک، دل کی بیماری بہت زیادہ زمین پر محیط ہے۔ یہ صرف ایک چیز نہیں ہے، بلکہ حالات کا ایک گروپ ہے جو آپ کے دل اور جسم کو مختلف طریقوں سے متاثر کرتا ہے۔ یہ دل کے دورے اور فالج جیسے مسائل کا باعث بن سکتا ہے۔</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-brain	 text-lg"></i>
						<h4 class="mt-3 mb-3">دماغی صحت</h4>
					</div>
					<div class="content">
						<p class="mb-4">یہ ایوارڈ ان کمپنیوں اور تنظیموں کو تسلیم کرتا ہے جنہوں نے صحت کی دیکھ بھال کی صنعت میں شاندار جدت اور قیادت کا مظاہرہ کیا ہے۔ ہم ان ایوارڈز کے لیے شکر گزار ہیں، اور وہ ہمیں حدود کو آگے بڑھانے کے لیے حوصلہ افزائی کرتے ہیں۔ </p>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-crutch text-lg"></i>
						<h4 class="mt-3 mb-3">جنرل سرجری</h4>
					</div>

					<div class="content">
						<p class="mb-4">یہ ایوارڈ ان کمپنیوں اور تنظیموں کو تسلیم کرتا ہے جنہوں نے جنرل سرجری میں شاندار جدت اور قیادت کا مظاہرہ کیا ہے۔ ہم ان ایوارڈز کے لیے شکر گزار ہیں، اور وہ ہمیں حدود کو آگے بڑھانے کے لیے حوصلہ افزائی کرتے ہیں۔</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-heart-beat-alt text-lg"></i>
						<h4 class="mt-3 mb-3">کارڈیالوجی</h4>
					</div>
					<div class="content">
						<p class="mb-4">یہ ایوارڈ ان کمپنیوں اور تنظیموں کو تسلیم کرتا ہے جنہوں نے کارڈیالوجی ڈیپارٹمنٹ میں شاندار جدت اور قیادت کا مظاہرہ کیا ہے۔ ہم ان ایوارڈز کے لیے شکر گزار ہیں، اور وہ ہمیں حدود کو آگے بڑھانے کے لیے حوصلہ افزائی کرتے ہیں۔</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-dna-alt-1 text-lg"></i>
						<h4 class="mt-3 mb-3">ہیماتولوجی</h4>
					</div>
					<div class="content">
						<p class="mb-4">یہ ایوارڈ ان کمپنیوں اور تنظیموں کو تسلیم کرتا ہے جنہوں نے ہیماتولوجی میں شاندار جدت اور قیادت کا مظاہرہ کیا ہے۔ ہم ان ایوارڈز کے لیے شکر گزار ہیں، اور وہ ہمیں حدود کو آگے بڑھانے کے لیے حوصلہ افزائی کرتے ہیں۔</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section appointment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appointment-content">
					<img src="images/about/img-3.jpg" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appointment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">بک اپائنٹمنٹ</h2>
					<?php
						if (isset($_SESSION['user_id'])) {
						?>
							<p class="mb-4">ابھی ملاقات کا وقت بک کرو !!</p>
						<?php
						} else {
						?>
							<p class="mb-4">صحت کی تمام سہولیات حاصل کرنے کے لیے،
								<a href="signup.php" > !!!میں شامل ہوں DigiMed365 ابھی </a></p>
						<?php
						}

						?>
					
						<p style="color:red;"><?php
                                echo ($error_msg); ?></p>
					<form id="#" class="appointment-form" method="POST" action="appointments.php">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">

									<select class="form-control" id="exampleFormControlSelect1" name="dept">
										<option>ایک محکمہ کا انتخاب کریں۔</option>
										<?php
										$fetch_dept = "SELECT dept_name FROM `departments`";
										$result = $conn->query($fetch_dept);
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {

										?>
												<option><?php echo ($row['dept_name']); ?></option>
										<?php

											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<select class="form-control" id="exampleFormControlSelect2" name="doc">
										<option>ایک ڈاکٹر کا انتخاب کریں۔</option>
										<?php
										$fetch_dept = "SELECT doctor_name FROM `doctors`";
										$result = $conn->query($fetch_dept);
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {

										?>
												<option><?php echo ($row['doctor_name']); ?></option>
										<?php

											}
										}
										?>
									</select>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="time" id="time" type="time" class="form-control" placeholder="وقت">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="name" id="name" type="text" class="form-control" placeholder="پورا نام">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="phone" id="phone" type="Number" class="form-control" placeholder="فون نمبر">
								</div>
							</div>
						</div>
						<div class="form-group-2 mb-4">
							<textarea name="message" id="message" class="form-control" rows="6" placeholder="آپ کا پیغام"></textarea>
						</div>
						<?php
						if (isset($_SESSION['user_id'])) {
						?>
							<input type="submit" class="btn btn-main btn-round-full" name="submit" value="Book Appointment">
						<?php
						} else {
						?>
							<input type="button" class="btn btn-main btn-round-full" name="non-submit" value="سائن اپ">
						<?php
						}

						?>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <section class="section testimonial-2 gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="section-title text-center">
						<h2>We served over 5000+ Patients</h2>
						<div class="divider mx-auto my-4"></div>
						<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
							molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 testimonial-wrap-2 slick-initialized slick-slider slick-dotted">









					<div class="slick-list draggable">
						<div class="slick-track"
							style="opacity: 1; width: 7590px; transform: translate3d(-1380px, 0px, 0px);">
							<div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" tabindex="-1"
								role="tabpanel" id="" aria-describedby="slick-slide-control12" style="width: 682px;"
								data-slick-index="-1" aria-hidden="true">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Modern Service!</h4>
									<span>Kolis Mullar</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>
								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide" tabindex="-1" role="tabpanel"
								id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 682px;"
								data-slick-index="0" aria-hidden="true">
								<i class="icofont-quote-right"></i>

								<div class="testimonial-thumb">
									<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info ">
									<h4>Amazing service!</h4>
									<span>John Partho</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide slick-current slick-active"
								tabindex="0" role="tabpanel" id="slick-slide11" style="width: 682px;" data-slick-index="1"
								aria-hidden="false" aria-describedby="slick-slide-control11">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Expert doctors!</h4>
									<span>Mullar Sarth</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>

								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide" tabindex="-1" role="tabpanel"
								id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 682px;"
								data-slick-index="2" aria-hidden="true">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Good Support!</h4>
									<span>Kolis Mullar</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>

								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide" tabindex="-1" role="tabpanel"
								id="slick-slide13" style="width: 682px;" data-slick-index="3" aria-hidden="true"
								aria-describedby="slick-slide-control13">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Nice Environment!</h4>
									<span>Partho Sarothi</span>
									<p class="mt-4">
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>
								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide" tabindex="-1" role="tabpanel"
								id="slick-slide14" aria-describedby="slick-slide-control14" style="width: 682px;"
								data-slick-index="4" aria-hidden="true">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Modern Service!</h4>
									<span>Kolis Mullar</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>
								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" tabindex="-1"
								role="tabpanel" id="" aria-describedby="slick-slide-control10" style="width: 682px;"
								data-slick-index="5" aria-hidden="true">
								<i class="icofont-quote-right"></i>

								<div class="testimonial-thumb">
									<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info ">
									<h4>Amazing service!</h4>
									<span>John Partho</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" tabindex="-1"
								role="tabpanel" id="" style="width: 682px;" data-slick-index="6" aria-hidden="true">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Expert doctors!</h4>
									<span>Mullar Sarth</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>

								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" tabindex="-1"
								role="tabpanel" id="" aria-describedby="slick-slide-control11" style="width: 682px;"
								data-slick-index="7" aria-hidden="true">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Good Support!</h4>
									<span>Kolis Mullar</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>

								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" tabindex="-1"
								role="tabpanel" id="" style="width: 682px;" data-slick-index="8" aria-hidden="true">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Nice Environment!</h4>
									<span>Partho Sarothi</span>
									<p class="mt-4">
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>
								<i class="icofont-quote-right"></i>
							</div>
							<div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" tabindex="-1"
								role="tabpanel" id="" aria-describedby="slick-slide-control12" style="width: 682px;"
								data-slick-index="9" aria-hidden="true">
								<div class="testimonial-thumb">
									<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
								</div>

								<div class="client-info">
									<h4>Modern Service!</h4>
									<span>Kolis Mullar</span>
									<p>
										They provide great service facilty consectetur adipisicing elit. Itaque rem,
										praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
									</p>
								</div>
								<i class="icofont-quote-right"></i>
							</div>
						</div>
					</div>
					<ul class="slick-dots" style="" role="tablist">
						<li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control10"
								aria-controls="slick-slide10" aria-label="1 of 5" tabindex="-1">1</button></li>
						<li role="presentation" class="slick-active"><button type="button" role="tab"
								id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 5" tabindex="0"
								aria-selected="true">2</button></li>
						<li role="presentation"><button type="button" role="tab" id="slick-slide-control12"
								aria-controls="slick-slide12" aria-label="3 of 5" tabindex="-1">3</button></li>
						<li role="presentation"><button type="button" role="tab" id="slick-slide-control13"
								aria-controls="slick-slide13" aria-label="4 of 5" tabindex="-1">4</button></li>
						<li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control14"
								aria-controls="slick-slide14" aria-label="5 of 5" tabindex="-1">5</button></li>
					</ul>
				</div>
			</div>
		</div>
	</section> -->
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>شراکت دار جو ہماری حمایت کرتے ہیں۔</h2>
					<div class="divider mx-auto my-4"></div>
					<p>ہمارے شراکت داروں کی معاونت اور ڈاکٹروں، نرسوں اور دیکھ بھال کرنے والوں کی غیر معمولی ٹیم کی مہارت اور ہنر ہر روز ہمارے مریضوں کی زندگیوں میں تبدیلی لانے میں مدد کرتا ہے۔

					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo slick-initialized slick-slider">










			<div class="slick-list draggable">
				<div class="slick-track" style="opacity: 1; width: 4320px; transform: translate3d(-1800px, 0px, 0px);">
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="-4" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="-3" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="-2" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="-1" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide" tabindex="-1" style="width: 180px;" data-slick-index="0" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/1.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide" tabindex="-1" style="width: 180px;" data-slick-index="1" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/2.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide" tabindex="-1" style="width: 180px;" data-slick-index="2" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide" tabindex="-1" style="width: 180px;" data-slick-index="3" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide" tabindex="-1" style="width: 180px;" data-slick-index="4" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide" tabindex="-1" style="width: 180px;" data-slick-index="5" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-active" tabindex="-1" style="width: 180px;" data-slick-index="6" aria-hidden="false">
						<div class="client-thumb">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-active" tabindex="-1" style="width: 180px;" data-slick-index="7" aria-hidden="false">
						<div class="client-thumb">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-current slick-active" tabindex="0" style="width: 180px;" data-slick-index="8" aria-hidden="false">
						<div class="client-thumb">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-active" tabindex="0" style="width: 180px;" data-slick-index="9" aria-hidden="false">
						<div class="client-thumb">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="10" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/1.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="11" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/2.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="12" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="13" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="14" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="15" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="16" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="17" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="18" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-2 slick-slide slick-cloned" tabindex="-1" style="width: 180px;" data-slick-index="19" id="" aria-hidden="true">
						<div class="client-thumb">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
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