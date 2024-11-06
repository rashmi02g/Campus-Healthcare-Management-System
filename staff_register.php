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

<?php 	

require_once 'connect.php';
		$type="";
    
    if(isset($_POST['type']))
    {  
      $type = $_POST["type"];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch the maximum `eid` from the `employee` table
$valQuery = "SELECT MAX(eid) AS max_eid FROM $myDB.employee";
$valStmt = $conn->prepare($valQuery);
$valStmt->execute();
$result = $valStmt->fetch(PDO::FETCH_ASSOC);
$maxEid = $result['max_eid'];

// Insert into the `staff` table using the fetched `eid` and selected `type`
$sql = "INSERT INTO $myDB.staff (sid, type) VALUES (:sid, :type)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':sid', $maxEid, PDO::PARAM_INT);
$stmt->bindParam(':type', $type, PDO::PARAM_STR);
$stmt->execute();

// Redirect to staff_profile.php
header("Location: staff_login.php");
$conn = null;
		// }
		}	
?>

<!-- -------------------------------------------------------------------- -->

  <div class="mx-12 my-20">

    <div class="sm:mt-0">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0 ">
            <h3 class="text-4xl font-medium leading-6 text-red-600">Personal Information</h3>
            <p class="mt-2 text-lg text-gray-800">Fill your personal details </p>
          </div>
        </div>
        <div class="mt-5 md:col-span-2 md:mt-0">

          <form class="frm" method="POST">
            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                    <select id="type" name="type" autocomplete="type"
                      class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option value="" disabled selected hidden>Select an option</option>
                      <option>Receptionist</option>
                      <option>Guard</option>
                      <option>Cleaner</option>
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
        <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="overflow-hidden shadow sm:rounded-md">
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
