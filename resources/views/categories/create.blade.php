<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Category') }}

            <a href="{{route('categories.index')}}" class="text-blue-600 visited:text-purple-600 float-right ...">
                Voltar
            </a>
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{route('categories.store')}}">
            @csrf

            <label class="block">
                <span class="block text-sm font-medium ">Name</span>
                <input type="text"
                       name="description"
                       placeholder="{{__('health')}}"
                       value="{{old('description')}}"
                       class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
            </label>
        </form>

    </div>

</x-app-layout>
