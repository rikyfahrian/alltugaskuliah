<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
</head>

<body>
    <?php

    include "admin.php";

    session_start();
    if ($_SESSION["status"] != "login") {
        header("Location:../index.php?pesan=blumlogineuy");
    }
    ?>





    <main>

        <div class="container mt-3">
            <div class="title">
                <h2 class="fw-bold">Semua Pelanggan</h2>
            </div>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Hp.</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include "../koneksi.php";



                    try {
                        $stmt = $conn->prepare('SELECT * FROM pelanggan');

                        $stmt->execute();
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


                        foreach ($results as $row) {
                            echo "
                            <tr>
                                <th scope='row'>" . $row['id_pelanggan'] . "</th>
                                <td>" . $row['nama_pelanggan'] . "</td>
                                <td>" . $row['hp_pelanggan'] . "</td>
                                <td>" . $row['alamat_pelanggan'] . "</td>
                            </tr>
                            ";
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }



                    ?>


                </tbody>
            </table>
        </div>




    </main>


</body>

</html>