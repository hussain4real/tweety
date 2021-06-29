<form wire:submit.prevent="submitTweet" method="POST" action="{{route('tweets.store')}}">
    @csrf

    {{--<textarea name="body" class="w-full outline-none" placeholder="what's up tweepy?"></textarea>--}}

    <x-buk-textarea wire:model.defer="body" name="body" class="w-full outline-none" placeholder="what's up tweepy?" />
    {{-- @error('body') <span class="error">{{ $message }}</span> @enderror --}}


    <hr class="my-4">
    <x-buk-error field="body" class="text-red-500" />
    <footer class="flex justify-between">

        <img src="{{auth()->user()->avatar}}" alt="John" class="rounded-full mr-2" width="50" height="50">

        <button type="submit"
            class="inline-flex items-center justify-center bg-blue-500 rounded-lg shadow px-2 text-white focus:outline-none disabled:opacity-50">
            <svg wire:loading wire:target="submitTweet" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <span>Tweety-a-roo!</span>
        </button>

    </footer>

</form>
