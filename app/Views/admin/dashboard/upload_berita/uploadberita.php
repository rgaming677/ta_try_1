<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Upload Berita</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <input class="form-control form-control-lg bg-light bg-gradiant mb-3" type="text" placeholder="Masukan Judul">
                    <textarea class="form-control mb-3" rows="10"></textarea>
                    <input type="file" class="form-control mb-3">
                    <button type="button" class="btn btn-success">Upload</button>
                </div>
            </div>
            <div class="card mb-4">
            </div>
        </div>
    </main>

    <?= $this->endsection(); ?>