@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #374151;
    }
    .select2-container--default .select2-results__option {
        color: #374151;
    }
    .select2-container--default .select2-results__option--highlighted {
        color: #1f2937;
    }
    .select2-search__field .select2-search--dropdown {
        color: #1f2937;
    }
    .select2-container--default .select2-search--dropdown .select2-search__field {
        color: #000;
    }
</style>

@section('page-content')
    <div class="bg-white py-20">


        <!-- TITLE  -->
        <div class="content">
            <h1 class="lg:text-2xl text-center text-white bg-[#ff0505] px-2 rounded-xl py-3 font-bold mb-4 mx-auto md:text-sm">
                Notification Input</h1>


            <!-- FORM  -->
            <form action="/inputnotification" method="POST" class="w-full max-w-lg py-5 mx-auto">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            From
                        </label>
                        <select name="from" id="from"
                            class="text-gray-400 font-normal capitalize focus:text-gray-700 w-full px-2 py-2 bg-gray-200 focus:bg-white border-none">
                            {{-- <option value="{{$user}}">Administrator</option> --}}
                            <option value="{{ auth()->user()->name }} [Administrator]">{{ auth()->user()->name }}
                                [Administrator]</option>
                        </select>
                        {{-- <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="from" name="from" type="text" placeholder="Admin"> --}}
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                    <div class="w-1/2 px-3">
                        <label id="to_label" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            to user_name
                        </label>
                        {{-- <select name="to" id="to"
                            class="text-gray-400 font-normal focus:text-gray-700 w-full px-2 py-2 bg-gray-200 focus:bg-white border-none">
                             @foreach ($datauser as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                            <option value="">All</option> 
                        </select> --}}
                        <select name="to" id="to"
                            class="text-gray-400 font-normal focus:text-gray-700 w-full px-2 py-2 bg-gray-200 focus:bg-white border-none">
                        </select>
                        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                $('#to').select2({
                                    placeholder:'Select User',
                                    ajax: {
                                        url:"{{route('touser')}}",
                                        processResults: function({data}){
                                            return {
                                                results: $.map(data, function(item){
                                                    return{
                                                        id: item.id,
                                                        text: item.name
                                                    }
                                                })
                                            }
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Title
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="title" name="title" type="text" required placeholder="Support 300 New Students">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            date
                        </label>
                        <input datepicker datepicker-format="yyyy-mm-dd" type="text" id="date" name="date"
                            autocomplete="off"
                            class="bg-gray-200 border focus:bg-white border-gray-300 mb-4 p-3 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date" required>
                    </div>
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Description
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="description" name="description" type="text" required
                            placeholder="This requires economy attention...">
                    </div>
                    <div class="mx-auto py-5">
                        <button type="submit"
                            class="py-2 bg-red px-4 mx-auto my-4 text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
