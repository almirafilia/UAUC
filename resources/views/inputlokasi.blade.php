@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Lokasi</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('lokasis.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('kode_lokasi') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Kode Lokasi</label>

                            <div class="col-md-6">
                                <input id="kode_lokasi" type="text" class="form-control" name="kode_lokasi" value="{{ old('kode_lokasi') }}" required autofocus>

                                @if ($errors->has('kode_lokasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lokasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('nama_lokasi') ? ' has-error' : '' }}">
                            <label for="nama_lokasi" class="col-md-4 control-label">Nama Lokasi</label>

                            <div class="col-md-6">
                                <input id="nama_lokasi" type="text" class="form-control" name="nama_lokasi" value="{{ old('nama_lokasi') }}" required autofocus>

                                @if ($errors->has('nama_lokasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_lokasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
