@extends('layout.default')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white">
        <div class=" py-9">
            <!-- TITLE  -->
            <h1 class="lg:text-2xl text-center text-white bg-[#ff0505] px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                News Show</h1>
        </div>


        <!-- CONTENT -->
        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white text-black antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article
                    class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                                <img class="mr-4 w-16 h-16 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                                <div>
                                    <a href="#" rel="author" class="text-xl font-bold text-gray-900 ">Admin</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400">NYATA Admin Author</p>
                                    <p class="text-base text-gray-500 dark:text-gray-400">
                                        <time>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $datanews->date)->format('F jS, Y') }}</time>
                                    </p>
                                </div>
                            </div>
                        </address>
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">
                            {{ $datanews->title }}</h1>
                        @if ($datanews->children_id == null)
                            {{-- <p> news for all users</p> --}}
                            {{-- <p class="" >Children ID <span class=" bg-black text-white rounded-md px-2 py-2" >{{$datanews->children_id}}</span> --}}
                        @else
                            <p class="">Children ID <span
                                    class=" bg-black text-white rounded-md px-2 py-2">{{ $datanews->children_id }}</span>
                        @endif
                        {{-- <p class="" >Children ID <span class=" bg-black text-white rounded-md px-2 py-2" >{{$datanews->children_id}}</span> --}}
                        {{-- <p class="" >Children ID <span class=" bg-black text-white rounded-md px-2 py-2" >{{$datachildren->name}}</span>   --}}
                        </p>
                    </header>
                    <p class="border-4 border-gray-50 pb-10 mb-10">{{ $datanews->description }}</p>

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

    </div>
@endsection
