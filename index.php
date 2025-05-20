<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SafeRide - Fall Detection App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="./src/style.css" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
 
<!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-md sticky top-0 z-50 transition-colors duration-300">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 rounded-full bg-yellow-500 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-white"></i>
                    </div>
                    <span class="text-xl font-bold gradient-text">Safe Ride App</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="hover:text-yellow-500 transition">Home</a>
                    <a href="#about" class="hover:text-yellow-500 transition">About</a>
                    <a href="#features" class="hover:text-yellow-500 transition">Features</a>
                    <a href="#usecases" class="hover:text-yellow-500 transition">Use Cases</a>
                    <a href="#contact" class="hover:text-yellow-500 transition">Contact</a>
                    
                   
                </div>
                
                <div class="md:hidden flex items-center">
                    <button id="menu-btn" class="text-gray-500 dark:text-gray-300 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="#home" class="hover:text-pink-500 transition">Home</a>
                    <a href="#about" class="hover:text-pink-500 transition">About</a>
                    <a href="#features" class="hover:text-pink-500 transition">Features</a>
                    <a href="#usecases" class="hover:text-pink-500 transition">Use Cases</a>
                    <a href="#contact" class="hover:text-pink-500 transition">Contact</a>
                    
                    <div class="flex items-center justify-between pt-2">
                        <span>Dark Mode</span>
                        <div class="relative inline-block w-10 align-middle select-none">
                            <input type="checkbox" id="toggle-mobile" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle-mobile" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<!-- Hero Section -->
    <section id="home" class="py-20 bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 fade-in">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Stay Safe While <span class="gradient-text">You Ride</span>
                </h1>
                <p class="text-lg md:text-xl mb-8 text-gray-600 dark:text-gray-300">
                    Our smart fall detection app monitors your rides and alerts emergency contacts if an accident occurs. Peace of mind for you and your loved ones.
                </p>
                <div class="flex space-x-4">
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-full font-medium transition-all transform hover:scale-105">
                        Download Now
                    </button>
                    <button class="border-2 border-yellow-500 text-yellow-500 dark:text-yellow-400 hover:bg-yellow-500 hover:text-white px-6 py-3 rounded-full font-medium transition-all transform hover:scale-105">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
                <div class="relative floating">
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-yellow-500 rounded-full opacity-20 absolute -left-10 -top-10"></div>
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-yellow-500 rounded-full opacity-20 absolute -right-10 -bottom-10"></div>
                    <img src="https://cdn-icons-png.flaticon.com/512/3273/3273617.png" alt="App Screenshot" class="relative w-64 h-64 md:w-80 md:h-80 object-contain">
                </div>
            </div>
        </div>
    </section>






















  <script src="./page.js"></script>
</body>
</html>