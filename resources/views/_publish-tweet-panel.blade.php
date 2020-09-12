<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">

    <form method="POST" action="{{route('tweets.store')}}">
        @csrf

        {{--<textarea name="body" class="w-full outline-none" placeholder="what's up tweepy?"></textarea>--}}
        <x-buk-textarea name="body" class="w-full outline-none" placeholder="what's up tweepy?"/>

        <hr class="my-4">

        <footer class="flex justify-between">

            <img src="{{auth()->user()->avatar}}" alt="John" class="rounded-full mr-2" width="50" height="50">

            <button type="submit"
                class="bg-blue-500 rounded-lg shadow px-2 text-white focus:outline-none">Tweety-a-roo!</button>

        </footer>


    </form>

    <x-buk-error field="body" class="text-red-500" />


</div>
