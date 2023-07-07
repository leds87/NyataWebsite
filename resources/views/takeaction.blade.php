@extends('layout.default')
@section('title', 'TAKE ACTION')
@section('page-content')
{{-- FOUNDING STORY --}}
<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-14 uppercase">{{ __('messages.TakeAction') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <p class="text-black dark:text-gray-400 px-8 py-6 max-w-[68rem] mx-auto tracking-wider">{{ __('messages.TakeActionDescription') }}</p>
</section>
@endsection
