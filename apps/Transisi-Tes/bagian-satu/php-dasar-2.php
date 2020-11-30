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
                <?php
                /**
                 * Tutorial resource :
                 *
                 */

                // for ($i = 1; $i <= 6; $i++) {
                //     echo $i;
                // }

                function enkripsi($input)
                {
                    echo $input . "\n";
                    for ($i = 1; $i <= 10; $i++) {
                        if (($i % 2) == 0) {
                            echo $i;
                        }
                        echo $i;
                    }
                }

                echo enkripsi("DFHKNQ");
                ?>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../Codeigniter-v3/assets/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../Codeigniter-v3/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>