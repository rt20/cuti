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
            
            <div class="card-body">
            <form class="w-full" action="{{ route('cutis.store') }}" method="post" id="my_form"
                        enctype="multipart/form-data">
                        @csrf
                        

                        <div class="row">
                            <div class="col-sm-2">
                                Nama Pegawai*
                            </div>
                            <div class="col-sm-9">
                                <select name="user_id" id="selectbarang"
                                class="form-control form-control-sm" required>
                                    <option value="">- Pilih Nama Pegawai</option>
                                    @foreach($users ?? '' as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('item_id') == $item->id ? 'selected' : null }}>
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div><br>
                        </div>
                        </br>
                      
                        <div class="row">
                            <div class="col-sm-2">
                                Mulai Cuti*
                            </div>
                            <div class="col-sm-3">
                                <input type="date" name="mulaicuti" id="date_start" placeholder="Tanggal mulai"
                                class="form-control form-control-sm datepicker" 
                                    style="width: 100%;" value="{{old('mulaicuti')}}" required>
                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Selesai Cuti
                            </div>
                            <div class="col-sm-3">
                                <input type="date" name="akhircuti" id="date_end" placeholder="Tanggal selesai"
                                class="form-control form-control-sm datepicker" 
                                    style="width: 100%;" value="{{old('akhircuti')}}" required>
                            </div>
                        </div>
                        <br>
                      
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</main>

@endsection