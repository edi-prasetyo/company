<div class="card">
    <div class="card-header">
        Detail Perusahaan <?php echo $company->name; ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Nama Perusahaan</label>
                    <input class="form-control" value="<?php echo $company->name; ?>" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input class="form-control" value="<?php echo $company->email; ?>" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>website</label>
                    <input class="form-control" value="<?php echo $company->website; ?>" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Telepon</label>
                    <input class="form-control" value="<?php echo $company->telephone; ?>" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Provinsi</label>
                    <input class="form-control" value="<?php echo $company->province_name; ?>" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Kota</label>
                    <input class="form-control" value="<?php echo $company->city_name; ?>" disabled>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea class="form-control" value="" disabled><?php echo $company->address; ?></textarea>
                </div>
            </div>

        </div>
    </div>
</div>