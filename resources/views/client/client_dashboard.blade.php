@extends('layouts.client')
@section('content')
    <main>
        <div class="container-fluid px-5">
            
            <div class="card my-3">
                <div class="card-body">
                    <p class="h4 mb-3 text-end">Selamat Datang, {{ session('userNow.nama') }} 👋</p>
                    <p class="h3">Jangan sering menunda tugas</p>
                    <img src="{{ asset('assets/img/OIG3.jpeg') }}" alt="" style="width: 100%">
                </div>
            </div>
            {{--  --}}
        </div>
    </main>
@endsection
