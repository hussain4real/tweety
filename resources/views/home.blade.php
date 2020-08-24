@extends('layouts.app')

@section('content')
<div class="lg:grid grid-cols-12 gap-4 ">

    <div class="lg:col-start-2 col-end-4 ">

        @include('_sidebar-links')

    </div>

    <div class=" lg:col-start-4 col-end-10 lg:mr-6" style="max-width: 700px">

        @include('_publish-tweet-panel')

        <div class="border border-gray-300 rounded-lg">

            @foreach ($tweets as $tweet)

            @include('_tweet')

            @endforeach


        </div>

    </div>

    <div class="lg:col-start-10 col-end-12 bg-blue-100 rounded-lg p-4">

        @include('_friends-list')

    </div>

</div>

@endsection
