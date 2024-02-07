<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Comfortaa&family=Dancing+Script:wght@500&family=Edu+NSW+ACT+Foundation&family=Montserrat:ital,wght@1,300;1,400&family=Noto+Sans+Zanabazar+Square&family=Noto+Sans:wght@500&family=Nunito+Sans&family=Open+Sans&family=Pacifico&family=Poppins:ital@0;1&family=Raleway:ital@0;1&family=Roboto&family=Shantell+Sans:ital@1&family=Source+Sans+Pro&family=Zeyada&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="tailwin img/logoooooooo-removebg-preview.png" width="">
    <title>Oriflamme IT Solutions</title>
   
</head>
<style> 
body{
    font-family: 'Poppins', sans-serif;
}
</style>
<body>
       <?php
     $validation=false;
    $insert = false;
    $host = "localhost";
$user = "root";
$password = '';
$db_name = "landing_page";
  
 $conn = mysqli_connect($host, $user, $password, $db_name);   
  
    if(mysqli_connect_errno()){
        die("Failed to connect with MySQL:". mysqli_connect_errno());   
    }
    else{ 
        $emailErr = "";
        $email = "";
        $ctr=0;  
        
        function checkEmail($conn, $emailInput){
       
            $query = "SELECT email FROM subscribers WHERE email='$emailInput'";
            
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
             return true;
            }
            return false;
          }
    }
  
        if(isset($_POST['email']) ){
        $emailInput= $_REQUEST['email'];
        if (checkEmail($conn, $emailInput)) {
            $validation = true;
            // echo "<span style='color:red'>This Email is already in use</span>";
        }
        else
        {
        $sql ="INSERT INTO subscribers(email)
        VALUES ('".$_REQUEST['email']."')";

        if($conn->query($sql)=== TRUE){
            // echo "Record Submitted Successfully";
            $insert = true;
        }
        else{
            echo "Error:".$sql. "<br>" .$conn->error;
        }

        // Email Validation   
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $ctr++;
        } else {
            $email = input_data($_POST["email"]);
            function valid_email($str) {
                return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", $str)) ? FALSE : TRUE;
        }
            // check that the e-mail address is well-formed 
             
            if (!valid_email($email, (""))) {
                $emailErr = "Invalid email format";
                $ctr++;
            }
        }

    

        $sql = "INSERT INTO subscribers( email)
        VALUES ('" . $_REQUEST['email'] . "')";

        if ($ctr==0 && $conn->query($sql) === TRUE) {
            // echo "Record Submitted Successfully";
            $insert = true;
        } else 
        {
            // echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
        $conn->close();

        // header("location:Contact.php ?");
    }

?>
 <?php
    // define variables to empty values  
    // function input_data($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
    
    ?>

<div class="bg-[#082366] border-b-2 lg:py-0 py-5 border-white">
    <div class="container mx-auto  px-8 grid lg:grid-cols-3 lg:py-4 place-content-center w-full">
        <div class="flex items-center text-blue-400">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              </div>
            <div>
                <h3 class="font-semibold">Contact Us</h3>
                <p  class="text-xl font-bold"><a href="tel:">  </a><span>/</span><a href="tel:98677 83298"> +91 98677 83298</a></p>
            </div>
        </div>
    
    <div><img src="img/jewelwebnet-logo.png" alt=""></div>
    
        <div class="flex items-center lg:justify-end text-blue-400">
            <div>
                <h1 class="font-semibold">Mail Us</h1>
                <p  class="text-xl  font-bold"><a href="mailto: jewelwebnetco@gmail.com"> jewelwebnetco@gmail.com</a></p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                  </svg>                  
              </div>
        
    </div>
</div>
</div>
<div class="bg-[#082366]">
    <footer class=" ">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8  p-5  text-lg  ">
        <div class="text-left">
        <div>
          <h1 class="text-2xl font-bold text-blue-400">About Company</h1>
        </div>
        <p class="  my-10 text-white">We have 10+ years experience. Helping you overcome technology challenges.</p>
        <div class="text-white mb-5"> 
                    <a href="https://twitter.com/JewelWebnet"  class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fa-brands fa-square-twitter"></i></a>
                    <a href="https://www.facebook.com/Jewel.Webnet" class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/jewel_webnet/" class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fab fa-instagram"></i></a>
                    <a href="https://in.pinterest.com/jewelwebnetco/" class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fab fa-pinterest"></i></a>
                    <a href="https://www.google.com/search?q=Jewel+Webnet&stick=H4sIAAAAAAAA_-NgU1I1qDBJTDE1NzO1TDM1MzI0N06zMqhIM001Nrc0M09KNDVMMjUyXsTK45VanpqjEJ6alJdaAgCCJKUTOAAAAA&hl=en&mat=Cc9ukYr_A05wElYBl7_Ll2D1MouGJBuhiR0MyV0PGYBksBbnRw7H7cScPqEgWFcFIO1v8lWm71C83ROI3ssAcrHpflYW1QUFhpFTw5-IU2vnWkeKTUyLp7zzUmFwWC0DAw&authuser=0&bshm=rime/1#ip=1" class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
        </div>
    
        <div class="cursor-pointer">
            <h3 class="text-2xl font-bold text-blue-400">Contact Us    </h3>
            <div class="py-10">
            <div  class="  my-0 text-white">
                <p><span>Address :</span>1st Floor, Unit No 18, Nand Ghanshyam Industrial Estate, Off Mahakali Caves Rd, Andheri East, Maharashtra 400093</p>
            </div>
            <p  class="  my-5 text-white"><span>Email :</span><a href="mailto: jewelwebnetco@gmail.com"> jewelwebnetco@gmail.com</a></p>
        <p  class=" text-white"><span>Phone :</span><a href="#tel:+91-9930425384">  </a><span></span><a href="tel:98677 83298"> +91 98677 83298</a></p>
    </div>
        </div>

      

        <div class="cursor-pointer">
            <h3 class="text-2xl font-bold text-blue-400">Newsletter</h3>
            <div class="py-10">
            <p class="  text-white">Subscribe to our newsletter to receive updates on the latest news!</p>
            <div class="my-10">         
            <form  action="" method="POST">   
                <!--<label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>-->
                <div class="relative">
                    <!--<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">-->
                        
                    <!--</div>-->
                    <input name="email" type="email" id="default-search" class="block w-full rounded-lg mx-auto p-2 pl-5 text-lg  text-gray-700 border border-gray-300  bg-gray-50  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Subscribe with us" required>
                    <button class="text-gray-800 absolute right-0 top-2 text-3xl px-4 "><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                </div>
            </form>
                <div class="">
                    <?php
                        
                    if ($insert == true) {
                        echo "<p id='msg-email'class='submitMsg py-2 text-center bg-green-300 rounded-lg mt-2'>Thank You for Subscribe</p>";
                    }
                    ?>
                    
                     <?php
                          if($validation == true){
                          echo "<p id='msg-valid' class='submitMsg py-2 text-center bg-white text-red-600 mt-2'>This Email is already in use.</p>";
                          }
                      ?>
                </div>
            </div> 
        </div>
    </div>
    </div>
    <div>
        <div class="text-center py-5 border-t border-t-white ">
        <p class=" text-white">© <script>document.write(new Date().getFullYear());</script> <span class="text-blue-400">Jewel Webnet</span> Powered by <span class="text-red-600">Jewel Webnet</span></p>
        <div class="text-right bg-red-200">
        <button id="scroll" class="border border-sky-600 flex justify-center justify-items-center p-4 w-12 h-12 bg-sky-800 fixed bottom-4 right-4 text-xl text-white  rounded-full"><i class="fas fa-arrow-up"></i></button>
        </div>
    </div>
    </div>
    </footer>
</div>  
    

     <script>
        function myFunction() {
          var x = document.getElementById("nav-menu");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>
        
        <script>
    $(document).ready(function(){ 
  $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
          $('#scroll').fadeIn(); 
      } else { 
          $('#scroll').fadeOut(); 
      } 
  }); 
  $('#scroll').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 800); 
      return false; 
  }); 
});
  </script>  

<script>
    $(document).ready(function() {
        $("#msg-email").slideUp(0).delay(1000).slideDown('slow');
        $("#msg-email").slideDown(1).delay(2000).slideUp('slow');
    });

    $(document).ready(function() {
        $("#msg-valid").slideUp(0).delay(1000).slideDown('slow');
        $("#msg-valid").slideDown(1).delay(2000).slideUp('slow');
    });
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>