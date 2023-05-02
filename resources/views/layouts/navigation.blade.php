<nav x-data="{ open: false }" class="">
    <!-- Settings Dropdown -->
    <div class="container-fluid text-right">
        <x-dropdown align="top" width="48">
            <x-slot name="trigger" class="ms-4">
                <button class="btn-admin">
                    <div class="d-flex"><i class="bi bi-person-square me-1"></i><h5>{{ Auth::user()->name }}</h5></div>
                </button>
            </x-slot>

            <x-slot name="content">
                <a href="{{ route('notes.index') }}" class="px-4 py-2">Notes</a><br>
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</nav>
