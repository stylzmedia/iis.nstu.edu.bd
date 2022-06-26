@extends('layouts.master')

@section('content')
    <section class="">
        <div class="container bg-white">
            <!-- people area -->
            <div class="lg:flex space-y-10 lg:space-y-0 px-4 py-5">
                <!-- sidebar start -->
                <div class="lg:w-1/4 w-full">
                    <div class="">
                        <!-- people tab sidebar start -->
                        <div class="">
                            <h4 class="px-4 py-3 primary-bg text-white font-medium text-lg border-b border-gray-500">People</h4>
                            <h4 class="px-4 py-3 primary-bg text-white font-medium text-lg border-b border-gray-500">Faculty Member</h4>
                            <h4 class="px-4 py-3 primary-bg text-white font-medium text-lg border-b border-gray-500">Staff Member</h4>
                            <h4 class="px-4 py-3 primary-bg text-white font-medium text-lg border-b">Departmental Committee</h4>
                        </div>
                        <!-- people tab sidebar end -->

                        <!-- new and event sidebar start -->
                        <div class="mt-5">
                            <div class="px-4 py-3 primary-bg">
                                <h2 class="font-bold text-white ml-5">News & Event</h2>
                            </div>
                            <!-- single news -->
                            <div class="pl-2 pt-2 pb-2 border-b custom-b-color">
                                <h2 class="my-3 primary-color">
                                    <a href="/">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                                </h2>
                                <div class="flex">
                                    <img class="h-14 w-14 object-cover mr-5" src="{{ asset('frontend/images/lab.jpg') }}" alt="">
                                    <div class="-mt-2">
                                        <span class=" text-gray-500 text-xs mb-3">04 Feb 2022</span>
                                        <p class=" text-gray-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- single news -->
                            <div class="pl-2 pt-2 pb-2 border-b custom-b-color">
                                <h2 class="my-3 primary-color">
                                    <a href="/">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                                </h2>
                                <div class="flex">
                                    <img class="h-14 w-14 object-cover mr-5" src="{{ asset('frontend/images/lab.jpg') }}" alt="">
                                    <div class="-mt-2">
                                        <span class=" text-gray-500 text-xs mb-3">04 Feb 2022</span>
                                        <p class=" text-gray-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- single news -->
                            <div class="pl-2 pt-2 pb-2">
                                <h2 class="my-3 primary-color">
                                    <a href="/">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                                </h2>
                                <div class="flex">
                                    <img class="h-14 w-14 object-cover mr-5" src="{{ asset('frontend/images/lab.jpg') }}" alt="">
                                    <div class="-mt-2">
                                        <span class=" text-gray-500 text-xs mb-3">04 Feb 2022</span>
                                        <p class=" text-gray-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 mb-5 text-center">
                                <a href="/" class="text-white btn-bg px-4 py-3 rounded-xl">View All News & Events</a>
                            </div>
                        </div>
                        <!-- news and event sidebar end -->

                        <!-- Notice sidebar start -->
                        <div class="mt-5">
                            <div class="px-4 py-3 primary-bg">
                                <h2 class="font-bold text-white ml-5">Notice Board</h2>
                            </div>
                            <!-- single news -->
                            <div class="pl-2 pt-2 pb-2 border-b custom-b-color">
                                <h2 class="my-3 primary-color">
                                    <a href="/">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                                </h2>
                                <div class="flex">
                                    <div class="flex">
                                        <!-- icon start -->
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                        </svg>
                                        </span>
                                        <!-- Date Start -->
                                        <span class=" text-gray-500 text-xs ml-2">04 Feb 2022</span>
                                    </div>
                                    <div class="">
                                        <p class=" text-gray-500 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- single news -->
                            <div class="pl-2 pt-2 pb-2 border-b custom-b-color">
                                <h2 class="my-3 primary-color">
                                    <a href="/">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                                </h2>
                                <div class="flex">
                                    <div class="flex">
                                        <!-- icon start -->
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                        </svg>
                                        </span>
                                        <!-- Date Start -->
                                        <span class=" text-gray-500 text-xs ml-2">04 Feb 2022</span>
                                    </div>
                                    <div class="">
                                        <p class=" text-gray-500 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- single news -->
                            <div class="pl-2 pt-2 pb-2">
                                <h2 class="my-3 primary-color">
                                    <a href="/">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                                </h2>
                                <div class="flex">
                                    <div class="flex">
                                        <!-- icon start -->
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                        </svg>
                                        </span>
                                        <!-- Date Start -->
                                        <span class=" text-gray-500 text-xs ml-2">04 Feb 2022</span>
                                    </div>
                                    <div class="">
                                        <p class=" text-gray-500 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 mb-5 text-center">
                                <a href="/" class="text-white btn-bg px-4 py-3 rounded-xl">View All Notice</a>
                            </div>
                        </div>
                        <!-- Notice sidebar end -->
                    </div>
                </div>
                <!-- sidebar end -->

                <!-- details start -->
                <div class="lg:w-3/4 w-full lg:ml-10 lg:mr-5">
                    <!-- People details area start -->
                    <div class="mt-5 mb-10">
                        <!-- single people card start -->
                        <div class="lg:flex lg:space-y-0 space-y-5 p-5 lg:p-0 pt-2 shadow-2xl">
                            <div class="lg:w-1/3 w-full">
                                <img class="h-40 w-40 object-cover" src="{{ asset('frontend/images/user.jpg') }}" alt="">
                            </div>
                            <div class="lg:w-1/3 w-full">
                                <h2 class=" text-xl font-bold text-gray-800">Name Of Professor</h2>
                                <p class="text-base text-gray-600 font-semibold">Professor</p>
                                <p class="text-base text-gray-600 font-semibold">Email: professor@nstu.edu.bd</p>
                                <br>
                                <p class="text-base text-gray-600 font-semibold">Mobile: 01722 333 444</p>
                            </div>
                            <div class="lg:w-1/3 w-full">
                                <h2 class=" text-gray-800 font-bold text-lg">Research Interest</h2>
                                <p class=" text-gray-800 font-bold text-sm">Professor, Email: professor@nstu.edu.bd, Mobile: 01722 333 444</p>
                            </div>
                        </div>
                        <!-- single people card end -->

                        <!-- single people card start -->
                        <div class="lg:flex lg:space-y-0 space-y-5 p-5 lg:p-0 pt-2 mt-10 shadow-2xl">
                            <div class="lg:w-1/3 w-full">
                                <img class="h-40 w-40 object-cover" src="{{ asset('frontend/images/user.jpg') }}" alt="">
                            </div>
                            <div class="lg:w-1/3 w-full">
                                <h2 class=" text-xl font-bold text-gray-800">Name Of Professor</h2>
                                <p class="text-base text-gray-600 font-semibold">Professor</p>
                                <p class="text-base text-gray-600 font-semibold">Email: professor@nstu.edu.bd</p>
                                <br>
                                <p class="text-base text-gray-600 font-semibold">Mobile: 01722 333 444</p>
                            </div>
                            <div class="lg:w-1/3 w-full">
                                <h2 class=" text-gray-800 font-bold text-lg">Research Interest</h2>
                                <p class=" text-gray-800 font-bold text-sm">Professor, Email: professor@nstu.edu.bd, Mobile: 01722 333 444</p>
                            </div>
                        </div>
                        <!-- single people card end -->

                        <!-- single people card start -->
                        <div class="lg:flex lg:space-y-0 space-y-5 p-5 lg:p-0 pt-2 mt-10 shadow-2xl">
                            <div class="lg:w-1/3 w-full">
                                <img class="h-40 w-40 object-cover" src="{{ asset('frontend/images/user.jpg') }}" alt="">
                            </div>
                            <div class="lg:w-1/3 w-full">
                                <h2 class=" text-xl font-bold text-gray-800">Name Of Professor</h2>
                                <p class="text-base text-gray-600 font-semibold">Professor</p>
                                <p class="text-base text-gray-600 font-semibold">Email: professor@nstu.edu.bd</p>
                                <br>
                                <p class="text-base text-gray-600 font-semibold">Mobile: 01722 333 444</p>
                            </div>
                            <div class="lg:w-1/3 w-full">
                                <h2 class=" text-gray-800 font-bold text-lg">Research Interest</h2>
                                <p class=" text-gray-800 font-bold text-sm">Professor, Email: professor@nstu.edu.bd, Mobile: 01722 333 444</p>
                            </div>
                        </div>
                        <!-- single people card end -->
                    </div>
                    <!-- People details area end -->
                </div>
            </div>
        </div>
    </section>
@endsection
