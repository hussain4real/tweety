@extends('layouts.app')

@section('content')
<div class="grid grid-cols-12 gap-4">
    <div class="col-span-3">
        @include('_sidebar-links')
    </div>
    <div class="col-span-6">Hello</div>
    <div class="col-span-3">
        @include('_friends-list')
    </div>
</div>
@endsection
