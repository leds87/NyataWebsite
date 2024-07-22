@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">

            {{-- TITLE --}}
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-[#ff0000] px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Admin Overview</h1>

            {{-- Input Admin Button --}}
            <a href='inputadmin' class="text-gray-100 rounded-lg px-2 py-2 border-2 bg-[#ff0000]">input admin</a>


            <section class=""> <!-- Table Admin List-->
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-lg">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Admin List</h2>


                        <div class="overflow-x-auto rounded-2xl">
                            <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                <thead class="border-b-2 font-medium dark:border-neutral-500">
                                    <tr class="bg-gray-200">
                                        <th scope="col" class="px-6 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        <th scope="col" class="px-6 py-4">Address</th>
                                        <th scope="col" class="px-6 py-4">Email</th>
                                        <th scope="col" class="px-6 py-4">Phone</th>
                                        <th scope="col" class="px-6 py-4">role</th>
                                        <th scope="col" class="px-6 py-4">Note</th>
                                        <th scope="col" class="px-6 py-4 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['name'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['address'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['email'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['phone'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['role'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['note'] }}</td>
                                            {{-- <td class="whitespace-nowrap px-6 py-4">
                                          <img src="{{asset('storage/post-images/'.$item->image)}}" alt="" srcset="" class="w-20"></td> --}}
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <button type="button" class="bg-green-600 text-white px-2 py-2 rounded-lg">
                                                    <a href="/adminedit/{{ $item->id }}/edit">Edit</a> </button>
                                                <form action="{{ route('destroyadmin', $item->id) }}" method="POST"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-600 text-white px-2 py-2 rounded-lg"
                                                        onclick="return confirm('Are You Sure?')"> HAPUS </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>

        </div>
    </div>
@endsection
