@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid py-3 px-5">
            <p class="h6 mb-5">Selamat Datang, {{ session('user.nama') }}</p>
            <p class="h3 mb-5">Jadwal</p>
            @if ($jadwal->isEmpty())
                <p class="h6 -mt-3">Tidak ada jadwal sekarang</p>
            @else
                <div class="row row-cols-2">
                    <div class="col mb-3">
                        @foreach ($jadwal as $jadwal)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <p>{{ $jadwal->judul }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/img/OIG5.jpeg') }}" alt=""
                            style="width: 100%; height: 75%; object-fit: cover; border-radius: 10px">
                    </div>
                </div>
            @endif

        </div>
    </main>
@endsection
