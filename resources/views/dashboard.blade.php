<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(count($clients) < 1)
                        <p>Zatial nie su zaznamy</p>
                        @else
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">E-mail</th>
                                    <th scope="col" class="px-6 py-4">Ucasti</th>
                                    <th scope="col" class="px-6 py-4">Celkova cena</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$client->id}}</td>
                                        <td class="whitespace-nowrap px-6 py-4"><a href="/dashboard/{{$client->id}}">{{$client->email}}</a></td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$client->attendance}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$client->price}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
