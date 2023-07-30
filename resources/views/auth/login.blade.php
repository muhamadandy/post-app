@extends("layouts.app")

@section("content")
    <div class="container mx-auto my-12 p-4">
        <form action="{{route("login")}}" method="post" class="max-w-md mx-auto">
            @csrf
          <h1 class="text-2xl font-bold mb-4">Selamat Datang</h1>
        @if (session("status"))
            <div class="bg-red-400 text-center font-bold p-3 rounded text-white mb-4">
                {{session("status")}}
            </div>
        @endif
          <!-- Email -->
          <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error("email")
            border-red-500
        @enderror" value="{{old("email")}}">

            @error("email")
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
          </div>

          <!-- Password -->
          <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error("password")
            border-red-500
        @enderror">
        @error("password")
        <div class="text-red-500 mt-2 text-sm">
            {{$message}}
        </div>
        @enderror
          </div>

          <div class="mb-4 flex items-center">
            <input type="checkbox" id="remember" name="remember" class="mr-2">
            <label for="remember" class="text-gray-700 text-sm">Remember Me</label>
          </div>

          <!-- Tombol Login -->
          <div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-blue-600">
              Login
            </button>
          </div>

          <div class="mt-4 text-center">
            <p class="text-gray-700 text-sm">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500">Daftar disini</a></p>
          </div>
        </form>
      </div>


  {{-- Batasan --}}



@endsection
