<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>LIST PENDAFTAR</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-hover table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>JUDUL SKRIPSI</th>
                                    <th>DRAFT JUDUL</th>
                                    <th>PERSETUJUAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($persetujuan_judul->result_array() as $i) :
                                    $npm = $i['nim'];
                                    $nama = $i['nama'];
                                    $email = $i['email'];
                                    $judul = $i['judul_skripsi'];
                                    $draf = $i['draf'];
                                ?>
                                    <tr>
                                        <td><?php echo $npm; ?></td>
                                        <td><?php echo $nama; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $judul; ?></td>
                                        <td><?php echo $draf; ?></td>
                                        <td>
                                            <input type="radio" value="SETUJU" name="pilihan">SETUJU
                                            <input type="radio" value="TOLAK" name="pilihan">TOLAK
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

</div>