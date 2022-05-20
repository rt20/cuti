@extends('layouts.app')

@section('title','Cuti')

@section('content') 

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Cuti</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cuti</li>
        </ol>
   
        <div class="card mb-4">
            <div class="card-header">
            <a class="btn btn-primary" href="{{ route('cutis.create') }}">+</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                           
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @forelse($cuti as $item)
                        <tr>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->mulaicuti }}</td>
                            <td>{{ $item->akhircuti }}</td>
                          
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