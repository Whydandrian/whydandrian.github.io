<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian 1 - PT Transisi Tes</title>

    <link rel="stylesheet" href="../../Codeigniter-v3/assets/bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col">
                <h2>Bagian 1 - PHP Dasar 2</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">

                <h4>Point Pertama</h4>
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>

            </div>
            <div class="col">
                <h4>Point Kedua</h4>
                <div class="card">
                    <div class="card-body">
                        <?php
                        /**
                         * Tutorial Reference :
                         * W3School PHP Array, String, Looping
                         *
                         */

                        function enkripsi($input)
                        {
                            echo $input;
                            $string = str_split("$input");

                            foreach ($string as $id => $val) {
                                $id = $id + 1;
                                if ($id % 2 == 0) {
                                    $index = -abs($id);
                                    $kode_ascii_genap = ord($val) + $index;
                                    echo chr($kode_ascii_genap) . "";
                                } else {
                                    $kode_ascii_ganjil = ord($val) + $id;
                                    echo chr($kode_ascii_ganjil) . "";
                                }
                            }
                        }
                        echo enkripsi("DFHKNQ");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Codeigniter-v3/assets/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../Codeigniter-v3/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>