@extends('layouts.master')

@section('content')
    <section class="">
        <div class="container bg-white">
            <!-- single pople area -->
            <div class="lg:flex space-y-10 lg:space-y-0 px-4 py-5">
                <!-- people sidebar start -->
                <div class="lg:w-1/4 w-full">
                    <div class=" shadow-lg pb-20">
                        <img class="h-80 w-80 object-cover" src="{{ asset('frontend/images/user.jpg') }}" alt="">
                        <div class="pl-5 pr-2 text-gray-700">
                            <h4 class="mt-2 mb-4 text-2xl font-bold">Contact Me</h4>
                            <p class=" text-sm">Department Of Microbiology</p>
                            <p class=" text-sm">Noakhali Science and Technology University</p>
                            <p class=" text-sm">Email: Example@nstu.com</p>
                        </div>
                    </div>
                </div>
                <!-- people sidebar end -->

                <!-- people details start -->
                <div class="lg:w-3/4 w-full lg:ml-10 lg:mr-5">
                    <!-- heading card start -->
                    <div class=" nav-bg text-white p-5">
                        <h2 class=" font-bold text-2xl">Dr. Firoz Ahmed</h2>
                        <p class=" text-base">Chairman</p>
                        <p class=" text-base">Department of Microbiology</p>
                        <p class=" text-base">Noakhali Science and Technology University</p>
                        <p class=" text-base">Email: Example@nstu.com</p>
                    </div>
                    <!-- heading card end -->

                    <!-- Persion description start -->
                    <div class="education-tab p-5">
                        <p class=" text-base text-gray-700 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio inventore rerum, molestias temporibus neque aut ratione fugit, amet tempora esse quo. Aliquid soluta id eaque, suscipit corrupti aliquam! Ducimus, architecto esse atque fuga a amet. Sint, tenetur eum? Aliquam aut ipsam laudantium cumque cupiditate molestias nam alias enim fugit dolor! Veritatis placeat commodi a eligendi magnam! Recusandae repellat esse voluptatem odio repudiandae molestias nulla amet ab quidem nemo, impedit suscipit magnam cumque voluptatibus, reiciendis consectetur tempora? Nemo quaerat libero porro enim et repudiandae, amet quis quidem nesciunt quam voluptate eum illum a. Architecto, ullam? Ipsum reprehenderit iure possimus unde voluptates.</p>
                        <div class="" x-data="{ selected: 'option-1' }">
                            <ul class="flex justify-center space-x-6 text-white">
                                <li>
                                    <button x-on:click="selected = 'option-1'"
                                        class="inline-block p-2 btn-bg rounded hover:bg-blue-900"
                                    >
                                        Education
                                    </button>
                                </li>
                                <li>
                                    <button x-on:click="selected = 'option-2'"
                                        class="inline-block p-2 btn-bg rounded hover:bg-blue-900"
                                    >
                                        Exprience
                                    </button>
                                </li>
                                <li>
                                    <button x-on:click="selected = 'option-3'"
                                        class="inline-block p-2 btn-bg rounded hover:bg-blue-900"
                                    >
                                        Research Activities
                                    </button>
                                </li>
                                <li>
                                    <button x-on:click="selected = 'option-4'"
                                        class="inline-block p-2 btn-bg rounded hover:bg-blue-900"
                                    >
                                        Membership
                                    </button>
                                </li>
                                <li>
                                    <button x-on:click="selected = 'option-5'"
                                        class="inline-block p-2 btn-bg rounded hover:bg-blue-900"
                                    >
                                        Publication
                                    </button>
                                </li>
                                <li>
                                    <button x-on:click="selected = 'option-6'"
                                        class="inline-block p-2 btn-bg rounded hover:bg-blue-900"
                                    >
                                        Award
                                    </button>
                                </li>
                                <li>
                                    <button x-on:click="selected = 'option-7'"
                                        class="inline-block p-2 btn-bg rounded hover:bg-blue-900"
                                    >
                                        Contact
                                    </button>
                                </li>
                            </ul>
                            <div class="mt-6 bg-white">
                                {{-- single tab start --}}
                                <div class="relative" x-show="selected === 'option-1'">
                                    <div class="flex flex-col">
                                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                                <div class="overflow-hidden">
                                                    <table class="min-w-full">
                                                        <thead class="border-b">
                                                            <tr>
                                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                Dgree Name
                                                                </th>
                                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                Group/Major Subject
                                                                </th>
                                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                Board/Institute
                                                                </th>
                                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                Country
                                                                </th>
                                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                                Passing Year
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border-b">
                                                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                                ph.D.
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Bacteriology
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Department of Bacteriology, Hirosaki University
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Japan
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                1989
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b">
                                                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                                Masters
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Microbiology
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Department of Microbiology, University of Dhaka
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Bangladesh
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                1981
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b">
                                                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                                Bachelor
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Biochemistry
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Department of Microbiology, University of Dhaka
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                Bangladesh
                                                                </td>
                                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                                1980
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- single tab end --}}
                            </div>
                        </div>
                    </div>
                    <!-- Persion description end -->
                </div>
                <!-- people details end -->
            </div>
        </div>
    </section>
@endsection
