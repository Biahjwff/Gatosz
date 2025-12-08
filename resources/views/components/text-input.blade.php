@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'h-8 w-80 bg-bege-escuro rounded-lg border-none shadow-sm shadow-marrom-escuro text-lg placeholder-marrom-escuro focus:ring-0']) }}>
