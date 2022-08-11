<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Halaman Edit</title>
</head>
<body>

    <div class="container">
        <div class="p-4">
            <h1 class="mb-5">Halaman Edit Mahasiswa</h1>
            <form action="<?php echo base_url('home/fungsiEdit')?>" method="post">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" name="nim" id="nim" class="form-control"  value="<?php echo $queryMhsDetail->nim?>" placeholder="masukan nim" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">NAMA</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $queryMhsDetail->nama?>" placeholder="masukan nama">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">JURUSAN</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?php echo $queryMhsDetail->jurusan?>" placeholder="masukan jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>