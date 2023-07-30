@extends("layouts.app")

@section("content")
<div class="container mx-auto my-12 p-4">
    <form action="{{route("register")}}" method="post" class="max-w-md mx-auto">
        @csrf
      <h1 class="text-2xl font-bold mb-4">Form Register</h1>

      <!-- Nama -->
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
        <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error("name")
            border-red-500
        @enderror" value="{{old("name")}}">

        @error("name")
        <div class="text-red-500 mt-2 text-sm">
            {{$message}}
        </div>
        @enderror
      </div>

      <!-- Username -->
      <div class="mb-4">
        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
        <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error("username")
        border-red-500
    @enderror" value="{{old("username")}}">
    @error("username")
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror
      </div>

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

      <!-- Konfirmasi Password -->
      <div class="mb-6">
        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
      </div>

      <!-- Tombol Register -->
      <div>
        <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-blue-600">
          Register
        </button>
      </div>
    </form>
  </div>

@endsection
