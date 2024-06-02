@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid py-5" style="width: 50%">
            <div class="card border-0">
                <div class="card justify-content-center align-items-center">
                    <div class="card-body mb-3">
                        <p class="h4 card-text">Edit</p>
                    </div>
                    <form action="{{ route('admin_updateCourse', ['id' => $jadwal->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container-fluid">
                            <div class="col">
                                <div class="container">
                                    <div class="col mb-3">
                                        <div class="row mb-3">
                                            <label for="">Judul</label>
                                            <input type="text" class="form-control" name="judul" style="width: 100%"
                                                value="{{ $jadwal->judul }}">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Deskripsi Tugas</label>
                                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10">{{ $jadwal->deskripsi }}</textarea>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Tempat Pengumpulan</label>
                                            <input type="text" class="form-control" name="lokasi" style="width: 100%"
                                                value="{{ $jadwal->lokasi }}">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Mulai pengerjaan</label>
                                            <input type="datetime-local" class="form-control" name="waktu_mulai" style="width: 100%"
                                                value="{{ $jadwal->waktu_mulai }}">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Deadline pengerjaan</label>
                                            <input type="datetime-local" class="form-control" name="waktu_selesai"
                                                style="width: 100%" value="{{ $jadwal->waktu_selesai }}">
                                        </div>
                                        <div class="row mb-3">
                                            <label for="">Status</label>
                                            @if ($jadwal->status_id == 1)
                                                <input type="text" class="form-control bg-white"
                                                    value="Tugas Belum Selesai" disabled>
                                            @elseif ($jadwal->status_id == 2)
                                                <input type="text" class="form-control bg-white"
                                                    value="Sudah Diselesaikan" disabled>
                                            @else
                                                <input type="text" class="form-control bg-white"
                                                    value="Sudah melebihi batas deadline" disabled>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="container">
                                        <button onclick="window.location.href='{{ url()->previous() }}'"
                                            class="btn btn-danger">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Edit</button>

                                    </div>
                                </center>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
