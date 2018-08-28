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
            
            #dokumen {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #dokumen td, #dokumen th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #dokumen tr:nth-child(even){background-color: #f2f2f2;}

            #dokumen tr:hover {background-color: #ddd;}

            #dokumen th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;

    </style>

    <body>
        
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size:20px">Ranking Pelapor</div>
                    
                    <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ranking karwayan yang melakukan pelaporan:

                    <br>

                    <br>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <table id="dokumen">
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>Nama<center></th>
                                    <th><center>NIK<center></th>
                                    <th><center>Jumlah Laporan<center></th> 

                                </tr>

                                <tbody>
                            @php $no = 1; @endphp
                                @foreach($rank as $datas)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $datas->name }}</td>
                                        <td>{{ $datas->nik}}</td>
                                        <td>{{ $datas->jumlah}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

 

</body>

</html>