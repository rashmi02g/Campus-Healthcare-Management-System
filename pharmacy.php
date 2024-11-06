<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharmacy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <?php 	

require_once 'connect.php';
$servername = "localhost";
$username = "Ananya13";
$password = "Ananya@13";
$dbname = "health";

$stmt1 = $conn->query("SELECT * FROM $myDB.medicine");
	
  echo '<div class="px-4 mt-12 ml-8">
        <h3 class="text-4xl font-medium leading-6 text-red-600">Pharmacy</h3>
    </div>
    <div class="p-8 md:col-span-2  md:mt-0">
        <div>
        <table class="w-full table-auto">
                <thead>
                    <tr class="bg-blue-700 h-24 text-center">

                        <th class="text-dark  border-[#E8E8E8] bg-blue-600 py-5 px-2 text-center text-base font-medium">
                            Medicine id
                        </th>

                        <th class="text-dark  border-[#E8E8E8] bg-blue-600 py-5 px-2 text-center text-base font-medium">
                            Medicine Name
                        </th>
                        <th class="text-dark  border-[#E8E8E8] bg-blue-600 py-5 px-2 text-center text-base font-medium">
                            Company Name
                        </th>
                        <th
                            class="text-dark border-b border-l border-[#E8E8E8] bg-blue-600 py-5 px-2 text-center text-base font-medium">
                            Medicine Cost
                        </th>
                    </tr>
                </thead>
                <tbody>';
    
                while ($row=$stmt1->fetch(PDO::FETCH_ASSOC)) {
		echo '<tr> <td class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">';
		echo $row['mid'];
		echo '</td> <td class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">';
		echo $row['med_name'];
		echo '</td><td class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">';
		echo $row['med_cost'];
		echo '</td><td class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] py-5 px-2 text-center text-base font-medium">';
		echo $row['company'];
	echo "</td></tr>";
}
 echo 	'</tbody>';
echo 	"</table>";
echo "</div>";
echo "</div>";


		$name = $cost = $company = "";
    
    
    if(isset($_POST['pid'])&& isset($_POST['mid']))
    {  
            $name = $_POST["pid"];
		    $cost = $_POST["mid"];
		    

		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO $myDB.can_take (`pid`,`mid`)VALUES('$name', '$cost')";
		  $stmt=$conn->prepare($sql);
      $stmt->execute();
		 header("Location:pharmacy.php"); 
            exit();
		}	
?>

    <!-- ------------------Medicine Form---------------- -->
    <div class="mx-12 my-20">

        <div class="sm:mt-0">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
              <div class="px-4 sm:px-0 ">
                <h3 class="text-4xl font-medium leading-6 text-red-600">Add Medicine</h3>
                <p class="mt-2 text-lg text-gray-800">Fill the details accurately and avoid filling redundant data.</p>
              </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
    
    
              <form class="frm" method="POST">
    
                <div class="overflow-hidden shadow sm:rounded-md">
                  <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
    
                      <div class="col-span-6 sm:col-span-3">
                        <label for="pid" class="block text-sm font-medium text-gray-700">Patient's Id</label>
                        <input type="number" name="pid" id="pid"
                          class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm" placeholder=" Your Patient Id">
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="mid" class="block text-sm font-medium text-gray-700">Medicine's Id</label>
                        <input type="number" name="mid" id="mid"
                          class="mt-1 block w-full h-12 rounded-md border-2 shadow-sm" placeholder="Enter Medicine Id">
                      </div>
                      
                    </div>
                  </div>
                </div>
                
            </div>
          </div>
        </div>
    
        
        <div class="text-dark  border-r border-[#E8E8E8] bg-white py-5 px-2 text-center text-base font-medium">
            <button
                class="border-primary text-primary bg-green-500 hover:bg-primary inline-block rounded border py-2 px-6 hover:text-white">
                Add medicine
        </button>
        </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    


</body>

</html>
