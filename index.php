<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$queryProfile = "SELECT * FROM profile LIMIT 1";
$resultProfile = mysqli_query($conn, $queryProfile);
$profile = mysqli_fetch_assoc($resultProfile);

$querySkills = "SELECT * FROM skills";
$resultSkills = mysqli_query($conn, $querySkills);

$queryExperiences = "SELECT * FROM experiences";
$resultExperiences = mysqli_query($conn, $queryExperiences);

$queryCertificates = "SELECT * FROM certificates";
$resultCertificates = mysqli_query($conn, $queryCertificates);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Shafa's Portofolio</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificates">Certificates</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section id="home" class="hero d-flex align-items-center text-center">
    <div class="container text-center">

        <div class="card hero-card shadow mx-auto">
            <img src="images/<?php echo $profile['foto']; ?>" class="card-img-top hero-img" alt="Profile">
            <div class="card-body">
                <h2 class="fw-bold"><?php echo $profile['nama']; ?></h2>
                <p class="lead mb-0"><?php echo $profile['title']; ?></p>
            </div>
        </div>

        <a href="#about" class="btn btn-primary mt-4">See More</a>

    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h2 class="mb-4 fw-bold">About Me</h2>
                <p>
                    <?php echo $profile['about1']; ?>
                </p>

                <p>
                    <?php echo $profile['about2']; ?>
                </p>

                <p>
                    <?php echo $profile['about3']; ?>
                </p>
            </div>

            <div class="col-md-6">

                <h2 class="fw-bold">Skills</h2>

                <?php while($skill = mysqli_fetch_assoc($resultSkills)) { ?>
                <div class="mb-3">
                    <label><?php echo $skill['nama_skill']; ?></label>
                    <div class="progress">
                        <div class="progress-bar <?php echo $skill['warna']; ?>" style="width: <?php echo $skill['persen']; ?>%">
                            <?php echo $skill['persen']; ?>%
                        </div>
                    </div>
                </div>
                <?php } ?>

                <h2 class="fw-bold mt-4">Experiences</h2>
                <ul>
                    <?php while($exp = mysqli_fetch_assoc($resultExperiences)) { ?>
                        <li><?php echo $exp['pengalaman']; ?></li>
                    <?php } ?>
                </ul>

            </div>

        </div>
    </div>
</section>

<section id="certificates" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Certificates</h2>

        <div class="row justify-content-center">

            <?php while($cert = mysqli_fetch_assoc($resultCertificates)) { ?>
                <div class="col-md-5 col-lg-4 mb-4">
                    <div class="card shadow">
                        <img src="images/<?php echo $cert['gambar']; ?>" class="card-img-top" alt="Certificate">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cert['judul']; ?></h5>
                            <p class="card-text"><?php echo $cert['deskripsi']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>