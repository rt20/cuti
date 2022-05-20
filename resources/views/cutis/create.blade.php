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
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection