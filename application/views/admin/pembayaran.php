<?php
if ($this->session->has_userdata('user') != 1) {
    redirect('C_Admin/login');
}

// Ambil data dari form
$start_date = $this->input->post('start_date');
$end_date = $this->input->post('end_date');

// Mengatur variabel flag untuk mengecek apakah data ditemukan atau tidak
$data_found = false;

// var_dump($struk);
?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Tanda Terima Basis Data</h4>

        <!-- Periode Waktu -->
        <form action="" method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="<?= $start_date ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="<?= $end_date ?>" required>
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <?php if ($start_date && $end_date) : // Cek apakah tanggal sudah dipilih 
        ?>
            <?php if ($struk) : // Cek apakah data ditemukan 
            ?>

                <button class="btn btn-primary" onclick="toggleTable()">Bukti Data Tanpa Transfer</button>
                <button class="btn btn-primary" onclick="toggleTable2()">Bukti Data  Transfer</button>
                <button class="btn btn-primary" onclick="toggleTable3()">Data dengan Bukti yang Terkonfirmasi</button>
                <br><br><br>


                <!-- Hoverable Table rows -->
                <div class="card" id="tabel1" style="display: none;">
                    <h5 class="card-header">Data Tanpa Bukti Transfer</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Voucher Name</th>
                                    <th>ID Game</th>
                                    <th>Game Name</th>
                                    <th>Time Purchase</th>
                                    <th>Payment Method</th>
                                    <th>Total Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($struk as $strk) :
                                    if ($strk['status_pembayaran'] == 0) :
                                        // Filter data berdasarkan periode waktu
                                        $tanggal_pesan = $strk['tanggal_struk'];
                                        if (($tanggal_pesan >= $start_date && $tanggal_pesan <= $end_date)) :
                                            $data_found = true; // Set flag data ditemukan
                                ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>#<?= $strk['id_struk'] ?></td>
                                                <td><strong><?= $strk['nama_voucher'] ?></strong></td>
                                                <td><?= $strk['uid_game'] ?></td>
                                                <td><?= $strk['nama_game'] ?></td>
                                                <td><?= $strk['waktu'] ?></td>
                                                <td><?= $strk['nama_metode'] ?></td>
                                                <td>Rp<?= number_format($strk['total_amount'], 0, "", ".") ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?= base_url(); ?>C_Admin/hapus_struk/<?= $strk['id_struk'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus struk?')"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                <?php
                                        endif;
                                    endif;

                                endforeach;
                                reset($struk);
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <br>
                <!--/ Hoverable Table rows -->

                

                <!-- Hoverable Table rows -->
                <div class="card" id="tabel2" style="display: none;">
                    <h5 class="card-header">Data With Transfer Prove</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Voucher Name</th>
                                    <th>ID Game</th>
                                    <th>Game Nama</th>
                                    <th>Waktu Pembelian</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Total</th>
                                    <th>Bukti Transfer</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($struk as $strk) :
                                    if ($strk['status_pembayaran'] == 1) :
                                        // Filter data berdasarkan periode waktu
                                        $tanggal_pesan = $strk['tanggal_struk'];
                                        if (($tanggal_pesan >= $start_date && $tanggal_pesan <= $end_date)) :
                                            $data_found = true; // Set flag data ditemukan
                                ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>#<?= $strk['id_struk'] ?></td>
                                                <td><strong><?= $strk['nama_voucher'] ?></strong></td>
                                                <td><?= $strk['uid_game'] ?></td>
                                                <td><?= $strk['nama_game'] ?></td>
                                                <td><?= $strk['waktu'] ?></td>
                                                <td><?= $strk['nama_metode'] ?></td>
                                                <td>Rp<?= number_format($strk['total_amount'], 0, "", ".") ?></td>
                                                <td><a target="_blank" href="<?= base_url(); ?>assetx/assets/images/<?= $strk['foto_verifikasi'] ?>"><?= $strk['foto_verifikasi'] ?></a></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?= base_url(); ?>C_Admin/konfirmasi_pembayaran/<?= $strk['id_pembayaran'] ?>" onclick="return confirm('Apakah Anda yakin ingin mengkonfirmasi pembayaran?')"><i class="bx bx-check me-1"></i> Konfirmasi</a>

                                                            <a class="dropdown-item" href="<?= base_url(); ?>C_Admin/hapus_struk/<?= $strk['id_struk'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus struk?')"><i class="bx bx-trash me-1"></i> Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                <?php
                                        endif;
                                    endif;

                                endforeach;
                                reset($struk);
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                </div>
                <!--/ Hoverable Table rows -->

                <br>
                <!-- Hoverable Table rows -->
                <div class="card" id="tabel3" style="display: none;">
                    <h5 class="card-header">Data dengan Bukti yang Dikonfirmasi</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Voucher Name</th>
                                    <th>ID Game</th>
                                    <th>Game Name</th>
                                    <th>Waktu Pembelian</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Total</th>
                                    <th>Bukti Transfer</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php foreach ($struk as $strk) :
                                    if ($strk['status_pembayaran'] == 2) :
                                        // Filter data berdasarkan periode waktu
                                        $tanggal_pesan = $strk['tanggal_struk'];
                                        if (($tanggal_pesan >= $start_date && $tanggal_pesan <= $end_date)) :
                                            $data_found = true; // Set flag data ditemukan
                                ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>#<?= $strk['id_struk'] ?></td>
                                                <td><strong><?= $strk['nama_voucher'] ?></strong></td>
                                                <td><?= $strk['uid_game'] ?></td>
                                                <td><?= $strk['nama_game'] ?></td>
                                                <td><?= $strk['waktu'] ?></td>
                                                <td><?= $strk['nama_metode'] ?></td>
                                                <td>Rp<?= number_format($strk['total_amount'], 0, "", ".") ?></td>
                                                <td><a target="_blank" href="<?= base_url(); ?>assetx/assets/images/<?= $strk['foto_verifikasi'] ?>"><?= $strk['foto_verifikasi'] ?></a></td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">

                                                            <a class="dropdown-item" href="<?= base_url(); ?>C_Admin/hapus_struk/<?= $strk['id_struk'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus struk?')"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                <?php
                                        endif;
                                    endif;

                                endforeach;
                                reset($struk);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Hoverable Table rows -->



                <?php if (!$data_found) : // Cek jika data tidak ditemukan 
                ?>
                    <div class="mt-3 text-center">Data tidak ditemukan.</div>
                <?php endif; ?>

            <?php else : // Jika tidak ada data 
            ?>
                <div class="mt-3 text-center">Data tidak ditemukan.</div>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</div>

<script>
    function toggleTable() {
        var tableContainer = document.getElementById("tabel1");
        if (tableContainer.style.display === "none") {
            tableContainer.style.display = "block"; // Tampilkan tabel jika sebelumnya disembunyikan
        } else {
            tableContainer.style.display = "none"; // Sembunyikan tabel jika sebelumnya ditampilkan
        }
    }

    function toggleTable2() {
        var tableContainer = document.getElementById("tabel2");
        if (tableContainer.style.display === "none") {
            tableContainer.style.display = "block"; // Tampilkan tabel jika sebelumnya disembunyikan
        } else {
            tableContainer.style.display = "none"; // Sembunyikan tabel jika sebelumnya ditampilkan
        }
    }

    function toggleTable3() {
        var tableContainer = document.getElementById("tabel3");
        if (tableContainer.style.display === "none") {
            tableContainer.style.display = "block"; // Tampilkan tabel jika sebelumnya disembunyikan
        } else {
            tableContainer.style.display = "none"; // Sembunyikan tabel jika sebelumnya ditampilkan
        }
    }
</script>


<?php if ($this->session->flashdata('success')) : ?>
    <!-- Tampilkan skrip alert jika flash data 'success' ada -->
    <script>
        // Menampilkan pesan alert sukses
        alert("<?php echo $this->session->flashdata('success'); ?>");
    </script>
<?php endif; ?>