<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media</title>
    <link rel="shortcut icon" href="{{ asset("images/deer.png") }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset("fontawesome/css/all.min.css") }}">
</head>
<body>
    <nav class="bg-blue-500 p-6 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
          <!-- Menu Items -->
          <div class="space-x-4">
            @auth
            <a href="{{route("beranda")}}" class="text-white p-3">Beranda</a>
            @endauth
          </div>

          <!-- Login, Register, dan Profile -->
          <div class="space-x-4 flex items-center">
            @auth
            <a href="{{route("akun")}}" class="text-white p-3">Akun</a>
            <a href="{{route("logout")}}" class="text-white p-3">Logout</a>
            @endauth
          </div>
        </div>
      </nav>

    @yield('content')

    <footer class="border-t border-gray-400 text-center p-6">
        <p>&copy; 2023 Social Media. All rights reserved.</p>
    </footer>
</body>
</html>
