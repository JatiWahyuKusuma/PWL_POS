@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
  <div class="container">
    <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ..." fdprocessedid="vgkocd">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Text Disabled</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled="" fdprocessedid="1y0qsq">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <!-- textarea -->
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Textarea Disabled</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                </div>
              </div>
            </div>

            <!-- input states -->
            <div class="form-group">
              <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                success</label>
              <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." fdprocessedid="pbfl7b">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                warning</label>
              <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ..." fdprocessedid="jkwuux">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                error</label>
              <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ..." fdprocessedid="1baesg">
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
@endsection

@push('scripts')
  {{-- {{ $dataTable->scripts()}} --}}
@endpush