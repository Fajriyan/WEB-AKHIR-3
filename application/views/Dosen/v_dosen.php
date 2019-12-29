<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="./assets/images/favicon.ico" type="image/ico" />

  <title><?php echo $title; ?></title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets/'); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?= base_url('assets/'); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="<?= base_url('assets/'); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="<?= base_url('assets/'); ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets/'); ?>build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url() ?>" class="site_title"> <span><?php echo $title; ?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?= base_url('assets/'); ?>images/img.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $nama_user; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Beranda</a></li>
                <li><a><i class="fa fa-edit"></i>Daftar Judul</a></li>
                <li><a><i class="fa fa-list-ol"></i>List Pendaftar</span></a></li>
                <li><a><i class="fa fa-check-circle"></i>Persetujuan</a></li>
                <li><a><i class="fa fa-user"></i>Set Pembimbing</a></li>
                <li><a><i class="fa fa-list-ol"></i>List Mahasiswa</a></li>
                <li><a><i class="fa fa-book"></i>Daftar Proposal</a></li>
                <li><a><i class="fa fa-list-ol"></i>List Proposal</a></li>
                <li><a><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                <li><a><i class="fa fa-bookmark"></i>Persetujuan Proposal</a></li>
                <li><a><i class="fa fa-tasks"></i>List Proposal Disetujui</a></li>
                <li><a><i class="fa fa-sticky-note"></i>Daftar Seminar Hasil Skripsi</a></li>
                <li><a><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                <li><a><i class="fa fa-calendar"></i>Jadwal Seminar</a></li>
                <li><a><i class="fa fa-sign-in"></i>Daftar Ujian</a></li>
                <li><a><i class="fa fa-check"></i>ACC Pembimbing</a></li>
                <li><a><i class="fa fa-users"></i>Set Penguji</a></li>
                <li><a><i class="fa fa-calendar"></i>Jadwal Ujian</a></li>
                <li><a><i class="fa fa-book"></i>Hasil Ujian</a></li>

            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">

                <a href="<?= base_url('index.php/main/') ?>"><input style="border-radius: 3px; border: none; height: 23px; color: white; background: #2A3F54;" type="button" value="MAHASISWA"></a>

                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""> <?php echo $nama_user; ?>
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <br />
        <div class="row">
          <div class="col-md-3 col-sm-4 ">
            <div class="x_panel tile fixed_height_100">
              <div class="tile_count">
                <div class="col-md-9 col-sm-4  tile_stats_count">
                  <span class="count_top">SELURUH JUDUL</span>
                  <div class="count blue">0</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 ">
            <div class="x_panel tile fixed_height_100">
              <div class="tile_count">
                <div class="col-md-11 col-sm-4  tile_stats_count">
                  <span class="count_top">MAHASISWA TERDAFTAR</span>
                  <div class="count blue">0</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 ">
            <div class="x_panel tile fixed_height_100">
              <div class="tile_count">
                <div class="col-md-9 col-sm-4  tile_stats_count">
                  <span class="count_top">JUDUL SUDAH ACC</span>
                  <div class="count blue">0</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 ">
            <div class="x_panel tile fixed_height_100">

              <div class="tile_count">
                <div class="col-md-9 col-sm-4  tile_stats_count">
                  <span class="count_top">JUMLAH PRODI</span>
                  <div class="count blue">0</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-4 ">
            <div class="x_panel tile fixed_height_320 overflow_hidden">
              <div class="x_title">
                <h2>GRAFIK PROPOSAL</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table class="" style="width:100%">
                  <tr>
                    <th style="width:37%;">
                      <p>Proposal</p>
                    </th>
                    <th>
                      <div class="col-lg-7 col-md-7 col-sm-7 ">
                        <p class="">Prodi</p>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 ">
                        <p class="">Persen</p>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                    </td>
                    <td>
                      <table class="tile_info">
                        <tr>
                          <td>
                            <p><i class="fa fa-square blue"></i>Teknik Informatika</p>
                          </td>
                          <td>30%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square green"></i>Sistem Informasi </p>
                          </td>
                          <td>10%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square purple"></i>Pendidikan PAUD </p>
                          </td>
                          <td>20%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square aero"></i>Ekonomi </p>
                          </td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square red"></i>Sastra Indonesia </p>
                          </td>
                          <td>30%</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-sm-4 ">
            <div class="x_panel tile fixed_height_320 overflow_hidden">
              <div class="x_title">
                <h2>GRAFIK SKRIPSI</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table class="" style="width:100%">
                  <tr>
                    <th style="width:37%;">
                      <p>Skripsi</p>
                    </th>
                    <th>
                      <div class="col-lg-7 col-md-7 col-sm-7 ">
                        <p class="">Prodi</p>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 ">
                        <p class="">Persen</p>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                    </td>
                    <td>
                      <table class="tile_info">
                        <tr>
                          <td>
                            <p><i class="fa fa-square blue"></i>Sastra Inggris</p>
                          </td>
                          <td>30%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square green"></i>Teknik Informatika </p>
                          </td>
                          <td>10%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square purple"></i>Teknik Mesin </p>
                          </td>
                          <td>20%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square aero"></i>Pendidikan Komputer </p>
                          </td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square red"></i>Akutansi </p>
                          </td>
                          <td>30%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square black"></i>Teknik Industri </p>
                          </td>
                          <td>20%</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12 col-sm-4 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>INFORMASI KAMPUS <small>Alur Skripsi</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="dashboard-widget-content">

                  <ul class="list-unstyled timeline widget">
                    <li>
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                            <a>Mengajukan Usulan Penelitian</a>
                          </h2>
                          <div class="byline">

                          </div>
                          <p class="excerpt">Banyak mahasiswa salah kaprah bahwa tahap awal ini disebut dengan pengajuan judul. Yang lebih tepat sebetulnya adalah pengajuan usulan penelitian, sebab yang seharusnya diajukan bukan hanya judul, namun juga beberapa unsur lain yang terdapat di dalam suatu penelitian.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                            <a>Seminar Proposal</a>
                          </h2>
                          <div class="byline">

                          </div>
                          <p class="excerpt">Saat mengerjakan proposal pra seminar, mahasiswa perlu berkonsultasi dan menunjukkan kemajuan proposal yang dilakukannya. Pada saat inilah semua unsur proposalnya dipertimbangkan; bagaimana kerangka teorinya, bagaimana metodologinya, bagaimana keaslian penelitiannya, juga rujukan yang diperlukan apa saja, dan lain sebagainya. Tukar tambah pengetahuan antara si mahasiswa dan Dosen Pembimbingnya dimaksimalkan di sini.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                            <a>Proses Penelitian/Penggarapan Inti Skripsi</a>
                          </h2>
                          <div class="byline">
                            <span></span> <a></a>
                          </div>
                          <p class="excerpt">Setelah mahasiswa melakukan Seminar Proposal, tugas selanjutnya adalah menggarap Inti skripsinya, berupa penggalian data dan menganalisisnya sesuai dengan metode yang ditulisnya di dalam proposal. Bagian ini juga di bawah arahan Dosen Pembimbing. Jadi, konsultasi dengannya tetap berlangsung dalam beberapa kali untuk menunjukan kemajuan yang telah dicapainya dan mendapat bimbingan dari sang dosen.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                            <a>Ujian Skripsi</a>
                          </h2>
                          <div class="byline">

                          </div>
                          <p class="excerpt">Inti dari ujian skripsi bukanlah kemampuan mahasiswa menjawab semua pertanyaan seperti zaman ujian di SMA dulu, melainkan kemampuan mahasiswa mempertanggungjawabkan penelitiannya. Oleh karena itu, pertanggungjawaban mahasiswa adalah di seputar validitas dan kesistematisan penelitian, sejak awal naskah hingga pungkasannya, dari A hingga Z.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                            <a>Merevisi Skripsi</a>
                          </h2>
                          <div class="byline">

                          </div>
                          <p class="excerpt">Nah, dalam proses revisi ini mahasiswa akan berada di bawah petunjuk dosen Penguji Utama. Secara birokratis, dia hanya berurusan dengan Dosen Pembimbingnya yang baru itu. Oleh karena itu, segenap seluk belum perubahan dan berbaikan yang diperlukan dalam naskah skripsinya harus dikonsultasikn kepada Dosen yang kemarin menjadi Penguji Utamanya.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                            <a>Pengesahan Skripsi</a>
                          </h2>
                          <div class="byline">

                          </div>
                          <p class="excerpt">Inilah tahap akhir dari proses penggarapan skripsi mahasiswa. Pada tahap ini, satu langkah saja dilewati maka skripsinya sudah dianggap selesai. Langkah itu adalah membubuhkan tanda tangan di Halaman Pengesahan dan menjilid skripsinya.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('assets/'); ?>vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?= base_url('assets/'); ?>vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="<?= base_url('assets/'); ?>vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="<?= base_url('assets/'); ?>vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?= base_url('assets/'); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url('assets/'); ?>vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="<?= base_url('assets/'); ?>vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.pie.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.time.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.stack.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="<?= base_url('assets/'); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="<?= base_url('assets/'); ?>vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?= base_url('assets/'); ?>vendors/moment/min/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <!-- <script src="./build/js/custom.min.js"></script> -->
  <script src="<?= base_url('assets/'); ?>build/js/custom.min.js"></script>

</body>

</html>