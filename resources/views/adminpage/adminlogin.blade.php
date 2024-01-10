@extends('layout.default')
@section('page-content')

<div class="bg-[#f8f5f2]">

    <div class="pt-52 text-4xl text-center text-black tracking-widest block font-bold">NYATA
    </div>
    <div class="text-2xl tracking-wider text-center mt-4 text-black  ">ADMIN LOGIN</div>
    
    <form action="{{ route('login') }}" method="POST">
        <div class="max-w-lg my-10 border-2 border-slate-800 rounded-xl mx-auto p-5 shadow-md">  
            
                @if(session()->has('success'))
                <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Registration Finish!</span> Let's Login!
                    </div>
                </div>
                @else
                <div class="text-md bg-red-300 border-black border-solid border-2 rounded-lg text-center w-1/2 mx-auto">{{ Session::get("gagal")}}</div>
                @endif

            @csrf
            <input type="email" id="email" name ="email" class="text-black border-2 my-5 mx-auto w-full block invalid:text-red-500 peer invalid:border-red-500" value ="{{Session::get('name')}}" placeholder="name" autofocus required>
            {{-- <p id="email" name="email" class="text-sm text-red-500 invisible peer-invalid:visible">Email Doesn't Valid!</p> --}}
            <input type="password" id="password" name="password" class="text-black border-2 mx-auto w-full block " placeholder="password" required>
            <button type="submit" class="block mx-auto bg-black text-white px-10 py-2 rounded-full hover:scale-125 mt-5">Login</button>
        </div>
    </form>
    
    
    <div class="text-lg text-center hover:text-red">
        <a href='inputadmin' class="hover:underline hover:font-bold text-black">Create an Account</a>
    </div>
    <div class="text-lg text-center py-48 hover:text-red">
    </div>
</div>
    @endsection