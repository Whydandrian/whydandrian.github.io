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
                <h2>Bagian 1 - PHP Dasar 3</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h4>Fungsi Pencarian value dalam array</h4>
                <div class="card">
                    <div class="card-body">
                        <p>
                            Array multidimensi sebagai berikut:
                        </p>
                        Array = [
                        <br>['f','g','h','i'],
                        <br>['j','k','p','q'],
                        <br>['r','s','t','u']
                        <br>];

                        <?php
                        $array = [
                            ['f', 'g', 'h', 'i'],
                            ['j', 'k', 'p', 'q'],
                            ['r', 's', 't', 'u']
                        ];
                        function cari($array, $input)
                        {
                            if (is_array($array)) {

                                // echo $key;
                                echo  "<br>";
                                foreach ($array as $id => $val) {
                                    for ($kolom = 0; $kolom <= count($array); $kolom++) {
                                        $bandingan = $array[$id][$kolom];
                                        // echo  $bandingan . " ";
                                        $string = str_split("$input");
                                        foreach ($string as $key => $data_cari) {
                                            echo $key . "=>" . $data_cari . "<br>";
                                            // if ($data_cari == $array[$id][$kolom]) {
                                            //     echo "sama";
                                            // }
                                        }
                                        // echo "[$id][$kolom], ";
                                    }
                                    echo  "<br>";
                                }
                            }
                        }
                        echo cari($array, "fghi");
                        ?>

                        <br><strong>Kata yang dicari : fghi | => Hasil </strong>
                        <br><strong>Kata yang dicari : fghp | => Hasil </strong>
                        <br><strong>Kata yang dicari : fjrstp | => Hasil </strong>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="../../Codeigniter-v3/assets/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../Codeigniter-v3/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>