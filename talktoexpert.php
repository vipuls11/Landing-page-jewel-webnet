<!-- for Oriflame web site only checking working aur note -->
<?php
     $a=array("name","email","subject","contact","massage");
    //  global $subject;
    //  global $name;
    //  global $email;
    //  global $subject;
    //  global $contact;
     global $massage;
    $insert = false;
    // $host = "localhost";
    // $user = "priyadsj_mannu";
    // $password ="Meady@1992#";
    // $db_name ="priyadsj_oriflamme";
  
    
   
   $conn = mysqli_connect($host, $user, $password, $db_name);

    if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL:" . mysqli_connect_errno());
    } else {
        $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";
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

            //URL Validation      
            // if (empty($_POST["website"])) {  
            //     $website = "";  
            // } else {  
            //         $website = input_data($_POST["website"]);  
            //         // check if URL address syntax is valid  
            //         if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
            //             $websiteErr = "Invalid URL";  
            //         }      
            // }  

            //Empty Field Validation  
            // if (empty($_POST["gender"])) {  
            //         $genderErr = "Gender is required";  
            // } else {  
            //         $gender = input_data($_POST["gender"]);  
            // }  

            //Checkbox Validation  
            // if (!isset($_POST['agree'])){  
            //         $agreeErr = "Accept terms of services before submit.";  
            // } else {  
            //         $agree = input_data($_POST["agree"]);  
            // } 

            $sql = "INSERT INTO contact_us(Name, Email, Subject, Contact, Massage)
            VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['subject'] . "','" . $_REQUEST['contact'] . "','" . $_REQUEST['massage'] . "')";
    
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
<!--....................talk to expert...............-->
<button id="scrollcontact" class="border border-sky-600 px-6 py-2 fixed lg:top-[50%] top-[40%] -lg:right-[87px] -right-[80px] lg:text-lg lg:font-semibold  text-white rotate-90 z-20" style="background-color:rgb(7,89,133);" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">Talk to our expert</button>
<!--....................talk to expert...............-->

    <!-- drawer component -->
<div id="drawer-right-example" class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white lg:w-2/5 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
  <!--  <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-4 h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">-->
  <!--  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>-->
  <!--</svg>Right drawer</h5>-->
  <div class="text-right">
   <button class="p-3 m-2" type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg class="w-3 h-3 mr-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
   </button>
   </div>
    <div class="px-5 pt-5 border-2 border-black rounded-lg w-full">
        <div class="">
                <?php
                   
                // if ($insert == true) {
                //     echo "<p id='msg' class='submitMsg py-4 text-center bg-green-300'>Massage submitted succesfully.Thank You</p>";
                // }
                ?>
            </div>
                <form action="" method="POST">
                <div class="">
                <div class="w-full" >
                    <label for="" class="">Your Name<span class="text-red-600">*</span></label><br>
                    <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-2 text-sm py-2.5 focus:outline-none border border-black rounded-md px-2" required>
                </div>
                <div>
                    <label for="">Your Email<span class="text-red-600">*</span></label><br>
                    <input type="email" name="emails" id=""  placeholder="Your email here" class="w-full my-2 text-sm py-2.5 border border-black rounded-md px-2" required>
                </div>
                <div>
                    <label for="">Required Services</label><br>
                    <input type="text" name="subject" id="" placeholder="Your subject here" class="w-full my-2 text-sm py-2.5 border border-black rounded-md px-2">
                </div>
               
                <div>
                    <label for="">Contact Number<span class="text-red-600">*</span></label><br>
                    <input type="number" name="contact" id="" placeholder="Your phone number here" class="w-full my-2 text-sm py-2.5 border border-black rounded-md px-2" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" >
                </div>
            </div>
            <div class="my-5">
                <label for="">Massages </label>  <br>
                <textarea type="text" name="massage" id="" cols="115" rows="5" placeholder="Tell us few words" class="w-full my-2 text-sm border border-black rounded-md px-2" ></textarea>
                </div>
                <div class="text-center mb-5"><button class="bg-red-600 text-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Message</button>
            </div>
            </form>
        </div>
</div>
    <!-- drawer component -->
   