@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white py-20">

        <div class="content">
            <!-- TITLE -->
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Children Edit</h1>

            <!-- FORM  -->
            <form action="/childrenedit/{{ $data->id }}" method="POST" class="w-full max-w-lg py-5 mx-auto"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label class="relative inline-flex items-center cursor-pointer pb-4">
                    <input type="checkbox" name="sendnotif" value="" class="sr-only peer" id="sendnotif">
                    <div
                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                    </div>
                    <span class="ms-3 text-sm  text-gray-900 ">Send Notification to Kakak Asuh</span>
                </label>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="name" name="name" type="text" placeholder="Jane" value="{{ $data->name }}">

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        {{-- <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            school
                        </label> --}}
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            School
                            <span>Current : {{ $data->school }}</span>
                        </label>
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="school" name="school">
                            <option value="{{ $data->school }}">{{ $data->school }}</option>
                            <option value="" class="font-light italic">empty</option>
                            @foreach ($dataschool as $du)
                                <option value="{{ $du->school_name }}">{{ $du->school_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            location
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="location" name="location" type="text" value="{{ $data->location }}">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            age
                        </label>
                        <input
                            class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="age" name="age"type="number" value="{{ $data->age }}" maxlength="2">
                        {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Story
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="story" name="story" type="text" value="{{ $data->story }}">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="projectdesc"
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                    <textarea id="description" name="description"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            {{ $data->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Status
                        <span>Current : {{ $data->status }}</span>
                    </label>
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="status" name="status">
                        <option value="Active">Active</option>
                        <option value="Educated">Educated</option>
                        <option value="Success">Success</option>
                        {{-- <option>Educated</option>
                            <option>Success</option> --}}
                    </select>
                    {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"> </div> --}}
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative">
                        <div> <!-- Upload Image -->
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="Images">Upload file</label>
                            <input type="hidden" name="oldImages" value="{{ $data->images }}">
                            <input name="Images[]" id="Images[]" type="file" multiple
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400">
                        </div>
                    </div>
                    <div class="relative">
                        <div> <!-- Current Image -->
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="Images">Current Image
                                file</label>
                            @if ($data->images->isNotEmpty())
                                <div class="image-container inline-flex mx-4 mb-4">
                                    @foreach ($data->images as $image)
                                        <img src="{{ asset('storage/children-images/' . $image->filename) }}"
                                            alt="{{ $image->filename }}" class="w-24  object-cover rounded-md">
                                        <div class="mx-2"></div>
                                    @endforeach
                                </div>

                            @else
                                <p class="text-gray-400 dark:text-gray-600">No images available
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- <div class="relative">
                        <label for="projectdesc" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">support_by</label>
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="support_by" name="support_by" >
                            <option value=""></option>
                            @foreach ($datauser as $du)
                            <option value="{{$du->id}}">{{$du->name}}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div> --}}

                <div class="flex">
                    <button type="submit"
                        class="py-2 px-10 mx-auto bg-slate-300 my-4 text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Submit</button>
                </div>
            </form>

             @if ($data->images->isNotEmpty())
            <div class="mx-auto flex">
                <form id="deleteimage" action="{{ route('deletechildrenphoto', [$data->id]) }}" method="POST"
                    class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button id="deleteimage" name="deleteimage" type="submit"
                        class="bg-red-600 text-sm text-white px-2 py-2 rounded-lg mx-auto"
                        onclick="return confirm('Are You Sure?')">
                        Delete Children Image
                    </button>
                </form>
            </div>
            @else
            @endif
        </div>
    </div>
@endsection
