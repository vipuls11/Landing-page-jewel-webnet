<?php 
$title='Contact Us - Get the hassle-free IT solutions - Oriflamme';
$description='Are you willing to enhance your business with the help of IT Infrastructure? Do you have any inquiries about IT Services? Do Contact us.';
// $keywords='';
$canonical='https://www.oriflammeitsolutions.com/Contact';
$Title1='Contact Us - Get the hassle-free IT solutions - Oriflamme';
$url='https://www.oriflammeitsolutions.com/Contact';
$Description2='Are you willing to enhance your business with the help of IT Infrastructure? Do you have any inquiries about IT Services? Do Contact us.';
$image='https://www.oriflammeitsolutions.com/img/contact%20us%20(1).png';
$Description3='Are you willing to enhance your business with the help of IT Infrastructure? Do you have any inquiries about IT Services? Do Contact us.';
$Title3='Contact Us - Get the hassle-free IT solutions - Oriflamme';
$alternateName='Contact Us - Get the hassle-free IT solutions - Oriflamme';
 ?>

<?php
    $insert = false;
    $host = "localhost";
    $user = "root";
    $password ="";
    $db_name ="landing_page";
  
    
   
   $conn = mysqli_connect($host, $user, $password, $db_name);

    if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL:" . mysqli_connect_errno());
    } else {
        $nameErr = $emailErr = $mobilenoErr= "";
        $name = $email = $mobileno = "";
        $ctr=0;
        //Input fields validation  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //String Validation  
            if (empty($_POST['name'])) {
                $nameErr = "Name is required";
                $ctr++;
            } else {
                $name = input_data($_POST["name"]);
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only alphabets and white space are allowed";
                    $ctr++;
                }
            }

            //Email Validation   
            if (empty($_POST['email'])) {
                $emailErr = "Email is required";
                $ctr++;
            } else {
                $email = input_data($_POST["email"]);
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    $ctr++;
                }
            }

            //Number Validation  
            if (empty($_POST['contact'])) {
                $mobilenoErr = "Mobile no is required";
                $ctr++;
            } else {
                $mobileno = input_data($_POST["contact"]);
                // check if mobile no is well-formed  
                if (!preg_match("/^[0-9]*$/", $mobileno)) {
                    $mobilenoErr = "Only numeric value is allowed.";
                    $ctr++;
                }
                //check mobile no length should not be less and greator than 10  
                if (strlen($mobileno) != 10) {
                    $mobilenoErr = "Mobile no must contain 10 digits.";
                    $ctr++;
                }
            } 

            $sql = "INSERT INTO contact_us(name, email, service, contact, massage) VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" .$_REQUEST['service'] . "','" . $_REQUEST['contact'] . "','" . $_REQUEST['massage'] . "')";
    
            if ($ctr==0 && $conn->query($sql) === TRUE) {
                // echo "Record Submitted Successfully";
                $insert = true;
            } else {
                // echo "Error:" . $sql . "<br>" . $conn->error;
            }

        }

       
        $conn->close();

        // header("location:contactus.php ?");


    }
    ?>
    <?php
    // define variables to empty values  
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
   <!-- ...................CONTACT US ...................... -->
   
<!--............CONTACT US...................... -->
    <div class="absolute lg:top-32 top-14 fixed  right-5 w-96 ">
  <?php
        if ($ctr==0 & $insert == true) {
            echo "<p id='msg' class='submitMsg py-4 text-center bg-green-300'>Massage submitted succesfully.Thank You</p>";
        }
        ?>
      </div>
  


     <!-- ..............................contactus.................... -->
    <div class="grid justify-items-end">
            <div class="m-5 px-5 py-2">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">       
                <div class="lg:grid lg:grid-cols-2 gap-5 text-white">
                <div class="w-full" >
                      <label for="" class="text-sm">Your Name<span class="text-red-600 ">*</span><span class="text-red-600 text-xs error"><?php echo "<br>"."\n".$nameErr; ?></span></label>
                    <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-1 text-xs py-2 px-2 border-2 border-sky-950  dark:bg-gray-700 dark:border-sky-950 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-950focus:border-transparent">
                </div>
                <div>
                    <label for="" class="text-sm">Your Email<span class="text-red-600 error">*</span><span class="text-red-600 text-xs error"><?php echo "<br>"."\n".$emailErr; ?></span></label>
                    <input type="email" name="email" id="" placeholder="Your email here" class="w-full my-1 text-xs py-2 px-2 border-2 border-sky-950   dark:bg-gray-700 dark:border-sky-950 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-950 focus:border-transparent" >
                </div>
                <div>
                    <label for="" class="text-sm">Required Services</label>
                    <input type="text" name="service" id="" placeholder="Your subject here" class="w-full my-1 text-xs py-2 px-2 border-2 border-sky-950   dark:bg-gray-700 dark:border-sky-950 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-950 focus:border-transparent">
                </div>
               
                <div>
                    <label for="" class="text-sm">Contact Number<span class="text-red-600 error">*</span><span class="text-red-600 text-xs error"> <?php echo "<br>"."\n".$mobilenoErr; ?></span></label>
                    <input type="number" name="contact" id="" placeholder="Your phone number here" class="w-full my-1 text-xs py-2 px-2 border-2 border-sky-950   dark:bg-gray-700 dark:border-sky-950 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-950 focus:border-transparent">
                </div>
            </div>
            <div class="my-2 text-white">
                <label for="" class="text-sm">Massages</label>
                <textarea type="text" name="massage" id="" cols="115" rows="3" placeholder="Tell us few words" class="w-full my-1 px-2 pt-2.5 text-xs border-2 border-sky-950   dark:bg-gray-700 dark:border-sky-950 dark:placeholder-gray-400 dark:text-white focus:outline-none focus:ring-2 focus:ring-sky-950 focus:border-transparent"></textarea>
                </div>
                <div><button class="bg-sky-950 w-full px-4 py-2 font-semibold uppercase text-sm text-white border-double  border-8 border-white" style="text-shadow: 1px 3px 0 #969696, 1px 3px 3px;
            -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);">send Message</button>
            </div>
            </form>
        </div>
        </div>
 
    <!-- ..............................contactus.................... -->

 
<script>
    $(document).ready(function() {
        $("#msg").slideUp(0).delay(1000).slideDown('slow');
        $("#msg").slideDown(1).delay(2000).slideUp('slow');
    });
</script>


    
   
