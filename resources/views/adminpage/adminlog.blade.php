@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">

            {{-- TITLE --}}
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-[#ff0000] px-2 py-3 font-bold mb-1 mx-auto md:text-sm">
                Admin Log Overview</h1>

            {{-- TABLE --}}
            <section class="">
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-8 mx-auto max-w-screen-xl">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Log List</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Date</th>
                                        <th scope="col" class="px-3 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">Typelog</th>
                                        <th scope="col" class="px-6 py-4">Person ID</th>
                                        <th scope="col" class="px-6 py-4">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['date'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['typelog'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['personid'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['description'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </section>
            </section>

        </div>
    </div>
@endsection
