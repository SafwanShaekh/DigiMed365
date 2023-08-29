<!-- header Start -->
<?php
$msg = "";
session_start();
include('layout/header.php');
include('config.php');
?>
<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $specs = $_POST['specs'];

    $demo_req = "INSERT INTO `demo_request`(`fullname`, `email`, `phone`, `city`, `specialization`) VALUES ('$fullname','$email','$phone','$city','$specs')";
    $result_demo_request = $conn->query($demo_req);

    if ($result_demo_request == true) {
        $msg = '<div class="alert alert-success" role="alert">
        <strong>Your Request has been successfully submitted </strong> 
    </div>';
        header("location:login.php");
        
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
        <strong> Oops! Something went wrong! Please try again. </strong>
    </div>';
    }
    

}

?>
<!-- header ends -->
<!-- begin main content -->
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">digimed365</span>
                    <h1 class="text-capitalize mb-5 text-lg">Doctor Registration</h1>

                    <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="appointment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3">For Other Queries, Reach Us Out at</span>
                    <h3 class="text-color mt-3">support@digimed365.com</h3>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="appointment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Get a Demo</h2>
                    <p class="mb-4">Please drop your details below, Our Digital Health experts will contact you shortly to schedule a demo.</p>
                    <?php  echo($msg); ?>
                    <form class="appointment-form" method="POST" action="doctor-demo.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="fullname" id="name" type="text" class="form-control" placeholder="Your FullName">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" id="name" type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="city">
                                        <option value="" disabled selected>Select The City</option>
                                        <option value="Islamabad">Islamabad</option>
                                        <option value="" disabled>Punjab Cities</option>
                                        <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                        <option value="Ahmadpur East">Ahmadpur East</option>
                                        <option value="Ali Khan Abad">Ali Khan Abad</option>
                                        <option value="Alipur">Alipur</option>
                                        <option value="Arifwala">Arifwala</option>
                                        <option value="Attock">Attock</option>
                                        <option value="Bhera">Bhera</option>
                                        <option value="Bhalwal">Bhalwal</option>
                                        <option value="Bahawalnagar">Bahawalnagar</option>
                                        <option value="Bahawalpur">Bahawalpur</option>
                                        <option value="Bhakkar">Bhakkar</option>
                                        <option value="Burewala">Burewala</option>
                                        <option value="Chillianwala">Chillianwala</option>
                                        <option value="Chakwal">Chakwal</option>
                                        <option value="Chichawatni">Chichawatni</option>
                                        <option value="Chiniot">Chiniot</option>
                                        <option value="Chishtian">Chishtian</option>
                                        <option value="Daska">Daska</option>
                                        <option value="Darya Khan">Darya Khan</option>
                                        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                        <option value="Dhaular">Dhaular</option>
                                        <option value="Dina">Dina</option>
                                        <option value="Dinga">Dinga</option>
                                        <option value="Dipalpur">Dipalpur</option>
                                        <option value="Faisalabad">Faisalabad</option>
                                        <option value="Ferozewala">Ferozewala</option>
                                        <option value="Fateh Jhang">Fateh Jang</option>
                                        <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                        <option value="Gojra">Gojra</option>
                                        <option value="Gujranwala">Gujranwala</option>
                                        <option value="Gujrat">Gujrat</option>
                                        <option value="Gujar Khan">Gujar Khan</option>
                                        <option value="Hafizabad">Hafizabad</option>
                                        <option value="Haroonabad">Haroonabad</option>
                                        <option value="Hasilpur">Hasilpur</option>
                                        <option value="Haveli Lakha">Haveli Lakha</option>
                                        <option value="Jatoi">Jatoi</option>
                                        <option value="Jalalpur">Jalalpur</option>
                                        <option value="Jattan">Jattan</option>
                                        <option value="Jampur">Jampur</option>
                                        <option value="Jaranwala">Jaranwala</option>
                                        <option value="Jhang">Jhang</option>
                                        <option value="Jhelum">Jhelum</option>
                                        <option value="Kalabagh">Kalabagh</option>
                                        <option value="Karor Lal Esan">Karor Lal Esan</option>
                                        <option value="Kasur">Kasur</option>
                                        <option value="Kamalia">Kamalia</option>
                                        <option value="Kamoke">Kamoke</option>
                                        <option value="Khanewal">Khanewal</option>
                                        <option value="Khanpur">Khanpur</option>
                                        <option value="Kharian">Kharian</option>
                                        <option value="Khushab">Khushab</option>
                                        <option value="Kot Addu">Kot Addu</option>
                                        <option value="Jauharabad">Jauharabad</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Lalamusa">Lalamusa</option>
                                        <option value="Layyah">Layyah</option>
                                        <option value="Liaquat Pur">Liaquat Pur</option>
                                        <option value="Lodhran">Lodhran</option>
                                        <option value="Malakwal">Malakwal</option>
                                        <option value="Mamoori">Mamoori</option>
                                        <option value="Mailsi">Mailsi</option>
                                        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                        <option value="Mian Channu">Mian Channu</option>
                                        <option value="Mianwali">Mianwali</option>
                                        <option value="Multan">Multan</option>
                                        <option value="Murree">Murree</option>
                                        <option value="Muridke">Muridke</option>
                                        <option value="Mianwali Bangla">Mianwali Bangla</option>
                                        <option value="Muzaffargarh">Muzaffargarh</option>
                                        <option value="Narowal">Narowal</option>
                                        <option value="Nankana Sahib">Nankana Sahib</option>
                                        <option value="Okara">Okara</option>
                                        <option value="Renala Khurd">Renala Khurd</option>
                                        <option value="Pakpattan">Pakpattan</option>
                                        <option value="Pattoki">Pattoki</option>
                                        <option value="Pir Mahal">Pir Mahal</option>
                                        <option value="Qaimpur">Qaimpur</option>
                                        <option value="Qila Didar Singh">Qila Didar Singh</option>
                                        <option value="Rabwah">Rabwah</option>
                                        <option value="Raiwind">Raiwind</option>
                                        <option value="Rajanpur">Rajanpur</option>
                                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                        <option value="Rawalpindi">Rawalpindi</option>
                                        <option value="Sadiqabad">Sadiqabad</option>
                                        <option value="Safdarabad">Safdarabad</option>
                                        <option value="Sahiwal">Sahiwal</option>
                                        <option value="Sangla Hill">Sangla Hill</option>
                                        <option value="Sarai Alamgir">Sarai Alamgir</option>
                                        <option value="Sargodha">Sargodha</option>
                                        <option value="Shakargarh">Shakargarh</option>
                                        <option value="Sheikhupura">Sheikhupura</option>
                                        <option value="Sialkot">Sialkot</option>
                                        <option value="Sohawa">Sohawa</option>
                                        <option value="Soianwala">Soianwala</option>
                                        <option value="Siranwali">Siranwali</option>
                                        <option value="Talagang">Talagang</option>
                                        <option value="Taxila">Taxila</option>
                                        <option value="Toba Tek Singh">Toba Tek Singh</option>
                                        <option value="Vehari">Vehari</option>
                                        <option value="Wah Cantonment">Wah Cantonment</option>
                                        <option value="Wazirabad">Wazirabad</option>
                                        <option value="" disabled>Sindh Cities</option>
                                        <option value="Badin">Badin</option>
                                        <option value="Bhirkan">Bhirkan</option>
                                        <option value="Rajo Khanani">Rajo Khanani</option>
                                        <option value="Chak">Chak</option>
                                        <option value="Dadu">Dadu</option>
                                        <option value="Digri">Digri</option>
                                        <option value="Diplo">Diplo</option>
                                        <option value="Dokri">Dokri</option>
                                        <option value="Ghotki">Ghotki</option>
                                        <option value="Haala">Haala</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Islamkot">Islamkot</option>
                                        <option value="Jacobabad">Jacobabad</option>
                                        <option value="Jamshoro">Jamshoro</option>
                                        <option value="Jungshahi">Jungshahi</option>
                                        <option value="Kandhkot">Kandhkot</option>
                                        <option value="Kandiaro">Kandiaro</option>
                                        <option value="Karachi">Karachi</option>
                                        <option value="Kashmore">Kashmore</option>
                                        <option value="Keti Bandar">Keti Bandar</option>
                                        <option value="Khairpur">Khairpur</option>
                                        <option value="Kotri">Kotri</option>
                                        <option value="Larkana">Larkana</option>
                                        <option value="Matiari">Matiari</option>
                                        <option value="Mehar">Mehar</option>
                                        <option value="Mirpur Khas">Mirpur Khas</option>
                                        <option value="Mithani">Mithani</option>
                                        <option value="Mithi">Mithi</option>
                                        <option value="Mehrabpur">Mehrabpur</option>
                                        <option value="Moro">Moro</option>
                                        <option value="Nagarparkar">Nagarparkar</option>
                                        <option value="Naudero">Naudero</option>
                                        <option value="Naushahro Feroze">Naushahro Feroze</option>
                                        <option value="Naushara">Naushara</option>
                                        <option value="Nawabshah">Nawabshah</option>
                                        <option value="Nazimabad">Nazimabad</option>
                                        <option value="Qambar">Qambar</option>
                                        <option value="Qasimabad">Qasimabad</option>
                                        <option value="Ranipur">Ranipur</option>
                                        <option value="Ratodero">Ratodero</option>
                                        <option value="Rohri">Rohri</option>
                                        <option value="Sakrand">Sakrand</option>
                                        <option value="Sanghar">Sanghar</option>
                                        <option value="Shahbandar">Shahbandar</option>
                                        <option value="Shahdadkot">Shahdadkot</option>
                                        <option value="Shahdadpur">Shahdadpur</option>
                                        <option value="Shahpur Chakar">Shahpur Chakar</option>
                                        <option value="Shikarpaur">Shikarpaur</option>
                                        <option value="Sukkur">Sukkur</option>
                                        <option value="Tangwani">Tangwani</option>
                                        <option value="Tando Adam Khan">Tando Adam Khan</option>
                                        <option value="Tando Allahyar">Tando Allahyar</option>
                                        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                        <option value="Thatta">Thatta</option>
                                        <option value="Umerkot">Umerkot</option>
                                        <option value="Warah">Warah</option>
                                        <option value="" disabled>Khyber Cities</option>
                                        <option value="Abbottabad">Abbottabad</option>
                                        <option value="Adezai">Adezai</option>
                                        <option value="Alpuri">Alpuri</option>
                                        <option value="Akora Khattak">Akora Khattak</option>
                                        <option value="Ayubia">Ayubia</option>
                                        <option value="Banda Daud Shah">Banda Daud Shah</option>
                                        <option value="Bannu">Bannu</option>
                                        <option value="Batkhela">Batkhela</option>
                                        <option value="Battagram">Battagram</option>
                                        <option value="Birote">Birote</option>
                                        <option value="Chakdara">Chakdara</option>
                                        <option value="Charsadda">Charsadda</option>
                                        <option value="Chitral">Chitral</option>
                                        <option value="Daggar">Daggar</option>
                                        <option value="Dargai">Dargai</option>
                                        <option value="Darya Khan">Darya Khan</option>
                                        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                        <option value="Doaba">Doaba</option>
                                        <option value="Dir">Dir</option>
                                        <option value="Drosh">Drosh</option>
                                        <option value="Hangu">Hangu</option>
                                        <option value="Haripur">Haripur</option>
                                        <option value="Karak">Karak</option>
                                        <option value="Kohat">Kohat</option>
                                        <option value="Kulachi">Kulachi</option>
                                        <option value="Lakki Marwat">Lakki Marwat</option>
                                        <option value="Latamber">Latamber</option>
                                        <option value="Madyan">Madyan</option>
                                        <option value="Mansehra">Mansehra</option>
                                        <option value="Mardan">Mardan</option>
                                        <option value="Mastuj">Mastuj</option>
                                        <option value="Mingora">Mingora</option>
                                        <option value="Nowshera">Nowshera</option>
                                        <option value="Paharpur">Paharpur</option>
                                        <option value="Pabbi">Pabbi</option>
                                        <option value="Peshawar">Peshawar</option>
                                        <option value="Saidu Sharif">Saidu Sharif</option>
                                        <option value="Shorkot">Shorkot</option>
                                        <option value="Shewa Adda">Shewa Adda</option>
                                        <option value="Swabi">Swabi</option>
                                        <option value="Swat">Swat</option>
                                        <option value="Tangi">Tangi</option>
                                        <option value="Tank">Tank</option>
                                        <option value="Thall">Thall</option>
                                        <option value="Timergara">Timergara</option>
                                        <option value="Tordher">Tordher</option>
                                        <option value="" disabled>Balochistan Cities</option>
                                        <option value="Awaran">Awaran</option>
                                        <option value="Barkhan">Barkhan</option>
                                        <option value="Chagai">Chagai</option>
                                        <option value="Dera Bugti">Dera Bugti</option>
                                        <option value="Gwadar">Gwadar</option>
                                        <option value="Harnai">Harnai</option>
                                        <option value="Jafarabad">Jafarabad</option>
                                        <option value="Jhal Magsi">Jhal Magsi</option>
                                        <option value="Kacchi">Kacchi</option>
                                        <option value="Kalat">Kalat</option>
                                        <option value="Kech">Kech</option>
                                        <option value="Kharan">Kharan</option>
                                        <option value="Khuzdar">Khuzdar</option>
                                        <option value="Killa Abdullah">Killa Abdullah</option>
                                        <option value="Killa Saifullah">Killa Saifullah</option>
                                        <option value="Kohlu">Kohlu</option>
                                        <option value="Lasbela">Lasbela</option>
                                        <option value="Lehri">Lehri</option>
                                        <option value="Loralai">Loralai</option>
                                        <option value="Mastung">Mastung</option>
                                        <option value="Musakhel">Musakhel</option>
                                        <option value="Nasirabad">Nasirabad</option>
                                        <option value="Nushki">Nushki</option>
                                        <option value="Panjgur">Panjgur</option>
                                        <option value="Pishin Valley">Pishin Valley</option>
                                        <option value="Quetta">Quetta</option>
                                        <option value="Sherani">Sherani</option>
                                        <option value="Sibi">Sibi</option>
                                        <option value="Sohbatpur">Sohbatpur</option>
                                        <option value="Washuk">Washuk</option>
                                        <option value="Zhob">Zhob</option>
                                        <option value="Ziarat">Ziarat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="specs" id="name" type="text" class="form-control" placeholder="Your Specialization">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-main btn-round-full">
                            Request a Demo<i class="icofont-simple-right ml-2"></i>
                        </button>
                    </form>
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
