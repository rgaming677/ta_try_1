<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Laporan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">data laporan</li>
            </ol>


        </div>

</div>

</div>
</main>

<?= $this->endsection(); ?>