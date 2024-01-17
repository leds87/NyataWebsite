@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">


        <div class="content">

            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Children Supported Overview</h1>

                <div class="grid grid-cols-4 grid-flow-col gap-2 pb-2">
                    <a href=""><div class="bg-red-700 py-3 rounded-lg text-center text-lg">School Name</div></a>
                    <a href=""><div class="bg-red-700 py-3 rounded-lg text-center text-lg">Location</div></a>
                    <a href=""><div class="bg-red-700 py-3 rounded-lg text-center text-lg">Setting</div></a>
                    <a href=""><div class="bg-red-700 py-3 rounded-lg text-center text-lg">Support More Children</div></a>
                </div>

                <section class="bg-[#f8f5f2] py-4"> <!-- Gallery -->
                    <div class="inline-grid lg:grid-cols-4 gap-10 sm:grid-cols-1 sm:gap-4 ml-5">
                        @foreach ($data as $items) 
                        {{-- ($data as $items)  ->take(6)--}}
                        <div>
                            <div class="sm:ml-1 lg:ml-3 max-w-xl h-auto my-2  border-gray-200  bg-gray-50 rounded-lg shadow-md ">
                                <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                            {{ $items['name'] }}</h5>
                                            <div class="flex">
                                                <div>
                                                    <p class="mb-3 font-normal text-gray-800">Description {{ $items['description'] }}</p>
                                                    <p class="mb-3 font-normal text-gray-800">Story {{ $items['story'] }}</p>
                                                    <p class="mb-3 font-normal text-gray-800">Status {{ $items['status'] }}</p>
                                                </div>
                                                <div class="justify-items-center ml-10 bg-black">
                                                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" srcset="" class="w-20">
                                                </div>
                                            </div>
                                    {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-800  rounded-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300  dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a> --}}
                                </div>
                                <div class="flex justify-center ">
                                    <p class="text-gray-600 dark:text-gray-400 mb-2 mr-3 inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                          </svg>
                                          
                                        {{ $items['school'] }}</p>
                                    <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                                          </svg>
                                        {{ $items['location'] }}
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                          </svg>
                                        {{ $items['age'] }}
                                    </p>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
            
                </section>

            {{-- <div class="flex flex-wrap py-2 ">
                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- User Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">News </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4 ">
                            <span class="mb-3 text-lg font-normal dark:text-gray-100">
                                {{-- <p> *This news is related to the supported children only and admin news*</p>
                                <p> Nyata successfully approached a school in East Java </p>
                                <p> Mina (supported child by user) is getting graduation on 15th July at Aloysius</p>
                                  @foreach ($data->take(6) as $items) 
                                  <div>
                                    <a href="/newsshow/{{$items->id}}" class="flex flex-wrap pb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                          </svg>
                                        {{ $items['title'] }}</a>
                                  </div> 
                                  @endforeach
                            </span>
                        </div>
                    </div>
                </div>

                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">Balance </div>

                        <div class="w-1/4 flex ">
                            <a href='childrenshow' class="text-white text-md ">Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Balance: 600K</p>
                                <p>Last Month Support = 200k</p>
                                <p>Expected Support Next Month = 250k (*50k per child*)</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="flex flex-wrap py-2">
                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Money Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> Profile </div>
                        <div class="w-1/4 flex ">
                            <a href='profile' class="text-white text-md ">Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                            <p>Name      : {{auth()->user()->name}} </p>
                            <p>Address   :{{auth()->user()->address}}  </p>
                            <p>Contact No: {{auth()->user()->phone}} </p>
                            <p>Email     : {{auth()->user()->email}} </p>
                            </span>
                        </div>
                    </div>
                    
                </div> --}}

                {{-- <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> Supported Kids </div>

                        <div class="w-1/4 flex ">
                            <a href='schoolshow' class="text-white text-md ">Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Under Support Child : </p>
                                 {{ $activechildren }} 
                                <p>Graduated Child : </p>
                            </span>
                        </div>
                    </div>
                </div> --}}
            @endsection



            

         