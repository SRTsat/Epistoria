<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .dot.active {
            background-color: #255096;
            /* Tailwind blue-500 */
        }
    </style>
    <title>Epistoria</title>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <div class="w-full bg-white border-b border-gray-200 shadow-md">
        <div class="flex justify-between items-center py-4 px-8">
            <div class="text-2xl font-bold text-teal-700">Epistoria</div>
            <div class="flex items-center bg-white rounded-full shadow-md px-4 py-2 w-full max-w-md">
                <input type="text" placeholder="Search" class="w-full border-none focus:outline-none">
                <i class="fas fa-search text-gray-500 ml-2"></i>
            </div>
            <div class="flex items-center">
                <a href="profile.blade.php"><img src="totoro png.avif" alt="Profile"
                        class="w-12 h-12 rounded-full object-cover"></a>
            </div>
        </div>
    </div>

    <!-- Slider Section -->
    <div class="w-full max-w-3xl mx-auto my-8">
        <h2 class="text-2xl font-bold mb-4 text-center">Ayo Membaca Buku</h2>
        <p class="mb-6 text-center">"Jangan pernah membaca karena ingin dianggap pintar. Bacalah karena kamu mau membaca
            dan dengan
            sendirinya kamu akan jadi pintar." (Ziggy Z).</p>
        <div class="relative overflow-hidden rounded-xl bg-gray-200">
            <div class="flex transition-transform duration-500 ease-in-out slides">
                <div class="min-w-full slide"><img src="Epistoria.png" alt="Slide 1"
                        class="w-full h-auto rounded-xl"></div>
                <div class="min-w-full slide"><img src="Epistoria2 (2).png" alt="Slide 2"
                        class="w-full h-auto rounded-xl"></div>
                <div class="min-w-full slide"><img src="Epistoria 3.png" alt="Slide 3"
                        class="w-full h-auto rounded-xl"></div>
                <div class="min-w-full slide"><img src="Epistoria.png" alt="Slide 4"
                        class="w-full h-auto rounded-xl"></div>
            </div>
            <!-- Arrows -->
            <button onclick="plusSlides(-1)"
                class="absolute top-1/2 left-4 bg-white p-2 rounded-full shadow-md -translate-y-1/2">
                &#10094;
            </button>
            <button onclick="plusSlides(1)"
                class="absolute top-1/2 right-4 bg-white p-2 rounded-full shadow-md -translate-y-1/2">
                &#10095;
            </button>
        </div>
        <div class="flex justify-center space-x-2 mt-4">
            <span class="h-3 w-3 bg-gray-400 rounded-full cursor-pointer dot" onclick="currentSlide(1)"></span>
            <span class="h-3 w-3 bg-gray-400 rounded-full cursor-pointer dot" onclick="currentSlide(2)"></span>
            <span class="h-3 w-3 bg-gray-400 rounded-full cursor-pointer dot" onclick="currentSlide(3)"></span>
            <span class="h-3 w-3 bg-gray-400 rounded-full cursor-pointer dot" onclick="currentSlide(4)"></span>
        </div>


        <!-- Recommendation Section -->
        <div class="container mx-auto w-full max-w-3xl p-2">
            <div class="text-lg font-bold mb-3 left-0 text-xl">Popular Book</div>
            <hr class="w-full border-2 border-gray-300 mb-4">
            <div class="flex items-center space-x-4 overflow-x-auto">
                <a href="index.blade.php" class="bg-gray-200 w-36 h-52 flex flex-col items-center justify-center rounded-lg">
                    <img alt="" src="harrypotter.jpg" class="h-40 w-30 object-cover" />
                    <div class="mt-2 font-bold text-sm">Harry Potter</div>
                </a>

                <a href="index.blade.php" class="bg-gray-200 w-36 h-52 flex flex-col items-center justify-center rounded-lg">
                    <img alt="" src="harrypotter.jpg" class="h-40 w-30 object-cover" />
                    <div class="mt-2 font-bold text-sm">Harry Potter</div>
                </a>

                <a href="#" class="bg-gray-200 w-36 h-52 flex flex-col items-center justify-center rounded-lg">
                    <img alt="" src="harrypotter.jpg" class="h-40 w-30 object-cover" />
                    <div class="mt-2 font-bold text-sm">Harry Potter</div>
                </a>

                <a href="#" class="bg-gray-200 w-36 h-52 flex flex-col items-center justify-center rounded-lg">
                    <img alt="" src="harrypotter.jpg" class="h-40 w-30 object-cover" />
                    <div class="mt-2 font-bold text-sm">Harry Potter</div>
                </a>
            </div>
        </div>




        <!-- Activity Section -->
        <div class="bg-transparent text-black">
            <div class="max-w-4xl mx-auto p-6">
                <h1 class="text-2xl font-bold mb-4">Rekomendasi untuk Anda</h1>
                <div class="space-y-5">
                    <div class="flex items-center space-x-3">
                        <a href="#" class="group">
                            <img alt="Illustration of a bamboo with a red and white gradient background"
                                class="w-20 h-20 rounded-lg object-cover transition-transform duration-300 group-hover:scale-105 shadow-lg"
                                src="hry2.png" />
                        </a>
                        <div class="text-sm">
                            <h2 class="text-base font-bold">Semangat Baru, Penulis Maju!</h2>
                            <p class="text-gray-500">Agt 01, 2024 07:08 AM - Agt 31, 2024 23:08 PM</p>
                        </div>
                    </div>
        
                    <div class="flex items-center space-x-3">
                        <a href="#" class="group">
                            <img alt="Pixel art of a purple lovebird with a pink background"
                                class="w-20 h-20 rounded-lg object-cover transition-transform duration-300 group-hover:scale-105 shadow-lg"
                                src="hry2.png" />
                        </a>
                        <div class="text-sm">
                            <h2 class="text-base font-bold">Fizzo Lovebird Competition</h2>
                            <p class="text-gray-500">Apr 26, 2024 00:04 AM - Jun 28, 2024 23:06 PM</p>
                        </div>
                    </div>
        
                    <div class="flex items-center space-x-3">
                        <a href="#" class="group">
                            <img alt="Illustration of a Ramadan scene with a green background"
                                class="w-20 h-20 rounded-lg object-cover transition-transform duration-300 group-hover:scale-105 shadow-lg"
                                src="hry2.png" />
                        </a>
                        <div class="text-sm">
                            <h2 class="text-base font-bold">Ramadan Berkarya, Menulis Berhadiah!</h2>
                            <p class="text-gray-500">Mar 11, 2024 00:03 AM - Apr 18, 2024 23:04 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        <!-- Slider Script -->
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                const slides = document.querySelector(".slides");
                const dots = document.querySelectorAll(".dot");
                const totalSlides = document.querySelectorAll(".slide").length;

                // Calculate the offset for the current slide
                const offset = -slideIndex * 100;
                slides.style.transform = `translateX(${offset}%)`;

                dots.forEach((dot, index) => {
                    dot.classList.toggle("bg-blue-500", index === slideIndex);
                    dot.classList.toggle("bg-gray-400", index !== slideIndex);
                });
            }

            function plusSlides(n) {
                const totalSlides = document.querySelectorAll(".slide").length;
                slideIndex = (slideIndex + n + totalSlides) % totalSlides;
                showSlides();
            }

            function currentSlide(n) {
                slideIndex = n - 1;
                showSlides();
            }

        </script>

</body>

</html>