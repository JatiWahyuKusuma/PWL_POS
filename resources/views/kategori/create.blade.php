@extends('layout.app')

{{--Customize layout sections--}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Create')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Buat Kategori Baru</h3>
        </div>

        <form method="post" action="../kategori">
            <div class="card-body">
                <div class="form-Group">
                    <label for="namaKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="">
                </div>
                <div class="form-Group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="">
                </div>
               
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
</div>
@endsection
