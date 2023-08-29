<!-- header Start -->
<?php
session_start();
include('layout/header.php');
include('config.php');
?>
<?php
$fetch = "SELECT * FROM `laboritories`";
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
                    <span class="text-white">DigiMed365</span>
                    <h1 class="text-capitalize mb-5 text-lg">Labs & Diagnostics</h1>

                    <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
          </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Award winning patient care</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Book your first lab test today and get upto <b>20% discounts</b> </p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-lg-4 col-md-6 swiper ">
                        <div class="department-block mb-5">
                            <img src="uploads/<?php echo ($row['logo_image']);?>" alt="" class="img-fluid w-100">
                            <div class="content" style="background-color: #DAEBFF;     margin: 0px !important;
    text-align: center;
    padding: 15px 0px; border-radius:5px;">
                                <h4 class="mt-4 mb-2 title-color"><?php echo ($row['lab_name']);    ?></h4>
                                <label class="btn active"> <a href="labs-details.php?id=<?php echo $row['lab_id'];  ?>" class="read-more">Learn More<i class="icofont-simple-right ml-2"></i></a>

                                </label>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</section>
<!-- end main content -->
<!-- footer Start -->
<?php
include('layout/footer.php');
?>
<!-- footer ends -->