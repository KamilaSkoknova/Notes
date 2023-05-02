<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 btn btn-danger']) }}>
    {{ $slot }}
</button>
