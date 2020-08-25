@extends('layouts.app')

@section('content')
<header class="mb-6 relative">
    <img src="/images/banner.png" alt="banner" class="rounded-md mb-2">

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div>
            <a href="" class="rounded-full border border-gray-300 p-2 text-black focus:outline-none text-xs mr-2">Edit
                Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white focus:outline-none text-xs">Follow
                Me</a>
        </div>
    </div>

    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit, temporibus excepturi
        consequuntur cupiditate, saepe voluptates tenetur hic quidem maiores nesciunt minus expedita numquam optio
        accusamus sapiente aliquid a laborum.</p>
    <img src="{{$user->avatar}}" alt="John" class="rounded-full absolute"
        style="width: 150px; left: calc(50% - 75px); top:13.5rem">

</header>

@include('_timeline', [
'tweets' =>$user->tweets
])
@endsection
