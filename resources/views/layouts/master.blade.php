<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NSTU-IIS</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/js/slick/slick.css') }}"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="">
        <div class="app">
            {{-- Header area start --}}
            <header class="header">
                <!-- Top Header Start -->
                <div class="top-header bg-white py-2">
                    <div class="container">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div class="pr-5">
                                    <a href="/">
                                        <img class="w-20" src="{{ asset('frontend/images/logo.gif') }}" alt="">
                                    </a>
                                </div>
                                <div class="mt-10 md:block hidden">
                                    <h4 class=" text-xl primary-color font-bold">Noakhali Science and Technology University</h4>
                                    <h2 class=" text-sm logo-red-color font-bold">Department of Information Sciences and Library Management</h2>
                                </div>
                            </div>
                            <div class="lg:flex hidden items-center">
                                <input class="border-2 border-solid border-gray-500 py-5 w-full h-10 focus:outline-none px-5 rounded-md mr-5" type="search" name="" id="" placeholder="Search">
                                <ul class="flex justify-between">
                                    <li>
                                        <a class=" text-sm primary-color font-bold border-r-2 border-blue-900 pr-4" href="/">Login</a>
                                    </li>
                                    <li>
                                        <a class=" text-sm primary-color font-bold pl-4" href="/">Help</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lg:hidden text-right">
                                <button class="navbar-burger flex items-center text-black p-3">
                                    <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Mobile menu</title>
                                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navbar Area -->
                <div class="hidden lg:block bottom-header primary-bg py-4">
                    <nav class="container">
                        <ul class="flex text-white">
                            <li>
                                <a class="px-5 text-lg" href="/home">Home</a>
                            </li>
                            <li>
                                <a class="px-5 text-lg" href="/about-us">About Us</a>
                            </li>
                            <li class="hoverable">
                                <a class="px-5 text-lg" href="/service">Services </a>
                                {{-- mega menu --}}
                                <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                                    <div class="container mx-auto w-full flex flex-wrap justify-between">
                                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3 text-gray-700">
                                        <div class="flex items-center">
                                          <h3 class="font-bold text-xl text-gray-700 text-bold mb-2">Academic Programs</h3>
                                        </div>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Colleges & Schools</a>
                                        </li>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Programs of Study</a>
                                        </li>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Honors Programs</a>
                                        </li>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Illinois Online</a>
                                        </li>

                                      </ul>
                                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3 text-gray-700">
                                          <div class="flex items-center">
                                            <h3 class="font-bold text-xl text-gray-700 text-bold mb-2">Classes & Registration</h3>
                                          </div>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Course Explorer</a>
                                          </li>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Register for Class</a>
                                          </li>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Academic Calendar</a>
                                          </li>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Transcripts</a>
                                          </li>
                                      </ul>
                                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3 text-gray-700">
                                        <div class="flex items-center">
                                            <h3 class="font-bold text-xl text-gray-700 text-bold mb-2">Tatooine</h3>
                                        </div>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Colleges & Schools</a>
                                        </li>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Programs of Study</a>
                                        </li>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Honors Programs</a>
                                        </li>
                                        <li class="py-2 text-sm font-normal text-gray-400">
                                            <a href="">Illinois Online</a>
                                        </li>
                                      </ul>
                                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 pb-6 pt-6 lg:pt-3 text-gray-700">
                                          <div class="flex items-center">
                                            <h3 class="font-bold text-xl text-gray-700 text-bold mb-2">Classes & Registration</h3>
                                          </div>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Course Explorer</a>
                                          </li>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Register for Class</a>
                                          </li>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Academic Calendar</a>
                                          </li>
                                          <li class="py-2 text-sm font-normal text-gray-400">
                                              <a href="">Transcripts</a>
                                          </li>
                                      </ul>
                                    </div>
                                    <div class="related-link py-5">
                                        <div class="container">
                                            <div class="releated-link-menu">
                                                <ul class="flex space-x-5">
                                                    <h4 class=" text-gray-400 font-semibold text-lg">Related Link</h4>
                                                    <li>
                                                        <a class=" text-gray-700 bg-gray-100 px-5 py-3 rounded-lg" href="">RESEARCH CALENDAR</a>
                                                    </li>
                                                    <li>
                                                        <a class=" text-gray-700 bg-gray-100 px-5 py-3 rounded-lg" href="">STRATEGIC PLAN</a>
                                                    </li>
                                                    <li>
                                                        <a class=" text-gray-700 bg-gray-100 px-5 py-3 rounded-lg" href="">RESEARCH PARK</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="px-5 text-lg" href="/people">People</a>
                            </li>
                            <li>
                                <a class="px-5 text-lg" href="/online-facilities">Online Facilities</a>
                            </li>
                            <li>
                                <a class="px-5 text-lg" href="/alumni">Alumni</a>
                            </li>
                            <li>
                                <a class="px-5 text-lg" href="/research">Research</a>
                            </li>
                            <li>
                                <a class="px-5 text-lg" href="/contact-us">Contuct Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>


                {{-- mobile menu --}}
                <div class="navbar-menu relative z-50 hidden">
                    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                    <nav
                        class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                        <div class="flex items-center justify-between mb-8">
                            {{-- logo area --}}
                            <div class="uppercase">
                                <img class="w-20" src="{{ asset('frontend/images/logo.gif') }}" alt="">
                            </div>
                            <button class="navbar-close">
                                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <ul>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">About Us</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">Services</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">People</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">Online Facilities</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">Alumni</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">Research</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">News & Event</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-sky-400 rounded"
                                        href="/">Contuct Us</a>
                                </li>


                            </ul>
                        </div>
                        <div class="mt-auto">

                            <p class="my-4 text-xs text-center text-gray-400">
                                <span>Copyright &copy; {{ date('Y') }} | Noakhali Science and Technology University | All Rights Reserved</span>
                            </p>
                        </div>
                    </nav>
                </div>
            </header>
            {{-- Header area end --}}


            @yield('content')

            {{-- Footer area start --}}
            <footer>
                <!-- Footer Top Area -->
                <div class="footer footer-bg py-10">
                    <div class="container">
                        <div class="lg:flex space-y-10 lg:space-y-0">
                            <!-- single Footer -->
                            <div class="single-footer lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-8">Useful Links</h4>
                                <ul class="leading-loose">
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400" href="/">UGC</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">Ministry of Education</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">Office of Chancellor</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">Office of Prime minister</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- single Footer -->
                            <div class="single-footer lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-8">CENTER/CELL</h4>
                                <ul class="leading-loose">
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400" href="/">Research Cell</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">Cyber Center</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">IQAC</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">ICT Cell</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- single Footer -->
                            <div class="single-footer lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-8">FACILITIES</h4>
                                <ul class="leading-loose">
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400" href="/">Hall of Residence</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">Medical Center</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">Central Library</a>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class=" text-sm text-gray-400 pt-1" href="/">Auditorium</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- single Footer -->
                            <div class="single-footer lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-8">CONTACT & MAILING ADDRESS</h4>
                                <ul class="leading-loose pt-3">
                                    <li class="pb-2 border-b border-gray-500 border-dotted w-full">
                                        <p class="text-sm text-gray-400 flex">
                                            <span class="mr-2 text-base">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                </svg>
                                            </span>
                                            Postal Code: 3814
                                        </p>
                                    </li>
                                    <li class="pb-2 border-b border-gray-500 border-dotted w-full">
                                        <p class="text-sm text-gray-400 py-2 flex">
                                            <span class="mr-2 text-base">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                            </span>
                                            Phone: 02334496522
                                        </p>
                                    </li>
                                    <li class="pb-2 border-b border-gray-500 border-dotted w-full">
                                        <p class="text-sm text-gray-400 py-1 flex">
                                            <span class="mr-2 text-base">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                </svg>
                                            </span>
                                            Email: registrar@office.nstu.edu.bd
                                        </p>
                                    </li>
                                    <li class="pb-3 border-b border-gray-500 border-dotted w-full">
                                        <a class="text-sm text-gray-400 py-1 flex" href="/">
                                            <span class="mr-2 text-base flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                </svg>
                                            </span>
                                            NSTU Diary Web Version
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Footer Area -->
                <div class="bottom-footer bottom-footer-bg py-6">
                    <div class="container">
                        <div class="md:flex md:justify-between space-y-5 md:space-y-0">
                            <p class=" text-xs text-gray-400">Copyright © 2022 | Noakhali Science and Technology University | All Rights Reserved</p>
                            <ul class="flex md:justify-between">
                                <li>
                                    <a class=" text-xs text-gray-400 font-bold border-r-2 border-gray-400 pr-4" href="/">Mission & Vision</a>
                                </li>
                                <li>
                                    <a class=" text-xs text-gray-400 font-bold pl-4" href="/">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            {{-- Footer area end --}}

        </div>

        {{-- jquery file --}}
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="{{ asset('frontend/js/slick/slick.min.js') }}"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // open
                const burger = document.querySelectorAll('.navbar-burger');
                const menu = document.querySelectorAll('.navbar-menu');

                if (burger.length && menu.length) {
                    for (var i = 0; i < burger.length; i++) {
                        burger[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                // close
                const close = document.querySelectorAll('.navbar-close');
                const backdrop = document.querySelectorAll('.navbar-backdrop');

                if (close.length) {
                    for (var i = 0; i < close.length; i++) {
                        close[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                if (backdrop.length) {
                    for (var i = 0; i < backdrop.length; i++) {
                        backdrop[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }
            });
        </script>

        <script>
            $(document).ready(function() {

                $('#calendar').fullCalendar({
                locale: 'bd',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2022-06-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                    title: 'All Day Event',
                    start: '2022-06-01'
                    },
                    {
                    title: 'Long Event',
                    start: '2022-03-07',
                    end: '2022-06-10'
                    },
                    {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2022-06-09T16:00:00'
                    },
                    {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2022-06-16T16:00:00'
                    },
                    {
                    title: 'Conference',
                    start: '2022-06-11',
                    end: '2022-06-13'
                    },
                    {
                    title: 'Meeting',
                    start: '2022-06-12T10:30:00',
                    end: '2022-06-12T12:30:00'
                    },
                    {
                    title: 'Lunch',
                    start: '2022-06-12T12:00:00'
                    },
                    {
                    title: 'Meeting',
                    start: '2022-06-12T14:30:00'
                    },
                    {
                    title: 'Happy Hour',
                    start: '2022-06-12T17:30:00'
                    },
                    {
                    title: 'Dinner',
                    start: '2022-06-12T20:00:00'
                    },
                    {
                    title: 'Birthday Party',
                    start: '2022-06-13T07:00:00'
                    },
                    {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2022-06-28'
                    }
                ]
                });

                });
        </script>

    </body>
</html>
