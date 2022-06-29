@extends('layouts.master')

@section('content')
    <!-- Breadcrumb -->
    <nav class="breadcumb bg-gray-700" aria-label="Breadcrumb">
        <div class="container">
            <div class="py-5 px-5">
                <h2 class="text-white text-2xl font-semibold mb-5">Single Faculty</h2>
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
                            <a href="#" class="ml-1 text-sm font-medium text-white hover:text-gray-200 md:ml-2 dark:text-gray-200 dark:hover:text-white">Single Faculty</a>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <!-- End Breadcrumb -->

    {{-- faculty content section start --}}
    <section class="single-faculty-section py-10">
        <div class="container">
            {{-- single-faculty-content start --}}
            <div class="single-faculty-content-section">
                {{-- title  --}}
                <div class="single-faculty-title md:flex md:space-x-10 md:space-y-0 space-y-5 md:pl-0 md:pb-0 pl-5 pb-5 bg-white">
                    <div class="single-faculty-image">
                        <img class="h-52 w-auto" src="{{ asset('frontend/images/faculty-6.jpg') }}" alt="">
                    </div>
                    <div class="single-faculty-contact mt-3">
                        <h4 class=" text-4xl font-bold primary-color mb-2">David Gotz</h4>
                        <h6 class=" font-bold text-xl text-gray-900 mb-1">Associate Professor</h6>
                        <span class="primary-color text-sm font-normal flex space-x-2">
                            <a href="">
                                <i class="fa-solid fa-envelope-open"></i>
                                <span class="underline">denise@uw.edu</span>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-square-phone"></i>
                                <span class="underline">206-685-6630</span>
                            </a>
                        </span>
                        <p class="text-sm text-gray-700">Mary Gates Hall 310B</p>
                    </div>
                </div>
                {{-- content start --}}
                <div class="single-faculty-content bg-gray-50 px-10 pt-10 pb-20 text-gray-600">
                    <div>
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">AFFILIATE POSITIONS</h4>
                        <ul class=" text-base font-light list-disc ml-3 leading-7">
                            <li>Adjunct Associate Professor, University of Washington Human Centered Design & Engineering (HCDE)</li>
                            <li>Adjunct Associate Professor, University of Washington Paul G. Allen School of Computer Science & Engineering (CSE)</li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">SPECIALIZATIONS</h4>
                        <ul class=" text-base font-light list-disc ml-3 leading-7">
                            <li>Information Retrieval/Seeking</li>
                            <li>Data Science</li>
                            <li>Personalization and Recommendation</li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">RESEARCH AREAS</h4>
                        <ul class=" text-base font-light list-disc ml-3 leading-7">
                            <li class="underline">
                                <a href="">Data Science</a>
                            </li>
                            <li class="underline">
                                <a href="">Human-Computer Interaction</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">BIOGRAPHY</h4>
                        <div class=" text-base font-light leading-7">
                            <p>Chirag Shah is an Associate Professor in the Information School (iSchool). He is the Founding Director of InfoSeeking Lab, which focuses on issues related to information seeking, human-computer interaction (HCI), and social media, supported by grants from National Science Foundation (NSF), National Institute of Health (NIH), Institute of Museum and Library Services (IMLS), Amazon, Google, and Yahoo.
                            </p>
                            <p class="mt-5">Shah’s research involves studies of interactive information retrieval/seeking and recommender systems, addressing various problems with user studies in lab and field, and building computational models with machine learning techniques. He has served as a consultant to the United Nations Data Analytics on various Data Science projects involving social and political issues, peacekeeping, climate change, and energy. He also holds a position of Amazon Scholar, working on cutting-edge research problems on personalization and recommendation with Amazon.</p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">EDUCATION</h4>
                        <ul class=" text-base font-light list-disc ml-3 leading-7">
                            <li>
                                Ph D, Information and Library Science, University of North Carolina, 2010
                            </li>
                            <li>
                                MS, Computer Science, University of Massachusetts, 2006
                            </li>
                            <li>
                                MTech, Computer Science and Engineering, Indian Institute of Technology, 2002
                            </li>
                            <li>
                                BE, Computer Engineering, Dharamsinh Desai Institute of Technology, 2000
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">AWARDS</h4>
                        <ul class=" text-base font-light list-disc ml-3 leading-7">
                            <li>
                                Distinguished Member Inductee - ASIS&T, 2021
                            </li>
                            <li>
                                Karen Spärck Jones Award - British Computer Society Information Retrieval Specialist Group and the British Computer Society, 2020-2020
                            </li>
                            <li>
                                Best Paper Award - Association for Information Science and Technology (ASIS&T), 2019
                            </li>
                            <li>
                                Chancellor’s Scholar Award - Rutgers University, 2017
                            </li>
                            <li>
                                Best Student Paper Award - ACM/IEEE Joint Conference on Digital Libraries, 2016-2016
                            </li>
                            <li>
                                James M. Cretsos Leadership Award - Association of Information Science and Technology, 2013
                            </li>
                            <li>
                                SIG USE Best Poster Award - ASIS&T 2013, 2013
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">CONSULTING AND OTHER PROJECTS</h4>
                        <ul class=" text-base font-light list-disc ml-3 leading-7">
                            <li>
                                Getty Images, Seattle, WA, 2021
                            </li>
                            <li>
                                Microsoft (MSR) AI, Redmond, WA, 2020
                            </li>
                            <li>
                                Amazon, Seattle, WA, 2019
                            </li>
                            <li>
                                Spotify, 2018
                            </li>
                            <li>
                                United Nations Data Analytics Group, 2016
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">MEMBERSHIPS</h4>
                        <ul class=" text-base font-light list-disc ml-3 leading-7">
                            <li>
                                Association for Information Science and Technology (ASIST)
                            </li>
                            <li>
                                Association of Computing Machinery (ACM)
                            </li>
                            <li>
                                New Jersey chapter of Association for Information Science & Technology (NJ ASIST)
                            </li>
                            <li>
                                Association for Information Science & Technology (ASIST)
                            </li>
                            <li>
                                Association for Information Science & Technology (ASIST)
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">PUBLICATIONS AND CONTRIBUTIONS</h4>
                        <div class="text-base font-light leading-7">
                           <div class="md:flex md:space-x-10 md:space-y-0 space-y-5">
                               <div class="icon text-5xl primary-color text-center">
                                    <i class="fa-solid fa-award"></i>
                               </div>
                               <div class="">
                                   <h4 class="font-bold primary-color">Authentic versus synthetic: An investigation of the influences of study settings and task configurations on search behaviors (2022)</h4>
                                   <p>Journal of the Association for Information Science and Technology,</p>
                                   <p>Authors: Chirag Shah, Y. Wang</p>
                               </div>
                           </div>
                           <div class="md:flex md:space-x-10 md:space-y-0 space-y-5 mt-5">
                                <div class="icon text-3xl primary-color text-center">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                <div class="">
                                    <h4 class="font-bold primary-color"><a class="underline" href="">ExpScore: Learning Metrics for Recommendation Explanation (2022)</a></h4>
                                    <p>Journal of the Association for Information Science and Technology,</p>
                                    <p>Authors: Chirag Shah, Y. Wang</p>
                                </div>
                            </div>
                            <div class="md:flex md:space-x-10 md:space-y-0 space-y-5 mt-5">
                                <div class="icon text-3xl primary-color text-center">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                <div class="">
                                    <h4 class="font-bold primary-color"><a class="underline" href="">Situating Search (2022)</a></h4>
                                    <p>Proceedings of ACM Conference on Human Information Interaction and Retrieval (CHIIR), pp. 221-232</p>
                                    <p>Authors: Chirag Shah, Emily M. Bender</p>
                                </div>
                            </div>
                            <div class="md:flex md:space-x-10 md:space-y-0 space-y-5 mt-5">
                                <div class="icon text-3xl primary-color text-center">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                <div class="">
                                    <h4 class="font-bold primary-color">An Integrated Model of Task, Information Needs, Sources and Uncertainty to Design Task-Aware Search Systems. (2021)</h4>
                                    <p>Proceedings of ACM International Conference on Theory of Information Retrieval (ICTIR)</p>
                                    <p>Authors: Shawon Sarkar, Chirag Shah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="primary-color font-bold text-xl uppercase mb-3">PRESENTATIONS</h4>
                        <div class="text-base font-light leading-7">
                            <div class="">
                                <h4 class="font-bold primary-color">Can Large Scale Information Access Systems Be Made Fair, Unbiased, and Transparent? (2022)</h4>
                                <p>UW eScience Institute - Seattle, Washington (Virtual)</p>
                            </div>
                            <div class="mt-5">
                                <h4 class="font-bold primary-color">Seeking Human-AI Synergy for Fair and Transparent Search and Recommender Systems (2022)</h4>
                                <p>Microsoft Research Lab - Redmond, WA</p>
                            </div>
                            <div class="mt-5">
                                <h4 class="font-bold primary-color">Task-Based Intelligent Retrieval and Recommendation (2022)</h4>
                                <p>University of Helsinki - Helsinki, Finland</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- content end --}}
            </div>
            {{-- single-faculty-content end --}}
        </div>

    </section>
    {{-- faculty content section end --}}
@endsection
