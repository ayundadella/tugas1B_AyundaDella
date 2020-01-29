<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Pendaftaran</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">\
 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow&display=swap" rel="stylesheet">
  <style type="text/css">
   .title {
     width: 500px;
     height: auto;
     margin: 50px auto;
     font-family: 'Lato', sans-serif;
    }
    .judul {
    font-family: 'Nunito Sans', sans-serif;
     font-weight: bold;
     font-size: 40px;
     text-align: center;
    }
    body {
        background-color: #6495ED;
    }
 </style>
</head>
<body>
 <div class="row title">
    <div class="col-md-12">
        <div class="judul">Formulir Pendaftaran Mahasiswa Baru</h3>
     <hr>
 </div>
      <form>
        <div class="form-group">
            <label>No. Pendaftaran</label>
           <input type="text" class="form-control" placeholder="Masukkan nomor pendaftaran">
         </div>
         <div class="form-group">
            <label>Nama Calon Mahasiswa</label>
           <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
         </div>
         <div class="form-group">
            <label>Prodi yang di ambil</label>
            <input type="text" class="form-control" placeholder="Masukkan prodi">
         </div>
          <div class="form-group">
            <label>Tempat, Tanggal Lahir</label>
           <input type="text" class="form-control" placeholder="Masukkan tempat & tanggal lahir">
         </div>
          <div class="form-group">
            <label>Alamat Lengkap</label>
            <input type="text" class="form-control" placeholder="Masukkan alamat">
          </div>
          <div class="form-group">
            <label>No. Telp / HP</label>
            <input type="text" class="form-control" placeholder="Masukkan no telp / HP">
          </div>
          <div class="form-group">
          <label>Alamat Email</label>
            <input type="email" class="form-control" placeholder="Masukkan email">
          </div>
          <button type="submit" class="btn btn-success" style="width: 470px; height: 40px; background-color:  #0000CD;">Daftar</button>
          <button type="reset" class="btn btn-success" style="width: 470px; height: 40px; background-color:  #4169E1; margin-top: 10px;">Reset</button>
     </form>
     <hr>
   </div>
  </div>
</body>
</html>