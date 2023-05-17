<x-app-layout>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vsetky rezervacie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                            <div class="overflow-hidden">

                                <table class="min-w-full text-left text-sm font-light">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">#</th>
                                        <th scope="col" class="px-6 py-4">Datum</th>
                                        <th scope="col" class="px-6 py-4">Cas</th>
                                        <th scope="col" class="px-6 py-4">Meno</th>
                                        <th scope="col" class="px-6 py-4">E-mail</th>
                                        <th scope="col" class="px-6 py-4">Poznamka</th>
                                        <th scope="col" class="px-6 py-4">Pracovnik</th>
                                        <th scope="col" class="px-6 py-4">Sluzba</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $reservation)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$reservation->id}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$reservation->date}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$reservation->time}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$reservation->name}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$reservation->email}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$reservation->note}}</td>
                                            @if($reservation->worker)
                                                <td class="whitespace-nowrap px-6 py-4">{{$reservation->worker->name}}</td>
                                            @else
                                                <td class="whitespace-nowrap px-6 py-4"></td>
                                            @endif
                                            @if($reservation->service)
                                                <td class="whitespace-nowrap px-6 py-4">{{$reservation->service->title}} - {{$reservation->service->price}} &euro;</td>
                                            @else
                                                <td class="whitespace-nowrap px-6 py-4"></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

