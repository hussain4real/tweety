<form action="/profiles/{{$user->name}}/follow" method="post">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white focus:outline-none text-xs">
        {{auth()->user()->followng($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
