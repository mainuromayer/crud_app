<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Category') }}
            </h2>

            <a class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150" href="{{ url('categories') }}">
                {{ __('Back') }}
            </a>
        </div>
    </x-slot>

    <div class="content-wrapper">
        <!-- Main Content Start -->
        <section class="content py-12 px-4 sm:px-6 lg:px-8">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            {{--            @if(session('status'))--}}
            {{--                <div class="alert alert-success">{{ session('status') }}</div>--}}
            {{--            @endif--}}


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 border-b border-gray-200 dark:border-gray-600">
                        <h1 class="text-center text-2xl font-semibold text-gray-900 dark:text-gray-200">Edit Category</h1>
                    </div>
                    <div class="p-6 sm:px-20">
                        <form method="POST" action="{{ url('/categories/'.$category->id.'/edit') }}">
                            @csrf
                            @method('PUT')

                            <!-- Category Name -->
                            <div>
                                <x-input-label for="category_name" :value="__('Category Name')" />
                                <x-text-input id="category_name" class="block mt-1 w-full" type="text" name="category_name" :value="$category->category_name" autofocus />
                                <x-input-error :messages="$errors->get('category_name')" class="mt-2" />
                                {{--                                @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror--}}

                            </div>

                            <!-- Description -->
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-area id="description" class="block mt-1 w-full" name="description" autofocus>{{ $category->description }}</x-text-area>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                {{--                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror--}}
                            </div>


                            <!-- Is Active -->
                            <div class="block mt-4">
                                <label for="is_active" class="inline-flex items-center">
                                    <input id="is_active" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="is_active" value="1" {{ $category->is_active ? 'checked' : '' }}>
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Is Active') }}</span>
                                </label>
                                {{--                                <x-input-error :messages="$errors->get('is_active')" class="mt-2" />--}}
                                {{--                                    @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror--}}
                            </div>


                            <!-- Update Button -->
                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ms-4">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content End -->

    </div>


</x-app-layout>
