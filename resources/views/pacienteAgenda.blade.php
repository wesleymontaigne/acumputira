<x-app-layout>
    <x-slot name="header">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agenda') }} {{ $users[0]->name ?? $users->name }}
        </h2>
    </x-slot>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <caption>Adicionar datas</caption>
                        <thead>
                            <tr>
                                <th scope="col">Paciênte</th>
                                <th scope="col">Prox-Sessão</th>
                                <th scope="col">Horário</th>
                                <th scope="col">Faltas</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                                <form method="post" action="{{ route('AgendaController.store') }}">
                                    @csrf
                                    <tr>
                                        <td data-label="Paciênte"><a
                                                :href="route('dashboard')">{{ $users[0]->name ?? $users->name }}</a>
                                        </td>
                                        <td data-label="Prox-Sessão"><input type="date" name="proxima_consulta"
                                                id="proxima_consulta" value="" />
                                        </td>
                                        <td data-label="Horário"><input type="text" name="horario" id="h1" />
                                        </td>
                                        <td data-label="Faltas"><input type="text" name="faltas" id="f1"
                                                value="" />
                                        </td>
                                        <td data-label="">
                                            <x-primary-button>{{ __('Enviar') }}</x-primary-button>
                                        </td>
                                        <td data-label="checkbox">
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" value="true"
                                                    name="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">+
                                                    10 Datas</label>
                                            </div>

                                        </td>
                                    </tr>
                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                            </div>




                        </tbody>
                    </table>
                    <input type="hidden" name="paciente_id" value="{{ $users[0]->paciente_id ?? $users->id }}" />

                    </form>



                </div>
            </div>
        </div>


    </div>

    @php
        // dd(csrf_token());
    @endphp
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
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($users[0]->paciente_id))
                                <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                                    @foreach ($users as $user)
                                        <tr>
                                            <form method="post" action="{{ route('AgendaController.update') }}">
                                                @csrf
                                                <td data-label="Prox-Sessão"><input type="date"
                                                        name="proxima_consulta" id="proxima_consulta"
                                                        value="{{ $user->proxima_consulta }}" />
                                                </td>
                                                <td data-label="Horário"><input type="text" name="horario"
                                                        id="h1" value="{{ $user->horario }}" />
                                                </td>
                                                <td data-label="Faltas"><input type="text" name="faltas"
                                                        id="f1" value="{{ $user->faltas }}" />
                                                </td>
                                                <td data-label="">
                                                    <x-primary-button>{{ __('Editar') }}</x-primary-button>
                                                    <input type="hidden" name="paciente_id"
                                                        value="{{ $user->paciente_id }}" />
                                                    <input type="hidden" name="agenda_id"
                                                        value="{{ $user->id }}" />
                                            </form>

                                            <x-primary-button
                                                onclick="deletar({{ $user->paciente_id }},{{ $user->id }},'{{ csrf_token() }}')">{{ __('Apagar') }}</x-primary-button>
                                            </td>
                                        </tr>
                                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                    @endforeach
                                </div>
                            @endif





                        </tbody>
                    </table>
                    <input type="hidden" name="paciente_id" value="{{ $users[0]->paciente_id ?? $users->id }}" />





                </div>
            </div>
        </div>


    </div>
    <script src="{{ asset('js/sweetalert.js') }}" defer></script>
</x-app-layout>
