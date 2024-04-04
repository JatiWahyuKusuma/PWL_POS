@extends('layout.template')
{{-- Customize layout sections --}}
@section('subtitle', 'Stok')
@section('content_header_title', 'Stok')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Stok Barang Baru</h3>
            </div>

            <form method="post" action="{{ url('stok') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="barang_id">Barang ID</label>
                        <input type="text" class="form-control" id="barang_id" name="barang_id"
                            placeholder="Masukkan Barang ID">
                    </div>
                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id"
                            placeholder="Masukkan User ID">
                    </div>
                    <div class="form-group">
                        <label for="stok_tanggal">Tanggal</label>
                        <input type="datetime-local" class="form-control" id="stok_tanggal" name="stok_tanggal"
                            placeholder="Masukkan Tanggal">
                    </div>
                    <div class="form-group">
                        <label for="stok_jumlah">Jumlah Stok</label>
                        <input type="text" class="form-control" id="stok_jumlah" name="stok_jumlah"
                            placeholder="Masukkan Jumlah Stok">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
