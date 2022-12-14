<?php
include_once('admin/includes/functions.php');
$function = new functions;
include_once('admin/includes/custom-functions.php');
$fn = new custom_functions;
include_once('admin/includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.elathemes.com/themes/mobel/products-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 11:34:09 GMT -->

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
    <title>Products | Arrow Furniture</title>

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
              <li><a style="color: rgb(15, 177, 206) !important;" href="cots.php">Wooden Cots</a></li>
              <!-- <li><a href="tables.php">Tabels</a></li> -->
            </ul>
          </li>
        
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>

</body>

</html>

<body>

    

    <div class="wrapper">

        <div class="inc:_header.html"></div>

        <!-- ======================== Main header ======================== -->

        <section class="main-header" style="background-image:url(assets/images/gallery-3.jpg)">
            <header>
                <div class="container">
                    <h1 class="h2 title">Shop</h1>
                    <ol class="breadcrumb breadcrumb-inverted">

                        <li><a class="active" href="products-grid.html">Product Sub-category</a></li>
                    </ol>
                </div>
            </header>
        </section>

        <!-- ========================  Icons slider ======================== -->

        <section class="owl-icons-wrapper">

            <!-- === header === -->

            <header class="hidden">
                <h2>Product categories</h2>
            </header>

            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->

                    <a href="sofa.php">
                        <figure>
                            <i class="f-icon f-icon-sofa"></i>
                            <figcaption>Sofa</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->
                    <!-- <a href="tables.php">
                        <figure>
                            <i class="f-icon f-icon-table"></i>
                            <figcaption>Tables</figcaption>
                        </figure>
                    </a> -->

                    <!-- === icon item === -->
                    <a href="cots.php">
                        <figure>
                            <i class="f-icon f-icon-bedroom"></i>
                            <figcaption>Wooden Cots</figcaption>
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

        <!-- ======================== Products ======================== -->

        <section class="products">
            <div class="container-fluid">

                <header class="hidden">
                    <h3 class="h3 title">Product category grid</h3>
                </header>

                <div class="row">

                    <!-- === product-filters === -->

                    <!-- <div class="col-md-3 col-xs-12">
                        <div class="filters"> -->
                    <!--Price-->
                    <!-- <div class="filter-box active">
                                <div class="title">Price</div>
                                <div class="filter-content">
                                    <div class="price-filter">
                                        <input type="text" id="range-price-slider" value="" name="range" />
                                    </div>
                                </div>
                            </div> -->
                    <!--Availability-->
                    <!-- <div class="filter-box active">
                                <div class="title">
                                    Availability
                                </div>
                                <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-stock" id="availableId1" checked="checked">
                                        <label for="availableId1">In stock <i>(152)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-stock" id="availableId2">
                                        <label for="availableId2">1 Week <i>(100)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-stock" id="availableId3">
                                        <label for="availableId3">2 Weeks <i>(80)</i></label>
                                    </span>
                                </div>
                            </div> -->
                    <!--/filter-box-->
                    <!--Discount-->
                    <!-- <div class="filter-box active">
                                <div class="title">
                                    Discount
                                </div>
                                <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" id="discountId1" name="discountPrice" checked="checked">
                                        <label for="discountId1">Discount price</label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" id="discountId2" name="discountPrice">
                                        <label for="discountId2">Regular price</label>
                                    </span>
                                </div>
                            </div> -->
                    <!--/filter-box-->
                    <!--Type-->
                    <!-- <div class="filter-box active">
                                <div class="title">
                                    Type
                                </div> -->
                    <!-- <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeIdAll" checked="checked">
                                        <label for="typeIdAll">All <i>(1200)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId1">
                                        <label for="typeId1">Sofa <i>(20)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId2">
                                        <label for="typeId2">Armchairs <i>(12)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId3">
                                        <label for="typeId3">Chairs <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId4">
                                        <label for="typeId4">Dining tables <i>(140)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId5">
                                        <label for="typeId5">Media storage <i>(20)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId6">
                                        <label for="typeId6">Tables <i>(10)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId7">
                                        <label for="typeId7">Bookcase <i>(450)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId8">
                                        <label for="typeId8">Nightstands <i>(750)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId9">
                                        <label for="typeId9">Children room <i>(960)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId10">
                                        <label for="typeId10">Kitchen <i>(44)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId11">
                                        <label for="typeId11">Bathroom <i>(5)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId12">
                                        <label for="typeId12">Wardrobe <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId13">
                                        <label for="typeId13">Shoe cabinet <i>(23)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId14">
                                        <label for="typeId14">Office <i>(24)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId15">
                                        <label for="typeId15">Bar sets <i>(92)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-type" id="typeId16">
                                        <label for="typeId16">Lightning <i>(1120)</i></label>
                                    </span>
                                </div>
                            </div> -->
                    <!--/filter-box-->
                    <!--Material-->
                    <!-- <div class="filter-box active">
                                <div class="title">
                                    Material
                                </div>
                                <div class="filter-content">
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matIdAll">
                                        <label for="matIdAll">All <i>(450)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId1">
                                        <label for="matId1">Blend <i>(11)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId2">
                                        <label for="matId2">Leather <i>(12)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId3">
                                        <label for="matId3">Wood <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId4">
                                        <label for="matId4">Shell <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId5">
                                        <label for="matId5">Metal <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId6">
                                        <label for="matId6">Aluminium <i>(80)</i></label>
                                    </span>
                                    <span class="checkbox">
                                        <input type="radio" name="radiogroup-material" id="matId7">
                                        <label for="matId7">Acrilic <i>(80)</i></label>
                                    </span>
                                </div>
                            </div> -->
                    <!--/filter-box-->
                    <!--close filters on mobile / update filters-->
                    <!-- <div class="toggle-filters-close btn btn-main">
                                Update search
                            </div>

                        </div> -->
                    <!--/filters-->
                    <!-- </div> -->

                    <!--product items-->

                    <div class="col-md-12inde col-xs-12">

                        <div class="sort-bar clearfix">
                            <div class="sort-results pull-left">
                                <!--Showing result per page-->
                                <select>
                                    <option value="1">10</option>
                                    <option value="2">50</option>
                                    <option value="3">100</option>
                                    <option value="4">All</option>
                                </select>
                                <!--Items counter-->
                                <span>Showing all <strong>50</strong> of <strong>3,250</strong> items</span>
                            </div>
                            <!--Sort options-->
                            <div class="sort-options pull-right">
                                <span class="hidden-xs">Sort by</span>
                                <select>
                                    <option value="1">Name</option>
                                    <option value="2">Popular items</option>
                                    <option value="3">Price: lowest</option>
                                    <option value="4">Price: highest</option>
                                </select>
                                <!--Grid-list view-->
                                <span class="grid-list">
                                    <a href="products-grid.html"><i class="fa fa-th-large"></i></a>
                                    <a href="products-list.html"><i class="fa fa-align-justify"></i></a>
                                    <a href="javascript:void(0);" class="toggle-filters-mobile"><i
                                            class="fa fa-search"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>




                    <?php
                        $sql = "SELECT * FROM `products` WHERE category_id=2";
                        $db->sql($sql);
                        $result = $db->getResult();
                        foreach ($result as $value) {
                        ?>
                  <div class="col-md-6 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites"
                                        data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#<?php echo $value['id']; ?>" class="mfp-open" data-title="Quick wiew"><i
                                            class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div>
                            <div class="figure-grid">
                                <span class="label label-warning">New</span>
                                <div class="image">
                                    <a href="#<?php echo $value['id']; ?>" class="mfp-open">
                                        <img src="<?php echo "admin/" .$value['image']; ?>" alt="" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a><?php echo $value['product_name'] ?></a></h2>
                                    <sub>???<?php echo $value['price'] ?></sub>
                                    <sup>??? <?php echo $value['discounted_price'] ?></sup>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                        consetetur facilisis blandit et aliquyam lorem ea duo labore diam
                                        sit et
                                        consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                     </div>
                                   
                        <?php } ?>
        </section>
    <!--wooden cot product quick views-->

    <!-- ========================  Product info popup - quick view(product9) ======================== -->

    <?php
    $sql = "SELECT * FROM `products`";
    $db->sql($sql);
    $result = $db->getResult();
    foreach ($result as $value) {
    ?>
  <div class="popup-main mfp-hide" id=<?php echo $value['id']; ?> >

            <!-- === product popup === -->

            <div class="product">

                <!-- === popup-title === -->

                <div class="popup-title">
                    <div class="h1 title"><?php echo $value['product_name'] ?><small>product category</small></div>
                </div>

                <!-- === product gallery === -->

                <div class="owl-product-gallery">
                    <img src="<?php echo "admin/" .$value['image'] ?>" alt="" width="640" />

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
                        <span class="h3"><?php echo $value['discounted_price']; ?><small><strike><?php echo $value['price']; ?></strike></small></span>
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
       <?php } ?>

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

<!-- Mirrored from www.elathemes.com/themes/mobel/products-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 11:34:10 GMT -->

</html>