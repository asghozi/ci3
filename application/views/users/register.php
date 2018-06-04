<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
   <div class="form-group">
       <label>Nama Lengkap</label>
       <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
   </div>
   <div class="form-group">
       <label>Kodepos</label>
       <input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
   </div>
...
...
   <button type="submit" class="btn btn-primary btn-block">Daftar</button>
<?php echo form_close(); ?>