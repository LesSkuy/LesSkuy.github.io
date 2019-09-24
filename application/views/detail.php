<html>

<head>
    <title>Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/detail.css">

</head>

<body>
    <header>

        <div class="topnav col-12">
            <a class="home col-1" href="<?php echo site_url('welcome');?>">LesSkuy</a>
            <input class="search col-6 round" type="text" placeholder="Pengen belajar apa ?">
            <a class="right " href="<?php echo site_url('welcome/signup');?>">Sign Up</a>
            <a class="right " href="<?php echo site_url('welcome/login');?>">Log In</a>
        </div>

    </header>

    <main class="main">
        <div class="samping">
            <img src="http://placekitten.com/816/600" alt="meow" class="rounded-circle">
            <h2 class="nama">Zainuri Mahmud</h2>
            <div class="button">
                <button type="button" class="btn btn-dark">Hubungi Tutor</button>
            </div>
        </div>
        <div>
            <div class="deskripsi">
                <ul class="sub-title">
                    <li class="harga inline">Rp 50.000</li>
                    <li class="inline"> / minggu</li>
                    <li class="inline">( 3 pertemuan )</li>
                </ul>
                <p class="font-weight-bold">Pengalaman : </p>
                <ul>
                    <li>
                        <p>S1 Matematika Murni Universitas Indonesia</p>
                    </li>
                    <li>
                        <p>Finalist Math World Olimpiad 2019</p>
                    </li>
                    <li>
                        <p>Runner Up International Mathematical Olympiad/IMO 2018</p>
                    </li>
                </ul>
                <p class="font-weight-bold">Jam Operasional :</p>
                <ul>
                    <li>
                        <p>Senin : 08.00 - 10.00 , 16.00 - 18.00</p>
                    </li>
                    <li>
                        <p>Sabtu : 08.00 - 10.00 , 16.00 - 18.00</p>
                    </li>
                    <li>
                        <p>Minggu : 08.00 - 10.00 , 16.00 - 18.00</p>
                    </li>
                </ul>

            </div>
        </div>
    </main>

</body>

</html>