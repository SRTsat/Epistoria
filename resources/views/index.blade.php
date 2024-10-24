<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Novel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
</style>
<body class="h-screen w-screen font-poppins">
    <div class="flex flex-col h-full relative">
        <div class="bg-gray-800 flex-1 pb-8"></div>
        <div class="bg-gray-100 flex-[1.1]"></div>
        <div class="absolute inset-0 flex items-start justify-center p-5 box-border">
            <div class="absolute top-5 left-5">
                <a href="" class="bg-gray-800 text-white p-2 px-5 rounded-full flex items-center text-lg">
                    <i class="fa-solid fa-chevron-left mr-3 text-3xl text-black hover:text-gray-500"></i>
                </a>
            </div>
            <div class="ml-52 mt-12">
                <img src="harrypotter.jpg" alt="Harry Potter and the Deathly Hallows" class="w-[265px] rounded-lg ml-16">
                <div class="mt-8">
                    <h2 class="text-lg font-semibold">Description</h2>
                    <p class="text-sm mt-1 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos quos sunt blanditiis debitis reprehenderit cum maiores qui? Harum sint totam, expedita rem voluptatum enim praesentium consequuntur deserunt aperiam qui.</p>
                </div>
                <div class="flex items-center mt-5">
                    <h2 class="text-lg font-semibold">Rating</h2>
                    <div class="text-yellow-400 text-2xl ml-3">
                        ★★★★☆
                    </div>
                </div>
            </div>
            <div class="ml-5 mr-12 text-white">
                <h1 class="text-5xl font-bold ml-20 pt-7">Harry Potter and The Deathly Hallows</h1>
                <h2 class="text-xl font-medium mt-1 ml-20">JK Rowling</h2>
                <p class="text-sm mt-2 ml-20 leading-relaxed text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus tempus, eleifend ligula nec, dictum odio. Pellentesque et dolor porttitor, sollicitudin dui eu, dapibus arcu. Aliquam commodo felis a euismod volutpat. Suspendisse gravida nulla ullamcorper eros vehicula, vel eleifend velit bibendum. Nunc tincidunt tellus ac orci eleifend eleifend. Phasellus tincidunt euismod ex ac feugiat. Phasellus a purus finibus sem volutpat bibendum.
                </p>
                <div class="flex gap-3 mt-16 ml-20">
                    <a href="lihat.blade.php" class="bg-gray-800 text-white px-4 py-2 rounded-full flex items-center hover:bg-gray-700">
                        <i class="fas fa-book-open mr-2"></i>Start Reading
                    </a>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full flex items-center favorite hover:bg-gray-700">
                        <i class="fas fa-heart mr-2"></i>Like
                    </button>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full flex items-center download hover:bg-gray-700">
                        <i class="fas fa-download mr-2"></i>Download
                    </button>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-full flex items-center share hover:bg-gray-700">
                        <i class="fas fa-share-alt mr-2"></i>Share
                    </button>
                </div>
                <div class="w-[89%] h-[3px] bg-gray-800 mt-10 ml-20"></div>
            </div>
        </div>
    </div>

    <div id="notification" class="fixed top-10 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-70 text-white px-5 py-3 rounded hidden z-50 text-center">
        <p id="notification-text"></p>
    </div>

    <script>
        function showNotification(message) {
            const notification = document.getElementById('notification');
            const notificationText = document.getElementById('notification-text');
            
            notificationText.innerText = message;
            notification.classList.remove('hidden');
            
            setTimeout(() => {
                notification.classList.add('hidden');
            }, 3000);
        }

        document.querySelector('.favorite').addEventListener('click', () => {
            showNotification('Liked!');
        });

        document.querySelector('.download').addEventListener('click', () => {
            showNotification('Image downloaded!');
        });

        document.querySelector('.share').addEventListener('click', () => {
            showNotification('Link copied!');
        });
    </script>
</body>
</html>