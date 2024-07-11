@extends('app')
@section('main')
    <h1 class="text-3xl text-black pb-6">{{ $title }}</h1>
    <form class="w-full" method="POST" action="{{ route('ruangan.update', $data->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruangan</label>
            <input type="text" id="base-input" name="nama" value="{{$data->nama}}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Deskripsi Ruangan</label>
            <textarea id="message" rows="4" name="deskripsi"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$data->deskripsi}}</textarea>
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Foto</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file" name="foto">
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Simpan
        </button>
    </form>
@endsection
