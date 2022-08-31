<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>TBM</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="header">
      <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap");

        * {
          font-family: "Montserrat", sans-serif !important;
        }

        body .header {
          background: #291586;
        }

        @media screen and (min-width: 768px) {
          body .header nav {
            padding-top: 30px;
          }
        }

        body .header nav .navbar-brand {
          font-family: Montserrat;
          font-style: normal;
          font-weight: bold;
          font-size: 24px;
          line-height: 29px;
          color: #ffffff;
        }

        body .header nav .navigation li {
          margin-right: 16px;
        }

        body .header nav .navigation a {
          font-style: normal;
          font-weight: normal;
          font-size: 16px;
          line-height: 21px;
          color: #ffffff !important;
        }

        body .header nav .signup {
          width: 113px;
          background: #ffffff;
          padding-top: 12px;
          padding-bottom: 12px;
          border-radius: 8px;
          font-style: normal;
          font-weight: normal;
          font-size: 16px;
          line-height: 21px;
          text-align: center;
          color: #08090d !important;
        }

        @media screen and (max-width: 768px) {
          body .header nav .signup {
            width: 100% !important;
          }
        }

        body .header .content {
          padding-top: 90px;
        }

        body .header .content .headline {
          font-family: Montserrat !important;
          font-weight: bold;
          font-size: 55px;
          line-height: 67px;
          color: #ffffff;
        }

        body .header .content .subheadline {
          font-family: Montserrat !important;
          font-weight: 500;
          font-size: 16px;
          line-height: 28px;
          color: #ffffff;
        }

        body .header .content .button-header {
          margin-top: 50px;
        }

        body .header .content .button-header .btn-listing {
          width: 150px;
          height: 50px;
          background: #fecf00;
          border-radius: 8px;
          font-weight: normal;
          font-size: 16px;
          line-height: 21px;
          color: #101010;
        }

        body .header .img-brand {
          padding-top: 50;
          padding-bottom: 90px;
        }

        @media screen and (min-width: 768px) {
          body .header .img-brand {
            padding-top: 100px;
          }
        }

        @media screen and (min-width: 768px) {
          body .header .img-brand .mr-60 {
            margin-right: 60px;
          }
        }
      </style>
      <nav
        class="container  navbar navbar-dark navbar-expand-md bg-faded justify-content-center px-md-0"
      >
        <a class="mr-auto navbar-brand d-flex w-50" href="#"> TBM </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="navbar-collapse collapse w-100 navigation"
          id="navbarSupportedContent"
        >
         
          <ul class="ml-auto nav navbar-nav w-100 justify-content-end">
            <li class="mr-4 text-center nav-item">
              <a
                class="nav-link sign"
                href="{{route('login')}}"
                style="color: #ebf1fc !important"
              >
                LOGIN
              </a>
            </li>
            <li class="my-auto mr-0 text-center nav-item">
              <a
                class="nav-link signup"
                href="{{route('register')}}"
                style="color: #08090d !important"
              >
                REGISTER
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container text-center">
        <div class="row content">
          <div class="col-12">
            <div class="headline">
              Dengan membaca kita <br class="d-none d-md-block" />
              akan tahu isi dunia.
            </div>
            <div class="mt-3 subheadline">
              Mari kita memperluas pengetahuan kita melalui membaca, karena dengan membaca buku kita mendapatkan banyak manfaat dan pengalaman dalam hidup.
            </div>
            <div class="button-header"><a href="{{route('register')}}">
              <button class="btn btn-listing">Gabung</button></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 img-brand">
            <img
              src="https://i.ibb.co/RgB6cXf/Footer-4-5442a2-D17.png"
              alt="TBM"
              class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
            />
            <img
              src="https://i.ibb.co/8jDjdX8/Footer-1-3d44c5-E4e.png"
              alt="TBM"
              class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
            />
            <img
              src="https://i.ibb.co/0XKHT6b/UNSERGA.png"
              alt="TBM"
              class="px-5 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
            />
            <img
              src="https://i.ibb.co/6wTPp69/Tutwuri.png"
              alt="Shayna"
              class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
            />
            <img
              src="https://i.ibb.co/51QXBYs/Kampus-Merdeeka.png"
              alt="Shayna"
              class="px-4 mt-5 img-fluid mt-md-0 px-md-0"
            />
          </div>
        </div>
      </div>
    </section><section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-3 .btn:focus,
      .content-3-3 .btn:active {
        outline: none !important;
      }

      .content-3-3 {
        padding: 5rem 2rem;
      }

      .content-3-3 .img-hero {
        width: 100%;
        margin-bottom: 3rem;
      }

      .content-3-3 .right-column {
        width: 100%;
      }

      .content-3-3 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 2.5rem;
        letter-spacing: -0.025em;
      }

      .content-3-3 .title-caption {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
      }

      .content-3-3 .circle {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        height: 3rem;
        width: 3rem;
        margin-bottom: 1.25rem;
        border-radius: 9999px;
        background-color: #504cee;
      }

      .content-3-3 .text-caption {
        font: 400 1rem/1.75rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #999999;
      }

      .content-3-3 .btn-learn {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2.5rem;
        background-color: #504cee;
        transition: 0.3s;
        letter-spacing: 0.025em;
        border-radius: 0.75rem;
      }

      .content-3-3 .btn-learn:hover {
        background-color: #7370ff;
        transition: 0.3s;
      }

      @media (min-width: 768px) {
        .content-3-3 .title-text {
          font: 600 2.25rem/2.5rem Poppins, sans-serif;
        }
      }

      @media (min-width: 992px) {
        .content-3-3 .img-hero {
          width: 50%;
          margin-bottom: 0;
        }

        .content-3-3 .right-column {
          width: 50%;
        }

        .content-3-3 .circle {
          margin-right: 1.25rem;
          margin-bottom: 0;
        }
      }
    </style>
    <div class="content-3-3 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid"
            src="https://i.ibb.co/8dXNQD8/5e5355f3f5fa1a1fd7f79760-peep-37.png"
            alt="" />
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <h2 class="title-text text-white">3 Manfaat Yang Anda Dapatkan</h2>
          <ul style="padding: 0; margin: 0">
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  1
                </span>
                Registrasi
              </h4>
              <p class="text-caption">
                Bergabunglah bersama Kami melalui form registrasi <br class="d-sm-inline d-none" />
                untuk mendapatkan akses sebagai Anggota.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  2
                </span>
                Donasi
              </h4>
              <p class="text-caption">
                Anda dapat berkontribusi sebagai donatur dengan <br class="d-sm-inline d-none" />
                menyalurkan buku-buku Anda sehingga dapat bermanfaat untuk bersama.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 4rem">
              <h4
                class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  3
                </span>
                Meminjam Buku
              </h4>
              <p class="text-caption">
                Anda dapat meminjam buku<br class="d-sm-inline d-none" />
                dari berbagai macam Taman Bacaan Masyarakat yang ada di website kami.
              </p>
            </li>
          </ul>
          <a href="{{route('register')}}">
          <button class="btn btn-learn text-white">Registrasi</button>
          </a>
        </div>
      </div>
    </div>
  </section><section class="explore">
    <style scoped>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        @media screen and (min-width: 768px) {
            body .pl-house {
                margin: 0 !important;
                padding-left: 100px;
            }
        }

        @media screen and (max-width: 768px) {
            body .pl-house {
                margin: 0 10px 0 5px !important;
            }
        }

        body .explore {
            background-color: #080E09;
            padding-top: 100px;
            padding-bottom: 50px;
        }

        @media screen and (max-width: 768px) {
            body .explore {
                padding-top: 50px;
                padding-bottom: 50px;
            }
        }

        body .explore .descript-explore {
            max-width: 75%;
        }

        body .scrolling-wrapper {
            overflow-x: auto;
        }

        body .section::-webkit-scrollbar {
            height: 0 !important;
        }

        body .section::-webkit-scrollbar-track {
            background-color: #e4e4e4;
            border-radius: 100px;
        }

        body .section::-webkit-scrollbar-thumb {
            background-color: #05BB2D;
            border-radius: 100px;
        }

        body .cl-blue {
            color: #0F52BA !important;
        }

        body .btn-blue {
            background-color: #0F52BA;
            color: white;
            font-weight: 600;
            font-size: 16px;
            border-radius: 12px;
            margin-top: 48px;
        }

        body .text-content h1 {
            font-size: 60px !important;
            line-height: 150%;
            color: white;
        }

        body .text-content p {
            font-size: 16px;
            color: #ADB2B8;
            font-weight: 400;
            line-height: 28px;
            padding-bottom: 108px;
        }

        body .title h1 {
            font-size: 72px;
            font-weight: 700;
            line-height: 150%;
        }

        @media screen and (max-width: 768px) {
            body .title h1 {
                font-size: 48px;
            }
        }

        body .section::-webkit-scrollbar {
            height: 0 !important;
        }

        body .section::-webkit-scrollbar-track {
            background-color: #e4e4e4;
            border-radius: 100px;
        }

        body .section::-webkit-scrollbar-thumb {
            background-color: #05BB2D;
            border-radius: 100px;
        }

        body .img-explore {
            height: 600px;
            padding: 0;
        }

        @media only screen and (max-width: 768px) {
            body .img-explore {
                height: 300px;
            }
        }

        body .img-explore img {
            width: 452px !important;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 24px;
            margin-right: 72px;
        }

        @media only screen and (max-width: 768px) {
            body .img-explore img {
                width: 226px !important;
            }
        }
    </style>
    <div class="pl-house">
        <div class="row text-content title pt-35 my-0 mx-0" id="header">
            <div class="col-md-9 px-md-0">
                <h1 class="pb-3">
                    Mari Berbagi
                </h1>
                <p class="pb-0 descript-explore">
                    Mari kita salurkan buku atau barang yang bisa digunakan untuk menunjang aktifitas membaca pada Taman Bacaan Masyarakat.
					Kami akan menyalurkan buku atau barang anda kepada TBM yang ada di website kami.
                </p>
            </div>
            <div class="col-md-3 mt-md-3">
              <a href="https://api.whatsapp.com/send?phone=628972493471&text=halooo kak saya ingin berdonasi"> <button class="btn btn-blue px-5 py-3 mt-0">Berbagi</button> </a>
            </div>
        </div>
        <div class="row section scrolling-wrapper flex-row flex-nowrap mt-3 img-explore mx-2">
            <img src="https://i.ibb.co/pJ616xj/Whats-App-Image-2022-08-19-at-16-01-23.jpg"
                alt="image-1" class="img-fluid">
            <img src="https://i.ibb.co/6wH050B/Bersama-Smartfren-Community-Pria-Tamatan-Paket-C-Berjuang-Pendidikan-Nonformal.jpg"
                alt="image-2" class="img-fluid">
            <img src="https://i.ibb.co/MhrqNFL/Whats-App-Image-2022-08-19-at-16-06-47.jpg"
                alt="image-3" class="img-fluid">
        </div>
    </div>
</section><footer class="page-footer font-small blue">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        body .font-red-hat-display {
            font-family: 'Red Hat Display', sans-serif !important;
        }

        body footer {
            background: #313E60;
            padding-top: 50px;
            padding-bottom: 70px;
        }

        body footer {
            background: #0F0F0F;
            padding-top: 50px;
            padding-bottom: 70px;
        }

        body footer .logo {
            font-family: 'Red Hat Display', sans-serif;
            font-weight: 700;
            font-size: 26px;
            line-height: 38px;
            color: #FAFAFD;
        }

        body footer .social-media {
            margin-top: 55px;
        }

        body footer .copyright {
            font-family: 'Red Hat Display', sans-serif !important;
            font-weight: 400;
            font-size: 16px;
            line-height: 135%;
            color: #FAFAFD;
            margin-top: 20px;
        }

        body footer .nav-footer p {
            font-weight: 700 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer .nav-footer a {
            font-weight: 400 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer li {
            margin-bottom: 16px;
        }
    </style>
    <div class="container text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3 address">
                <div class="logo font-red-hat-display">
                    TBM
                </div>
                <div class="copyright font-red-hat-display">
                    2022 Made with love.
                </div>
        </div>
    </div>
</footer> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>