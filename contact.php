<?php

if(isset($_POST['btnsubmit'])){
    $to = "arrowfurnitures@gmail.com"; // this is your Email address
    $from = "support@arrow.greymatterworks.in"; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = 'Name : '.$name.'From Email : '.$_POST['email'].' - message : '.$_POST['message'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    

}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.elathemes.com/themes/mobel/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 11:36:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.jpeg">

    <!--Title-->
    <title>Contact us | Arrow Furniture</title>

    <!--CSS bundle -->
    <link rel="stylesheet" media="all" href="css/bundle.min.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        margin: 0;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    #navin {
            background-color: #00183c;
            position: relative!important;
        }
        nav {    
  display: block;
  text-align: center;
  top:0;
  margin-top: 10px;

}
#navin span{
    color:#cca763;
    font-family: 'Times New Roman', Times, serif;
}
nav ul {
  top: 0!important;
  padding: 0;
  list-style: none;
  position: absolute;
  float: right;
}
.nav a {
  display:block; 
  color: #fff; 
  text-decoration: none;
  padding: 0.8em 1.8em;
  text-transform: uppercase;
  font-size: 80%;
  font-weight: 900;
  letter-spacing: 2px;
  position: relative;
}
.nav ul li a{
    background-color: black;
}
.nav{  
  vertical-align: top; 
  display: inline-block;
  border-radius:6px;
}
.nav li {
  position: relative;
}
.nav > li { 
  float: left; 
  margin-right: 1px; 
  
} 
.nav > li > a { 
 font-size: 15px;
 font-weight: 900;
  color: white!important;

}
.nav > li > a:hover { 
 font-size: 10px;
 font-weight: 900;
  color: black!important;

}
.nav > li > a:active { 

  color: rgb(15, 177, 206) !important;

}
.nav > li:hover, 
.nav > li:hover > a { 
  border-bottom-color: orange;
}
.nav li:hover > a { 
  color:orange; 
}
.nav > li:first-child { 
  border-radius: 4px 0 0 4px;
} 
.nav > li:first-child > a { 
  border-radius: 4px 0 0 0;
}
.nav > li:last-child { 
  border-radius: 0 0 4px 0; 
  margin-right: 0;
} 
.nav > li:last-child > a { 
  border-radius: 0 4px 0 0;
}
.nav li li a { 
  margin-top: 1px;
}
.nav li li:first-child { 
  margin-top: 34px;
}


.nav li a:first-child:nth-last-child(2):before { 
  content: ""; 
  position: absolute; 
  height: 0; 
  width: 0; 
  border: 5px solid transparent; 
  top: 50% ;
  right:5px;  
 }

/* submenu positioning*/
.nav ul {
  position: absolute;
  white-space: nowrap;
  border-bottom: 5px solid  orange;
  z-index: 1;
  float: right;
  left: -99999em;
}
.nav > li:hover > ul {
  left: auto;
  margin-top: 5px;
  min-width: 100%;
}
.nav > li li:hover > ul { 
  left: 100%;
  margin-left: 1px;
  top: -1px;
}
/* arrow hover styling */
.nav > li > a:first-child:nth-last-child(2):before { 
  border-top-color: #aaa; 
}
.nav > li:hover > a:first-child:nth-last-child(2):before {
  border: 5px solid transparent; 
  border-bottom-color: orange; 
  margin-top:-5px
}
.nav li li > a:first-child:nth-last-child(2):before {  
  border-left-color: #aaa; 
  margin-top: -5px
}
.nav li li:hover > a:first-child:nth-last-child(2):before {
  border: 5px solid transparent; 
  border-right-color: orange;
  right: 10px; 
}


@media screen and (max-width: 600px) {
    nav ul {
  margin: 0;
  list-style: none;
  position: relative;
  float: right;
}
nav {    
  display: block;
  text-align: center;
  margin-top:69px;
  float: right!important;
  background-color: #ae7734;

}
.nav li a{
    font-size: 10px;
}
       
    }
@media screen and (max-width:900px){
        #navin span{
        top:0;
        margin-top:10px;
        right:0;
        color:#cca763;
        width:300px!important;
        position: absolute;
        text-align:center;
        word-break: normal;
        font-size:12px;

        }
}
</style>

<body>

    <div class="container-fluid" id="navin">
        <div class="navbar-header">
            <a href="index.php">
                <img src="assets/images/arrowlogo.jpeg" alt="logo" style="width:90px;height:60px;margin:5px;">
            </a>
        </div>
        <span><p>Jeyalakshmi Industries,<br>
        GST-33ADJPA2597G1ZP , Mobile : 9715922122 <br>
    Mail-id : arrowfurnitures@gmail.com</p> 
        </span> 
    </div>
    <nav>
        <ul class="nav">
          <li><a  href="index.php">Home</a></li>
          <li><a href="#">Product</a>
            <ul>
              <li><a href="sofa.php">sofa</a></li>
              <li><a href="cots.php">Wooden Cots</a></li>
              <!-- <li><a href="tables.php">Tables</a></li> -->
            </ul>
          </li>
        
          <li><a href="about.php">About</a></li>
          <li><a style="color: rgb(15, 177, 206) !important;" href="contact.php">Contact Us</a></li>
        </ul>
      </nav>

</body>

</html>

<body>

    <!-- <div class="page-loader"></div> -->

    <div class="wrapper">

        <div class="inc:_header.html"></div>

        <!-- ========================  Main header ======================== -->

        <section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Contact</h2>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a class="active" href="contact.php">Contact</a></li>
                    </ol>
                </div>
            </header>
        </section>
        <br>

        <!-- ========================  Contact ======================== -->


        <!-- === Goolge map === -->
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31443.27362899549!2d78.07478616079584!3d9.899835737743071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00cf88bdb6efdb%3A0x8a952f4a7e9c7719!2sJeeva%20Nagar%2C%20Tamil%20Nadu%20625011!5e0!3m2!1sen!2sin!4v1661367927422!5m2!1sen!2sin"
                width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <section class="contact">

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                        <div class="contact-block">

                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-map-marker"></span>
                                            <figcaption>
                                                <strong>Where are we?</strong>
                                                <span>29 Church 1st Crosss street,<br />Jeeva Nagar, 2nd street
                                                    <br>Madurai-11</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-phone"></span>
                                            <figcaption>
                                                <strong>Call us</strong>
                                                <span>
                                                    <strong>T</strong> +91 9842167256 <br />
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-clock"></span>
                                            <figcaption>
                                                <strong>Working hours</strong>
                                                <span>
                                                    <strong>Mon- Sat</strong>: 10 am - 6 pm <br />
                                                    <strong>Sun</strong> : 12pm - 2 pm
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <div class="banner">
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10 text-center">
                                        <h2 class="title">Send an email</h2>
                                        <p>
                                            We believe in creativity as one of
                                            the major forces of progress.
                                            Please use this form if you have any questions about our products and we'll
                                            get back with you very soon.
                                        </p>

                                        <div class="contact-form-wrapper">

                                            <!-- <a class="btn btn-clean open-form" data-text-open="Contact us via form"
                                                data-text-close="Close form">Contact us via form</a> -->

                                                <form id="sendmail" name="sendmail" enctype="multipart/form-data"
                                                    method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="Name" name="name" type="text"
                                                                    class="form-control" placeholder="Your name">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="Email" name="email" type="email"
                                                                    class="form-control" placeholder="Your email">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input id="Subject" name="subject" type="text"
                                                                    class="form-control" placeholder="Subject">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea id="Comment" name="message"
                                                                    class="form-control" placeholder="Your message"
                                                                    rows="10"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 text-center">
                                                            <input type="submit" name="btnsubmit" class="btn btn-clean"
                                                                value="Send message" />
                                                        </div>
                                                    </div>
                                                </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- <div class="contact-info">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <figure>
                                            <figcaption>
                                                <strong>Sales</strong>
                                                <span>
                                                    <strong>T</strong> +1 125 251 4586 <br />
                                                    <strong>F</strong> +1 251 333 5555
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <figure>
                                            <figcaption>
                                                <strong>Services</strong>
                                                <span>
                                                    <strong>T</strong> +1 654 333 8541 <br />
                                                    <strong>F</strong> +1 125 251 5555
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <figure>
                                            <figcaption>
                                                <strong>Support</strong>
                                                <span>
                                                    <strong>T</strong> +1 222 852 9632 <br />
                                                    <strong>F</strong> +1 357 333 5555
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <figure>
                                            <figcaption>
                                                <strong>Human resources</strong>
                                                <span>
                                                    <strong>T</strong> +1 963 333 8745 <br />
                                                    <strong>F</strong> +1 159 333 5555
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <figure>
                                            <figcaption>
                                                <strong>Factory</strong>
                                                <span>
                                                    <strong>T</strong> +1 753 333 1259 <br />
                                                    <strong>F</strong> +1 247 652 5555
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <figure>
                                            <figcaption>
                                                <strong>Delivery</strong>
                                                <span>
                                                    <strong>T</strong> +1 134 197 7532 <br />
                                                    <strong>F</strong> +1 291 468 4563
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div> -->
                        </div>


                    </div>
                    <!--col-sm-8-->
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </section>

        <div class="inc:_footer.html"></div>
</div>
<div class="navbar-default" style="background-color: #00183c;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand"></a>
            </div>
            <p style="text-align:center;color:white;margin-top:2px;padding: 10px;">All copy right reserved @2022</p>
            </ul>
        </div>
    </div>
    <!--footer style-->
    <style>
        @media screen and (max-width: 600px) {
            .navbar-default .navbar-brand {
                display: none;
            
            }
        }
    </style>
    <!--/wrapper-->


    <!--JS bundle -->
    <!-- <script src="js/bundle.min.js"></script> -->
    <!-- 
    <script>
        function initMap() {
            var contentString =
                '<div class="map-info-window">' +
                '<p><img src="assets/images/logo-dark.png" alt=""></p>' +
                '<p><strong>Arrow Furniture factory</strong></p>' +
                '<p><i class="fa fa-map-marker"></i> 200 12th Ave, New York, NY 10001, USA</p>' +
                '<p><i class="fa fa-phone"></i> +12 33 444 555</p>' +
                '<p><i class="fa fa-clock-o"></i> 10am - 6pm</p>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            //set default pposition
            var myLatLng = { lat: 40.7459772, lng: -74.0545504 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng,
                styles: [{ "featureType": "administrative", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -100 }, { "lightness": 20 }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -100 }, { "lightness": 40 }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -10 }, { "lightness": 30 }] }, { "featureType": "landscape.man_made", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": -60 }, { "lightness": 10 }] }, { "featureType": "landscape.natural", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": -60 }, { "lightness": 60 }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }, { "saturation": -100 }, { "lightness": 60 }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "visibility": "off" }, { "saturation": -100 }, { "lightness": 60 }] }]
            });
            //set marker
            var image = 'assets/images/map-icon.png';
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: "Hello World!",
                icon: image
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAabaAL675kRhFvfrPEmjFUirXHk2cA9Dc&amp;callback=initMap"></script> -->
 
</body>


<!-- Mirrored from www.elathemes.com/themes/mobel/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 11:36:54 GMT -->

</html>