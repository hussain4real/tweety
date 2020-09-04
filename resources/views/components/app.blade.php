<x-master>
    <section class="px-8">

        <main class="container mx-auto">
            <div class="lg:grid grid-cols-12 gap-4 ">

                @if(auth()->check())
                    <div class="lg:col-start-2 col-end-4 ">

                        @include('_sidebar-links')

                    </div>
                @endif
                <div class=" lg:col-start-4 col-end-10 lg:mr-6" style="max-width: 700px">

                    {{ $slot }}

                </div>

                    @if(auth()->check())
                        <div class="lg:col-start-10 col-end-12 ">

                            @include('_friends-list')

                        </div>
                    @endif

            </div>
        </main>
    </section>
</x-master>
