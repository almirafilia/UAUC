@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Pelapor</div>
                    <div class="panel-body">

                        <form method="post" action="{{ URL::to('/kontraktors.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama :</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>

                        <br>

                        <div class="form-group{{ $errors->has('namainstansi') ? ' has-error' : '' }}">
                            <label for="namainstansi" class="col-md-4 control-label">Nama Instansi :</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="namaperusahaan" value="{{ old('namainstansi') }}" required autofocus>

                                @if ($errors->has('namainstansi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namainstansi') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>

                        <div class="form-group">
                            <!-- <label for=" " class="col-md-4 control-label">NIK</label> -->
                        <div class="col-md-6">
                                <input id="role" type="hidden" class="form-control" name="role" value="others" readonly>
                        </div>
                        </div>
        
                          <div class="row">
                            <div class="col-md-4"></div>
                              <div class="form-group col-md-4" style="margin-top:60px">
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection