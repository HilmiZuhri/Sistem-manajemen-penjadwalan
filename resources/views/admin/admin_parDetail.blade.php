@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid">
            <div class="container-fluid mt-4 mb-3 px-5">
                @foreach ($user as $user)
                    <label for="" class="form-label h3">Jadwal Tugas {{ $user->nama }}</label>
                @endforeach
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    @if ($jadwal->isEmpty())
                        <div class="container mx-4 my-4 h5">{{$user->nama}} belum ada Tugas</div>
                        <div class="container mx-4 my-4 h6">Buat jadwal Tugas</div>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 8%">No</th>
                                <th>Tugas</th>
                                <th></th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($jadwal as $jadwal)
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>{{ $jadwal->judul }}</td>
                                    @if ($jadwal->status_id == '1')
                                        <td>Belum Selesai</td>
                                    @else
                                        <td>Selesai</td>
                                    @endif
                                </tr>
                            @endforeach
                        </thead>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
