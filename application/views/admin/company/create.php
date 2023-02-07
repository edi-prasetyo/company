<?php //var_dump($provinsi);
//die; 
?>
<div class="col-md-8 mx-auto">
    <div class="card">
        <div class="card-header">
            Masukan Data Perusahaan
        </div>
        <div class="card-body">

            <?php
            //Notifikasi
            if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-success alert-dismissable fade show">';
                echo '<button class="close" data-dismiss="alert" aria-label="Close">×</button>';
                echo $this->session->flashdata('message');
                unset($_SESSION['message']);
                echo '</div>';
            }
            echo validation_errors('<div class="alert alert-warning">', '</div>');

            ?>
            <!-- Nested Row within Card Body -->

            <?php
            echo form_open('admin/company/create',  array('class' => 'needs-validation', 'novalidate' => 'novalidate'))
            ?>

            <!-- Provinsi -->
            <div class="form-group row">
                <label class="col-md-4 text-md-right">Provinsi</label>
                <div class="col-md-8">
                    <select class="form-control select2bs4" id='sel_provinsi' name="province_id" required>
                        <option value="">-- Pilih Provinsi --</option>
                        <?php

                        foreach ($provinsi as $provinsi) {
                            echo "<option value='" . $provinsi['id'] . "'>" . $provinsi['name'] . "</option>";
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">Silahkan Pilih Provinsi.</div>
                </div>
            </div>

            <!-- Kota -->
            <div class="form-group row">
                <label class="col-md-4 text-md-right">Kota</label>
                <div class="col-md-8">
                    <select class="form-control select2bs4" id='sel_kota' name="city_id" required>
                        <option value="">-- Pilih Kota --</option>
                    </select>
                    <div class="invalid-feedback">Silahkan Pilih Kota.</div>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Nama Perusahaan</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name" placeholder="Nama Perusahaan" value="<?php echo set_value('name'); ?>" required>
                    <div class="invalid-feedback">Silahkan Masukan Nama Lengkap.</div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Allamat Lengkap</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="address" placeholder="Alamat Lengkap" value="<?php echo set_value('address'); ?>" required></textarea>
                    <div class="invalid-feedback">Silahkan Masukan Alamat Lengkap.</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Nomor Hp</label>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="telephone" placeholder="Nomor Handphone" value="<?php echo set_value('telephone'); ?>" required>
                    <div class="invalid-feedback">Silahkan Masukan Nomor Handphone.</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Whatsapp <span class="text-success">*Optional</span> </label>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="whatsapp" placeholder="Nomor Whatsapp" value="<?php echo set_value('whatsapp'); ?>">
                    <div class="invalid-feedback">Silahkan Masukan Nomor Handphone.</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Email <span class="text-success">*Optional</span></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>" style="text-transform: lowercase">
                    <div class="invalid-feedback">Silahkan Masukan Alamat Email.</div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Website <span class="text-success">*Optional</span></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="website" placeholder="Website" value="<?php echo set_value('website'); ?>">
                    <div class="invalid-feedback">Silahkan Masukan Nama Lengkap.</div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Deskripsi Perusahaan <span class="text-success">*Optional</span></label>
                <div class="col-md-8">
                    <textarea class="form-control" name="description" placeholder="Deskripsi" value="<?php echo set_value('description'); ?>"></textarea>
                    <div class="invalid-feedback">Silahkan Masukan Alamat Lengkap.</div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Bidang Perusahaan <span class="text-success">*Optional</span></label>
                <div class="col-md-8">
                    <textarea class="form-control" name="company_field" placeholder="Bidang" value="<?php echo set_value('company_field'); ?>"></textarea>
                    <div class="invalid-feedback">Silahkan Masukan Alamat Lengkap.</div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">NPWP <span class="text-success">*Optional</span></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="npwp" placeholder="NPWP" value="<?php echo set_value('npwp'); ?>">
                    <div class="invalid-feedback">Silahkan Masukan Nama Lengkap.</div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Status </label>
                <div class="custom-control custom-radio my-auto mr-3 ml-3">
                    <input class="custom-control-input" type="radio" id="customRadio1" value="1" name="status" checked>
                    <label for="customRadio1" class="custom-control-label">Aktif</label>
                </div>
                <div class="custom-control custom-radio my-auto">
                    <input class="custom-control-input" type="radio" id="customRadio2" value="0" name="status">
                    <label for="customRadio2" class="custom-control-label">Inactive</label>
                </div>
            </div>



            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </div>

                <?php echo form_close() ?>

            </div>
        </div>
    </div>
</div>





<!-- Script -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/jquery/jquery.min.js"></script>

<script type='text/javascript'>
    // baseURL variable
    var baseURL = "<?php echo base_url(); ?>";

    $(document).ready(function() {

        // Provinsi change
        $('#sel_provinsi').change(function() {
            var province = $(this).val();

            // AJAX request
            $.ajax({
                url: '<?= base_url() ?>admin/wilayah/getCity',
                method: 'post',
                data: {
                    <?= $this->security->get_csrf_token_name(); ?>: "<?= $this->security->get_csrf_hash(); ?>",
                    province: province
                },
                dataType: 'json',
                success: function(response) {

                    // Remove options 
                    // $('#sel_kecamatan').find('option').not(':first').remove();
                    $('#sel_kota').find('option').not(':first').remove();

                    // Add options
                    $.each(response, function(index, data) {
                        $('#sel_kota').append('<option value="' + data['id'] + '">' + data['name'] + '</option>');
                    });
                }
            });
        });

        // Kota change


    });
</script>