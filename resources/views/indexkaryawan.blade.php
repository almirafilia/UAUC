<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Nama Perusahaan</th>
        <th>Jenis Temuan</th>
        <th>Area</th>
        <th>Lokasi</th>
        <th>Tanggal</th>
        <th>Deskripsi</th>
        <th>Rekomendasi</th>
        <th>Evidence</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($karyawans as $karyawan)
      @php
        $date=tanggal('Y-m-d', $homek['tanggal']);
        @endphp
      <tr>
        <td>{{$karyawan['id']}}</td>
        <td>{{$karyawan['nama']}}</td>
        <td>{{$karyawan['perustansi']}}</td>
        <td>{{$karyawan['jenistemuan']}}</td>
        <td>{{$karyawan['area']}}</td>
        <td>{{$karyawan['lokasi']}}</td>
        <td>{{$karyawan['tanggal']}}</td>
        <td>{{$karyawan['deskripsi']}}</td>
        <td>{{$karyawan['rekomendasi']}}</td>
        <td>{{$karyawan['evidence']}}</td>
        
        <td><a href="{{action('KaryawanController@edit', $karyawan['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('KaryawanController@destroy', $karyawan['id'])}}" method="post">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>