<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('includes/style'); ?>

    <title><?php echo $judul; ?></title>

</head>

<body>

    <div id="app">
        <div class="main-wrapper">
            <?php $this->load->view('includes/navbar'); ?>
            <?php $this->load->view('includes/sidebar'); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Test CRUD</h1>
                        <!-- <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Layout</a></div>
                            <div class="breadcrumb-item">Default Layout</div>
                        </div> -->
                    </div>

                    <div class="section-body">
                        <!-- <h2 class="section-title">This is Example Page</h2>
                        <p class="section-lead">This page is just an example for you to create your own page.</p> -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Pendaftaran Mahasiswa</h4>
                            </div>
                            <div class="card-title">
                                <div class="text-left ml-4">
                                    <a href="#" class="btn btn-info btn-sm " data-toggle="modal" data-target="#exampleModal">Tambah Data</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NPM</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <!-- <th>Username</th> -->
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($mahasiswa as $mhs) {
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $mhs->name ?></td>
                                                <td><?= $mhs->nim ?></td>
                                                <td><?= $mhs->phone ?></td>
                                                <td><?= $mhs->email ?></td>
                                                <td><?= $mhs->status_mahasiswa ?></td>
                                                <td>

                                                    <a href="<?php echo base_url(); ?>Pendaftaran/edit/<?php echo $mhs->id; ?>" class="btn btn-info">Edit</a>
                                                    <a href="<?php echo base_url(); ?>Pendaftaran/delete/<?php echo $mhs->id; ?>" class="btn btn-danger">Hapus</a>


                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="simpan" method="post">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="">NPM</label>
                                    <input type="text" name="nim" class="form-control" id="nim">
                                    <small class="nim-error text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                    <small class="name-error text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Username :</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                    <small class="username-error text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                    <small class="email-error text-danger"></small>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Password :</label>
                                            <input type="password" name="password" class="form-control" id="password">
                                            <small class="password-error text-danger"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Ketik Ulang Password</label>
                                            <input type="password" name="passconf" class="form-control" id="passconf">
                                            <small class="passconf-error text-danger"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">No HP</label>
                                    <input type="text" name="phone" class="form-control" id="phone">
                                    <small class="phone-error text-danger"></small>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="button" name="" id="validasi" value="Simpan Data" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <?php $this->load->view('includes/footer'); ?>


        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <?php $this->load->view('includes/script'); ?>


    <script>
        var baseUrl = '<?= base_url() ?>';
        $('#validasi').on('click', function() {
            var data = $('#simpan').serialize();
            $.ajax({
                url: baseUrl + 'Pendaftaran/validasi/',
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function(data) {
                    if (data !== 'sukses') {
                        $(".username-error").html(data.username);
                        $(".email-error").html(data.email);
                        $(".password-error").html(data.password);
                        $(".passconf-error").html(data.passconf);
                        $(".nim-error").html(data.nim);
                        $(".phone-error").html(data.phone);
                        $(".name-error").html(data.name);
                    } else {
                        location.reload();
                        getAll();
                        $("#nim").val("");
                        $("#name").val("");
                        $("#username").val("");
                        $("#password").val("");
                        $("#email").val("");
                        $("#phone").val("");
                    }
                }
            });
        });
    </script>
</body>

</html>