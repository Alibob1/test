<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Посылки
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Создание пересылки</h1>
                    <form action="{{ route('dashboard') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="station_a">Введите город отправления</label>
                            <input id="station_a" class="rounded" type="text" name="station_a">
                        </div>
                        <div class="form-group">
                            <label for="station_b">Введите город пребытия</label>
                            <input id="station_b" class="rounded" type="text" name="station_b">
                        </div>
                        <div class="form-group">
                            <label for="weight">Введите вес посылки</label>
                            <input id="weight" class="rounded" type="number" min="0" name="weight">
                        </div>
                        <button type="submit" class="border border-gray-200 p-3">Расчетать стоимость</button>
                    </form>
                    @if($transportations)
                    <h2>
                        Список пересылок
                    </h2>
                    <div class="flex flex-col">
                        @foreach($transportations as $transportation)
                            <div class="border border-gray-200 flex justify-between py-2 px-2 rounded mb-2">
                                <div>
                                    Откуда: {{$transportation->station_a}}
                                </div>
                                <div>
                                    Куда: {{$transportation->station_b}}
                                </div>
                                <div>
                                    Вес: {{$transportation->weight}}
                                </div>
                                <div>
                                    Цена: {{$transportation->price}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
