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
      @foreach($homeks as $homeks)
      @php
        $date=tanggal('Y-m-d', $homek['tanggal']);
        @endphp
      <tr>
        <td>{{$homek['id']}}</td>
        <td>{{$homek['nama']}}</td>
        <td>{{$homek['perustansi']}}</td>
        <td>{{$homek['jenistemuan']}}</td>
        <td>{{$homek['area']}}</td>
        <td>{{$homek['lokasi']}}</td>
        <td>{{$homek['tanggal']}}</td>
        <td>{{$homek['deskripsi']}}</td>
        <td>{{$homek['rekomendasi']}}</td>
        <td>{{$homek['evidence']}}</td>

        <td><a href="{{action('HomekController@edit', $homek['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('HomeController@destroy', $homek['id'])}}" method="post">
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