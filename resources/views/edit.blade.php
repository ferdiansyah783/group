<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit data!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col">

            <h2 class="my-2">update X</h2>
            <a href="/pegawai" class="btn btn-secondary my-3">kembali</a>

                @foreach($pegawai as $p)
                <form method="POST" action="/pegawai/update">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$p->pegawai_id}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" required name="nama" value="{{$p->pegawai_nama}}" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">jabatan</label>
                            <input type="text" name="jabatan" required class="form-control" value="{{$p->pegawai_jabatan}}" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">umur</label>
                            <input type="number" name="umur" required class="form-control" value="{{$p->pegawai_umur}}" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <textarea name="alamat" id="alamat" required cols="50" rows="5">{{$p->pegawai_alamat}}</textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endforeach

            </div>
        </div>
    </div>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>