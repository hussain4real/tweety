<div class="flex p-4 border-b border-gray-400">

    <div class="mr-2 flex-shrink-0">

        <img src="{{$tweet->user->avatar}}" alt="John" class="rounded-full mr-2">

    </div>

    <div>

        <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        <p>{{$tweet->body}}</p>

    </div>

</div>
