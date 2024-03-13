@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">


        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Children Overview</h1>
            <a href='/inputchildren' class="text-gray-800 px-2 py-2 border-2 bg-blue-500">input Children</a>
            <h2 class="mb-4 text-4xl justify-center tracking-tight font-extrabold text-center text-gray-900 ">Children List
            </h2>
            <section class=""> <!-- Contact Us lg:py-16 -->
                <section class=" text-gray-900">
                    <div class="py-8 ">

                        <div class="flex flex-col">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="inline-block  py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-auto">
                                        <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                            <thead class="border-b font-medium dark:border-neutral-500">
                                                <tr>
                                                    <th scope="col" class="px-6 py-4">ID</th>
                                                    <th scope="col" class="px-6 py-4">Name</th>
                                                    <th scope="col" class="px-6 py-4">school</th>
                                                    <th scope="col" class="px-6 py-4">Location</th>
                                                    <th scope="col" class="px-6 py-4">age</th>
                                                    <th scope="col" class="px-6 py-4">story</th>
                                                    <th scope="col" class="px-6 py-4">Description</th>
                                                    <th scope="col" class="px-6 py-4">Status</th>
                                                    <th scope="col" class="px-6 py-4">Required Donation</th>
                                                    <th scope="col" class="px-24 py-4">Photo</th>
                                                    <th scope="col" class=" px-6 py-4">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['name'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['school'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['location'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['age'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['story'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['description'] }}
                                                        </td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $item['status'] }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4  w-1/2">
                                                            @php
                                                                $amount = $item['required_donation'];
                                                                $formattedAmount = number_format($amount, 0, ',', '.');
                                                            @endphp
                                                            <p class="">Rp {{ $formattedAmount }}</p>
                                                        </td>
                                                        <td class="whitespace-nowrap px-6 py-4">
                                                            @if ($item->images->isNotEmpty())
                                                                <div class="image-container inline-flex mx-4 mb-4">
                                                                    @foreach ($item->images as $image)
                                                                        <img src="{{ asset('storage/children-images/' . $image->filename) }}"
                                                                            alt="{{ $image->filename }}"
                                                                            class="w-10 h-10 object-cover rounded-md">
                                                                        <div class="mx-2"></div>
                                                                    @endforeach
                                                                </div>
                                                            @else
                                                                <p class="text-gray-400 dark:text-gray-600">No images
                                                                    available
                                                                </p>
                                                            @endif
                                                        <td class="whitespace-nowrap px-6 py-4">
                                                            <button type="button"
                                                                class="bg-green-600 text-white px-2 py-2 rounded-lg"> <a
                                                                    href="/childrenedit/{{ $item->id }}/edit">Edit</a>
                                                            </button>
                                                            <form action="/childrendestroy/{{ $item->id }}"
                                                                method="POST" class="inline-block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="bg-red-600 text-white px-2 py-2 rounded-lg"
                                                                    onclick="return confirm('Are You Sure?')"> HAPUS
                                                                </button>
                                                            </form>
                                                        </td>
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
