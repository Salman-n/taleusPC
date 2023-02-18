@include('head')
<br>
<div class="container">
<h1>Daftar PC Rakitan</h1>
<button class="btn btn-lg btn-primary" onclick="window.location.href='/rakitan'">Buat Rakitan Baru</button>
<hr>
@foreach ($data as $rakitan) 
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Rakitan {{$rakitan->name}}</h5>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Bagian</th>
      <th scope="col">Nama Bagian</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach(json_decode($rakitan->data)  as $key=>$part)
    <tr>
      <td>{{$key}}</td>
      <td>{{$part}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    <h1>Total: IDR {{number_format($rakitan->total)}}</h1>
</div>
</div>

<br>
@endforeach
</div>

<!-- foreach database hasil pc rakitan -->
@include('foot')