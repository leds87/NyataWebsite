@extends('layout.default')
@section('page-content')
    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black">
                Edwin Jusuf
            </h1>
            <nav class="-mx-2">
                <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Home</a>
                <a href="{{ route('aboutus') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">About</a>
            </nav>
        </div>
        Header
    </header>


    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Learn to {{ __('Welcome to our website') }} <span
                    class="text-pink-500">code</span></h2>
            <h3 class="text-2xl sm:text-4xl sm:italic">with Edwin Jusuf</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Description will be here
            </p>
            <a href="{{ route('aboutus') }}"
                class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn more</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What can you learn</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow">
                        <h3 class="text-xl font-bold mb-3">Game Development</h3>
                        <p class="text-gray-200 mb-3">
                            Test Test Test in Game Development Description
                        </p>
                        <a href="{{ url('https://youtube.com/MuddyWolf') }}"
                            class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow">
                        <h3 class="text-xl font-bold mb-3">Game Development</h3>
                        <p class="text-gray-200 mb-3">
                            Test Test Test in Game Development Description
                        </p>
                        <a href="{{ url('https://youtube.com/MuddyWolf') }}"
                            class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Where to learn?</h3>
            <h3 class="text-xl mb-6">Learn to code on Youtube with one of my channels!</h3>
            <div class="-mx-2 sm:flex">
                <a href="{{ url('https://unrealengine.com') }}" target="_black" ref="noopener noreferrer"
                    class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0">
                    <span class="mr-2"> </span> Learn <strong> Web</strong> Development
                </a>
            </div>
        </div>
    </section>

    <footer>
        Footer
        <div class="container mx-auto p4 text-white">
            <p>&copy; Edwin Jusuf | Learn to code </p>
        </div>
    </footer>
@endsection
