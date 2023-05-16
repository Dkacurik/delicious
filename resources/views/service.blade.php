<x-app-layout>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Služby') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-5">
                <!-- Modal toggle -->
                <button id="toggleCreateReservationModal" data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Pridať
                </button>

                <!-- Main modal -->
                <div id="createReservationModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                    <div class="relative w-full h-full max-w-2xl md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold" id="modalTitle">
                                    Pridať službu
                                </h3>
                                <button id="closeCreateReservationModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <form class="w-full max-w-lg" id="formCreateNewService">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                Názov služby
                                            </label>
                                            <input name="title" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="serviceTitle" type="text" placeholder="Služba">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                Cena
                                            </label>
                                            <input name="price" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="servicePrice" type="number" placeholder="45">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="null" id="serviceId">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <input id="addNewServiceToggle" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                        </div>
                                        <div class="w-full px-3">
                                            <button id="editServiceToggle" class="hidden bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Edit</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                            <div class="overflow-hidden">

                                <table class="min-w-full text-left text-sm font-light">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">#</th>
                                        <th scope="col" class="px-6 py-4">Názov služby</th>
                                        <th scope="col" class="px-6 py-4">Cena</th>
                                        <th scope="col" class="px-6 py-4">Edit</th>
                                        <th scope="col" class="px-6 py-4">Vymazať</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$service->id}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$service->title}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$service->price}} &euro;</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <button data-serviceId="{{$service->id}}" data-modal-toggle="staticModal" class="edit-service block text-white bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
                                                    Edit
                                                </button>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <button data-serviceId="{{$service->id}}" data-modal-toggle="staticModal" class="remove-service block text-white bg-red-400 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                                                    Vymazat
                                                </button>
                                            </td>
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

