<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>index!</title>

    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
        
    </style>
    
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col">

            <h3 class="mb-2">Data X</h3>
            <a href="/pegawai/tambah" class="btn btn-primary my-3">Tambah Data</a>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">nama</th>
                            <th scope="col">jabatan</th>
                            <th scope="col">umur</th>
                            <th scope="col">alamat</th>
                            <th scope="col">opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pegawai as $p)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->pegawai_nama}}</td>
                            <td>{{$p->pegawai_jabatan}}</td>
                            <td>{{$p->pegawai_umur}}</td>
                            <td>{{$p->pegawai_alamat}}</td>
                            <td>
                                <a href="/pegawai/edit/{{$p->pegawai_id}}" class="badge badge-success">update</a>
                                <a href="/pegawai/hapus/{{$p->pegawai_id}}" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                Halaman: {{$pegawai->currentPage()}} <br>
                Jumlah Data: {{$pegawai->total()}} <br>
                Data Perhalaman: {{$pegawai->perPage()}} <br>

                {{$pegawai->withQueryString()->links()}}

            </div>
        </div>
    </div>
    
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>