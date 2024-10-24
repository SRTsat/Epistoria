  <html>

  <head>
      <script src="https://cdn.tailwindcss.com">
      </script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gray-100">
      <header class="bg-white shadow-md">
          <div class="container mx-auto flex items-center justify-between py-4 px-6">
              <div class="text-2xl font-bold text-teal-600">
                  Epistoria
              </div>
              <div class="relative">
                  <input class="bg-gray-200 rounded-full py-2 px-4 pl-10 focus:outline-none" placeholder="Search" type="text" />
                  <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                  </i>
              </div>
              <div class="relative w-10 h-10">
                  <img alt="Header Profile Image" class="w-full h-full rounded-full object-cover" height="40" id="headerProfileImage" src="" width="40" />
                  <input accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" id="headerImageUpload" type="file" />
              </div>
          </div>
      </header>
      <main class="bg-teal-600 py-10">
          <div class="container mx-auto text-center">
              <div class="relative w-24 h-24 mx-auto">
                  <img alt="Profile Image" class="w-full h-full rounded-full object-cover" height="96" id="profileImage" src="" width="96" />
                  <input accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" id="imageUpload" type="file" />
              </div>
              <div class="text-white mt-2">
                  No1
              </div>
          </div>
      </main>
      <nav class="bg-white shadow-md">
          <div class="container mx-auto flex items-center justify-between py-4 px-6">
              <div class="flex space-x-8">
                  <a class="flex items-center space-x-2 text-black" href="#">
                      <i class="fas fa-heart">
                      </i>
                      <span>
                          Favorite
                      </span>
                  </a>
                  <a class="flex items-center space-x-2 text-black" href="#">
                      <i class="fas fa-download">
                      </i>
                      <span>
                          Download
                      </span>
                  </a>
                  <a class="flex items-center space-x-2 text-black" href="Aboutuss.blade.php">
                      <i class="fas fa-info-circle">
                      </i>
                      <span>
                          About Us
                      </span>
                  </a>
              </div>
              <a class="text-black" href="#">
                  Log Out
              </a>
          </div>
      </nav>
      <script>
          document.getElementById('imageUpload').addEventListener('change', function(event) {
              const file = event.target.files[0];
              if (file) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                      document.getElementById('profileImage').src = e.target.result;
                  }
                  reader.readAsDataURL(file);
              }
          });

          document.getElementById('headerImageUpload').addEventListener('change', function(event) {
              const file = event.target.files[0];
              if (file) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                      document.getElementById('headerProfileImage').src = e.target.result;
                  }
                  reader.readAsDataURL(file);
              }
          });
      </script>
  </body>

  </html>
  </body>

  </html>