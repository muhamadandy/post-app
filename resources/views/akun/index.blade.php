@extends("layouts.app")

@section("content")

<div class="max-w-md w-full my-6 mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-4">
      <h2 class="text-2xl font-semibold text-gray-800">Info Akun</h2>
      <p class="text-gray-600 mt-2">Nama: {{auth()->user()->name}}</p>
      <p class="text-gray-600 mt-2">Username: {{auth()->user()->username}}</p>
      <p class="text-gray-600 mt-2">Email: {{auth()->user()->email}}</p>
    </div>
    <div class="bg-gray-100 flex px-6 py-4">

            <a href="{{route("edit.profile",auth()->user())}}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold mr-4 py-2 px-4 rounded">
                Edit Profil
              </a>

      <form action="{{route("destroy.user",auth()->user())}}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Hapus Akun</button>
    </form>
    </div>
  </div>

@endsection
