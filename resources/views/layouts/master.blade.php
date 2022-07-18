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
        <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    </head>
    <body class="">
        <div class="app">
            {{-- Header area start --}}
            <header class="header">
                <!-- Top Header Start -->
                <div class="top-header bg-white py-3">
                    <div class="container">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div class="pr-5">
                                    <a href="/">
                                        <img class="w-20" src="{{ asset('frontend/images/logo.iis.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="mt-10 md:block hidden">
                                    <h4 class=" text-xl primary-color font-bold uppercase">Institute Of Information Sciences</h4>
                                </div>
                            </div>
                            <div class="flex top-header-bar">
                                <div class="bar-item"><a href="#">Login</a></div>
                                <div class="bar-item"><a href="#">Help</a></div>
                                <div class="bar-item top-search-box">
                                    <div>
                                    <button>
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </div>
                                    <div class="search-input">
                                        <input type="text" placeholder="Search" class="search_box_input">
                                        <button type="submit">Search</button>
                                    </div>
                                </div>
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
                <div class="hidden lg:block bottom-header py-4">
                    <nav class="container">
                        <ul class="flex text-white main-menu">
                            <li class="logo-main-institute">
                                <a href="/">
                                    <img class="w-20" src="{{ asset('frontend/images/logo.gif') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="px-5 text-lg" href="/">Home</a>
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
                <div class="footer py-10">
                    <div class="container">

                        <div class="lg:flex space-y-10 lg:space-y-0">

                            <div class="single-footer lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-2">Useful Links</h4>
                                <div class="footer-link-header-line"></div>
                                <ul class="leading-loose mt-6" style=" border-right: 1px solid;">
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm" href="/">UGC</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">Ministry of Education</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">Office of Chancellor</a>
                                    </li>
                                    <li class="pb-3 w-full">
                                        <a class=" text-sm  pt-1" href="/">Office of Prime minister</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- single Footer -->
                            <div class="single-footer lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-2">CENTER/CELL</h4>
                                <div class="footer-link-header-line"></div>
                                <ul class="leading-loose mt-6" style=" border-right: 1px solid;">
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm " href="/">Research Cell</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">Cyber Center</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">IQAC</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">ICT Cell</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- single Footer -->
                            <div class="single-footer lg:w-1/4 lg:pr-10 w-full">
                                <h4 class=" text-white text-lg font-medium uppercase mb-2">FACILITIES

                                </h4>
                                <div class="footer-link-header-line"></div>

                                <ul class="leading-loose mt-6">
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm " href="/">Hall of Residence</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">Medical Center</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">Central Library</a>
                                    </li>
                                    <li class="pb-3  w-full">
                                        <a class=" text-sm  pt-1" href="/">Auditorium</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- single Footer -->
                            <div class="single-footer lg:w-1/4  w-full">
                                <div class="flex apply-v-r">
                                    <div><a href="#">Apply</a> </div>
                                    <div><a href="#">Visit</a></div>
                                    <div><a href="#">Requestion Info</a></div>
                                </div>
                                <div style="padding: 25px 5px;">
                                    <ul class="leading-loose link-underline">
                                        <li class="pb-3   w-full">
                                            <a class=" text-sm " href="/">Help</a>
                                        </li>
                                        <li class="pb-3   w-full">
                                            <a class=" text-sm  pt-1" href="/">Privacy & Policy</a>
                                        </li>
                                        <li class="pb-3   w-full">
                                            <a class=" text-sm  pt-1" href="/">Terms & Condition</a>
                                        </li>
                                        <li class="pb-3  w-full">
                                            <a class=" text-sm  pt-1" href="/">Auditorium</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex info-footer">
                            <div class="footer-logo" style="width:15%;">
                                <div class="flex" style="flex-direction: column;align-items: center;">
                                    <a href="/">
                                        <img class="w-20" src="{{ asset('frontend/images/logo.iis.jpg') }}" alt="">
                                    </a>
                                    <div class="flex social-media">
                                        <a href="#" class="pl-0"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#" class="pl-2"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="pl-2"><i class="fa-brands fa-linkedin"></i></a>
                                        <a href="#" class="pl-2"><i class="fa-brands fa-whatsapp"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="footer-logo-divider"  ></div>
                            <div class="flex" style="justify-content: space-between;width:80%">
                                <div class="contact_info">
                                    <h2>Further enquries</h2>
                                    <div class="flex">
                                        <div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div>
                                            <p>Institute Of Information Sciences</p>
                                            <p>NoaKhali-3814</p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div>+880 1534 982 674</div>
                                    </div>
                                    <div class="flex">
                                        <div><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        <div>info@iis.nstu.edu.bd</div>
                                    </div>
                                </div>
                                <div class="footer-m-logo">
                                    <a href="/">
                                        <img class="w-20" src="{{ asset('frontend/images/logo.gif') }}" alt="">

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Bottom Footer Area -->
                <div class="bottom-footer bottom-footer-bg py-6">
                    <div class="container">
                        <div class="md:flex md:justify-between space-y-5 md:space-y-0">
                            <p class=" text-xs text-gray-400">Copyright © 2022 | Institute Of Information Sciences | All Rights Reserved</p>
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
                // search button toogle
                $('.top-search-box').click(function(e){
                    //console.log(e);
                    if( $(e.target).closest(".search-input").length > 0 ) {
                        return false;
                    }
                    if($($('.top-search-box .search-input')[0]).css('display') == 'none'){
                        $('.top-search-box').addClass('active');
                        $('.top-search-box .search-input').css('display','block');
                    }else{
                        $('.top-search-box .search-input').css('display','none');
                        $('.top-search-box').removeClass('active');
                    }

                });
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
