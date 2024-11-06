<!DOCTYPE html>
<html lang="en">

<head>

  <title>Register</title>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="logo.png">

  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

 <!-- <------------------------------php----------------------------->

<?php 	

require_once 'connect.php';
		
		$name = $dob = $age = $email = $hostel = $covid = $blood_group = $number = $pass_wrd = $course="";
    

    if(isset($_POST['name']) )
    {  
        $name = $_POST["name"];
		    $gender = $_POST["gender"];
		    $dob = $_POST["dob"];
		    $age = $_POST["age"];
		    $gender = $_POST["gender"];
		    $course = $_POST["course"];
		    $email = $_POST["email-address"];
		    $hostel = $_POST["hostel"];
		    $covid = $_POST["covid"];
		    $blood_group = $_POST["blood_group"];
		    $number = $_POST["number"];
		    $pass_wrd = $_POST["password"];

		    // if (strlen($_POST["pass"]) <= 8){
		    //     $passErr = "Your Password Must Contain At Least 8 Characters!";
		    // }
		    // elseif(!preg_match("#[0-9]+#",$pass)){
		    //     $passErr = "Your Password Must Contain At Least 1 Number!";
		    // }
		    // elseif(!preg_match("#[A-Z]+#",$pass)){
		    //     $passErr = "Your Password Must Contain At Least 1 Capital Letter!";
		    // }
		    // elseif(!preg_match("#[a-z]+#",$pass)){
		    //     $passErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		    // } 
		    // elseif( ($_POST["pass"] != $_POST["cpass"]) ) {
		    //     $cpassErr = "Please Check You've Entered Or Confirmed Your Password!";
		    // }
		    // else{    
				
		$servername = "localhost";
		$username = "Ananya13";
		$password = "Ananya@13";
		$dbname = "health";

		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO $myDB.patient (`name`,`dob`,`gender`,`age`,`email`,`contact_no`,`hostel`,`course`,`blood_group`,`pass_wrd`)VALUES('$name', '$dob', '$gender', '$age', '$email', '$number', '$hostel', '$course','$blood_group','$pass_wrd')";
		  // use exec() because no results are returned
		  $stmt=$conn->prepare($sql);
      $stmt->execute();
		  header("Location:patient_login.php"); 
			$conn = null;

		// }
		}	
?>


  <!-- <------------------------------php----------------------------->

  <div class="mx-12 my-20">

    <div class="sm:mt-0">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0 ">
            <h3 class="text-4xl font-medium leading-6 text-red-600">Personal Information</h3>
            <p class="mt-2 text-lg text-gray-800">Use a permanent address where you can receive mail.</p>
          </div>
        </div>
        <div class="mt-5 md:col-span-2 md:mt-0">



          <form class="frm" method="POST">

            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">



                  <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name"
                      class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm" placeholder=" your name">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of birth</label>
                    <input type="date" name="dob" id="dob" class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender" autocomplete="gender"
                      class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option>Select a option</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Others</option>
                    </select>
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                    <input type="number" name="age" id="age"
                      class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="contact" class="block text-sm font-medium text-gray-700">Contact No</label>
                    <input type="number" name="number" id="number"
                      class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm" placeholder="1234567890">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="hostel" class="block text-sm font-medium text-gray-700">Hostel</label>
                    <select id="hostel" name="hostel" autocomplete="hostel"
                      class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option>Select a option</option>
                      <option>Barak</option>
                      <option>Brahmaputra</option>
                      <option>Dibang</option>
                      <option>Dihing</option>
                      <option>Disang</option>
                      <option>Dhansiri</option>
                      <option>Kapili</option>
                      <option>Kameng</option>
                      <option>Lohit</option>
                      <option>Manas</option>
                      <option>Siang</option>
                      <option>Subansiri</option>
                      <option>Umium</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                    <select id="course" name="course" autocomplete="course"
                      class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option>Select an option</option>
                      <option>Btech</option>
                      <option>BDes</option>
                      <option>Mtech</option>
                      <option>Msc</option>
                      <option>MA</option>
                      <option>Phd</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="blood_group" class="block text-sm font-medium text-gray-700">Blood Group</label>
                    <select id="blood_group" name="blood_group"
                      class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option>Select an option</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>AB+</option>
                      <option>AB-</option>
                      <option>O+</option>
                      <option>O-</option>
                    </select>
                  </div>

                  <div class="col-span-6">
                    <label for="covid" class="block text-sm font-medium text-gray-700">Covid</label>
                    <select id="covid" name="covid"
                      class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option>Select an option</option>
                      <option>alpha</option>
                      <option>beta</option>
                      <option>gamma</option>
                      <option>delta</option>
                      <option>Non-covid</option>

                    </select>
                  </div>

                </div>
              </div>
            </div>
            

        </div>
      </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
      <div class="py-5">
        <div class="border-t border-gray-200"></div>
      </div>
    </div>

    <div class="mt-10 sm:mt-0">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0">
            <h3 class="text-4xl font-medium leading-6 text-red-600">For Login purposes</h3>
            <p class="mt-2 text-lg text-gray-800">Set a secure password.</p>
          </div>
        </div>
        <div class="mt-5 md:col-span-2 md:mt-0">
          
            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                <fieldset>
                  <div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Outlook Id</label>
                      <input type="text" name="email-address" id="email-address" autocomplete="email"
                        class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm" placeholder="example123@iitg.ac.in">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                      <input type="password" name="password" id="password"
                        class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm" placeholder="********">
                    </div>
                    <!-- <div class="col-span-6 sm:col-span-3">
                      <label for="cpassword" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                      <input type="cpassword" name="cpassword" id="cpassword"
                        class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm" placeholder="********">
                    </div> -->
                  </div>
                </fieldset>
              </div>
              <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit"
                  class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
