<x-admin-layout>
    <x-slot name="header">
        <a class="underline text-l text-gray-800 dark:text-gray-200 leading-tight" href="{{ route('admin.team') }}">
            {{ __('Kembali') }}
        </a>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('admin.team.update', $team->id) }}">
                    @csrf
                    @method('put')
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nama Tim')" />
                        <x-text-input id="name" class="block mt-1 w-full" value="{{$team->name}}" type="text" name="name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="pic" :value="__('Nama Lapangan')" />
                        <x-text-input id="pic" class="block mt-1 w-full" value="{{$team->pic}}" type="text" name="pic" required autofocus autocomplete="pic" />
                        <x-input-error :messages="$errors->get('pic')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="address" :value="__('Alamat')" />
                        <x-text-input id="address" class="block mt-1 w-full" value="{{$team->address}}" type="text" name="address" required autofocus autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>


                    <!-- Email Address -->
                    <div class="mt-4">
                    <x-input-label for="total_member" :value="__('Total Member')" />
                        <x-text-input id="total_member" class="block mt-1 w-full" value="{{$team->total_member}}" type="text" name="total_member" required autofocus autocomplete="total_member" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>


               
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
