<link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
    footer{
        padding:30px 0px;
        background-color: #3a2613; 
    }        

    .logo{
        color:#FFF;
        font-weight:800;
        font-size:30px;
    }

    .adress span , .contact span , .social span, .search span{
       color:#675f5f;
       font-weight: 800; 
       padding-top:20px;
       padding-bottom:20px; 
       display: block;
       text-transform: uppercase;
       font-size: 13px;
       letter-spacing: 3px;
    }
     
    .adress li p , .contact li a , .social li a, .search li a{
        color:#675f5f;
        letter-spacing: 2px;
        text-decoration:none;
        font-size:12px;
    }

    .adress, .contact , .social{
        list-style: none;
    }

    .social li{
        float:left;
    }

    .fa{
        color:#9c9c9c;
        margin-right: 10px;
        font-size:14px;
    }

    .btn-search{
        background: #484848;
        border: none;
        color: #FFF;
        height:25px;
    }
    .signUpNewsletter {
      position: relative;
    }
    .signUpNewsletter .gt-email {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      border: 1px solid #666666;
      border-radius: 0;
      color: #ffffff;
      height: 40px;
    }
    .signUpNewsletter .btn-go {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      border-color: #666666;
      border-style: solid;
      border-width: 0 0 0 1px;
      bottom: 0;
      color: #ffffff;
      font-size: 14px;
      position: absolute;
      right: 0;
      text-transform: uppercase;
      top: 0;
      width: 52px;
    }
</style>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>
    <footer>
     <div class="container">
       <div class="row">
                
                <div class="col-md-offset-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul class="contact">
                         <span>Contact</span>    
                         <li>
                            <a href="index.php">Home</a>
                          </li>
                               
                          <li>
                             <a href="about.php">About</a>
                          </li>
                               
                          <li>
                             <a href="gallery.php">Gallery </a>
                          </li>
                               
                          <li>
                            <a href="contact-us.php">Contact</a>
                         </li>
                    </ul>
                </div>

                <div class="col-md-pull-1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul class="adress">
                         <span>Address</span>    
                         <li>
                            <p>Purok Everlasting,<br> Mayapyap Sur Cabanatuan City</p>
                          </li>
                               
                          <li>
                            <p>(+63)907 261 5579</p>
                          </li>
                               
                          <li>
                            <p><?php echo date('F d Y, l'); ?></p>
                          </li>
                     </ul>
                </div>

               <!--  <div class="col-md-pull-1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <ul class="social">
                              <span>Social</span>    
                               <li>
                                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                               </li>
                              
                               <li>
                                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                               </li>
                                
                               <li>
                                    <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                               </li>
                               
                               <li>
                                    <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                               </li>
                                
                               <li>
                                    <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                              </li>
                              
                     </ul>
               </div> -->

                <div class="col-md-pull-1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <ul class="search">
                    <li>
                      <div class="footer-col-item">
                        <span>Search</span>
                        <form class="signUpNewsletter" action="" method="POST">
                          <input name="search" class="gt-email form-control" placeholder="Search..." type="text">
                          <input name="go" class="btn-go" value="Go" type="submit">
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>

            <?php  
              include('db.php');
              if (isset($_POST['go'])) {
                  $name = $_POST['search'];

                  if ($name=='home'||$name=='saint vincent'||$name=='ferrer'||$name=='parish') {
                    die ("<script>
                          window.location.href='index.php';
                          </script>");
                  }
                  if ($name=='admin') {
                    die ("<script>
                          window.location.href='admin-login.php';
                          </script>");
                  }
                  if ($name=='contact'||$name=='con'||$name=='c'||$name=='cont'||$name=='conta'||$name=='contac') {
                    die ("<script>
                          window.location.href='contact-us.php';
                          </script>");
                  }
                  if ($name=='about'||$name=='ab'||$name=='abo'||$name=='abou'||$name=='a'||$name=='who') {
                    die ("<script>
                          window.location.href='about.php';
                          </script>");
                  }
                  if ($name=='wedding'||$name=='we'||$name=='wed'||$name=='weddin'||$name=='wedding'||$name=='w'||$name=='reserve') {
                    die ("<script>
                          window.location.href='wedding.php';
                          </script>");
                  }
                  if ($name=='baptism'||$name=='bap'||$name=='bapt'||$name=='baptis'||$name=='ba') {
                    die ("<script>
                          window.location.href='baptism.php';
                          </script>");
                  }
                  if ($name=='funeral'||$name=='funer'||$name=='funeral'||$name=='fu') {
                    die ("<script>
                          window.location.href='funeral.php';
                          </script>");
                  }
                  if ($name=='events'||$name=='ev'||$name=='even'||$name=='event'||$name=='e'||$name=='upcoming'||$name=='upcoming event') {
                    die ("<script>
                          window.location.href='events.php';
                          </script>");
                  }
                  if ($name=='gallery'||$name=='gal'||$name=='gall'||$name=='galler'||$name=='ga') {
                    die ("<script>
                          window.location.href='gallery.php';
                          </script>");
                  }
              }
              ?>
        </div>
    </footer>