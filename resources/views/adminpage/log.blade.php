@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Log Overview</h1>
            <section class="">
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-lg">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Log List</h2>

                        <div class="flex flex-col">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="inline-block  py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                            <thead class="border-b font-medium dark:border-neutral-500">
                                                <tr>
                                                    <th scope="col" class="px-6 py-4">ID</th>
                                                    <th scope="col" class="px-3 py-4">Admin ID</th>
                                                    <th scope="col" class="px-6 py-4">Admin Name</th>
                                                    <th scope="col" class="px-6 py-4">action</th>
                                                    <th scope="col" class="px-6 py-4">Data</th>
                                                    <th scope="col" class="px-6 py-4">Log ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['admin_id'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['name'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['action'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['data'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['log_id'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>

    </div>
@endsection
