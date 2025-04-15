<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Login</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen m-0 font-sans">

  <!-- Image Side -->
  <div class="w-1/2 bg-cover bg-center" style="background-image: url('image/makan2.jpg');">
  </div>

  <!-- Form Side -->
  <div class="w-1/2 flex items-center justify-center bg-white">
    <form action="login_process.php" method="POST" class="bg-white bg-opacity-90 p-10 rounded-lg shadow-lg w-80">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">LOGIN</h2>

      <label for="username" class="block text-sm font-semibold text-gray-700 mb-1">Username:</label>
      <input type="text" id="username" name="username" required
        class="w-full px-3 py-2 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />

      <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password:</label>
      <input type="password" id="password" name="password" required
        class="w-full px-3 py-2 mb-6 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />

      <button type="submit"
        class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 text-lg">
        Login
      </button>

      <div class="mt-4 text-center text-sm text-gray-700">
        Please Register <a href="daftarform.php" class="text-blue-600 hover:underline">Here!</a>
      </div>
    </form>
  </div>

</body>
</html>
