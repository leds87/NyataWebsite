@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">


        <div class="content">
            <h1 class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">News Overview</h1>
            <a href='inputnews' class="text-gray-800 px-2 py-2 border-2 bg-blue-500">input news</a>
            <section class=""> <!-- Contact Us-->
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-lg">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">News List</h2>
                    </div>
                </section>
                </section>
        </div>
    </div>
@endsection
