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
                        <caption>Lista de Paciêntes</caption>
                        <thead>
                            <tr>
                                <th scope="col">Paciênte</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td data-label="Paciênte"><a
                                            href="pacienteAgenda/{{ $user->id }}">{{ $user->name }}</a>
                                    </td>
                                    <td data-label="Bairro">{{ $user->bairro }}</td>
                                    <td data-label="Telefone">{{ $user->telefone }}</td>
                                    <td data-label="Email">{{ $user->email }}</td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
