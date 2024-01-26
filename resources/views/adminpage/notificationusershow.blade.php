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
                            @foreach($datanotification as $item)
                            <div id="alert-additional-content-1" class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                                <div class="flex items-center">
                                  <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                  </svg>
                                  <span class="sr-only">Info</span>
                                  <h3 class="text-lg font-medium">This is a info alert</h3>
                                </div>
                                <div class="mt-2 mb-4 text-sm">
                                  More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                </div>
                                <div class="flex">
                                  <button type="button" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                      <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                    </svg>
                                    View more
                                  </button>
                                  <button type="button" class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                                    Dismiss
                                  </button>
                                </div>
                              </div>


                            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                              </svg>
                              <span class="sr-only">Info</span>
                              <div>
                                <span class="font-medium">Info alert! {{$item['date']}}</span> 
                                <p>Change a few things up and try submitting again.</p>
                                  <p class="">FROM :{{$item['from']}}</p>
                                  <p class="">TO : {{$item['to']}}</p>
                                  <p class="">TITLE :{{$item['title']}}</p>
                                  <p class="">DESCRIPTION : {{$item['description']}}</p>
                              </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </section>
                @foreach (Auth::user()->unreadNotifications as $notification)
                <div>{{ $notification->data['message'] }}</div>
                @endforeach
            
                <button id="showNotifications" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Show Notifications
                </button>
                
                <div id="notificationContainer" class="hidden">
                    <!-- Notifications will be displayed here -->
                </div>
                <script>
                    document.getElementById('showNotifications').addEventListener('click', function () {
                        fetch('/notifications')
                            .then(response => response.json())
                            .then(data => {
                                const notificationContainer = document.getElementById('notificationContainer');
                                notificationContainer.innerHTML = ''; // Clear existing notifications
                
                                if (data.notifications.length > 0) {
                                    data.notifications.forEach(notification => {
                                        const notificationDiv = document.createElement('div');
                                        notificationDiv.innerText = notification.data.message; // Adjust based on your notification structure
                                        notificationContainer.appendChild(notificationDiv);
                                    });
                                } else {
                                    notificationContainer.innerHTML = 'No new notifications.';
                                }
                
                                notificationContainer.classList.toggle('hidden'); // Show/hide notifications
                            })
                            .catch(error => console.error('Error fetching notifications:', error));
                    });
                </script>
        </div>
    </div>


    
    
@endsection
