@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Dosen</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pengajar di Fakultas</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dosen as $dosen)
                    <tr>
                        <td>{{ $dosen->id }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->pengajar_di }}</td>
                        <td>{{ $dosen->nip }}</td>
                        <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection