<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Paciente') }}
        </h2>
    </x-slot>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <caption>Pacientes</caption>
                        <thead>
                            <tr>
                                <th scope="col">Paciênte</th>
                                <th scope="col">Data</th>
                                <th scope="col">Sessão</th>
                                <th scope="col">Faltas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Paciênte">Visa - 3412</td>
                                <td data-label="Data">04/01/2016</td>
                                <td data-label="Sessão">$1,190</td>
                                <td data-label="Faltas">0</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Paciênte">Visa - 6076</td>
                                <td data-label="Data">03/01/2016</td>
                                <td data-label="Sessão">$2,443</td>
                                <td data-label="Faltas">0</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Paciênte">Corporate AMEX</td>
                                <td data-label="Data">03/01/2016</td>
                                <td data-label="Sessão">$1,181</td>
                                <td data-label="Faltas">0</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Paciênte">Visa - 6076</td>
                                <td data-label="Data">02/01/2016</td>
                                <td data-label="Sessão">$842</td>
                                <td data-label="Faltas">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
