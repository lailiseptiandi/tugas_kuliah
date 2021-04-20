<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-5">Pendaftaran Mahasiswa</h2>
        <form action="<?= base_url(); ?>pendaftaran/simpan_pendaftaran" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan Email ">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Masukan Hp ">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="">NPM</label>
                <input type="text" name="nim" class="form-control" placeholder="NPM">
            </div>
            <!-- <div class="form-group">
                <label for="inputCity">Status</label>
                <input type="text" class="form-control">
            </div> -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>