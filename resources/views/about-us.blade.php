@extends('layouts.master')

@section('content')
    <!-- Breadcrumb -->
    <nav class="breadcumb bg-gray-700" aria-label="Breadcrumb">
        <div class="container">
            <div class="py-5 px-5">
                <h2 class="text-white text-2xl font-semibold mb-5">About Us</h2>
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-white hover:text-gray-200 dark:text-gray-200 dark:hover:text-white">
                            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="#" class="ml-1 text-sm font-medium text-white hover:text-gray-200 md:ml-2 dark:text-gray-200 dark:hover:text-white">About Us</a>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <!-- End Breadcrumb -->

    {{-- contact content section start --}}
    <section class="about-content-section pt-10">
        <div class="container">
            {{-- about content start --}}
            <div class="about-content bg-white p-10">
               <div>
                    <h4 class="text-4xl font-light primary-color mb-5">Who We Are</h4>
                    <p>
                        NUST University is one of Bangladesh best-known institutions of higher learning and one of the leading universities in the world. International students from more than 150 countries make up nearly 30% of NSTU student body ‒ the highest proportion of any Canadian research university.</p>
               </div>

               <div class="mt-8">
                    <h4 class="text-4xl font-light primary-color mb-5">History</h4>
                    <p>McGill is a public university, founded in 2001.</p>
                </div>

                <div class="mt-8">
                    <h4 class="text-4xl font-light primary-color mb-5">A Tradition of Success</h4>
                    <p>NSTU is recognized around the world for the excellence of its teaching and research programs. Ernest Rutherford's Nobel Prize-winning research on the nature of radioactivity was conducted at McGill, part of a long tradition of innovation on our campuses that includes the invention of the artificial blood cell and Plexiglas. Today our professors are building the new field of epigenetics, developing alternative energy sources from crop plants and driving human achievement in every field imaginable.</p>
                </div>

                <div class="mt-8">
                    <h4 class="text-4xl font-light primary-color mb-5">The Best and Brightest</h4>
                    <p>In addition to a stellar faculty, NSTU is known for attracting the brightest students from across Bangladesh, the United States, and around the world. NSTU students have the highest average entering grades in Bangladesh, and our commitment to fostering the very best has helped our students win more national and international awards on average than their peers at any other Bangladeshi university. The prestigious Rhodes Scholarship has gone to a nation-leading 145 NSTU students.</p>
                </div>
            </div>
            {{-- about content end --}}
        </div>

    </section>
    {{-- contact content section end --}}

    {{-- about block section start --}}
    <section class="event-section pb-10">
        <div class="container">
            {{-- event content section start --}}
            <div class="lg:grid lg:grid-cols-3 lg:gap-5 lg:space-y-0 space-y-10">
                {{-- single content section --}}
                <div class="single-top-event col-span-3">
                    <div class="lg:flex">
                        <div class="lg:w-1/2 bg-blue-900 p-10 text-white">
                            <h4 class=" font-bold text-xl mb-2">NSTU Proud</h4>
                            <p class=" text-base font-light mb-5">Our university is home to an exceptional collection of students, faculty and staff, and counts itself among the finest research-intensive universities in the world.</p>
                            <a class=" font-bold text-lg underline" href="">Watch our anthem video</a>
                        </div>
                        <div class="lg:w-1/2">
                            <img class="w-full h-auto" src="{{ asset('frontend/images/about.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="single-event bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/about-2.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Administration and governance</a>
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
                        <img src="{{ asset('frontend/images/about-3.png') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Our history</a>
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
                        <img src="{{ asset('frontend/images/about-4.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Notable alumni</a>
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
    {{-- about block section end --}}
@endsection
