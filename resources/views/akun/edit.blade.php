@extends("layouts.app")
@section("content")

<div class="max-w-md w-full mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Profil</h2>
    <form action="#" method="POST">
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama:</label>
        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
      </div>
      <div class="mb-4">
        <label for="username" class="block text-gray-700 font-semibold mb-2">Username:</label>
        <input type="text" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
      </div>
      <div class="flex justify-end">
        <form action="{{route("edit.profile",auth()->user())}}" method="post">
            @csrf
            @method("PATCH")
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Simpan Perubahan
              </button>
        </form>
      </div>
    </form>
  </div>
@endsection
