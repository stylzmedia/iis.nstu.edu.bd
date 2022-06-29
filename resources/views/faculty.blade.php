@extends('layouts.master')

@section('content')
    <!-- Breadcrumb -->
    <nav class="breadcumb bg-gray-700" aria-label="Breadcrumb">
        <div class="container">
            <div class="py-5 px-5">
                <h2 class="text-white text-2xl font-semibold mb-5">Faculty</h2>
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
                            <a href="#" class="ml-1 text-sm font-medium text-white hover:text-gray-200 md:ml-2 dark:text-gray-200 dark:hover:text-white">Faculty</a>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <!-- End Breadcrumb -->

    {{-- faculty content section start --}}
    <section class="faculty-section py-10">
        <div class="container">
            {{-- section title --}}
            <div class="faculty-section-title py-2">
                <h2 class="primary-color font-bold uppercase text-2xl relative">Faculty</h2>
            </div>

            {{-- faculty filter --}}
            <div class="faculty-filter w-60 py-10">
                <select name="" id="" class=" text-xl bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Research Area</option>
                    <option value="">Digital curation</option>
                    <option value="">Equity and Inclusion</option>
                    <option value="">Health Information</option>
                    <option value="">Information Interaction (and Retrieval)</option>
                    <option value="">Librarianship of the 21st Century</option>
                </select>
            </div>

            {{-- section content start --}}
            <div class="faculty-content-section">
                <div class="md:grid lg:grid-cols-3 md:grid-cols-2 md:gap-10 md:space-y-0 space-y-5">
                    {{-- single faculty section --}}
                    <div class="single-faculty">
                        <div class="faculty-image border-b-8 border-b-blue-800">
                            <a href="">
                                <img class="w-full h-auto" src="{{ asset('frontend/images/faculty-1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="single-faculty-content py-5">
                            <h4 class="mb-3 primary-color font-semibold text-2xl">
                                <a href="">Denise Anthony</a>
                            </h4>
                            <p class=" text-gray-500 text-base font-light"> Information retrieval, aggregated search systems and evaluation, search behavior, text data mining, machine learning, task-based search, search assistance</p>
                        </div>
                    </div>

                    {{-- single faculty section --}}
                    <div class="single-faculty">
                        <div class="faculty-image border-b-8 border-b-blue-800">
                            <a href="">
                                <img class="w-full h-auto" src="{{ asset('frontend/images/faculty-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="single-faculty-content py-5">
                            <h4 class="mb-3 primary-color font-semibold text-2xl">
                                <a href="">Jaime Arguello</a>
                            </h4>
                            <p class=" text-gray-500 text-base font-light"> Information retrieval, aggregated search systems and evaluation, search behavior, text data mining, machine learning, task-based search, search assistance</p>
                        </div>
                    </div>

                    {{-- single faculty section --}}
                    <div class="single-faculty">
                        <div class="faculty-image border-b-8 border-b-blue-800">
                            <a href="">
                                <img class="w-full h-auto" src="{{ asset('frontend/images/faculty-3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="single-faculty-content py-5">
                            <h4 class="mb-3 primary-color font-semibold text-2xl">
                                <a href="">Ron Bergquist</a>
                            </h4>
                            <p class=" text-gray-500 text-base font-light"> Information retrieval, aggregated search systems and evaluation, search behavior, text data mining, machine learning, task-based search, search assistance</p>
                        </div>
                    </div>

                    {{-- single faculty section --}}
                    <div class="single-faculty">
                        <div class="faculty-image border-b-8 border-b-blue-800">
                            <a href="">
                                <img class="w-full h-auto" src="{{ asset('frontend/images/faculty-4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="single-faculty-content py-5">
                            <h4 class="mb-3 primary-color font-semibold text-2xl">
                                <a href="">Rob Capra</a>
                            </h4>
                            <p class=" text-gray-500 text-base font-light"> Information retrieval, aggregated search systems and evaluation, search behavior, text data mining, machine learning, task-based search, search assistance</p>
                        </div>
                    </div>

                    {{-- single faculty section --}}
                    <div class="single-faculty">
                        <div class="faculty-image border-b-8 border-b-blue-800">
                            <a href="">
                                <img class="w-full h-auto" src="{{ asset('frontend/images/faculty-5.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="single-faculty-content py-5">
                            <h4 class="mb-3 primary-color font-semibold text-2xl">
                                <a href="">Melanie Feinberg</a>
                            </h4>
                            <p class=" text-gray-500 text-base font-light"> Information retrieval, aggregated search systems and evaluation, search behavior, text data mining, machine learning, task-based search, search assistance</p>
                        </div>
                    </div>

                    {{-- single faculty section --}}
                    <div class="single-faculty">
                        <div class="faculty-image border-b-8 border-b-blue-800">
                            <a href="">
                                <img class="w-full h-auto" src="{{ asset('frontend/images/faculty-6.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="single-faculty-content py-5">
                            <h4 class="mb-3 primary-color font-semibold text-2xl">
                                <a href="">David Gotz</a>
                            </h4>
                            <p class=" text-gray-500 text-base font-light"> Information retrieval, aggregated search systems and evaluation, search behavior, text data mining, machine learning, task-based search, search assistance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- faculty content section end --}}
@endsection
