@extends('app')
@section('main')
    <h1 class="text-3xl text-black pb-6">{{ $title }}</h1>

    @session('success')
        <div id="alert-3"
            class="flex justify-between items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endsession
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="dataTable">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Ruangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi Ruangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Foto Ruangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status Ruangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ruangans as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>
                            <img src="{{asset('storage/images/'.$item->foto)}}" alt="">    
                        </td>
                        <td>{{$item->status}}</td>
                        <td>
                            <a href="{{route('ruangan.edit', $item->id)}}">Edit</a>    
                            <form method="POST" action="{{route('ruangan.destroy', $item->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus Ruangan</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
