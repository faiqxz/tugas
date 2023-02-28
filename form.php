<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="biodata.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />

    <link rel="icon" type="image/x-icon" href="/Image/Zoro.gif" />
    <title>Biodata</title>
  </head>
  <body>
    <!--NAVBAR BIODATA-->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo">Masbro</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#home" class="navbar__links" id="home-page">Beranda</a>
          </li>
          <li class="navbar__item">
            <a href="#about" class="navbar__links" id="about-page">Galeri</a>
          </li>
          <li class="navbar__btn">
            <a href="#services" class="button" id="services-page">Daftar</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Form-->
    <div class="services" id="services">
      <h1>Form Pengisian</h1>
      <div class="services__wrapper">
        <div class="services__card">
        <form action="form.php" method="post">
        <table class="forms">
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST["nama"]?></td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>
            <?php echo $_POST["Tempat_Lahir"]?>
            </td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
            <?php echo $_POST["Tanggal_Lahir"]?>
            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $_POST["alamat"]?></td>
          </tr>
          <tr>
            <td>Kota</td>
            <td>:</td>
            <td>
            <?php echo $_POST["kota"]?>
            </td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_POST["jk"]?>
            </td>
          </tr>
          <tr>
            <td>Hobby</td>
            <td>:</td>
            <td><?php echo $_POST["hobi"]?>
            </td>
          </tr>
        </table>
      </form>
        </div>
      </div>
    </div>

    <!--footer-->
    <div class="footer__container">
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="#" id="footer__logo">Masbro</a>
          </div>
          <p class="website__rights">©Copyright.FaiqXZ All rights reserved</p>
          <div class="social__icons">
            <a href="#" class="social__icon--link"
              ><i class="fab fa-facebook"></i
            ></a>
            <a
              href="https://www.instagram.com/faiq.xz/"
              target="_blank"
              class="social__icon--link"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="#" class="social__icon--link"
              ><i class="fab fa-youtube"></i
            ></a>
            <a
              href="https://www.linkedin.com/in/al-ikhsan-faiq-494a19263/"
              target="_blank"
              class="social__icon--link"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a href="#" class="social__icon--link"
              ><i class="fab fa-twitter"></i
            ></a>
          </div>
        </div>
      </section>
    </div>
    <script src="biodata.js"></script>
  </body>
</html>
