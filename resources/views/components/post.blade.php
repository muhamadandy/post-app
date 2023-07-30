@props(["post" => $post])
<div class="post bg-white border border-gray-300 rounded-lg p-4 my-12">
    <a href="{{route("user.posts",$post->user)}}" class="name text-xl font-semibold mb-2">{{$post->user->username}}</a>
    <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
    <p class="my-4">{{$post->body}}</p>
    <div class="flex items-center">
        @if (!$post->likedBy(auth()->user()))
        <form action="{{route("beranda.likes",$post)}}" method="POST" class="ml-4">
            @csrf
            <button type="submit" class="text-blue-500 hover:text-blue-600 font-semibold">
                <i class="fa-regular fa-thumbs-up" style="color: #404f9c;"></i>
            </button>
        </form>
        @else
        <form action="{{route("beranda.likes",$post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-600 font-semibold">
                <i class="fa-solid fa-thumbs-up" style="color: #404f9c;"></i>
            </button>
        </form>
        @endif
        <span class="ml-1">{{$post->likes->count()}}</span>
        @can("delete",$post)
        <form action="{{route("post.delete",$post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-600 font-bold ml-2">
                Delete
            </button>
        </form>
        @endcan

    </div>
</div>
