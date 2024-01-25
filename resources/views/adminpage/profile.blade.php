@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white py-20">


        <div class="content">


            <div class=" py-9">
                <h1 class="lg:text-2xl text-center text-white bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                    Profile</h1>
            </div>
            {{-- ERROR MESSAGES --}}
            @if (session('success'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium block">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div id="alert-2"
                    class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('error') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            <div class=" mx-auto mt-8 p-4 shadow-md rounded-md w-1/3 mb-4 bg-zinc-100">
                <h1 class="text-2xl text-black font-semibold mb-4">{{ auth()->user()->name }}'s Profile</h1>
                <div class="flex items-center space-x-4 mb-5">
                    <img src="" alt="User Avatar" class="w-12 h-12 rounded-full">
                    <div class="mx-auto">
                        <p class=" text-black font-semibold">{{ auth()->user()->name }}</p>
                        <p class=" text-black">{{ auth()->user()->email }}</p>
                        <p class=" text-black uppercase text-center">{{ auth()->user()->log }}</p>
                    </div>
                    <div class="">
                        <a href="/useredit%{{ auth()->user()->id }}">
                            <button class="bg-black px-3 py-2 rounded-xl text-white">Edit</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="mx-auto shadow-lg text-left w-1/3 pt-3 mb-5 pl-5 ">
                    <div class="text-2xl text-black font-bold ">Details </div>
                    <div class="my-2 border-2 border-gray-300"></div>
                    @auth
                        @if (auth()->user()->log == 'admin')
                            <h1 class="text-sm text-black mb-2">id : <span class="text-lg">{{ auth()->user()->id }}</span></h1>
                            <h1 class="text-sm text-black mb-2">Name : <span class="text-lg">{{ auth()->user()->name }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">address : <span
                                    class="text-lg">{{ auth()->user()->address }}</span></h1>
                            <h1 class="text-sm text-black mb-2">email : <span
                                    class="text-lg">{{ auth()->user()->email }}</span></h1>
                            <h1 class="text-sm text-black mb-2">phone : <span
                                    class="text-lg">{{ auth()->user()->phone }}</span></h1>
                            <h1 class="text-sm text-black mb-2">tier : <span class="text-lg">{{ auth()->user()->role }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">note : <span class="text-lg">{{ auth()->user()->note }}</span>
                            </h1>
                        @else
                            <h1 class="text-sm text-black mb-2">id : <span class="text-lg">{{ auth()->user()->id }}</span></h1>
                            <h1 class="text-sm text-black mb-2">Name : <span class="text-lg">{{ auth()->user()->name }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">address : <span
                                    class="text-lg">{{ auth()->user()->address }}</span></h1>
                            <h1 class="text-sm text-black mb-2">email : <span
                                    class="text-lg">{{ auth()->user()->email }}</span></h1>
                            <h1 class="text-sm text-black mb-2">phone : <span
                                    class="text-lg">{{ auth()->user()->phone }}</span></h1>
                            <h1 class="text-sm text-black mb-2">tier : <span class="text-lg">{{ auth()->user()->tier }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">note : <span class="text-lg">{{ auth()->user()->note }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">since : <span
                                    class="text-lg">{{ auth()->user()->since }}</span></h1>
                            <h1 class="text-sm text-black mb-2">status : <span
                                    class="text-lg">{{ auth()->user()->status }}</span></h1>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>


    {{-- <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white text-black antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 ">Admin</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO Flowbite</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$datanews->date}}</time></p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">{{$datanews->title}}</h1>
                <p class="">Children ID <span class=" bg-black text-white rounded-md px-2 py-2">{{$datanews->children_id}}</span> </p>
            </header>
            <p class="border-4 border-gray-50 pb-10 mb-10">{{$datanews->description}}</p>
            
            <section class="not-format">
                <form class="mb-6">
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 ">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0  dark:placeholder-gray-400 "
                            placeholder="Write a comment..." required></textarea>
                    </div>
                </form>
            </section>
        </article>
    </div>
  </main>
  
  <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png" class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">Our first office</a>
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 2 minutes
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png" class="mb-5 rounded-lg" alt="Image 2">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">Enterprise design tips</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 12 minutes
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png" class="mb-5 rounded-lg" alt="Image 3">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">We partnered with Google</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 8 minutes
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">Our first project with React</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 4 minutes
                </a>
            </article>
        </div>
    </div>
  </aside> --}}


    <!DOCTYPE html>


    </div>
@endsection
