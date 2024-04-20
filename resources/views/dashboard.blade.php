<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem Vindo') }}
        </h2>

    </x-slot>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <caption>Agenda</caption>

                        <thead>
                            <tr>
                                <th scope="col">Paciênte</th>
                                <th scope="col">Data-Sessão</th>
                                <th scope="col">N-Sessão</th>
                                <th scope="col">Faltas</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td data-label="Paciênte">{{ $user->name }}</td>
                                    <td data-label="Data-S">04/01/2016</td>
                                    <td data-label="N-Sessão">$1,190</td>
                                    <td data-label="Faltas">0</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
