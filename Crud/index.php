<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom focus styles */
        input:focus, select:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        /* Smooth transitions */
        .form-container {
            transition: all 0.3s ease;
        }
        
        /* Form field hover effect */
        .form-field:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    <div class="form-container max-w-md w-full">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Form header -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 p-6 text-white">
                <div class="flex items-center justify-center mb-2">
                    <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mr-3">
                        <i class="fas fa-user-plus text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold">Create Account</h1>
                </div>
                <p class="text-blue-100 text-center">Fill in your details to register</p>
            </div>
            
            <!-- Form body -->
            <div class="p-6 md:p-8">
                <form action="" method="post" class="space-y-6">
                    <!-- Username field -->
                    <div class="form-field">
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                            <i class="fas fa-user text-blue-500 mr-2"></i> Username
                        </label>
                        <div class="relative">
                            <input 
                                type="text" 
                                name="username" 
                                id="username" 
                                placeholder="Enter your username"
                                class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                                
                            >
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1 ml-1">Choose a unique username</p>
                    </div>
                    
                    <!-- Gender field -->
                    <div class="form-field">
                        <label for="gender" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                            <i class="fas fa-venus-mars text-blue-500 mr-2"></i> Gender
                        </label>
                        <div class="relative">
                            <select 
                                name="gender" 
                                id="gender"
                                class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 appearance-none transition duration-200"
                                
                            >
                                <option value="" selected disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1 ml-1">Select your gender</p>
                    </div>
                    
                    <!-- Email field -->
                    <div class="form-field">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                            <i class="fas fa-envelope text-blue-500 mr-2"></i> Email Address
                        </label>
                        <div class="relative">
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                placeholder="you@example.com"
                                class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                                
                            >
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-at"></i>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1 ml-1">We'll never share your email</p>
                    </div>
                    
                    <!-- Password field -->
                    <div class="form-field">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                            <i class="fas fa-lock text-blue-500 mr-2"></i> Password
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                placeholder="Create a strong password"
                                class="w-full px-4 py-3 pl-10 pr-10 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                                
                            >
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-key"></i>
                            </div>
                            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600" id="togglePassword">
                                <i class="fas fa-eye" id="passwordIcon"></i>
                            </button>
                        </div>
                        <div class="flex items-center mt-2">
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 0%" id="passwordStrength"></div>
                            </div>
                            <span class="text-xs text-gray-500 ml-2" id="strengthText">Weak</span>
                        </div>
                    </div>
                    
                    <!-- Submit button -->
                    <div class="pt-4">
                        <button 
                            type="submit" 
                            name="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white font-medium py-3 px-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex items-center justify-center"
                        >
                            <i class="fas fa-save mr-2"></i> Save Registration
                        </button>
                    </div>
                </form>
                
                <!-- Additional info -->
                <div class="mt-6 pt-6 border-t border-gray-200 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account? 
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium ml-1">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Form footer note -->
        <div class="text-center mt-6">
            <p class="text-xs text-gray-500">
                <i class="fas fa-shield-alt mr-1"></i> Your information is secure and encrypted
            </p>
        </div>
    </div>
</body>
</html>

<?php

    include ("config.php");

    if(isset($_POST['submit'])){

    try{

        #create variable to store data when input from form
        $username = htmlspecialchars($_POST['username']);
        $gender = $_POST['gender'];
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        #Query Data to Insert
        $sql = "INSERT INTO `tb_customer` (`username`,`gender`,`email`,`password`)
        values ('$username','$gender','$email','$password') ";
        # Excecute to DB
        $result = mysqli_query($config,$sql);

        #check error
        if(!$result){
            echo '<script>alert("Create Customer Failse ⛔")</script>';
        }else{
            echo '<script>alert("Create Customer Successfully ✅")
            window.location.href="table.php";
            </script>';

        }

    }catch(Exception $e){
        echo "Error 404 !".$e->getMessage();
    }

        

    }

?>