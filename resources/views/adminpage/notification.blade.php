@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Notification Overview</h1>
                <a href='inputnotification' class="text-gray-800 px-2 py-2 border-2 bg-blue-500">input notification</a>
                <section class=""> <!-- Contact Us-->
                    <section class=" text-gray-900">
                        <div class="py-8 lg:py-16 mx-auto max-w-screen-md">
                            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Notification List</h2>
                            <div class="flex flex-col">
                                <div class="sm:-mx-6 lg:-mx-8">
                                  <div class="inline-block  py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                      <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                          <tr>
                                            <th scope="col" class="px-6 py-4">date</th>
                                            <th scope="col" class="px-6 py-4">ID</th>
                                            <th scope="col" class="px-6 py-4">from</th>
                                            <th scope="col" class="px-6 py-4">to</th>
                                            <th scope="col" class="px-6 py-4">title</th>
                                            <th scope="col" class="px-6 py-4">description</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($datanotification as $item)
                                          <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4">{{$item['date']}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$item['id']}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$item['from']}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$item['to']}}</td>
                                            {{-- <td class="whitespace-nowrap px-6 py-4">                                              
                                              @php
                                              $item2 = $datauser->get($item['to']);
                                              echo($item2);
                                              $item3 = $item2 ? $item2->only(['id', 'name']) : null;
                                          @endphp
                                                @if ($item3) {{ $item2->name }}
                                            @else
                                                Everyone
                                            @endif </td> --}}
                                            <td class="whitespace-nowrap px-6 py-4">{{$item['title']}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$item['description']}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                              {{-- <button type="button" class="bg-green-600 text-white px-2 py-2 rounded-lg"> <a href="/notificationedit%{{$item->id}}">Edit</a> </button> --}}
                                                <form action="{{route('destroynotification',$item->id)}}" method="POST" class="inline-block">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="bg-red-600 text-white px-2 py-2 rounded-lg" onclick="return confirm('Are You Sure?')"> HAPUS                            </button> 
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
