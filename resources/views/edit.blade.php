<doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <title>Edit</title>
        <style>
        /* Modify the background color */
        body {
          background-color: whitesmoke;
        }
         
        .navbar {
            background-color: rosybrown;
        }
        /* Modify brand and text color */
         
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: green;
        }

        .table {
          background-color: ;
        }
        .table .thead {
          background-color: ;
        }
    </style>
      </head>
      <body>
      <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">XI PPLG 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/product">Product<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/reportproduct">Report Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</div>

    <div class="container">
        <div class="row">
            <div class="col-6">
              
            <h1>Edit Data Produk</h1>
            <form action="/product/{{ $produk->id }}/edit" method="post">
            @method('PUT')
            @csrf
      <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" class="form-control @error('nama_produk')is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Masukan nama Produk" autocomplete="off" value="{{old('nama_produk', $produk->nama_produk)}}">
        @error('nama_produk')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror
      </div>  
      <div class="form-group">
        <label for="stok">Stok</label>
        <input type="text" class="form-control  @error('stok')is-invalid @enderror" id="stok" name="stok" placeholder="Masukan Stok" autocomplete="off" value="{{old('stok', $produk->stok)}}">
        @error('stok')
        <div class="invalid-feedback">{{$message}}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control @error('harga')is-invalid @enderror" id="harga" name="harga" placeholder="Masukan Harga" autocomplete="off" value="{{old('harga', $produk->harga)}}">
        @error('harga')
        <div class="invalid-feedback">{{$message}}</div>
          @enderror
      </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
    <button class="btn btn-primary">Edit Data</button>
    </form>
    
        
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
      </body>
    </html>