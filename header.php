<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="ciAoQiDMW2mgU1v94vhydi21cFLq5bubI3EPdDXxJKA" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Comfortaa&family=Dancing+Script:wght@500&family=Edu+NSW+ACT+Foundation&family=Montserrat:ital,wght@1,300;1,400&family=Noto+Sans+Zanabazar+Square&family=Noto+Sans:wght@500&family=Nunito+Sans&family=Open+Sans&family=Pacifico&family=Poppins:ital@0;1&family=Raleway:ital@0;1&family=Roboto&family=Shantell+Sans:ital@1&family=Source+Sans+Pro&family=Zeyada&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="img/icon images/facicon-removebg-preview.png" width="">
        <!-- ----------jquery--------- -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous"></script>

    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <link href="<?php echo $canonical; ?>" rel="canonical"/>
    
    <!-- ----------open graph--------- -->
    
    <meta property="og:title" content="<?php echo $Title1; ?>"/>
	<meta property="og:site_name" content="Jewel Webnet">
	<meta property="og:url" content="<?php echo $url; ?>">
	<meta property="og:description" content="<?php echo $Description2; ?>">
	<meta property="og:type" content=website>
	<meta property="og:image" content="<?php echo $image; ?>">
	
	<!-- ----------open graph--------- --> 
	
	<!-- ----------Twitter card--------- --> 
	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="https://twitter.com/JewelWebnet">
	<meta name="twitter:description" content="<?php echo $Description3; ?>">
	<meta name="twitter:title" content="<?php echo $Title3; ?>">
	<meta name="twitter:image" content="<?php echo $Twitterurl; ?>">	

	<!-- ----------Twitter Card--------- --> 
	


    
   
   



   
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
    font-family: 'Poppins', sans-serif;
}
        .container-2
        {width: 90%;
        margin: auto;
    }
    .all-btn {
            border: 1px solid #082366;
            background-color: #082366;
            color: white;
            border-radius:6px;
        }

        .all-btn:hover {
            background-color: white;
            color: #082366;

        }

    .nav-color{
        /* background-color: #b30000; */
        padding: 0  20px;
       
    }

        .menu:hover .Sub-Menu {
            display: block;
        }

       
        .menu:hover .sub-menu-it-services{
            display: block;
        }

        .menu:hover .sub-menu-web-services{
            display: block;
        }
        .menu .sub-menu-it-services{
            /* clip-path: polygon(16% 0, 22% 3%, 100% 3%, 100% 100%, 81% 100%, 50% 100%, 26% 100%, 0 100%, 0 3%, 10% 3%); */
            border: #fbf9f9 2px solid;
        }

        .menu:hover .Sub-Menu{
            /* clip-path: polygon(16% 0, 22% 3%, 100% 3%, 100% 100%, 81% 100%, 50% 100%, 26% 100%, 0 100%, 0 3%, 10% 3%); */
            border: #fbf9f9 2px solid;
        }

        .menu a{ 
            position: relative;
        }
        .menu a:after{
            content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 0;
            left: 0;
            bottom: 5px;
            transition: 0.3s;
        }

        .menu a:hover:after{
            width: 100%;
        }
        /* section{
            background-image:url("tailwin img/_backgroundscreeningservices.jpg") ;
           padding-top: 100px;
           padding-bottom: 50px;
           padding-left: 50px;
           padding-right: 50px;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover ;  
        } */
        
        @media only screen and (max-width:1100px){
            #nav-menu{
            display: none;       
            position: absolute;
            left: 0;
            top: 59px;
            width: 100%;
        }
        
             .containerer {
                  display: inline-block;
                  cursor: pointer;
                  display: block;
                }
        .menu-item{
            background-color: #082366;
            flex-direction: column;
           width: 100% ;
        }
        .menu a:after{
            bottom: 0px;
        }
        .menu-item li{
            padding: 4px 0;
        }
        .menu-item li a{
            padding: 0;

        }
        .menu .sub-menu-it-services{
            top:30px;
            left: 0;
            z-index: 1100;
            
        }
        
        .menu .Sub-Menu{
            top:30px;
            left: 0;
            z-index: 5;
        }

        .menu .sub-menu-web-services{
            top:30px;
            left: 0;
            z-index: 5;
        }
        }

        /* ...........blog-btn................ */
        .blogbtn {
            color: #f8f5f5;
            
        }

        .blogbtn::after{
            border: 2px solid #fbf9f9;
            content:"";
            position:absolute;
            right: 14px;
            width:calc(100% - -8px);
            height:calc(100% - -10px);
            z-index:1;
            transition: transform 0.3s ease;
        }

        /* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
        .blogbtn::after{
            transform: translate(6px, -20px);
        }
        .blogbtn:hover::after{
            transform: translate(18px, -11px);
        }
         /* ...........blog-btn................ */

         .active2{
            /* background-color: #fbf9f9; */
            color:red;
         }
          
          /*.......................*/
          .containerer {
  display: inline-block;
  cursor: pointer;
  /*display: none;*/
}

.bar1, .bar2, .bar3 {
  width: 30px;
  height: 3px;
  background-color: #fff;
  margin: 8px 0;
  transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 11px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -11px) rotate(45deg);
}

    .menu:hover .submenu{
        display:block;
    }
    </style>
</head>
<body>
     <!-- <div class="flex justify-between px-10 py-1 bg-slate-300 text-sm ">
        <div><a href="">+91 7900108552</a></div>
        <div class="">
            <marquee behavior="" direction=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p></marquee>
        </div>
    </div> -->
    <div id="navbar" class="nav-color fixed w-full top-0 bg-[#082366] z-50">
    <nav class="relative flex text-gray-300 justify-between items-center py-1 " >
        <div class="hidden lg:block">
            <a href="index"><img src="img/jewelwebnet-logo.png" alt="" width="350px"></a>
        </div>
        <div class="block lg:hidden">
            <a href="index"><img src="img/jewelwebnet-logo.png" alt="" width="150px"></a>
        </div>
        <div id="nav-menu">
            <ul class="nav flex text-lg menu-item font-base text-white">
           <li class="menu relative "><a href="aboutus" class="py-4 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="aboutus.php"?"active2":"")?>">About Us</a></li>
         
           <li class="menu relative lg:block hidden "><a href="services" class="py-4 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="services.php"?"active2":"")?>">Services</a>
                <div class="hidden absolute submenu  top-10 left-0 w-96 ">
                    <ul class="bg-[#082366]  py-3">
                       
                            <li class="mb-2"><a href="ecommerce"  class="pb-2   mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="ecommerce.php"?"active2":"")?>">Ecommerce Website Development</a></li>
                            <li class="mb-2"><a href="businesswebsite"  class="pb-2  mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="businesswebsite.php"?"active2":"")?>">Business Website</a></li>
                            <li class="mb-2"><a href="websitemaintance"  class="pb-2  mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="websitemaintance.php"?"active2":"")?>">Website Maintenance</a></li>
                            <li class="mb-2"><a href="coding_and_technology"  class="pb-2  mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="coding_and_technology.php"?"active2":"")?>">Coding & Technology</a></li>
                    </ul>
                </div>
           </li>
                <li class="menu  lg:hidden block">
                        <div class="flex justify-between justify-items-center w-full  relative  ">
                            <div><a href="services" class="py-4 mx-4 <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active2' : ''; ?>">Services</a></div>
                            <div class="">
                                <span class="p-2 mobmenu"> <i class="recent fas fa-plus"></i></span>
                            </div>
                            <div class="absolute  togmenu top-8 left-0  w-full hidden border bg-[#082366] z-50">
                                <ul>
                                    <li class="menu relative text-right">
                                        <a href="ecommerce"  class="pb-2  mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="ecommerce.php"?"active2":"")?>">Ecommerce Website Development</a>
                                    </li>
                                    <li class="menu relative text-right">
                                        <a href="businesswebsite"  class="pb-2  mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="businesswebsite.php"?"active2":"")?>">Businnes Website</a>
                                    </li>
                                      <li class="menu relative text-right">
                                        <a href="websitemaintance"  class="pb-2  mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="websitemaintance.php"?"active2":"")?>">Website Maintenance?</a>
                                    </li>
                                     <li class="menu relative text-right">
                                        <a href="coding_and_technology"  class="pb-2  mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="coding_and_technology.php"?"active2":"")?>">Coding & Technology</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </li>
           
           <!--<li class="menu relative "><a href="PlansandPricing.php"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="PlansandPricing.php"?"active2":"")?>">Plans and Pricing</a>-->
            <!--</li>-->
            <li class=" menu relative  "><a href="theme"  class="py-4 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="theme.php"?"active2":"")?>">Design Theme</i></a>
             </li>
     
            <li class="menu relative "><a href="contactus"  class="py-4 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="contactus.php"?"active2":"")?>">Contact Us</a></li>
            <li class="menu relative "><a href="faqs"  class="py-4 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="faqs.php"?"active2":"")?>">Faq's</a></li>
        </ul>
        </div>
        <div class="hover:bg-red-600 px-6 py-1.5 lg:block hidden relative border-double border-4 border-white">
            <a href="contactus" class="text-white font-semibold "> <button class=" ">Talk To Us</button></a>
            <!-- class="blogbtn" -->
        </div>
       
        <div class="containerer block lg:hidden" onclick="myhumberFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
     </nav> 
</div> 


     
    

    
        <script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
//     document.getElementById("navbar").style.top = "0";
//   } else {
//     document.getElementById("navbar").style.top = "-10px";
//   }
// }
 </script> 


   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZHR9QVS0SL"></script>

<script>
function myhumberFunction(x) {
  x.classList.toggle("change");
   var x = document.getElementById("nav-menu");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
}


        $('.mobmenu').click(function() {
                    $('.togmenu').toggle();
                });
                
        $(".recent").click(function() {
            $(".recent").toggleClass("fa-plus fa-minus");
        });
</script>
</body>
</html>