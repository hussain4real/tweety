<x-app>
<header class="mb-6 relative">
    <div class="relative">
        <img src="/images/banner.png" alt="banner" class="rounded-md mb-2">
        <img src="{{$user->avatar}}" alt="John" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
             width="150"
        style="left: 50%">
    </div>

    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="flex">
            @if(auth()->user()->is($user))
            <a href="{{route('profile', $user->id)}}" class="rounded-full border border-gray-300 p-2 text-black focus:outline-none text-xs mr-2">Edit
                Profile</a>
            @endif
           <x-follow-button :user="$user"></x-follow-button>

        </div>
    </div>

    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit, temporibus excepturi
        consequuntur cupiditate, saepe voluptates tenetur hic quidem maiores nesciunt minus expedita numquam optio
        accusamus sapiente aliquid a laborum.</p>


</header>

@include('_timeline', [
'tweets' =>$user->tweets
])
</x-app>
