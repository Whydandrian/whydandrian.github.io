<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST - PROGRAMMER 04 PT INTALOGI</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>

    <div class="container">
        <div class="row mt-3">
            <h2 class="text-center">Tes Logika - Programmer 04</h2>
        </div>
        <div class="row text-dark mt-4" style="height: 10rem;">
            <div class="col-6 col-md-5 bg-light">
                <h4 class="mt-3 ml-2 mb-2">Masukkan Kata</h4>
                <form class="mt-3 ml-2" method="POST" action="<?= base_url() ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kata" name="kata" placeholder="Masukkan kata yang akan dihitung">
                    </div>
                    <button type="submit" class="btn btn-primary mb-4">Hitung huruf</button>
                </form>
            </div>
            <div class="col-md-7">
                <div class="card border-dark" style="height: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title">Hasil Perhitungan</h5>
                        <p class="card-text">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="<?= base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>