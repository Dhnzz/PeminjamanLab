@extends('app')
@section('main')
    <h1 class="text-3xl text-black pb-6">{{ $title }}</h1>

    <div class="flex flex-wrap flex-row gap-5">
        <div
            class="block sm:w-full lg:w-1/3 p-6 bg-blue-600 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex gap-9 place-content-stretch">
            <i class="fa-solid fa-person-shelter text-5xl self-center text-white"></i>
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Jumlah Ruangan</h5>
                <h1 class="text-4xl font-bold tracking-tight text-white dark:text-white">0</h1>
            </div>
        </div>
        <div
            class="block sm:w-full lg:w-1/3 p-6 bg-green-600 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex gap-9 place-content-stretch">
            <i class="fa-solid fa-circle-check text-5xl self-center text-white"></i>
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Jumlah Ruangan Tersedia</h5>
                <h1 class="text-4xl font-bold tracking-tight text-white dark:text-white">0</h1>
            </div>
        </div>
        <div
            class="block sm:w-full lg:w-1/3 p-6 bg-yellow-600 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex gap-9 place-content-stretch">
            <i class="fa-solid fa-clock text-5xl self-center text-white"></i>
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Jumlah Ruangan Belum Tersedia</h5>
                <h1 class="text-4xl font-bold tracking-tight text-white dark:text-white">0</h1>
            </div>
        </div>
    </div>


@endsection
