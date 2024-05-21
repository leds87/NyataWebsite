@extends('layout.default')
@extends('adminpage.layoutadmin')

{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">

            <!-- TITLE -->
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-[#ff0000] px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                School Overview</h1>
            <a href='inputschool' class="text-gray-100 px-2 py-2 border-2 bg-[#ff0000]">input School</a>

            <!-- CONTENT -->
            <section class="">
                <section class="text-gray-900">
                    <div class="py-8 lg:py-16 ">
                        <h2 class="mb-4 text-4xl mx-auto tracking-tight font-extrabold text-center text-gray-900 ">School List</h2>
                        <div class="overflow-x-auto rounded-xl">
                            <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                <thead class="border-b-2 font-medium dark:border-neutral-500">
                                    <tr class="bg-gray-200 rounded-xl">
                                        <th scope="col" class="px-6 py-3">ID</th>
                                        <th scope="col" class="px-6 py-3">School Name</th>
                                        {{-- <th scope="col" class="px-6 py-3 w-1/4">Address</th> --}}
                                        <th scope="col" class="px-6 py-3">Location</th>
                                        <th scope="col" class="px-6 py-3">Total of children</th>
                                        <th scope="col" class="px-6 py-3">School Status</th>
                                        <th scope="col" class="px-6 py-3">Required Donation</th>
                                        <th scope="col" class="px-6 py-3 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 ">{{ $item['id'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 ">{{ $item['school_name'] }}</td>
                                            {{-- <td class="whitespace-nowrap px-6 py-4 ">{{$item['address']}}</td> --}}
                                            <td class="whitespace-nowrap px-6 py-4 ">{{ $item['location'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 ">{{ $item['children'] }}</td>
                                            @if ($item['status'] === 'Active')
                                                <td class="whitespace-nowrap px-6 py-4  bg-green-400">
                                                    {{ $item['status'] }}</td>
                                            @else
                                                <td class="whitespace-nowrap px-6 py-4  bg-red-400">
                                                    {{ $item['status'] }}</td>
                                            @endif
                                            <td class="whitespace-nowrap px-6 py-4 ">
                                                @php
                                                    $amount = $item['required_donation'];
                                                    $formattedAmount = number_format($amount, 0, ',', '.');
                                                @endphp

                                                <p class="">Rp {{ $formattedAmount }}</p>

                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <button type="button" class="bg-green-600 text-white px-2 py-2 rounded-lg">
                                                    <a href="/schooledit%{{ $item->id }}">Edit</a> </button>
                                                <form action="{{ route('destroyschool', $item->id) }}" method="POST"
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
