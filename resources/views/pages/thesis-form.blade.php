@extends('layouts.default')
@section('content')


    <div class="flex v-screen bg-white-200 items-center justify-center  mt-32 mb-32">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
            <div class="flex justify-center py-4">
                <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Thesis Form</h1>
                </div>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('status') }}
                </div>
            @elseif(session('failed'))
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('failed') }}
                </div>
            @endif

            <form method="post" action="{{ url('create') }}" class="needs-validation" novalidate >
                @csrf

                <!-- First Subject Begin-->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">First Subject</label>
                    <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <!-- First Subject End-->

               <!-- Second Subject Begin -->
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Second Subject</label>
                    <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                    </div>
                <!-- Second Subject End -->

                <!-- Title Begin-->
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Title</label>
                    <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" id="title" placeholder="Title" required />
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!-- Title End-->

                 <!-- Abstract Begin-->
                 <div class="grid grid-cols-1 mt-5 mx-7">
                     <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Abstract</label>
                     <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Please Write Your Thesis Abstract" />
                 </div>
                 <!-- Abstract End-->

                 <!-- Author Begin-->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Author First Name</label>
                    <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="First Name" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Author Last Name</label>
                    <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Last Name" />
                </div>
            </div>
                 <!-- Author End-->

                 <!-- Supervisor Begin-->
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">SuperVisor First Name</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="First Name" />
                        </div>
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">SuperVisor Last Name</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Last Name" />
                        </div>
                 </div>
                 <!-- Supervisor End-->

                 <!-- Co Supervisor Begin-->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Co SuperVisor First Name</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="First Name" />
                        </div>
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Co SuperVisor Last Name</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Last Name" />
                        </div>
                    </div>
                 <!-- Co Supervisor End-->

                 <!-- Year & Type Begin -->
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                     <!-- Year -->
                    <div class="grid grid-cols-1">
                         <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Year</label>
                              <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                     <option>Option 1</option>
                                     <option>Option 2</option>
                                     <option>Option 3</option>
                              </select>
                        </div>

                     <!-- Type -->
                     <div class="grid grid-cols-1">
                         <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Type</label>
                         <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                             <option>Option 1</option>
                             <option>Option 2</option>
                             <option>Option 3</option>
                         </select>
                     </div>
                 </div>
                    <!-- Year & Type End -->

                 <!-- University & Institute Begin -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <!-- University -->
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">University</label>
                            <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>

                        <!-- Institute -->
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Institute</label>
                            <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                 <!-- University & Institute End -->

                 <!-- Number Of Pages Begin-->
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Number Of Pages</label>
                <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Number Of Pages" />
            </div>
                 <!-- Number Of Pages End-->

                 <!-- Language Of The Thesis Text Begin-->
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Language Of The Thesis Text</label>
                        <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <!-- Language Of The Thesis Text End-->

                    <!-- Keywords Begin-->
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Keywords</label>
                        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Keywords" />
                    </div>
                    <!-- Keywords End-->


            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
             <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Submit</button>
            </div>

        </form>
    </div>

@stop


