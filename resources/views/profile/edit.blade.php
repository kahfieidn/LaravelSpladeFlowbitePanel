<x-app-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <div class="p-4 sm:ml-64">
        <div class="p-4 mb-6 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl" dusk="update-profile-information">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 mb-6 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl" dusk="update-password">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 mb-6 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl" dusk="delete-user">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>