@extends('layouts.master')

@section('content')
    {{-- Slider area start --}}
    <div class="container">
        <div class="lg:flex pb-10 border-t border-gray-500">
            <!-- welcome slider -->
            <div class="lg:w-full w-full">
                <div class="slider-area">
                    <!-- single slider -->
                    <div class="relative">
                        <img class="custom-slider-h-400" src="{{ asset('frontend/images/slider-1.jpg') }}" alt="">
                        <div class="absolute bottom-0 w-full left-0 bg-black bg-opacity-50 p-10">
                            <p class=" text-white text-lg">Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels.</p>
                        </div>
                    </div>
                    <!-- single slider -->
                    <div class="relative">
                        <img class="custom-slider-h-400" src="{{ asset('frontend/images/slider-2.jpg') }}" alt="">
                        <div class="absolute bottom-0 w-full left-0 bg-black bg-opacity-50 p-10">
                            <p class=" text-white text-lg">Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels.</p>
                        </div>
                    </div>
                    <!-- single slider -->
                    <div class="relative">
                        <img class="custom-slider-h-400" src="{{ asset('frontend/images/slider-3.jpg') }}" alt="">
                        <div class="absolute bottom-0 w-full left-0 bg-black bg-opacity-50 p-10">
                            <p class=" text-white text-lg">Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Slider area end --}}

     {{-- study section start --}}
    <div class="study-section py-10">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">STUDY</h2>
            </div>
            {{-- section content --}}
            <div class=" grid grid-cols-3 gap-5">
                {{-- single stydy content --}}
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/stydy-1.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Explore undergraduate study at Sheffield</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Undergraduate study
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single stydy content --}}
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/study-2.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Explore undergraduate study at Sheffield</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Undergraduate study
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single stydy content --}}
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/study-3.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Explore undergraduate study at Sheffield</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Undergraduate study
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- study section end --}}

    {{-- Research section start --}}
    <div class="research-section py-10">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">RESEARCH</h2>
            </div>
            {{-- research content section start --}}
            <div class="grid grid-cols-3 gap-5">
                {{-- single content section --}}
                <div class="col-span-3">
                    <div class="flex">
                        <div class=" w-2/3">
                            <img class="w-full h-auto" src="{{ asset('frontend/images/research-top.jpg') }}" alt="">
                        </div>
                        <div class="w-2/6 bg-blue-900 p-10 text-white">
                            <h4 class=" font-bold text-xl mb-2">The Head Up Collar</h4>
                            <p class=" text-base font-light mb-5">Explore how our researchers are transforming the lives of their motor neurone disease patients by giving them some independence back.</p>
                            <a class=" font-bold text-lg underline" href="">A patient-centred approach to developing a new collar</a>
                        </div>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="bg-white rounded-md shadow-lg">
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
                <div class="bg-white rounded-md shadow-lg">
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
                <div class="bg-white rounded-md shadow-lg">
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

    {{-- news section start --}}
    <section class="news-section py-10">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">News</h2>
            </div>

            {{-- news content section start --}}
            <div class="grid grid-cols-3 gap-5">
                {{-- single content section --}}
                <div class="col-span-3">
                    <div class="flex">
                        <div class="w-2/6 bg-blue-900 p-10 text-white">
                            <span class=" bg-yellow-500 text-black font-bold text-base py-1 px-3 rounded-md">21 Jun 2022</span>
                            <h4 class=" font-bold text-xl mb-2 mt-5">Sheffield scientists benefit from £4.25 million to kick start UK-wide research effort to end MND</h4>
                            <p class=" text-base font-light mb-5">Researchers from the University of Sheffield’s Institute for Translational Neuroscience (SITraN) have been awarded part of a new £4.25 million grant that seeks to discover meaningful MND treatments within years, not decades.</p>
                        </div>
                        <div class=" w-2/3">
                            <img class="w-full h-auto" src="{{ asset('frontend/images/news-top.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-1.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <span class=" bg-yellow-500 text-black font-bold text-base py-1 px-3 rounded-md">21 Jun 2022</span>
                        <h4 class=" text-gray-900 font-black text-xl mb-2 mt-2">
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
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-2.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <span class=" bg-yellow-500 text-black font-bold text-base py-1 px-3 rounded-md">21 Jun 2022</span>
                        <h4 class=" text-gray-900 font-black text-xl mb-2 mt-2">
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
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/research-3.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <span class=" bg-yellow-500 text-black font-bold text-base py-1 px-3 rounded-md">21 Jun 2022</span>
                        <h4 class=" text-gray-900 font-black text-xl mb-2 mt-2">
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
            {{-- news content section end --}}
        </div>
    </section>
    {{-- news section end --}}

    {{-- event section start --}}
    <section class="event-section py-10">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">EVENTS</h2>
            </div>

            {{-- event content section start --}}
            <div class="grid grid-cols-3 gap-5">
                {{-- single content section --}}
                <div class="col-span-3">
                    <div class="flex">
                        <div class=" w-2/3">
                            <img class="w-full h-auto" src="{{ asset('frontend/images/event-top.jpg') }}" alt="">
                        </div>
                        <div class="w-2/6 bg-blue-900 p-10 text-white">
                            <h4 class=" font-bold text-xl mb-2">The Head Up Collar</h4>
                            <p class=" text-base font-light mb-5">Explore how our researchers are transforming the lives of their motor neurone disease patients by giving them some independence back.</p>
                            <a class=" font-bold text-lg underline" href="">A patient-centred approach to developing a new collar</a>
                        </div>
                    </div>
                </div>

                {{-- single content section --}}
                <div class="bg-white rounded-md shadow-lg">
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
                <div class="bg-white rounded-md shadow-lg">
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
                <div class="bg-white rounded-md shadow-lg">
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

    {{-- collaborate section start --}}
    <section class="collaborate-section py-10">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">COLLABORATE</h2>
            </div>
            {{-- section content --}}
            <div class=" grid grid-cols-3 gap-5">
                {{-- single collaborate content --}}
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/col-1.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Explore undergraduate study at Sheffield</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Business and research
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single collaborate content --}}
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/col-2.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Explore undergraduate study at Sheffield</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                International partnerships
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- single collaborate content --}}
                <div class="bg-white rounded-md shadow-lg">
                    <div class="">
                        <img src="{{ asset('frontend/images/col-3.jpg') }}" alt="">
                    </div>
                    <div class="p-5">
                        <h4 class=" text-gray-900 font-black text-xl mb-2">
                            <a href="">Explore undergraduate study at Sheffield</a>
                        </h4>
                        <p class=" text-gray-600 font-light text-base mb-2">Make Sheffield the start of something special. When you study here you get one of the best student experiences in the UK.</p>
                        <a href="">
                            <span class="primary-color font-bold">
                                Our role in the city and region
                                <span class="ml-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- collaborate section end --}}

    {{-- quick link section start --}}
    <section class="quick-link-section pt-10">
        <div class="container">
            {{-- section title --}}
            <div class="section-title py-5">
                <h2 class="primary-color font-bold uppercase text-2xl relative">Quick Links</h2>
            </div>
            {{-- section content start --}}
            <div class="grid grid-cols-2">
                {{-- single content --}}
                <div class="flex">
                    {{-- link content --}}
                    <div class="bg-quick-link-1 link-content p-5 w-1/2 text-white">
                        <h4 class=" text-3xl font-semibold mb-5">Future Students</h4>
                        <ul>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">WHY IITS?</a>
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
                    <div class="link-image w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-1.jpg') }}" alt="">
                    </div>
                </div>

                {{-- single content --}}
                <div class="flex">
                    {{-- link content --}}
                    <div class="bg-quick-link-2 link-content p-5 w-1/2 text-white">
                        <h4 class=" text-3xl font-semibold mb-5">Current Students</h4>
                        <ul>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">STUDENT SERVICES</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">CAREER SERVICES</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">STUDENT ORGANIZATIONS</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3">
                                <a class="hover:underline" href="">FORMS</a>
                            </li>
                        </ul>
                    </div>
                    {{-- image --}}
                    <div class="link-image w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-2.jpg') }}" alt="">
                    </div>
                </div>

                {{-- single content --}}
                <div class="flex">
                    {{-- image --}}
                    <div class="link-image w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-3.jpg') }}" alt="">
                    </div>
                    {{-- link content --}}
                    <div class="bg-quick-link-3 link-content p-5 w-1/2 text-white">
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
                <div class="flex">
                    {{-- image --}}
                    <div class="link-image w-1/2">
                        <img src="{{ asset('frontend/images/quicklink-4.jpg') }}" alt="">
                    </div>
                    {{-- link content --}}
                    <div class="bg-quick-link-4 link-content p-5 w-1/2 text-white">
                        <h4 class=" text-3xl font-semibold mb-5">Alumni</h4>
                        <ul>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">SILSAA BOARD</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">STAY CONNECTED</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3 border-b border-b-gray-200">
                                <a class="hover:underline" href="">AWARDS</a>
                            </li>
                            <li class="font-semibold uppercase text-xs py-3">
                                <a class="hover:underline" href="">GIVE BACK TO SILS</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
    {{-- quick link section end --}}

    {{-- search section start --}}
    <section class="search-section pb-10">
        <div class="container">
            {{-- search content start --}}
            <div class="search-bg py-20" style="background-image: url('{{ asset('frontend/images/search-bg.jpg') }}')">
                <div class="px-20 text-white">
                    <div>
                        <h4 class=" font-bold text-lg uppercase pb-10">NEED HELP FINDING SOMETHING?</h4>
                    </div>
                    <div class="flex space-x-5">
                        <h2 class=" text-4xl pb-14">I'm looking for information about</h2>
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
                    <div class="flex space-x-5">
                        <h2 class="text-4xl pb-14">with keywords</h2>
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



    {{-- Tab area start --}}
    {{-- <div class="container mx-auto py-20 bg-white" x-data="{ selected: 'option-1' }">
        <h2 class="flex justify-center primary-color font-bold text-3xl uppercase my-5">Research</h2>
        <ul class="lg:flex lg:justify-center lg:space-x-12 space-y-5 lg:space-y-0 md:grid md:grid-cols-3 md:gap-2 md:space-y-0 text-white">
            <li>
                <button x-on:click="selected = 'option-1'"
                class="inline-block px-4 py-3 btn-bg rounded uppercase hover:bg-blue-900 hover:text-yellow-300" x-bind:class="{ 'bg-blue-900 text-yellow-300': selected === 'option-1' }"
                >
                    Basic Microbiology
                </button>
            </li>
            <li>
                <button x-on:click="selected = 'option-2'"
                class="inline-block px-4 py-3 btn-bg rounded uppercase hover:bg-blue-900 hover:text-yellow-300" x-bind:class="{ 'bg-blue-900 text-yellow-300': selected === 'option-2' }"
                >
                    Diagnostic Lab
                </button>
            </li>
            <li>
                <button x-on:click="selected = 'option-3'"
                class="inline-block px-4 py-3 btn-bg rounded uppercase hover:bg-blue-900 hover:text-yellow-300" x-bind:class="{ 'bg-blue-900 text-yellow-300': selected === 'option-3' }"
                >
                    Virology Lab
                </button>
            </li>
            <li>
                <button x-on:click="selected = 'option-4'"
                class="inline-block px-4 py-3 btn-bg rounded uppercase hover:bg-blue-900 hover:text-yellow-300" x-bind:class="{ 'bg-blue-900 text-yellow-300': selected === 'option-4' }"
                >
                    Mycology Lab
                </button>
            </li>
            <li>
                <button x-on:click="selected = 'option-5'"
                class="inline-block px-4 py-3 btn-bg rounded uppercase hover:bg-blue-900 hover:text-yellow-300" x-bind:class="{ 'bg-blue-900 text-yellow-300': selected === 'option-5' }"
                >
                    AlGal Research Lab
                </button>
            </li>
        </ul>
        <div class="p-3 mt-6 bg-white border">
            <div class="relative" x-show="selected === 'option-1'">
                <img class="custom-h-600" src="{{ asset('frontend/images/tab-1.jpg') }}" alt="">
                <div class="absolute bottom-0 left-0 right-0 bg-blue-900 bg-opacity-50 py-10">
                    <h4 class=" text-3xl font-bold text-center text-white">Research of the Laboratory of Microbiology</h4>
                </div>
            </div>
            <div class=" relative" x-show="selected === 'option-2'">
                <img class="custom-h-600" src="{{ asset('frontend/images/tab-2.jpg') }}" alt="">
                <div class="absolute bottom-0 left-0 right-0 bg-blue-900 bg-opacity-50 py-10">
                    <h4 class=" text-3xl font-bold text-center text-white">Research of the Laboratory of Diagnostic</h4>
                </div>
            </div>
            <div class=" relative" x-show="selected === 'option-3'">
                <img class="custom-h-600" src="{{ asset('frontend/images/tab-3.jpg') }}" alt="">
                <div class="absolute bottom-0 left-0 right-0 bg-blue-900 bg-opacity-50 py-10">
                    <h4 class=" text-3xl font-bold text-center text-white">Research of the Laboratory of Virology</h4>
                </div>
            </div>
            <div class=" relative" x-show="selected === 'option-4'">
                <img class="custom-h-600" src="{{ asset('frontend/images/tab-4.jpg') }}" alt="">
                <div class="absolute bottom-0 left-0 right-0 bg-blue-900 bg-opacity-50 py-10">
                    <h4 class=" text-3xl font-bold text-center text-white">Research of the Laboratory of Mycology</h4>
                </div>
            </div>
            <div class=" relative" x-show="selected === 'option-5'">
                <img class="custom-h-600" src="{{ asset('frontend/images/tab-5.jpg') }}" alt="">
                <div class="absolute bottom-0 left-0 right-0 bg-blue-900 bg-opacity-50 py-10">
                    <h4 class=" text-3xl font-bold text-center text-white">Research of the Laboratory of AlGal</h4>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Tab area end --}}

@endsection
