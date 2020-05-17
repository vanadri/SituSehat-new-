<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SituSehat</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: green;">
        <a class="navbar-brand" href="http://localhost/SituSehat/Home" style="color: white;"><i class="fa fa-globe"></i>&nbsp;SituSehat</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only"></span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" style="border-radius: 50px;">
                    	<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fa fa-address-card"></i>&nbsp;Admin, <?php echo $_SESSION['username']; ?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= site_url('profile/logout') ?>">Log Out</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fa fa-book"></i>&nbsp;Informasi</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://localhost/SituSehat/mPenyakit">Penyakit</a>
                                <a class="dropdown-item" href="http://localhost/SituSehat/mGejala">Gejala</a>
                                <a class="dropdown-item" href="http://localhost/SituSehat/mHidupSehat">Hidup Sehat</a>
                            </div>
                        </li>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="http://localhost/SituSehat/About" style="color:#ffffff;"><i class="fa fa-user-circle-o"></i>&nbsp;About Us</a></li>
                </ul>
            </div>
        </nav>