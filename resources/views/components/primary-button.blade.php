<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-guest mx-2 mt-2']) }}>
    {{ $slot }}
</button>
