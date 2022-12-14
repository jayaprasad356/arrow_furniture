<!DOCTYPE html>
<html lang="en">

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
    <title>Home | Arrow Furniture</title>



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
    <title>Bootstrap Example</title>
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
#navin span{
    color:#cca763;
    font-family: 'Times New Roman', Times, serif;
}

nav {    
display: block;
text-align: center;
top:0;
margin-top: 10px;

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


@media screen and (max-width:900px) {
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
  float:right!important;
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
          <li><a style="color: rgb(15, 177, 206) !important;" href="index.php">Home</a></li>
          <li><a>Product</a>
            <ul>
              <li><a href="sofa.php">sofa</a></li>
              <li><a href="cots.php">Wooden Cots</a></li>
              <!-- <li><a href="tables.php">Tables</a></li> -->
            </ul>
          </li>
        
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>

</body>

</html>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

        <div class="inc:_header.html"></div>

        <!-- ========================  Header content ======================== -->

        <section class="header-content">

            <div class="owl-slider">

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/gallery-1.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Modern furniture </h2>
                            <div class="animated" data-animation="fadeInUp">
                                Modern & Quality Furntiures Available. <br />
                            </div>
                            <!-- <div class="animated" data-animation="fadeInUp">
                                <a href="https://themeforest.net/item/mobel-furniture-website-template/20382155" target="_blank" class="btn btn-main" ><i class="icon icon-cart"></i> Buy this template</a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/gallery-2.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Get Ready For Purchase!</h2>
                            <div class="animated" data-animation="fadeInUp">Unlimited Choices. Unbeatable Prices. Free
                                Shipping.</div>
                            <!-- <div class="animated" data-animation="fadeInUp">Furniture category icon fonts!</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="category.html" class="btn btn-clean">Get insipred</a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/gallery-3.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">
                                Well Designed Products.
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp">
                                All type of furnitures available at low price. <br>
                                Get your furniture now.
                            </div>
                            <!-- <div class="desc animated" data-animation="fadeInUp">
                                Bunch of typography effects.
                            </div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="https://themeforest.net/item/mobel-furniture-website-template/20382155"
                                    target="_blank" class="btn btn-clean">Buy this template</a>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--/owl-slider-->
        </section>

        <!-- ========================  Icons slider ======================== -->

        <section class="owl-icons-wrapper owl-icons-frontpage">

            <!-- === header === -->

            <header class="hidden">
                <h2>Product categories</h2>
            </header>

            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-sofa"></i>
                            <figcaption>Sofa</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-armchair"></i>
                            <figcaption>Armchairs</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-chair"></i>
                            <figcaption>Chairs</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-dining-table"></i>
                            <figcaption>Dining tables</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-media-cabinet"></i>
                            <figcaption>Media storage</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-table"></i>
                            <figcaption>Tables</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-bookcase"></i>
                            <figcaption>Bookcase</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-bedroom"></i>
                            <figcaption>Bedroom</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-nightstand"></i>
                            <figcaption>Nightstand</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-children-room"></i>
                            <figcaption>Children room</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-kitchen"></i>
                            <figcaption>Kitchen</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-bathroom"></i>
                            <figcaption>Bathroom</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-wardrobe"></i>
                            <figcaption>Wardrobe</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-shoe-cabinet"></i>
                            <figcaption>Shoe cabinet</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-office"></i>
                            <figcaption>Office</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-bar-set"></i>
                            <figcaption>Bar sets</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-lightning"></i>
                            <figcaption>Lightning</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-carpet"></i>
                            <figcaption>Varpet</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="#">
                        <figure>
                            <i class="f-icon f-icon-accessories"></i>
                            <figcaption>Accessories</figcaption>
                        </figure>
                    </a>

                </div>
                <!--/owl-icons-->
            </div>
            <!--/container-->
        </section>

        <!-- ========================  Products widget ======================== -->

        <section class="products">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title">Popular products</h2>
                            <div class="text">
                                <p>Check out our latest collections</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">

                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <span class="label label-info">-50%</span>
                                <div class="image">
                                    <a href="#productid1" class="mfp-open">
                                        <img src="assets/images/product-1.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Green corner</a></h2>
                                    <sub>₹ 1499,-</sub>
                                    <sup>₹ 1099,-</sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid2" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#productid2" class="mfp-open">
                                        <img src="assets/images/product-2.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Laura</a></h2>
                                    <sub>₹ 3999,-</sub>
                                    <sup>₹ 3499,-</sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>




                </div>
                <div class="row">


                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid3" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <span class="label label-warning">New</span>
                                <div class="image">
                                    <a href="#productid3" class="mfp-open">
                                        <img src="assets/images/product-4.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Aurora</a></h2>
                                    <sub>₹ 2999,-</sub>
                                    <sup>₹ 2299,-</sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid4" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <span class="label label-warning">New</span>
                                <div class="image">
                                    <a href="#productid4" class="mfp-open">
                                        <img src="assets/images/product-6.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Dining set</a></h2>
                                    <sub>₹ 1999,-</sub>
                                    <sup>₹ 1499,-</sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid5" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#productid5" class="mfp-open">
                                        <img src="assets/images/product-3.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Seat chair</a></h2>
                                    <sub>₹ 999,-</sub>
                                    <sup>₹ 699,-</sup>
                                    <span class=" description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">

                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid6" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <span class="label label-info">-50%</span>
                                <div class="image">
                                    <a href="#productid6" class="mfp-open">
                                        <img src="assets/images/product-5.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Nude</a></h2>
                                    <sub>₹ 1499,-</sub>
                                    <sup>₹ 1099,-</sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid7" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#productid7" class="mfp-open">
                                        <img src="assets/images/product-7.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Sofa</a></h2>
                                    <sub>₹ 3999,-</sub>
                                    <sup>₹ 3499,-</sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-6 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#productid1" class="mfp-open">
                                        <img src="assets/images/product-1.jpg" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a>Green Corner</a></h2>
                                    <sub>₹ 1499,-</sub>
                                    <sup>₹ 1099,-</sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
            <!--/row-->
            <section class="products">

                <div class="container">
    
                    <!-- === header title === -->
    
                    <header>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8 text-center">
                                <h2 class="title">Wooden Cot Products</h2>
                                <div class="text">
                                    <p>Check out our latest collections</p>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid22" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid22" class="mfp-open">
                                            <img src="assets/images/wooden/cot1.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot1</a></h2>
                                        <sub>₹ 14999,-</sub>
                                        <sup>₹ 14900,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid9" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid9" class="mfp-open">
                                            <img src="assets/images/wooden/cot2.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot2</a></h2>
                                        <sub>₹ 12000,-</sub>
                                        <sup>₹ 11800,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid10" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid10" class="mfp-open">
                                            <img src="assets/images/wooden/cot3.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot3</a></h2>
                                        <sub>₹ 10999,-</sub>
                                        <sup>₹ 10449,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid11" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid11" class="mfp-open">
                                            <img src="assets/images/wooden/cot4.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot4</a></h2>
                                        <sub>₹ 16879,-</sub>
                                        <sup>₹ 16440,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid12" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid12" class="mfp-open">
                                            <img src="assets/images/wooden/cot5.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot5</a></h2>
                                        <sub>₹ 11900,-</sub>
                                        <sup>₹ 10900,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid13" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid13" class="mfp-open">
                                            <img src="assets/images/wooden/cot6.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot6</a></h2>
                                        <sub>₹ 8999,-</sub>
                                        <sup>₹ 8500,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid14" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid14" class="mfp-open">
                                            <img src="assets/images/wooden/cot7.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot7</a></h2>
                                        <sub>₹ 10999,-</sub>
                                        <sup>₹ 10500,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid15" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid15" class="mfp-open">
                                            <img src="assets/images/wooden/cot8.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot8</a></h2>
                                        <sub>₹ 15999,-</sub>
                                        <sup>₹ 15400,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid16" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid16" class="mfp-open">
                                            <img src="assets/images/wooden/cot9.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot9</a></h2>
                                        <sub>₹ 11450,-</sub>
                                        <sup>₹ 11000,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid17" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid17" class="mfp-open">
                                            <img src="assets/images/wooden/cot10.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot10</a></h2>
                                        <sub>₹ 14999,-</sub>
                                        <sup>₹ 14900,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid18" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid18" class="mfp-open">
                                            <img src="assets/images/wooden/cot11.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot11</a></h2>
                                        <sub>₹ 14999,-</sub>
                                        <sup>₹ 14900,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid19" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid19" class="mfp-open">
                                            <img src="assets/images/wooden/cot12.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot12</a></h2>
                                        <sub>₹ 12999,-</sub>
                                        <sup>₹ 12000,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid20" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid20" class="mfp-open">
                                            <img src="assets/images/wooden/cot13.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot13</a></h2>
                                        <sub>₹ 13999,-</sub>
                                        <sup>₹ 13400,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites"
                                            data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid21" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid21" class="mfp-open">
                                            <img src="assets/images/wooden/cot14.jpeg" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a>Wooden cot14</a></h2>
                                        <sub>₹ 14999,-</sub>
                                        <sup>₹ 14900,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                            consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                            consetetur nulla</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div><!--end-row-->
                </div><!--endcontainer-->
            </section>


            <!-- === button more === -->

            <div class="wrapper-more">
                <a href="products-grid.html" class="btn btn-main">View store</a>
            </div>

            <!-- ========================  Product info popup - quick view(product1) ======================== -->

    <div class="popup-main mfp-hide" id="productid1">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Green Corner <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-1.jpg" alt="" width="640" />

            </div>

            <!-- === product-popup-info === -->
            <!--<div class="popup-content"> -->
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 1099,00 <small><strike>₹ 1499,00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- ========================  Product info popup - quick view(product2) ======================== -->

    <div class="popup-main mfp-hide" id="productid2">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">LAURA <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-2.jpg" alt="" width="640" />

            </div>

            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue "></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege checked"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 3499.00 <small><strike>₹ 3999,00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product3)-->

    <div class="popup-main mfp-hide" id="productid3">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Aurora <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-4.jpg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red checked"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege checked">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 2299.00 <small><strike>₹ 2999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>



    </div>
    </div>

    <!--Product info popup - quick view(product4)-->

    <div class="popup-main mfp-hide" id="productid4">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Dining Set <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-6.jpg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-brown checked"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 1499,00 <small><strike>₹ 1999,00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product5)-->

    <div class="popup-main mfp-hide" id="productid5">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Seat Chair <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-3.jpg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green checked"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 699,00 <small><strike>₹ 999,00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product6)-->

    <div class="popup-main mfp-hide" id="productid6">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Nude <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-5.jpg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege checked">S</span>
                                <span class="color-btn color-btn-biege">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 1099,00 <small><strike>₹ 1499,00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product4)-->

    <div class="popup-main mfp-hide" id="productid7">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Sofa <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-7.jpg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood, Leather, Acrylic</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray checked"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div>
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 3499,00 <small><strike>₹ 3999,00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>



    <!--wooden cot product quick views-->

    <!-- ========================  Product info popup - quick view(product9) ======================== -->

    <div class="popup-main mfp-hide" id="productid9">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot2 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot2.jpeg" alt="" width="640" />

            </div>

            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Material</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue "></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege checked"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 11800.00 <small><strike>₹ 12000.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product10)-->

    <div class="popup-main mfp-hide" id="productid10">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot3 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot3.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red checked"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege checked">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 10999.00 <small><strike>₹ 10449.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>



    </div>
    </div>

    <!--Product info popup - quick view(product11)-->

    <div class="popup-main mfp-hide" id="productid11">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot4 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot4.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red checked"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege checked">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 16440.00 <small><strike>₹ 16879.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>



    </div>
    </div>

    <!--Product info popup - quick view(product12)-->

    <div class="popup-main mfp-hide" id="productid12">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot5 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot5.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Material</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green checked"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 11900.00<small><strike>₹ 10900.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product13)-->

    <div class="popup-main mfp-hide" id="productid13">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot6 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot6.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege checked">S</span>
                                <span class="color-btn color-btn-biege">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 8500.00 <small><strike>₹ 8999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product14)-->

    <div class="popup-main mfp-hide" id="productid14">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot7 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot7.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray checked"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 10500.00 <small><strike>₹ 10999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="popup-main mfp-hide" id="productid15">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot8<small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot8.jpeg" alt="" width="640" />

            </div>

            <!-- === product-popup-info === -->
            <!--<div class="popup-content"> -->
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 15400.00 <small><strike>₹ 15999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>


    <div class="popup-main mfp-hide" id="productid16">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot9 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot9.jpeg" alt="" width="640" />

            </div>

            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue "></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege checked"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 11000.00 <small><strike>₹ 11450.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product17)-->

    <div class="popup-main mfp-hide" id="productid17">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot10 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot10.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Material</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red checked"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege checked">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 14999.00 <small><strike>₹ 14900.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>



    </div>
    </div>

    <!--Product info popup - quick view(product18)-->

    <div class="popup-main mfp-hide" id="productid18">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot11 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot11.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-brown checked"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 14999.00 <small><strike>₹ 14900.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product19)-->

    <div class="popup-main mfp-hide" id="productid19">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot12 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot12.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green checked"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 12000.00 <small><strike>₹ 12999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product20)-->

    <div class="popup-main mfp-hide" id="productid20">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot13 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot13.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege checked">S</span>
                                <span class="color-btn color-btn-biege">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 13400.00 <small><strike>₹ 13999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--Product info popup - quick view(product21)-->

    <div class="popup-main mfp-hide" id="productid21">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden cot14 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot14.jpeg" alt="" width="640" />

            </div>
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Materials</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Available Colors</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-blue"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray checked"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 14900.00 <small><strike>₹ 14999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

        <!--Product info popup - quick view(product22)-->

    
    <div class="popup-main mfp-hide" id="productid22">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">Wooden Cot1 <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/wooden/cot1.jpeg" alt="" width="640" />

            </div>

            <!-- === product-popup-info === -->
            <!--<div class="popup-content"> -->
            <div class="product-info-wrapper">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="info-box">
                            <strong>Manufacturer</strong>
                            <span>Brand name</span>
                        </div>
                        <div class="info-box">
                            <strong>Material</strong>
                            <span>Wood</span>
                        </div>
                        <div class="info-box">
                            <strong>Availability</strong>
                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <!-- <div class="info-box">
                            <strong>Color</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-red"></span>
                                <span class="color-btn color-btn-brown checked"></span>
                                <span class="color-btn color-btn-green"></span>
                                <span class="color-btn color-btn-gray"></span>
                                <span class="color-btn color-btn-biege"></span>
                            </div>
                        </div> -->
                        <div class="info-box">
                            <strong>Choose size</strong>
                            <div class="product-colors clearfix">
                                <span class="color-btn color-btn-biege">S</span>
                                <span class="color-btn color-btn-biege checked">M</span>
                                <span class="color-btn color-btn-biege">XL</span>
                                <span class="color-btn color-btn-biege">XXL</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="popup-table table-bordered">
            <div class="popup-cell">
                <div class="price">
                    <span class="h3">₹ 14900.00 <small><strike>₹ 14999.00</strike></small></span>
                </div>
            </div>
            <div class="popup-cell">
                <div class="popup-buttons">
                    <a><span class="icon icon-eye"></span> <span class="hidden-xs">View
                            more</span></a>
                    <a><span class=" icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--end wooden cot product quick views-->

    <!--/container-->
    </section>

    <!-- ========================  Stretcher widget ======================== -->

    <section class="stretcher-wrapper">

        <!-- === stretcher header === -->

        <header class="hidden">
            <!--remove class 'hidden'' to show section header -->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h1 class="h2 title">Popular categories</h1>
                        <div class="text">
                            <p>
                                Whether you are changing your home, or moving into a new one, you will find a huge
                                selection of quality living room furniture,
                                bedroom furniture, dining room furniture and the best value at Furniture factory
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- === stretcher === -->

        <ul class="stretcher">

            <!-- === stretcher item === -->

            <li class="stretcher-item" style="background-image:url(assets/images/gallery-1.jpg);">
                <!--logo-item-->
                <div class="stretcher-logo">
                    <div class="text">
                        <span class="f-icon f-icon-bedroom"></span>
                        <span class="text-intro">Bedroom</span>
                    </div>
                </div>
                <!--main text-->
                <figure>
                    <h4>Modern furnishing projects</h4>
                    <figcaption>New furnishing ideas</figcaption>
                </figure>
                <!--anchor-->
                <p href="#">Anchor link</p>
            </li>

            <!-- === stretcher item === -->

            <li class="stretcher-item" style="background-image:url(assets/images/gallery-2.jpg);">
                <!--logo-item-->
                <div class="stretcher-logo">
                    <div class="text">
                        <span class="f-icon f-icon-sofa"></span>
                        <span class="text-intro">Living room</span>
                    </div>
                </div>
                <!--main text-->
                <figure>
                    <h4>Furnishing and complements</h4>
                    <figcaption>Discover the design table collection</figcaption>
                </figure>
                <!--anchor-->
                <p href="#">Anchor link</p>
            </li>

            <!-- === stretcher item === -->

            <li class="stretcher-item" style="background-image:url(assets/images/gallery-3.jpg);">
                <!--logo-item-->
                <div class="stretcher-logo">
                    <div class="text">
                        <span class="f-icon f-icon-office"></span>
                        <span class="text-intro">Office</span>
                    </div>
                </div>
                <!--main text-->
                <figure>
                    <h4>Which is Best for Your Home</h4>
                    <figcaption>Wardrobes vs Walk-In Closets</figcaption>
                </figure>
                <!--anchor-->
                <p href="#">Anchor link</p>
            </li>

            <!-- === stretcher item === -->

            <li class="stretcher-item" style="background-image:url(assets/images/gallery-4.jpg);">
                <!--logo-item-->
                <div class="stretcher-logo">
                    <div class="text">
                        <span class="f-icon f-icon-bathroom"></span>
                        <span class="text-intro">Bathroom</span>
                    </div>
                </div>
                <!--main text-->
                <figure>
                    <h4>Keeping Things Minimal</h4>
                    <figcaption>Creating Your Very Own Bathroom</figcaption>
                </figure>
                <!--anchor-->
                <p href="#">Anchor link</p>
            </li>

            <!-- === stretcher item more=== -->

            <li class="stretcher-item more">
                <div class="more-icon">
                    <span data-title-show="Show more" data-title-hide="+"></span>
                </div>
                <a href="#"></a>
            </li>

        </ul>
    </section>

    <!-- ========================  Blog Block ======================== -->

    <section class="blog blog-block">

        <div class="container">

            <!-- === blog header === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title">Interior ideas</h2>
                        <div class="text">
                            <p>Keeping things minimal</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row">

                <!-- === blog item === -->

                <div class="col-sm-4">
                    <article>
                        <p href="#">
                        <div class="image">
                            <img src="assets/images/project-4.jpg" alt="" />
                        </div>
                        <div class="entry entry-block">
                            <div class="date">28 Mart 2017</div>
                            <div class="title">
                                <h2 class="h3">Creating the Perfect Gallery Wall </h2>
                            </div>
                            <div class="description">
                                <p>
                                    You’ve finally reached this point in your life- you’ve bought your first
                                    home, moved
                                    into your very own apartment, moved out of the dorm room or you’re finally
                                    downsizing
                                    after all of your kids have left the nest.
                                </p>
                            </div>
                        </div>
                        <div class="show-more">
                            <span class="btn btn-main btn-block">Read more</span>
                        </div>
                        </p>
                    </article>
                </div>

                <!-- === blog item === -->

                <div class="col-sm-4">
                    <article>
                        <p href="#">
                        <div class="image">
                            <img src="assets/images/project-5.jpg" alt="" />
                        </div>
                        <div class="entry entry-block">
                            <div class="date">25 Mart 2017</div>
                            <div class="title">
                                <h2 class="h3">Making the Most Out of Your Kids Old Bedroom</h2>
                            </div>
                            <div class="description">
                                <p>
                                    You’ve finally reached this point in your life- you’ve bought your first
                                    home, moved
                                    into your very own apartment, moved out of the dorm room or you’re finally
                                    downsizing
                                    after all of your kids have left the nest.
                                </p>
                            </div>
                        </div>
                        <div class="show-more">
                            <span class="btn btn-main btn-block">Read more</span>
                        </div>
                        </p>
                    </article>
                </div>

                <!-- === blog item === -->

                <div class="col-sm-4">
                    <article>
                        <p href="#">
                        <div class="image">
                            <img src="assets/images/project-6.jpg" alt="" />
                        </div>
                        <div class="entry entry-block">
                            <div class="date">28 Mart 2017</div>
                            <div class="title">
                                <h2 class="h3">Have a look at our new projects!</h2>
                            </div>
                            <div class="description">
                                <p>
                                    You’ve finally reached this point in your life- you’ve bought your first
                                    home, moved
                                    into your very own apartment, moved out of the dorm room or you’re finally
                                    downsizing
                                    after all of your kids have left the nest.
                                </p>
                            </div>
                        </div>
                        <div class="show-more">
                            <span class="btn btn-main btn-block">Read more</span>
                        </div>
                        </p>
                    </article>
                </div>

            </div>
            <!--/row-->
            <!-- === button more === -->

            <div class="wrapper-more">
                <p href="#" class="btn btn-main">View all posts</p>
            </div>

        </div>
        <!--/container-->
    </section>

    <!-- ========================  Banner ======================== -->

    <section class="banner" style="background-image:url(assets/images/gallery-4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title">Our story</h2>
                    <p>
                        Foresight, diversification and encountering global quality furnitures ensured our process of
                        forward integration from Importer and whole seller of furnitures to a leading retail brand
                        in the city of <b>Madurai, Tamil Nadu.</b>
                    </p>
                    <p href="#" class="btn btn-clean">Read full story</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================  Blog ======================== -->

    <section class="blog">

        <div class="container">

            <!-- === blog header === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h1 class="h2 title">Blog</h1>
                        <div class="text">
                            <p>Latest news from the blog</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row">

                <!-- === blog item === -->

                <div class="col-sm-4">
                    <article>
                        <p href="#">
                        <div class="image" style="background-image:url(assets/images/blog-1.jpg)">
                            <img src="assets/images/blog-1.jpg" alt="" />
                        </div>
                        <div class="entry entry-table">
                            <div class="date-wrapper">
                                <div class="date">
                                    <span>MAR</span>
                                    <strong>08</strong>
                                    <span>1992</span>
                                </div>
                            </div>
                            <div class="title">
                                <h2 class="h5">The 3 Tricks that Quickly Became Rules</h2>
                            </div>
                        </div>
                        <div class="show-more">
                            <span class="btn btn-main btn-block">Read more</span>
                        </div>
                        </p>
                    </article>
                </div>

                <!-- === blog item === -->

                <div class="col-sm-4">
                    <article>
                        <p href="#">
                        <div class="image" style="background-image:url(assets/images/blog-2.jpg)">
                            <img src="assets/images/blog-1.jpg" alt="" />
                        </div>
                        <div class="entry entry-table">
                            <div class="date-wrapper">
                                <div class="date">
                                    <span>MAR</span>
                                    <strong>03</strong>
                                    <span>1993</span>
                                </div>
                            </div>
                            <div class="title">
                                <h2 class="h5">Decorating When You're Starting Out or Starting Over</h2>
                            </div>
                        </div>
                        <div class="show-more">
                            <span class="btn btn-main btn-block">Read more</span>
                        </div>
                        </p>
                    </article>
                </div>

                <!-- === blog item === -->

                <div class="col-sm-4">
                    <article>
                        <p href="#">
                        <div class="image" style="background-image:url(assets/images/blog-8.jpg)">
                            <img src="assets/images/blog-8.jpg" alt="" />
                        </div>
                        <div class="entry entry-table">
                            <div class="date-wrapper">
                                <div class="date">
                                    <span>MAR</span>
                                    <strong>01</strong>
                                    <span>1992</span>
                                </div>
                            </div>
                            <div class="title">
                                <h2 class="h5">What does your favorite dining chair say about you?</h2>
                            </div>
                        </div>
                        <div class="show-more">
                            <span class="btn btn-main btn-block">Read more</span>
                        </div>
                        </p>
                    </article>
                </div>

            </div>
            <!--/row-->
            <!-- === button more === -->

            <div class="wrapper-more">
                <p href="#" class="btn btn-main">View all posts</p>
            </div>

        </div>
        <!--/container-->
    </section>

    <!-- ========================  Instagram ======================== -->

    <section class="instagram">

        <!-- === instagram header === -->

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="h2 title">Follow us <i class="fa fa-instagram fa-2x"></i> Instagram </h2>
                        <div class="text">
                            <p>@ArrowFurnitureFactory</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- === instagram gallery === -->

        <div class="gallery clearfix">
            <p class="item" href="#">
                <img src="assets/images/square-1.jpg" alt="Alternate Text" />
            </p>
            <p class="item" href="#">
                <img src="assets/images/square-2.jpg" alt="Alternate Text" />
            </p>
            <p class="item" href="#">
                <img src="assets/images/square-3.jpg" alt="Alternate Text" />
            </p>
            <p class="item" href="#">
                <img src="assets/images/square-4.jpg" alt="Alternate Text" />
            </p>
            <p class="item" href="#">
                <img src="assets/images/square-5.jpg" alt="Alternate Text" />
            </p>
            <p class="item" href="#">
                <img src="assets/images/square-6.jpg" alt="Alternate Text" />
            </p>

        </div>
        <!--/gallery-->

    </section>

    <div class="inc:_footer.html"></div>

    </div>
    <!--/wrapper-->

    <!--JS bundle -->
    <script src="js/bundle.min.js"></script>

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

</body>

</html>