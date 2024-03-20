@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">


            <!-- TITLE  -->
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                News Overview</h1>
            <a href='inputnews' class="text-gray-800 px-2 py-2 border-2 bg-blue-500">input news</a>


            <section class=""> <!--TABLE-->
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-2xl">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">News List</h2>

                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr class="bg-gray-100">
                                        <th scope="col" class="px-6 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">Title</th>
                                        <th scope="col" class="px-6 py-4">date</th>
                                        <th scope="col" class="px-6 py-4">description</th>
                                        <th scope="col" class="px-6 py-4">category</th>
                                        <th scope="col" class="px-6 py-4">children_id</th>
                                        <th scope="col" class="px-6 py-4">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datanews as $item)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['title'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['date'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['description'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['category'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['children_id'] }}</td>
                                            {{-- <td class="whitespace-nowrap px-6 py-4">
                                          @php
                                          $item2 = $datachildren->get($item['id']);
                                          $item2 = $item2 ? $item2->only(['children_id', 'name']) : null;
                                      @endphp
                                            @if ($item2) {{ $item2->name }}
                                        @else
                                            Not found
                                        @endif 
                                          </td> --}}
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <button type="button" class="bg-green-600 text-white px-2 py-2 rounded-lg">
                                                    <a href="/newsedit/{{ $item->id }}/edit">Edit</a> </button>
                                                <form action="{{ route('destroynews', $item->id) }}" method="POST"
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
