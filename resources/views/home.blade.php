@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sistem Pelaporan UAUC</title>

    </head>

    <style>
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                
            }

            .position-ref {
                position: relative;
                justify-content: center;
                display: flex;
            }

            .position {
                position: absolute;
                justify-content: justify;
                display: flex;
            }

            .links > a {
                color: #373434;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .font {
                color: #373434;
                padding: 30 25px;
                text-decoration: none;
            }

            legend {
                background-color: #000;
                color: #fff;
                padding: 3px 6px;
            }

            .output {
                font: 1rem 'Fira Sans', sans-serif;
            }

            input {
                margin: .4rem;
            }

            label {
                display: inline-block;
                text-align: right;
                width: 20%;
            }
            
    </style>

    <body>

                
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size:20px">Formulir Pelaporan UAUC</div>
                    
                    <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang di Sistem Pelaporan UAUC!

                    <br>

                    <form class="form-horizontal" method="POST" action="{{ URL::to('/karyawans.store')}}">
                        {{ csrf_field() }}

                    <br>

                    <div class="form-group">
                            <!-- <label for=" " class="col-md-4 control-label">NIK</label> -->
                        <div class="col-md-6">
                                <input id="nik" type="hidden" class="form-control" name="nik" value="{{ Auth::user()->nik }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Unit Kerja</label>
                        <div class="col-md-6">
                                <input id="unitkerja" type="text" class="form-control" name="unitkerja" value="{{ Auth::user()->unitkerja }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Kode Unit Kerja</label>
                        <div class="col-md-6">
                                <input id="kodeunitkerja" type="text" class="form-control" name="kodeunitkerja" value="{{ Auth::user()->kodeunitkerja }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Jenis Temuan*</label>
                                    <div class="col-md-6">
                                        <label>
                                            <input type="radio" name="jenistemuan" value="Unsafe Action" required> Unsafe Action
                                        </label>

                                        <label>
                                            <input type="radio" name="jenistemuan" value="Unsafe Condition" required> Unsafe Condition
                                        </label>
                                </div>
                    </div>

                    <div class="form-group">
                        <label for=" " class="col-md-4 control-label">Area*</label>
                            <div class="select col-md-6">    
                                <select name="area" required>

                                    <option value="Pabrik 1">Pabrik 1</option>
                                    <option value="Pabrik 2">Pabrik 2</option>
                                    <option value="Pabrik 3">Pabrik 3</option>
                                    <option value="Pelabuhan">Pelabuhan</option>
                                    <option value="Pergudangan">Pergudangan</option>
                                    <option value="Kantor Pusat">Kantor Pusat</option>
                                    <option value="Kantor Administrasi Lama">Kantor Administrasi Lama</option>
                                    <option value="Kawasan Diklat">Kawasan Diklat</option>
                                    <option value="Jalan Perusahaan">Jalan Perusahaan</option>
                                    <option value="Luar Kawasan Pabrik">Luar Kawasan Pabrik</option>
                                    <option value="IPA Gunungsari">IPA Gunungsari</option>
                                    <option value="IPA Babat">IPA Babat</option>
                                    <option value="11Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Lokasi*</label>
                        <div class="col-md-6">
                                <input id="lokasi" type="text" class="form-control" name="lokasi" required>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label" required>Tanggal*</label>
                                <fieldset>

                                        <div class="col-md-6">
                                        <!-- <label for="start">Start</label> -->
                                        <input type="date" id="start" name="tanggal"
                                        value="yyyy-mm-dd"
                                        min="2018-01-01" max="2050-12-31"

                                        required
                                         />
                                        </div>

                                </fieldset>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Deskripsi*</label>
                        <div class="col-md-6">
                            <textarea class="form-control" input id="deskripsi" type="text" class="form-control" name="deskripsi" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Rekomendasi</label>
                        <div class="col-md-6">
                                <input id="rekomendasi" type="text" class="form-control" name="rekomendasi">
                        </div>
                    </div>

                    <div class="form-group">
                            <label for=" " class="col-md-4 control-label">Evidence</label>
                        <div class="col-md-6">
                                <form action=" " enctype="multipart/form-data" method="post">
                                <input type="file" name="evidence">        
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

    <!-- Scripts -->
    <script src="{{ asset('js/customselect.js') }}"></script>

</body>

</html>