<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nowe Zlecenie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="w-full max-w-lg" action="new-order" method="POST">
                    @csrf
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-time">
                                Godzina
                            </label>
                            <input hidden=hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-time" name="time" type="time" placeholder="16" required="required">
{{--                            <p class="text-red-500 text-xs italic">Proszę o wybranie godziny</p>--}}
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-animal">
                                Zwierze
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="animal" id="grid-animal" required="required">
                                    <option>Krowa</option>
                                    <option>Świnia</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-info">
                                Infromacje dodatkowe
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-info" name="info" type="text" placeholder="Tu wpisz swój tekst">
                        </div>
{{--                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">--}}
                        <input class="appearance-none block w-full bg-gray-800 text-white border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-info" type="submit" placeholder="">
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
