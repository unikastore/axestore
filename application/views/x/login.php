<?php

?>
<style>
    .btn-home {
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 9999;
    }
</style>


<!-- Content -->
<!-- Button kembali ke home -->
<a href="<?= base_url(); ?>" class="btn btn-primary btn-home"><i class="bx bx-home"></i></a>


<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">

                        <span class="app-brand-text demo text-body fw-bolder">Login Pengguna</span>

                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome to Login Axe Store! 👋</h4>
                    <p class="mb-4">Please sign-in to your account</p>
                    <?php echo validation_errors(); ?>
                    <?php if (isset($error)) echo $error; ?>
                    <?php echo form_open('C_Auth/login_user'); ?>

                    <div class="mb-3">
                        <label for="email" class="form-label">Username</label>
                        <input type="text" class="form-control" id="email" name="username" placeholder="Enter your username" autofocus />
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                    </div>
                    </form>
                    <p class="text-center">
                        <span>Baru di Platform Kami?</span>
                        <a href="<?=base_url();?>C_TopUp/registrasi">
                            <span>Buat Akun Baru</span>
                        </a>
                    </p>

                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->

<?php if ($this->session->flashdata('register')) : ?>
    <!-- Tampilkan skrip alert jika flash data 'register' ada -->
    <script>
        // Menampilkan pesan alert sukses
        alert("<?php echo $this->session->flashdata('register'); ?>");
    </script>
<?php endif; ?>