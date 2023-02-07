<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            Masukan Data USer
        </div>
        <div class="card-body">
            <!-- Nested Row within Card Body -->

            <?php
            echo form_open('admin/user/create')
            ?>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Title</label>
                <div class="col-md-8">
                    <select class="form-control custom-select" name="user_title" value="">
                        <option value='Bapak'>Bapak</option>
                        <option value='Ibu'>Ibu</option>
                        <option value='Saudara'>Saudara</option>
                        <option value='Saudari'>Saudari</option>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Role</label>
                <div class="col-md-8">
                    <select class="form-control custom-select" name="role_id" value="">
                        <option value='1'>Superadmin</option>
                        <option value='2'>Admin</option>
                        <option value='3'>Member</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="<?php echo set_value('name'); ?>">
                    <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Allamat Lengkap</label>
                <div class="col-md-8">
                    <textarea class="form-control" name="user_address" placeholder="Alamat Lengkap" value="<?php echo set_value('user_address'); ?>"></textarea>
                    <?php echo form_error('user_address', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Nomor Hp</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="user_phone" placeholder="Nomor Handphone" value="<?php echo set_value('user_phone'); ?>">
                    <?php echo form_error('user_phone', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>" style="text-transform: lowercase">
                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-8">
                    <input type="password" class="form-control" name="password1" placeholder="Password">
                    <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Ulangi Password</label>
                <div class="col-md-8">
                    <input type="password" class="form-control" name="password2" placeholder="Repeat Password">

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary btn-block">
                        Register Account
                    </button>
                </div>

                <?php echo form_close() ?>



            </div>
        </div>
    </div>