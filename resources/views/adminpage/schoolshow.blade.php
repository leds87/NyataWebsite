@extends('layout.default')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <style>
            body {
                margin: 0;
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                display: block;
            }

            .sidebar {
                width: 250px;
                background-color: red;
                color: #fff;
                padding-top: 20px;
                height: 300px;
                position: fixed;
                top: 200px;
                left: 50px;
                transition: width 0.3s;
                border: rounded;
                text-align: center;
                border-style: solid;

            }

            .content {
                margin-left: 400px;
                padding: 20px;
            }

            .sidebar a {
                padding: 15px;
                text-decoration: none;
                color: #fff;
                display: block;
                transition: background-color 0.3s;
            }

            .sidebar a:hover {
                background-color: #555;
            }

            /* Adjustments for small screens */
            @media (max-width: 768px) {
                .sidebar {
                    width: 0;
                    display: none;
                }

                .content {
                    margin-left: 0;
                }
            }
        </style>

        <div class="sidebar">
          <a href='adminpage' class="p-4 block hover:bg-gray-600">Dashboard</a>
          <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
          <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
          <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
          <a href='log' class="p-4 block hover:bg-gray-600">Log</a>
          <a href='adminshow' class="p-4 block hover:bg-gray-600">Admin</a>
        </div>

        <div class="content">
            <h1 class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">School Overview</h1>
            <a href='inputschool' class="text-gray-800 px-2 py-2 border-2 bg-blue-500">input School</a>
            <section class=""> <!-- Contact Us-->
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-lg">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">School List</h2>
            
                        <div class="flex flex-col">
                            <div class="sm:-mx-6 lg:-mx-8">
                              <div class="inline-block  py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                  <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                      <tr>
                                        <th scope="col" class="px-6 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">School Name</th>
                                        <th scope="col" class="px-6 py-4">Address</th>
                                        <th scope="col" class="px-6 py-4">Location</th>
                                        <th scope="col" class="px-6 py-4">Total of children</th>
                                        <th scope="col" class="px-6 py-4">School Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($data as $item)
                                      <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4">{{$item['id']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$item['school_name']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$item['address']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$item['location']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$item['children']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$item['status']}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                          <img src="{{asset('storage/post-images/'.$item->image)}}" alt="" srcset="" class="w-20"></td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                          <button type="button" class="bg-green-600 text-white px-2 py-2 rounded-lg"> <a href="/schooledit/{{$item->id}}/edit">Edit</a> </button>
                                            <form action="{{route('destroyschool',$item->id)}}" method="POST" class="inline-block">
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
