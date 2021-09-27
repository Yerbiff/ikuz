<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Zlecenia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="table w-full p-2">
                    <table class="w-full border">
                        <thead>
                        <tr class="bg-gray-50 border-b">
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    ID
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Zwierze
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Godzina
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Informacje dodatkowe
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Działania
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($new_orders as $new_order)
                            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                                @if($new_order['user_id'] == Auth::user()->id)
                                <td class="p-2 border-r">{{$new_order['id']}}</td>
                                <td class="p-2 border-r">{{$new_order['animal']}}</td>
                                <td class="p-2 border-r">{{$new_order['time']}}</td>
                                <td class="p-2 border-r">{{$new_order['info']}}</td>
                                <td>
{{--                                    <a href="edit/{{$new_order['id']}}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>--}}
                                    <a href="delete/{{$new_order['id']}}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Usuń</a>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('new-order') }}" :active="request()->routeIs('new-order')" >
                <div class="appearance-none block w-full bg-gray-800 text-white border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" style="text-align: center">
                    {{ __('Nowe Zlecenie') }}
                </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
