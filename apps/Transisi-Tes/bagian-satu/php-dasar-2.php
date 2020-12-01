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
                        <table class="table table-white table-borderless">
                            <tbody>
                                <?php
                                for ($i = 1; $i < 65; $i++) {
                                    if ($i % 8 == 0) {
                                        echo "<td class='bg-white text-dark'>$i<td></tr>";
                                    } else {
                                        if ($i % 3 == 0) {
                                            echo "<td class='bg-white text-dark'>$i";
                                        } elseif ($i % 4 == 0) {
                                            echo "<td class='bg-white text-dark'>$i</td>";
                                        } else {
                                            echo "<td class='bg-dark text-white'>$i</td>";
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <p>
                            Tabel diatas didapat dengan :
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Nilai dengan modulus 3 akan dicetak dengan background puth dan text hitam</li>
                            <li class="list-group-item">2. Nilai dengan modulus 4 akan dicetak dengan background puth dan text hitam</li>
                            <li class="list-group-item">3. Selain nilai mod 3 dan 4 akan dicetak dengan background hitam tulisan putih</li>
                        </ul>
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
                            echo "<strong><p>Inputan String : $input</p></strong>";
                            $string = str_split("$input");

                            echo "<strong>Hasil enkripsi : </strong>";

                            foreach ($string as $id => $val) {
                                $id = $id + 1;
                                if ($id % 2 == 0) {
                                    $index = -abs($id);
                                    $kode_ascii_genap = ord($val) + $index;
                                    echo "<strong>" . chr($kode_ascii_genap) . "</strong>";
                                } else {
                                    $kode_ascii_ganjil = ord($val) + $id;
                                    echo "<strong>" . chr($kode_ascii_ganjil) . "</strong>";
                                }
                            }
                        }

                        echo enkripsi("DFHKNQ");
                        echo "<br>";
                        echo "Pola enkripsi sebagai berikut: ";

                        for ($i = 1; $i <= 6; $i++) {
                            if ($i % 2 == 0) {
                                $no = -abs($i);
                                echo $no . ", ";
                            } else {
                                echo $i . ", ";
                            }
                        }

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