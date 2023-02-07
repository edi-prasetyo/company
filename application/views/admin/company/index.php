<?php
$id = $this->session->userdata('id');
$user = $this->user_model->detail($id);
$meta = $this->meta_model->get_meta();
?>
<div class="card">
    <div class="card-header">

        <div class="row">
            <!-- <div class="col-md-3">
                <?php echo form_open('admin/mainagen'); ?>
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Masukan Nama" value="<?php echo set_value('search'); ?>">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="col-md-3">
                <?php echo form_open('admin/mainagen'); ?>
                <div class="input-group mb-3">
                    <input type="text" name="search_email" class="form-control" placeholder="Masukan Email" value="<?php echo set_value('search_email'); ?>">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="col-md-3">
                <?php echo form_open('admin/mainagen'); ?>
                <div class="input-group mb-3">
                    <select class="form-control select2bs4" name="search_kota">
                        <option>Pilih Kota</option>
                        <?php foreach ($list_kota as $kota) : ?>
                            <option value='<?php echo $kota->kota_name; ?>'><?php echo $kota->kota_name; ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div> -->

            <div class="col-md-3">
                <div class="card-tools">
                    <a href="<?php echo base_url(); ?>admin/company/create" class="btn btn-info btn-block"><i class="fa fa-plus"></i> Tambah Perusahaan</a>
                </div>
            </div>
        </div>

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
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>User input</th>
                    <th>email</th>
                    <th>status</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($companies as $data) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data->name; ?></td>
                    <td><?php echo $data->user_name; ?></td>
                    <td><a href="mailto:<?php echo $data->email; ?>"><?php echo $data->email; ?></a></td>
                    <td>
                        <?php if ($data->send == 0) : ?>
                            <span class="badge badge-warning">Pending</span>
                        <?php elseif ($data->send == 1) : ?>
                            <span class="badge badge-success">Terkirim</span>
                        <?php else : ?>
                            <span class="badge badge-danger">Gagal</span>
                        <?php endif; ?>
                    </td>

                    <td>
                        <?php if ($user->role_id == 1 || $user->role_id == 3) : ?>
                        <?php else : ?>
                            <a href="<?php echo base_url('admin/company/send_failed/' . $data->id); ?>" class="btn btn-danger btn-sm"> <i class="fa fa-times"></i> Gagal</a>
                            <a href="<?php echo base_url('admin/company/send_success/' . $data->id); ?>" class="btn btn-success btn-sm"> <i class="fa fa-paper-plane"></i> Terkirim</a>
                        <?php endif; ?>
                    </td>
                </tr>

            <?php $no++;
            }; ?>
        </table>
    </div>
    <div class="card-footer">
        <div class="pagination col-md-12 text-center">
            <?php if (isset($pagination)) {
                echo $pagination;
            } ?>
        </div>
    </div>
</div>