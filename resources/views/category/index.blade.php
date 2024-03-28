<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Category') }}
            </h2>

            <a class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150" href="{{ url('categories/create') }}">
                {{ __('Add') }}
            </a>
        </div>
    </x-slot>





    <main class="content-wrapper">
        <!-- Main Content Start -->
        <section class="content py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- Content Header -->
                    <div class="p-6 sm:px-20 border-b border-gray-200 dark:border-gray-600">
                        <h1 class="text-center text-2xl font-semibold text-gray-900 dark:text-gray-200">List Category</h1>
                    </div>
                    <!-- Content Body -->
                    <div class="p-6 sm:px-20">
                        <div class="overflow-x-auto">
                            <!-- Categories Table -->

                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table id="userInfoTable"
                                       class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Category Name
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Description
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($categories as $item)
                                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                            <td class="text-center px-6 py-4">
                                                {{$item->id}}
                                            </td>
                                            <td class="text-center px-6 py-4">
                                                {{$item->category_name}}
                                            </td>
                                            <td class="text-center px-6 py-4">
                                                {{$item->description}}
                                            </td>
                                            <td class="text-center px-6 py-4">
                                                @if($item->is_active)
                                                    <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</span>
                                                @else
                                                    <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</span>
                                                @endif
                                            </td>
                                            <td class="text-center px-2 py-1"> <!-- Adjusted padding -->
                                                <a class="inline-flex items-center px-2 py-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150"
                                                   href="{{ url('categories/'.$item->id.'/edit') }}">
                                                    {{ __('Edit') }}
                                                </a>

                                                <a onclick="return confirm('Are you sure?')" class="inline-flex items-center px-2 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                                   href="{{ url('categories/'.$item->id.'/delete') }}">
                                                    {{ __('Delete') }}
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                            <!-- End Categories Table -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content End -->
    </main>

</x-app-layout>
