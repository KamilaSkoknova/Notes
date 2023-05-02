<x-app-layout>
    <x-slot name="">
        <h2 class="">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-4">
                        <div class="">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="p-4">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
