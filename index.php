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
                    <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-full font-medium transition-all transform hover:scale-105">
                        Download Now
                    </a>
                    <a href="#" class="border-2 border-yellow-500 text-yellow-500 dark:text-yellow-400 hover:bg-yellow-500 hover:text-white px-6 py-3 rounded-full font-medium transition-all transform hover:scale-105">
                        Learn More
                    </a>
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
<!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    About <span class="gradient-text">SafeRide</span>
                </h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto mb-6"></div>
                <p class="max-w-2xl mx-auto text-gray-600 dark:text-gray-300">
                    Our mission is to save lives by providing fast alerts in case of vehicle-related falls.
                </p>
            </div>
            
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="./pics/header.png" alt="About Image" class="w-full max-w-md mx-auto floating">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h3 class="text-2xl font-bold mb-6">Protecting Riders Worldwide</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Whether you're riding a motorcycle or cycling in the mountains, our app detects accidents and makes sure help is on the way. We combine mobile sensors and real-time alerts to bring peace of mind to you and your loved ones.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-yellow-100 dark:bg-yellow-900 p-2 rounded-full mr-4">
                                <i class="fas fa-heart text-yellow-500 dark:text-yellow-300"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Safety First</h4>
                                <p class="text-gray-600 dark:text-gray-300">Your well-being is our top priority</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-yellow-100 dark:bg-yellow-900 p-2 rounded-full mr-4">
                                <i class="fas fa-bolt text-yellow-500 dark:text-yellow-300"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Instant Alerts</h4>
                                <p class="text-gray-600 dark:text-gray-300">Fast response when you need it most</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-yellow-100 dark:bg-yellow-900 p-2 rounded-full mr-4">
                                <i class="fas fa-cogs text-yellow-500 dark:text-yellow-300"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Smart Technology</h4>
                                <p class="text-gray-600 dark:text-gray-300">Advanced algorithms for accurate detection</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    How It <span class="gradient-text">Works</span>
                </h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto mb-6"></div>
                <p class="max-w-2xl mx-auto text-gray-600 dark:text-gray-300">
                    Our app uses advanced technology to keep you safe during your rides.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg card-hover transition-all duration-300">
                    <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-3xl text-yellow-500 dark:text-yellow-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Smart Detection</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Our app uses motion sensors to detect unusual falls from a bike, scooter, or motorbike with 95% accuracy.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg card-hover transition-all duration-300">
                    <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bell text-3xl text-yellow-500 dark:text-yellow-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Instant Alert</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Once a fall is detected, an alert is immediately sent to your phone and emergency contacts within seconds.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg card-hover transition-all duration-300">
                    <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-phone-alt text-3xl text-yellow-500 dark:text-yellow-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Emergency Call</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        The app can automatically contact emergency services or your chosen contact in case of serious impact.
                    </p>
                </div>
            </div>
            
            <div class="mt-16 bg-gradient-to-r from-yellow-500 to-rose-500 rounded-xl p-8 text-white">
                <div class="max-w-3xl mx-auto text-center">
                    <h3 class="text-2xl font-bold mb-4">Ready to Ride with Confidence?</h3>
                    <p class="mb-6">Download SafeRide today and experience peace of mind on every journey.</p>
                    <a href="#" class="bg-white text-yellow-500 hover:bg-gray-100 px-8 py-3 rounded-full font-bold transition-all transform hover:scale-105">
                        Get the App Now
                    </a>
                </div>
            </div>
        </div>
    </section>























  <script src="./page.js"></script>
</body>
</html>