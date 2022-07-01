<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>

                    <div class="mt-8 text-2xl">
                        Welcome to your Website!
                    </div>


                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 ">
                    <div class="col-md-12">
                        <iframe style="width: 100%; height: 700px" src="/"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
