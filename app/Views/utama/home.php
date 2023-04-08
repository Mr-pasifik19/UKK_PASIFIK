
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Masyarakat</title>

    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>" />
    </head>
<body>
   
    <div class="wrapper">
        <div class="section">

            <div class="top_navbar">

            

                <div class="logout">
                    <a href="<?= base_url('out') ?>">
                        Log Out
                    </a>
                </div>



            </div>
             
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="<?= base_url('img/masyarakat.jpg') ?>" alt="profile_picture">
                <h3><?= session()->get('nama'); ?></h3>
                <p>Masyarakat</p>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="item">Profil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Tulis Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Laporan Belum Diproses</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Laporan Diproses</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Laporan Selesai</span>
                    </a>
                </li>
                
            </ul>
        </div>
        
    </div>
    </body>
</html>