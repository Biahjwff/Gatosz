<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-marrom-escuro rounded-lg text-white px-10 py-1 shadow shadow-marrom-escuro transition duration-400 hover:bg-rosa-escuro']) }}>
    {{ $slot }}
</button>
