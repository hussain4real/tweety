<div class="bg-blue-100 rounded-lg p-4">

    <h3 class="font-bold text-xl mb-4 ">following</h3>

    <ul>
        @foreach (auth()->user()->follows as $user)

        <li class="mb-4">
            <div>
                <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}" alt="John" class="rounded-full mr-2" width="40" height="40">
                    {{ $user->name }}
                </a>
            </div>

        </li>
        @endforeach
    </ul>
</div>
