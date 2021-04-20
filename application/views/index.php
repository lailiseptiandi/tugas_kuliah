<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('includes/style'); ?>

    <title>Admin</title>

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
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NPM</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Laili</td>
                                            <td>18111100107</td>
                                            <td>18.A3</td>
                                            <td>
                                                <form action="" method="post">
                                                    <a href="#" class="btn btn-info btn-sm">EDIT</a>
                                                    <button href="#" class="btn btn-danger btn-sm">DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php $this->load->view('includes/footer'); ?>


        </div>
    </div>

    <?php $this->load->view('includes/script'); ?>
</body>

</html>