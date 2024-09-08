<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Aspirasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">data aspirasi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">no.</th>
                                <th scope="col">kode nomor</th>
                                <th scope="col">laporan</th>
                                <th scope="col">tanggal</th>
                                <th scope="col">alamat</th>
                                <th scope="col">no.telp</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    </table>      
                </div>
            </div>

        </div>
</div>
</main>

<?= $this->endsection(); ?>