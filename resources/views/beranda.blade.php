@extends("layouts.app")

@section("content")
<div class="flex justify-center my-12">
    <div class="flex bg-gray-200 rounded justify-center items-center w-6/12">
        <div class="p-6 w-full">
            <form action="{{route("beranda")}}" method="POST" class="mb-4">
                @csrf
                <div class="mb-4">
                    <textarea placeholder="Apa yang sedang anda pikirkan? " name="body" id="body" rows="6" class="w-full px-3 py-2 border rounded-lg resize-none focus:outline-none focus:ring focus:border-blue-300 @error("name")
                    border-red-500
                @enderror"></textarea>
                </div>
                @error("body")
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 mt-4 rounded-lg">Post</button>
            </form>
            @if ($posts->count())
                @foreach ($posts as $post)
                <x-post :post="$post"/>
                @endforeach
                {{$posts->links()}}
            @else
                Tidak ada postingan
            @endif
        </div>
    </div>
</div>
@endsection
