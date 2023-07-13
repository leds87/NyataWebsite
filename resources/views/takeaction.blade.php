@extends('layout.default')
@section('title', __('messages.TakeActionTitle'))
@section('page-content')

{{-- TAKE ACTION --}}
<section class="text-center w-full bg-white py-16">
    <h1 class="title-body text-black uppercase">{{ __('messages.JoinTeam') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <p class="content-body text-black py-4 max-w-2xl mx-auto">{{ __('messages.JoinTeamDescription') }}</p>
</section>

@endsection
