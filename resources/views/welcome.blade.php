<x-layout>
    <x-slot:title>
        Boas vindas!
    </x-slot:title>
    <p>Olá laravel</p>
    <ul>
        @foreach($lista as $itemDaLista)
            <li>{{ $itemDaLista }}</li>
        @endforeach
    </ul>
</x-layout>