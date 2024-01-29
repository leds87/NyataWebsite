@extends('layout.default')
{{-- @extends('adminpage.layoutadmin') --}}
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white py-20">


        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Children Edit</h1>
                
<label class="relative inline-flex items-center cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer" checked id="myCheckbox">
    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Checked toggle</span>
  </label>

  <script>
    const checkbox = document.getElementById('myCheckbox');
  
    checkbox.addEventListener('change', function() {
      if (this.checked) {
        console.log('Checkbox is checked');
        // Perform actions when checkbox is checked
      } else {
        console.log('Checkbox is unchecked');
        // Perform actions when checkbox is unchecked
      }
    });
  </script>

  
            <form action="/childrenedit/{{ $data->id }}" method="POST" class="w-full max-w-lg py-5 mx-auto">
                @csrf
                @method("PUT")
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="name" name="name" type="text" placeholder="Jane" value="{{$data->name}}">

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            school
                        </label>
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="school" name="school" place >
                            {{-- <option value="{{$data->school}}">{{$data->school}}</option> --}}
                            @foreach($dataschool as $du)
                            <option value="{{$du->school_name}}">{{$du->school_name}}</option>
                            @endforeach
                            <option value="">empty</option>
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
                            id="location" name="location" type="text" value="{{$data->location}}">
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
                            id="age" name="age"type="number" value="{{$data->age}}" maxlength="2">
                        {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Story
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="story" name="story" type="text" value="{{$data->story}}">
                    </div>
                </div>
                    <div class="w-full flex flex-wrap px-3 -mx-3 mb-6">
                        <label for="projectdesc" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                        <textarea id="description" name="description" 
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            {{$data->description}}</textarea>
                    </div>
                    <div class="relative">
                        <label for="projectdesc" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Status</label>
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="status" name="status" >
                            <option value="Active" {{ $data == 'Active' ? 'selected' : '' }}>Active</option>
                            <option value="Educated" {{ $data == 'Educated' ? 'selected' : '' }}>Educated</option>
                            <option value="Success" {{ $data == 'Success' ? 'selected' : '' }}>Success</option>
                            {{-- <option>Educated</option>
                            <option>Success</option> --}}
                        </select>
                        {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"> </div> --}}
                    </div>
                    {{-- <div class="relative">
                        <label for="projectdesc" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">support_by</label>
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="support_by" name="support_by" >
                            <option value=""></option>
                            @foreach($datauser as $du)
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
                        class="py-2 px-4 mx-auto my-4 text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Submit</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
@endsection
