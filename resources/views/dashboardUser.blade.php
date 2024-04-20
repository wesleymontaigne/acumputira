<x-app-layout>
    <x-slot name="header">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agenda') }}
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
                                <th scope="col">Prox-Sessão</th>
                                <th scope="col">Horário</th>
                                <th scope="col">Faltas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                //  dd($users);
                            @endphp
                            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                                @foreach ($users as $user)
                                    <tr>

                                        <td data-label="Prox-Sessão">
                                            <p>{{ $user->proxima_consulta }}</p>
                                        </td>
                                        <td data-label="Horário">
                                            <p>{{ $user->horario }}</p>
                                        </td>
                                        <td data-label="Faltas">
                                            <p>{{ $user->faltas }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </div>






                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>
    <script src="{{ asset('js/sweetalert.js') }}" defer></script>
</x-app-layout>
