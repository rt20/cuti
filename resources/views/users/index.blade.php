@extends('layouts.app')

@section('title','Pegawai')

@section('content') 

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Pegawai</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pegawai</li>
        </ol>
   
        <div class="card mb-4">
            <div class="card-header">
            <a class="btn btn-primary" href="index.html">+</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>No HP</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @forelse($user as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nohp }}</td>
                            <td class="border px-6 py- text-center">
                                    <form action="{{ route('users.destroy', $item->id) }}" method="POST" class="inline-block">
                                        {!! method_field('delete') . csrf_field() !!}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                        </tr>
                        @empty
                            <tr>
                               <td colspan="6" class="border text-center p-5">
                                   Data Tidak Ditemukan
                               </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection