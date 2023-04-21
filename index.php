<!DOCTYPE html>
<html lang="en">
<?php include("user_session.php"); ?> 
<!-- Mirrored from www.templatespremium.net/corpboot/template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2016 14:05:57 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="Uploads/images/cutting-icon.png">
        <title>CPSU TREE CUTTING SERVICES</title>

        <!-- CSS
        ===============================================================-->
        <!-- Bootstrap Core CSS -->
        <link href="User/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons -->
        <link href="User/assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Flex Slider -->
        <link rel="stylesheet" href="User/assets/css/flexslider.css">
        <!-- Change color theme -->
        <link href="User/assets/css/style-switcher.css" rel="stylesheet">
        <!-- Theme CSS -->
        <link href="User/assets/css/main.css" id="theme" rel="stylesheet">
        <!-- Animation -->
        <link href="User/assets/css/animate.min.css" rel="stylesheet">
        <!-- Slick Carousel -->
        <link href="User/assets/css/slick.css" rel="stylesheet">
        <!-- Select Style -->
        <link href="User/assets/css/bootstrap-select.min.css" rel="stylesheet">
        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- PRELOADER
        ===============================================================-->
       

        <!-- NAVBAR
        ===============================================================-->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div style="margin-left: 5%; margin-right: 5%;" class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <?php if($_SESSION['fellerid'] == ""){?>
                        <li class=""><a href="login.php">LOG-IN</a></li>
                        <?php }else{ ?>
                        <li class=""><a href="logout.php">SIGN-OUT</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div> 
        <div style="width: 100%; " class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
                
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="Uploads/images/bg-header.jpg"  style="width:100%; height: 800px;">
                </div>
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

        <section class="bg-white animated fadeInUp " data-wow-duration="1200ms" data-wow-delay="100ms">
            <div style="margin-left: 5%; margin-right: 5%;" class="container-fluid">
                <div class="row" <?php if($_SESSION['fellerid'] == ""){ echo "hidden"; } ?>>
                    <div class="col-md-12" >
                        <div class="title wow fadeInRight">
                            <h3>Request</h3>
                        </div>
                    </div>
                    <div class="col-md-10 wow fadeInLeft">                        
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- Panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><strong>REQUEST FORM </strong>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" <?php if($status != "Verified"){ echo "hidden"; }?>><br>
                                <section class="col-sm-12 col-md-7 wow fadeInRight" data-wow-duration="1200ms" data-wow-delay="100ms" <?php if($status != "Verified"){ echo "hidden"; }?>>
                                    <form action="request_sub.php" method="POST" role="form">
                                        <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tree Name</label>
                                                    <select onchange="load(this.value)" style="width: 100%; border-radius: 3px; height: 35px;"   name="tree_name" id="tree-name" required>
                                                        <option></option>
                                                        <?php $select=mysqli_query($conn, "SELECT DISTINCT tree_name FROM trees");
                                                        while($row1=mysqli_fetch_assoc($select)){
                                                        ?>
                                                            <option><?php echo $row1['tree_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tree Number</label>
                                                    <select id="tree-no" name="tree_no" style="width: 100%; border-radius: 3px; height: 35px;"  required>
                                                        
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Reason</label>
                                                    <textarea rows="5" name="reason" id="reason" class="form-control" placeholder="&#xf075; reason" data-name="reason" required></textarea>
                                                </div>                          
                                            </div>
                                        </div>
                                        <div class="row actions">
                                            <div class="col-sm-12 col-md-6">
                                                <input type="submit" value="&#xf1d9; &nbsp;Submit" name="submit" id="submitButton" class="btn btn-default btn-primary-corp-big"  />
                                            </div>
                                        </div>
                                        </fieldset>
                                    </form>
                                    <p>&nbsp;</p>
                                </section><!-- /section Contact Form -->
                                </div>
                            </div><!-- /panel -->
                            <!-- /panel -->
                    </div><!-- /panel-group -->
                            <table id="example" class="table table-striped table-theme-1 table-bordered " cellspacing="0" width="100%" <?php if($status != "Verified"){ echo "hidden"; }?>>
                                <!-- Table header -->
                                <thead>
                                    <tr>
                                        <th>Tree Name</th>
                                        <th>Tree #</th>
                                        <th>Reason</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $sel=mysqli_query($conn, "SELECT * FROM request WHERE feller_id='$fellerid' ");
                                while($rows=mysqli_fetch_assoc($sel)){ 
                                $stat=$rows['status']; ?>
                                     <tr>
                                        <td><?php echo $rows['tree_name']; ?></td>
                                        <td><?php echo $rows['tree_no']; ?></td>
                                        <td><?php echo $rows['reason']; ?></td>
                                        <td width="30%%"><span class="<?php if($stat == "Approved" ){echo "badge alert-success";}?> <?php if($stat == "Pending..." ){echo "badge alert-info";}?> <?php if($stat == "Done Inspection" || $stat =="Processing"){echo "badge alert-warning";}?> <?php if($stat == "Declined"){echo "badge alert-danger";}?>"><?php echo $stat; ?></span>
                                        <?php if($stat == "Processing"){?><div style="border-radius: 3px; " class="bg bg-warning text-light"><p>Your request form is currently being processed. In one to two days, please visit the Admin office to sign your form and have your request approved.</p></div><?php } ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                    </div>
                    <!-- ACCORDION -->
                    <div class="col-md-2 wow fadeInRight">
                            <div class="col">
                        <div class="corp-pricing wow animated fadeInUp ">
                            <div class="corpboot-price-title">
                                
                            <div class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <figure style="margin-top: 5px; margin-right: 50px; margin-left: 50px; margin-bottom: 5px;" class="item-img-wrap">
                                <img style="width: 100%; border-radius: 50%;" src="Uploads/Tree Feller/profile/<?php echo $row['profile']; ?>" class="img-responsive" alt="team">
                            </figure>
                            <div class="team-name mt-0">
                                <h4 style="color: white;" class="h-underline2 text-light"><?php echo $fname." ".$lname; ?> </h4>
                                <h5>Tree Feller</h5>
                            </div>
                        </div>
                            </div>
                            <div  class="corpboot-price-content text-left">
                                <ul >
                                    <li>&nbsp;<strong>EMAIL ADDRESS :</strong> <?php echo $username;  ?></li>
                                    <li>&nbsp;<strong>CONTACT #: </strong><?php echo $contact;  ?></li>
                                    <li>&nbsp;<strong>ADDRESS : </strong><?php echo $address;  ?></li>
                                    <li >&nbsp;<strong>Account : </strong><span style="color: <?php if($status == "Verified") {echo "green"; }else{echo "red";}?>;" ><?php echo $status;  ?></span></li>
                                </ul>
                            </div>
                            <div class="corp-pricing-btn" hidden>
                                <a href="" class="btn btn-primary-corp">EDIT ACCOUNT</a>
                            </div>
                        </div>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div><!-- /pricing col -->
                    </div><!-- /accordion -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /section Introduction --


      
        
        

      FOOTER
        ===============================================================-->
        <footer>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row wow fadeIn" data-wow-duration="100ms">
                      
                        <div class="col-sm-6 credits">
                            
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
        </footer>

        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- JQuery -->
        <script src="User/assets/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="User/js/bootstrap.min.js"></script>
        <!-- Vanillabox -->
        <script src="User/assets/js/jquery.vanillabox-0.1.7.min.js"></script>
        <!-- OWL Carousel -->
        <script src="User/assets/js/owl.carousel.min.js"></script>
        <!-- Select Style -->
        <script src="User/assets/js/bootstrap-select.min.js"></script>
        <!-- Flexslider -->
        <script src="User/assets/js/jquery.flexslider-min.js"></script>
        <!-- Placeholder for IE9 -->
        <script src="User/assets/js/jquery.placeholder.min.js"></script>
        <!-- Parallax -->
        <script src="User/assets/js/jquery.stellar.min.js"></script>
        <!-- Animation -->
        <script src="User/assets/js/wow.min.js"></script>
        <!-- Main -->
        <script src="User/assets/js/main.js"></script>
    
        <script type="text/javascript">
            function load(val){
                $("#tree-no").load("tree_no.php?tn="+val);
            }

            jQuery(document).ready(function(){
                jQuery('#theme').attr('href', 'User/assets/css/main-aqua.css');
                jQuery('.navbar-brand img').attr('src','User/assets/images/logo-aqua.png');
            });
        </script>
    </body>

<!-- Mirrored from www.templatespremium.net/corpboot/template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2016 14:06:53 GMT -->
</html>