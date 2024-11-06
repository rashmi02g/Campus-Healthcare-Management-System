<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    require_once 'connect.php';
    $email = "";
    $password = "";
    $error = "";

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email == "admin@g.com" && $password == "abc@123") {
            header("Location: admin_page.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    }
    ?>

    <section class="w-full h-screen bg-cover bg-center">
        <div class="container flex flex-col items-center justify-center">
            <div class="bg-white rounded mt-4 lg:w-1/4 md:w-1/2 w-1/2 p-10">
                <div>
                    <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">
                        Admin Login
                    </p>
                </div>

                <?php if ($error): ?>
                    <div class="text-red-500 mb-4">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <form class="frm" method="POST">
                    <div class="mt-4 mb-5 ml-2">
                        <div>
                            <label for="email" class="text-sm font-medium leading-none text-gray-800">Email</label>
                            <input
                                aria-labelledby="email"
                                type="email"
                                name="email"
                                id="email"
                                class="bg-gray-200 border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"
                                required
                            />
                        </div>
                        <div class="mt-6 w-full">
                            <label for="pass" class="text-sm font-medium leading-none text-gray-800">Password</label>
                            <div class="relative flex items-center justify-center">
                                <input
                                    id="pass"
                                    type="password"
                                    name="password"
                                    class="bg-gray-200 border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"
                                    required
                                />
                                <div class="absolute right-0 mt-2 mr-3 cursor-pointer">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg5.svg" alt="viewport" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="justify-end ml-24">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                            Continue
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

