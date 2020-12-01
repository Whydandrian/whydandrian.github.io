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
        <div class="row mt-4">
            <div class="col">
                <h2>Bagian 1 - PHP Dasar</h2>
                <h4>Point Pertama</h4>
                <?php
                /**
                 * Tutorial resource :
                 * ==== Point Pertama =====
                 * 1. Stackoverflow : https://stackoverflow.com/questions/52390338/how-to-sum-array-using-function-in-php
                 * 2. PHP Manual Official
                 * 
                 * ==== Point Kedua ====
                 * 1. Website : https://r00t4bl3.com/post/how-to-limit-foreach-loop-to-a-number-of-loops-in-php
                 * 2. sort php - W3 School
                 *
                 * ==== Point Ketiga ====
                 * 1. Github : https://gist.github.com/iqbalfl/e5afad5103f9c2f9b91bca729f2e00f1
                 */

                $dataNilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
                $exp = explode(" ", $dataNilai);

                // $imp = implode($exp);
                echo nl2br("Data nilai : $dataNilai\n\n");
                echo nl2br("Conv. to Array : \n");
                $i = 0;
                foreach ($exp as $val => $key) {
                    echo "$val => $key" . "<br>";
                    $i = $i + 1;
                }
                echo "<br>";

                $rerata = array_sum($exp);
                echo nl2br("Rata-rata menggunakan function PHP : $rerata\n");

                function rata_rata($array)
                {
                    $total = 0;
                    foreach ($array as $value) {
                        $total += $value;
                    }
                    return $total;
                }
                $hasil = rata_rata($exp);
                echo nl2br("Hasil rata-rata menggunakan method : $hasil");
                echo "<h5>Urutkan 7 data terbesar ke terkecil</h5>";

                //Sort data dari kecil ke besar
                $toLow = rsort($exp);
                $no = 0;
                foreach (array_slice($exp, 0, 7) as $dataAsc) {
                    $no = $no + 1;
                    echo $no . '. ';
                    echo  "Nilai = " . $dataAsc;
                    echo "<br>";
                }

                echo "<br>";

                echo "<h5>Urutkan 7 data terkecil ke terbesar</h5>";

                asort($exp);
                $no = 0;
                foreach (array_slice($exp, 0, 7) as $dataDesc) {
                    $no = $no + 1;
                    echo $no . '. ';
                    echo "Nilai = " . $dataDesc;
                    echo "<br>";
                }

                echo "<h4 class='mt-2'>Point Kedua</h4>";
                /** 
                 * Resource count lower case
                 * Stackoverflow - count uppercase and lowercase letter without using regex in php
                 */
                function jumlah_lowcase($string)
                {
                    $string    = $string;
                    $upperCase = strtoupper($string);

                    $upperDiff = similar_text($string, $upperCase);
                    echo "<br>";
                    echo "Lowercase:" . (strlen($string) - $upperDiff); // 6
                }
                echo jumlah_lowcase("Pt tranSISI TekNoloGi ManDirI");

                //POINT KETIGA
                echo "<h4 class='mt-2'>Point Ketiga</h4>";

                function generateUBT($input)
                {
                    $arr_input = explode(' ', $input);

                    // Perulangan untuk menghasilkan Unigram
                    $unigram = '';
                    foreach ($arr_input as $item) {
                        $unigram .= $item . ', ';
                    }
                    $unigram = substr($unigram, 0, -2);

                    // Perulangan untuk menghasilkan Bigram
                    $x = 0;
                    $bigram = '';
                    foreach ($arr_input as $item) {
                        if ($x < 1) {
                            $bigram .= $item . ' ';
                            $x++;
                        } else {
                            $bigram .= $item . ', ';
                            $x = 0;
                        }
                    }
                    $bigram = substr($bigram, 0, -2);

                    // Perulangan untuk menghasilkan Trigram
                    $y = 0;
                    $trigram = '';
                    foreach ($arr_input as $item) {
                        if ($y < 2) {
                            $trigram .= $item . ' ';
                            $y++;
                        } else {
                            $trigram .= $item . ', ';
                            $y = 0;
                        }
                    }
                    $trigram = substr($trigram, 0, -2);


                    $result = 'Unigram : ' . $unigram . '<br>';
                    $result .= 'Bigram : ' . $bigram . '<br>';
                    $result .= 'Trigram : ' . $trigram;

                    return $result;
                }

                echo generateUBT('Jakarta adalah ibukota negara Republik Indonesia');

                ?>
            </div>
            <div class="col"></div>
        </div>
    </div>


    <script src="../../Codeigniter-v3/assets/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../Codeigniter-v3/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>