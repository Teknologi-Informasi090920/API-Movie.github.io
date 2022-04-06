<?php
function get_CURL($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    
    return json_decode($result, true);
}

  $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC7twlnoyv13b0RItCmJRc-Q&key=AIzaSyCLsvVuBq0UUhMxz8Pa7v4P75HNuGd3wSw');

  $youtubeprofile = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
  $channelName = $result['items'][0]['snippet']['title'];
  $subscriber = $result['items'][0]['statistics']['subscriberCount'];

//   Video Terakhir
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCLsvVuBq0UUhMxz8Pa7v4P75HNuGd3wSw&channelId=UC7twlnoyv13b0RItCmJRc-Q&maxResult=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$videoTerakhir = $result['items'][0]['id']['videoId'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Boostrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Css Menual -->
    <link rel="stylesheet" href="style.css" />

    <title>Detail Profile</title>
</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm fixed-top" data-aos="fade-down"
        data-aos-duration="500">
        <div class="container">
            <a class="navbar-brand" href="profile.php" data-aos="fade-right" data-aos-duration="1000">DAFTAR PROFILE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-left" data-aos-duration="1000">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#biodata">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#projects">Sosial Media</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Menu -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/manda.jpg" alt="Amanda Chrysthalia Wantah" width="125" class="rounded-circle img-thumbnail"
            data-aos="flip-right" data-aos-delay="500" data-aos-duration="1000" />
        <h1 class="display-4" data-aos="zoom-in-up" data-aos-duration="850">Amanda Chrysthalia Wantah</h1>
        <p class="lead">Developper | College Student</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1"
                d="M0,224L80,234.7C160,245,320,267,480,261.3C640,256,800,224,960,208C1120,192,1280,192,1360,192L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Profil -->
    <section id="biodata">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col" data-aos="zoom-in" data-aos-duration="450">
                    <h2>BIODATA PRIBADI</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>Nama Lengkap</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>Amanda Chrysthalia Wantah</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>NIM / Stambuk</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>F551 20 128</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>Jenis Kelamin</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>Perempuan</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>Alamat</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>Jl. Teluk Tolo No 16</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>TTL</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>Palu, 28 November 2001</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>Agama</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>Kristen</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>Email</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>amandaawantah@gmail.com</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>Program Studi</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>S1 Teknik Informatika</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-right">
                <div class="col-md-2 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <p>Jurusan</p>
                </div>
                <div class="col-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <p>:</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <p>Teknologi Informasi</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffe8a8" fill-opacity="1"
                d="M0,192L40,208C80,224,160,256,240,229.3C320,203,400,117,480,80C560,43,640,53,720,64C800,75,880,85,960,74.7C1040,64,1120,32,1200,26.7C1280,21,1360,43,1400,53.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Profil -->

    <!-- Sosial Media -->
    <section id="projects">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center" data-aos="zoom-in" data-aos-duration="450">
                    <h2>SOSIAL MEDIA</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= $youtubeprofile; ?>" width="120" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <h5><?= $channelName; ?></h5>
                            <p><?= $subscriber; ?> Subscriber</p>
                            <div class="g-ytsubscribe" data-channelid="UC7twlnoyv13b0RItCmJRc-Q" data-layout="default"
                                data-count="default"></div>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/<?= $videoTerakhir; ?>?rel=0"
                                    title="YouTube video" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/Instagram/fb_manda.jpg" width="120" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <h5>@chrysthalia.jpg</h5>
                            <p>31 Followers</p>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="ig-thumbnail">
                                <img src="img/Instagram/postingan manda/1.jpeg" width="100">
                            </div>
                        </div>
                        <div class="col">
                            <div class="ig-thumbnail">
                                <img src="img/Instagram/postingan manda/2.jpeg" width="100">
                            </div>
                        </div>
                        <div class="col">
                            <div class="ig-thumbnail">
                                <img src="img/Instagram/postingan manda/3.jpeg" width="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffc107" fill-opacity="1"
                d="M0,224L80,224C160,224,320,224,480,240C640,256,800,288,960,266.7C1120,245,1280,171,1360,133.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Kontak -->

    <!-- Footer -->
    <footer class="bg-warning text-center pb-3">
        <p>Created with <i class="bi bi-hearts text-danger"></i> by <a href="#" class="text-dark fw-bold">Amanda
                Chrysthalia Wantah</a>
        </p>
    </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Script Animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- Script Pemanggilan Button Subscribe -->
    <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>