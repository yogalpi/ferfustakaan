<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use backend\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;

?>
<html lang="<?= Yii::$app->language ?>" class="h-100">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

        html, *, body{
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: bold;
            font-style: normal;
        }


    </style>
    <link href="/advanced/backend/web/css/site.css" rel="stylesheet">
    <link href="/advanced/backend/web/assets/vendor/fonts/boxicons.css" rel="stylesheet">
    <link href="/advanced/backend/web/assets/vendor/css/core.css" rel="stylesheet">
    <link href="/advanced/backend/web/assets/vendor/css/theme-default.css" rel="stylesheet">
    <link href="/advanced/backend/web/assets/css/demo.css" rel="stylesheet">
    <link href="/advanced/backend/web/assets/vendor/libs/apex-charts/apex-charts.css" rel="stylesheet">
    <link href="/advanced/backend/web/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<div id="navigasi" class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme ms-3 mt-4 rounded" style="height: 90vh; position: fixed;">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">ferfustakaan</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1 ">
            <!-- Dashboard -->
            <li class="menu-item">
              <a class="menu-link" href="http://localhost/advanced/backend/web/index.php"><i class="fa-solid fa-house me-2"></i><div data-i18n="Analytics">Dashboard</div></a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="http://localhost/advanced/backend/web/index.php?r=buku"><i class="fa-solid fa-book me-2"></i><div data-i18n="Analytics">Data Buku</div></a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="http://localhost/advanced/backend/web/index.php?r=anggota"><i class="fa-solid fa-user-plus me-2"></i><div data-i18n="Analytics">Data Anggota</div></a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="http://localhost/advanced/backend/web/index.php?r=petugas"><i class="fa-solid fa-user-tie me-2"></i><div data-i18n="Analytics">Data Petugas</div></a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="http://localhost/advanced/backend/web/index.php?r=peminjaman"><i class="fa-solid fa-angles-up me-2"></i><div data-i18n="Analytics">Transaksi Peminjaman</div></a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="http://localhost/advanced/backend/web/index.php?r=pengembalian"><i class="fa-solid fa-angles-down me-2"></i><div data-i18n="Analytics">Transaksi Pengembalian</div></a>
            </li>
            <li class="menu-item active">
              <a class="menu-link" href="http://localhost/advanced/frontend/web/index.php?r=site%2Fsignup"><i class="fa-solid fa-user-plus me-2"></i><div data-i18n="Analytics">Sign Up User</div></a>
            </li>
            <li class="menu-item d-flex justify-content-end align-items-center h-50 w-full">
                  <svg class="mb-5" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0 0 508 508" xml:space="preserve">
                  <circle style="fill:#54C0EB;" cx="254" cy="254" r="254"/>
                  <path style="fill:#FFFFFF;" d="M388.8,300.4H148.4c-21.6,0-38.8,17.6-38.8,38.8c0,21.6,17.6,38.8,38.8,38.8h240.4V300.4z"/>
                  <path style="fill:#FF7058;" d="M390,384.4H148.4c-24.8,0-44.8-20-44.8-44.8s20-44.8,44.8-44.8H390c3.2,0,6,2.8,6,6s-2.8,6-6,6H148.4
                    c-18.4,0-33.2,14.8-33.2,33.2s14.8,33.2,33.2,33.2H390c3.2,0,6,2.8,6,6C396,381.6,393.2,384.4,390,384.4z"/>
                  <path style="fill:#E6E9EE;" d="M408,210.4H167.6c-21.6,0-38.8,17.6-38.8,38.8s17.6,38.8,38.8,38.8H408V210.4z"/>
                  <path style="fill:#FFFFFF;" d="M100,120.8h240.4c21.6,0,38.8,17.6,38.8,38.8s-17.6,38.8-38.8,38.8H100V120.8z"/>
                  <path style="fill:#FFD05B;" d="M98.8,204.8h241.6c24.8,0,44.8-20,44.8-44.8s-20-44.8-44.8-44.8H98.8c-3.2,0-6,2.8-6,6s2.8,6,6,6
                    h241.6c18.4,0,33.2,14.8,33.2,33.2s-14.8,33.2-33.2,33.2H98.8c-3.2,0-6,2.8-6,6S95.6,204.8,98.8,204.8z"/>
                  <path style="fill:#324A5E;" d="M409.2,294.4H167.6c-24.8,0-44.8-20-44.8-44.8s20-44.8,44.8-44.8h241.6c3.2,0,6,2.8,6,6s-2.8,6-6,6
                    H167.6c-18.4,0-33.2,14.8-33.2,33.2s14.8,33.2,33.2,33.2h241.6c3.2,0,6,2.8,6,6C415.2,291.6,412.4,294.4,409.2,294.4z"/>
                  <polygon style="fill:#4CDBC4;" points="359.2,235.2 359.2,292.4 342.4,274.4 324,294.4 324,235.2 "/>
                  <polygon style="fill:#324A5E;" points="191.6,334 191.6,391.2 175.2,373.2 156.8,393.2 156.8,334 "/>
                  <polygon style="fill:#FF7058;" points="153.2,141.6 153.2,198.8 136.4,180.8 118.4,200.8 118.4,141.6 "/>
                  </svg>
            </li>
            

            <!-- Layouts -->
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page" style="margin-left: 18vw;">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <ul class="navbar-nav flex-row align-items-end ms-auto">
                <li class="me-2">
                </li>
              </ul>
            </div>
          </nav>
          <div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

          <div class="site-signup">
          <?php if(Yii::$app->session->getFlash('success') != null):?>
                      <div onclick="(function(notif){
                        notif.style.display = 'none';
                        })(this)" id="notif" class="alert alert-success" role="alert">
                        <?= Yii::$app->session->getFlash('success') ?>
                      </div>
          <?php endif; ?>
                <h2>TAMBAH DATA USER</h2>

                <p>Lengkapi Data Berikut :</p>

                <div class="row">
                    <div class="col-lg-5">
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <div class="form-group">
                                <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
          
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

</body>
<script src="https://kit.fontawesome.com/59ba3b5196.js" crossorigin="anonymous"></script>
<script src="/advanced/backend/web/assets/js/config.js"></script>
<script src="/advanced/backend/web/assets/b1d1992c/yii.js"></script>
<script src="/advanced/backend/web/assets/vendor/js/helpers.js"></script>
<script src="/advanced/backend/web/assets/63368e46/jquery.js"></script>
</html>
