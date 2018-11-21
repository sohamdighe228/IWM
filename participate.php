<?php
$states= array('AP' => 'Andhra Pradesh',
'AR' => 'Arunachal Pradesh',
'AS' => 'Assam',
'BR' => 'Bihar',
'CT' => 'Chhattisgarh',
'GA' => 'Goa',
'GJ' => 'Gujarat',
'HR' => 'Haryana',
'HP' => 'Himachal Pradesh',
'JK' => 'Jammu and Kashmir',
'JH' => 'Jharkhand',
'KA' => 'Karnataka',
'KL' => 'Kerala',
'MP' => 'Madhya Pradesh',
'MH' => 'Maharashtra',
'MN' => 'Manipur',
'ML' => 'Meghalaya',
'MZ' => 'Mizoram',
'NL' => 'Nagaland',
'OR' => 'Odisha',
'PB' => 'Punjab',
'RJ' => 'Rajasthan',
'SK' => 'Sikkim',
'TN' => 'Tamil Nadu',
'TG' => 'Telangana',
'TR' => 'Tripura',
'UT' => 'Uttarakhand',
'UP' => 'Uttar Pradesh',
'WB' => 'West Bengal',
'AN' => 'Andaman and Nicobar Islands',
'CH' => 'Chandigarh',
'DN' => 'Dadra and Nagar Haveli',
'DD' => 'Daman and Diu',
'DL' => 'Delhi',
'LD' => 'Lakshadweep',
'PY' => 'Puducherry');
 ?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/iwm-logo-1168x482.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Participate</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <section id="dropdown-menu-2btn-p" data-rv-view="363">

    <nav class="navbar navbar-dropdown navbar-fixed-top">

        <div class="container">

            <div class="navbar-brand">
                <a href="index.html" class="navbar-logo"><img src="assets/images/iwm-logo-1168x482.png" alt="IWM WORKSHOP" title="IWM WORKSHOP"></a>

            </div>

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>

            <ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar"><li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="index.html#msg-box4-8">About Us</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="index.html#msg-box4-9">Speakers</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="participate.php">Participate</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="#">Schedule</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-danger" href="index.html#contacts2-l">Reach Us</a></li></ul>

        </div>

    </nav>

</section>

<section class="mbr-section mbr-section-small mbr-after-navbar" id="form1-r" data-rv-view="368" style="background-color: rgb(255, 255, 255); padding-top: 4.5rem; padding-bottom: 4.5rem;">

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="mbr-section-title display-3 text-xs-center">Participation</h2>
                <!-- <div data-form-alert="true"><div class="alert alert-success text-center">Thanks for filling out form!</div></div>
                <div data-form-alert="true"><div hidden="" data-form-alert-success="true">Thanks for filling out form!</div></div> -->
                <form action="submit.php" method="post" data-form-title="Participation">
                    <!-- <input type="hidden" value="Sff1qTaalQ3KnFU592PeCeMPAp3MRHsrchxGoSgypxRsRgNDNAbTXphSGmX2KrWpqWXKWh72jyhrHkBbB22Yl9yvfRstJJnpo6jX7hfyXSuHcBEo+yQO6dzCZhJ/hKPl" data-form-email="true"> -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required="" placeholder="Full name with title *" data-form-field="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">

                    </div>
                    <div class="form-group">
                    <select class="form-control" name="gender">
                         <option value="" selected disabled>Select Your Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                      </select>
                    </div>
                    <div class="form-group">
                    <select class="form-control" name="state">
                         <option value="" selected disabled>Select Your State</option>
                         <?php
                         foreach ($states as $state) {
                          echo "<option value='$state'> $state</option>";
                         }
                         ?>

                      </select>
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" name="degree" placeholder="  Highest Qualification and the name of Institute/University" data-form-field="Degree">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="7" placeholder="Full (Office) Address*" data-form-field="oaddress"></textarea>
                    </div>
                    <div class="text-xs-right"><input type="submit" class="btn btn-secondary-outline" value="Contact Us"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-q" data-rv-view="364" style="background-color: rgb(55, 56, 62); padding-top: 4.5rem; padding-bottom: 4.5rem;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <p><strong>Address</strong><br>Homi Bhabha Centre for Science Education,
<br>V. N. Purav Marg, Mankhurd,
<br>Mumbai, 400088 INDIA<strong><br></strong><br><strong>Contacts</strong><br>Email: support@hbcse.tifr.res.in
<br>Phone: +91 (022) 2507 2304<br></p>
            </div>
            <div class="col-xs-12 col-md-3"><strong>Links</strong><ul><li><a href="https://mobirise.com/">IWM</a></li><li><a href="https://mobirise.com/mobirise-free-win.zip">CWM</a></li><li><a href="http://www.hbcse.tifr.res.in/">HBCSE</a></li></ul></div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJBxGwUpDI5zsRyEicyAEfwNM" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


</body>
</html>
