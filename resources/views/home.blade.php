@extends('layouts.app')

@section('content')
<div class="lg:grid grid-cols-12 gap-4">
    <div class="lg:col-span-3">
        @include('_sidebar-links')
    </div>
    <div class="lg:col-span-6">Hello</div>
    <div class="lg:col-span-3">
        @include('_friends-list')
    </div>
</div>
@endsection
