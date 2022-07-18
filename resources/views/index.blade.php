@extends('layouts.master')

@section('content')
    {{-- Slider area start --}}
    <div class="slider-section lg:flex pb-0 border-t border-gray-500">
        <!-- welcome slider -->
        <div class="lg:w-full w-full">
            <div class="slider-area">
                <!-- single slider -->
                <div class="single-slider relative">
                    <div class="custom-slider">
                        <div class="slider-bg h-full" style="background-image: url('{{ asset('frontend/images/slider-1.jpg') }}');">
                            <div class="bg-overlay absolute bottom-0 md:w-2/5 w-full h-full top-0 left-0 bg-black bg-opacity-50 p-10"></div>
                            <div class="slider-content">
                                <div class="slider-text z-10 relative pt-10 md:w-1/3">
                                    <h4 class=" md:text-3xl text-xl font-bold text-white border-b border-gray-200 pb-2 mb-5">Institute Of Information Sciences</h4>
                                    <p class="text-white text-lg">Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- single slider -->
                <div class="single-slider relative">
                    <div class="custom-slider">
                        <div class="slider-bg h-full" style="background-image: url('{{ asset('frontend/images/slider-2.jpg') }}');">
                            <div class="bg-overlay absolute bottom-0 md:w-2/5 w-full h-full top-0 left-0 bg-black bg-opacity-50 p-10"></div>
                            <div class="slider-content">
                                <div class="slider-text z-10 relative pt-10 md:w-1/3">
                                    <h4 class=" md:text-3xl text-xl font-bold text-white border-b border-gray-200 pb-2 mb-5">Institute Of Information Sciences</h4>
                                    <p class="text-white text-lg">Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- single slider -->
                <div class="single-slider relative">
                    <div class="custom-slider">
                        <div class="slider-bg h-full" style="background-image: url('{{ asset('frontend/images/slider-3.jpg') }}');">
                            <div class="bg-overlay absolute bottom-0 md:w-2/5 w-full h-full top-0 left-0 bg-black bg-opacity-50 p-10"></div>
                            <div class="slider-content">
                                <div class="slider-text z-10 relative pt-10 md:w-1/3">
                                    <h4 class=" md:text-3xl text-xl font-bold text-white border-b border-gray-200 pb-2 mb-5">Institute Of Information Sciences</h4>
                                    <p class="text-white text-lg">Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Slider area end --}}

    {{-- freatured section start --}}
    <div class="freatured-section py-10" style="background:#e9e9e9">
        <div class="container">
            <div class="lg:grid lg:grid-cols-2 lg:gap-10 lg:space-y-0 space-y-5">
                {{-- vedio freatured section start --}}
                <div class="freatured-video-section">
                    {{-- section title --}}
                    <div class="featured-section-title py-5">
                        <h2 class="primary-color font-bold uppercase text-2xl relative">Featured Video</h2>
                    </div>
                    <div class="freatured-video">
                        <iframe width="570" height="315" src="https://www.youtube.com/embed/GyUniAl9Aig" title="Dr. Muhammad Abdul-Mageed - CRC in Natural Language Processing and Machine Learning" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                {{-- vedio freatured section end --}}

                {{-- freatured news section start --}}
                <div class="freatured-news-section">
                    {{-- section title --}}
                    <div class="featured-section-title py-5">
                        <h2 class="primary-color font-bold uppercase text-2xl relative">News</h2>
                    </div>
                    {{-- section content start --}}
                    <div class="freatured-news">
                        {{-- single news section --}}
                        <div class="single-news flex space-x-5 mb-5">
                            <div class="news-img">
                                <img class=" h-32 w-auto" src="{{ asset('frontend/images/research-1.jpg') }}" alt="">
                            </div>
                            <div class="news-content">
                                <h4 class="primary-color font-bold text-sm mb-2">
                                    <a href="">Research that changes lives</a>
                                </h4>
                                <p class=" text-gray-400 text-sm font-normal mb-2">Our four flagship research institutes are taking an interdisciplinary approach to the biggest challenges facing the planet.</p>
                                <a class="primary-color font-bold text-xs hover:underline" href="">Read More</a>
                            </div>
                        </div>

                        {{-- single news section --}}
                        <div class="single-news flex space-x-5 mb-5">
                            <div class="news-img">
                                <img class=" h-32 w-auto" src="{{ asset('frontend/images/research-2.jpg') }}" alt="">
                            </div>
                            <div class="news-content">
                                <h4 class="primary-color font-bold text-sm mb-2">
                                    <a href="">Research that changes lives</a>
                                </h4>
                                <p class=" text-gray-400 text-sm font-normal mb-2">Our four flagship research institutes are taking an interdisciplinary approach to the biggest challenges facing the planet.</p>
                                <a class="primary-color font-bold text-xs hover:underline" href="">Read More</a>
                            </div>
                        </div>

                        {{-- single news section --}}
                        <div class="single-news flex space-x-5 mb-5">
                            <div class="news-img">
                                <img class=" h-32 w-auto" src="{{ asset('frontend/images/research-3.jpg') }}" alt="">
                            </div>
                            <div class="news-content">
                                <h4 class="primary-color font-bold text-sm mb-2">
                                    <a href="">Research that changes lives</a>
                                </h4>
                                <p class=" text-gray-400 text-sm font-normal mb-2">Our four flagship research institutes are taking an interdisciplinary approach to the biggest challenges facing the planet.</p>
                                <a class="primary-color font-bold text-xs hover:underline" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    {{-- section content end --}}
                </div>
                {{-- freatured news section end --}}
            </div>
        </div>
    </div>
    {{-- freatured section end --}}

    {{-- notice section start --}}
    <div class="notice-section py-10" style="background: #b2b7b0eb;">
        <div class="container">
            <div class="lg:grid lg:grid-cols-2 lg:gap-10 lg:space-y-0 space-y-5">
                {{-- notice content start --}}
                <div class="notice-content-section">
                    {{-- section title --}}
                    <div class="featured-section-title py-5">
                        <h2 class="primary-color font-bold uppercase text-2xl relative">Notices</h2>
                    </div>
                    <div class="notice-content">
                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date bg-red-500 text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">27 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">SEAT PLAN OF MIDTERM EXAM SUMMER 2021-2022 DAY 3 (June 28, 2022, Tuesday)</a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date primary-bg text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">26 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">Summer 2021-22 Mid Term Set B Exam Notice for the Courses Offered by Department of EEE, CoE and ...</a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date bg-red-500 text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">25 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">Summer 2021-22 Mid Term Set B Exam Notice for CS Department</a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date primary-bg text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">24 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">MEEE & MTEL Mid-Term Exam Schedules of Summer 2021-22
                                </a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date bg-red-500 text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">21 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">Fund Raising Campaign of AIUB Shomoy Club for Flood victims</a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date bg-red-500 text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">20 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">SEAT PLAN OF MIDTERM EXAM SUMMER 2021-2022 DAY 3 (June 28, 2022, Tuesday)</a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date primary-bg text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">19 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">Summer 2021-22 Mid Term Set B Exam Notice for the Courses Offered by Department of EEE, CoE and ...</a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date bg-red-500 text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">18 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">Summer 2021-22 Mid Term Set B Exam Notice for CS Department</a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date primary-bg text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">17 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">MEEE & MTEL Mid-Term Exam Schedules of Summer 2021-22
                                </a>
                            </div>
                        </div>

                        {{-- single notice content --}}
                        <div class="single-notice flex px-2 py-3 bg-white shadow-lg rounded-lg space-x-5 mb-2">
                            <div class="notice-date bg-red-500 text-white text-center rounded-md">
                                <span class=" text-sm font-semibold">16 Jun</span>
                            </div>
                            <div class="flex items-center">
                                <a class=" text-base font-normal hover:underline" href="">Fund Raising Campaign of AIUB Shomoy Club for Flood victims</a>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- notice content end --}}

                {{-- event calendar section start --}}
                <div class="event-calendar-section">
                    {{-- section title --}}
                    <div class="featured-section-title py-5">
                        <h2 class="primary-color font-bold uppercase text-2xl relative">Academic Calendar</h2>
                    </div>
                    {{-- event calender content --}}
                    <div class="event-calendar bg-white p-2 rounded-md">
                        <div id="calendar"></div>
                    </div>
                </div>
                {{-- event calendar section end --}}
            </div>
        </div>
    </div>
    {{-- notice section end --}}

    {{-- Research section start --}}
    <div class="research-section py-10" style="background: #538240fc;">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">RESEARCH</h2>
            </div>
            {{-- research content section start --}}
            <div class="research-content lg:grid lg:grid-cols-3 lg:gap-5 lg:space-y-0 space-y-10">
                {{-- single content section --}}
                <div class="single-top-research col-span-3">
                    <div class="lg:flex">
                        <div class="lg:w-2/3">
                            <img class="w-full h-auto" src="{{ asset('frontend/images/research-top.jpg') }}" alt="">
                        </div>
                        <div class="lg:w-2/6 bg-blue-900 p-10 text-white">
                            <h4 class=" font-bold text-xl mb-2">The Head Up Collar</h4>
                            <p class=" text-base font-light mb-5">Explore how our researchers are transforming the lives of their motor neurone disease patients by giving them some independence back.</p>
                            <a class=" font-bold text-lg underline" href="">A patient-centred approach to developing a new collar</a>
                        </div>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="single-research bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-1.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Research that changes lives</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Our four flagship research institutes are taking an interdisciplinary approach to the biggest challenges facing the planet.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Our flagship institutes
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="single-research bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-2.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Our impact</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Our researchers are making life-changing discoveries and solving problems that have a global impact.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Our approach
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="single-research bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-3.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Covid-19: our research and innovation</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Explore our research and innovation
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
            {{-- research content section end --}}
        </div>
    </div>
    {{-- Research section end --}}

    {{-- event section start --}}
    <section class="event-section py-10" style="background: #c9ddc1eb;">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">EVENTS</h2>
            </div>

            {{-- event content section start --}}
            <div class="lg:grid lg:grid-cols-3 lg:gap-5 lg:space-y-0 space-y-10">
                {{-- single content section --}}
                <div class="single-top-event col-span-3">
                    <div class="lg:flex">
                        <div class="lg:w-2/3">
                            <img class="w-full h-auto" src="{{ asset('frontend/images/event-top.jpg') }}" alt="">
                        </div>
                        <div class="lg:w-2/6 bg-blue-900 p-10 text-white">
                            <h4 class=" font-bold text-xl mb-2">The Head Up Collar</h4>
                            <p class=" text-base font-light mb-5">Explore how our researchers are transforming the lives of their motor neurone disease patients by giving them some independence back.</p>
                            <a class=" font-bold text-lg underline" href="">A patient-centred approach to developing a new collar</a>
                        </div>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="single-event bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-1.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Research that changes lives</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Our four flagship research institutes are taking an interdisciplinary approach to the biggest challenges facing the planet.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Our flagship institutes
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="single-event bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-2.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Our impact</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Our researchers are making life-changing discoveries and solving problems that have a global impact.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Our approach
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="single-event bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-3.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Covid-19: our research and innovation</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Explore our research and innovation
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
            {{-- event content section end --}}
        </div>
    </section>
    {{-- event section end --}}


    {{-- quick link section start --}}
    <section class="quick-link-section pt-10 pb-5" style="background: #fff;">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">Quick Links</h2>
            </div>
            {{-- section content start --}}
            <div class="quick-link-content-section lg:grid lg:grid-cols-2">
                {{-- single content --}}
                <div class="single-quick-link lg:flex">
                    {{-- link content --}}
                    <div class="bg-quick-link-1 link-content p-5 lg:w-1/2 text-white">
                        <h4 class=" text-3xl font-semibold mb-5">Future Students</h4>
                        <ul>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">WHY IIS?</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">GRADUATE ADMISSIONS</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">UNDERGRADUATE ADMISSIONS</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3">
                                <a class="hover:underline" href="">UNC & CHAPEL HILL</a>
                            </li>
                        </ul>
                    </div>
                    {{-- image --}}
                    <div class="link-image lg:w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-1.jpg') }}" alt="">
                    </div>
                </div>

                {{-- single content --}}
                <div class="single-quick-link lg:flex">
                    {{-- link content --}}
                    <div class="bg-quick-link-2 link-content p-5 lg:w-1/2 text-white">
                        <h4 class=" text-3xl font-semibold mb-5">Current Students</h4>
                        <ul>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">STUDENT SERVICES</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">CAREER SERVICES</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">STUDENT Activites</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3">
                                <a class="hover:underline" href="">FORMS</a>
                            </li>
                        </ul>
                    </div>
                    {{-- image --}}
                    <div class="link-image lg:w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-2.jpg') }}" alt="">
                    </div>
                </div>

                {{-- single content --}}
                <div class="single-quick-link lg:flex">
                    {{-- image --}}
                    <div class="link-image lg:w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-3.jpg') }}" alt="">
                    </div>
                    {{-- link content --}}
                    <div class="bg-quick-link-3 link-content p-5 lg:w-1/2 text-white">
                        <h4 class=" text-3xl font-semibold mb-5">Faculty & Staff</h4>
                        <ul>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">FACULTY DIRECTORY / STAFF DIRECTORY</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">RESEARCH</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">HUMAN RESOURCES</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3">
                                <a class="hover:underline" href="">FACULTY HANDBOOK</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- single content --}}
                <div class="single-quick-link lg:flex">
                    {{-- image --}}
                    <div class="link-image lg:w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-4.jpg') }}" alt="">
                    </div>
                    {{-- link content --}}
                    <div class="bg-quick-link-4 link-content p-5 lg:w-1/2 text-white">
                        <h4 class=" text-3xl font-semibold mb-5">Outreach</h4>
                        <ul>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">SILSAA BOARD</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">STAY CONNECTED</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">Forms</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3">
                                <a class="hover:underline" href="">Download</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
    {{-- quick link section end --}}

    {{-- search section start --}}
    <section class="search-section pb-10" style="background-image: url('{{ asset('frontend/images/search-bg.jpg') }}')">
        <div class="container">
            {{-- search content start --}}
            <div class="search-bg py-20" >
                <div class="lg:px-20 md:px-10 px-2 text-white">
                    <div>
                        <h4 class=" font-bold text-lg uppercase pb-10">NEED HELP FINDING SOMETHING?</h4>
                    </div>
                    <div class="lg:flex lg:space-x-5">
                        <h2 class=" text-4xl lg:pb-14 lg:pt-0 pt-5 pb-2">I'm looking for information about</h2>
                        <div class="">
                            <select name="" id="" class=" text-2xl bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">topic</option>
                                <option value="">Admissions</option>
                                <option value="">Faculty and Staff</option>
                                <option value="">Undergraduate Programs</option>
                                <option value="">Student Funding</option>
                                <option value="">Careers</option>
                                <option value="">SILS News</option>
                                <option value="">SILS Events</option>
                                <option value="">Contact Information</option>
                                <option value="">Giving to SILS</option>
                            </select>
                        </div>
                    </div>
                    <div class="lg:flex lg:space-x-5">
                        <h2 class="text-4xl lg:pb-14 lg:pt-0 pt-5 pb-2">with keywords</h2>
                       <div>
                        <input class="py-3 px-5 rounded text-gray-600" type="search" name="" id="" placeholder="Search...">
                        <button class=" py-3 px-10 rounded text-lg font-semibold primary-bg text-white ml-5" type="submit">Search</button>
                       </div>
                    </div>
                </div>
            </div>
            {{-- search content end --}}
        </div>
    </section>
    {{-- search section end --}}

@endsection
