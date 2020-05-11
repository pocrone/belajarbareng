<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form action=<?= base_url('dosen/addDosen')  ?> method="POST">
    <div class="form-group col-md-6">
        <label for="formGroupExampleInput">Nama</label>
        <input type="text" class="form-control" name="nama" id="formGroupExampleInput" placeholder="Masukkan Nama">
        <?php echo form_error('nama', "<small class='text-danger pl-3'>", ' </small>'); ?>
    </div>
    <div class="form-group  col-md-6">
        <label for="formGroupExampleInput2">Email</label>
        <input type="text" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Masukkan Email">
        <?php echo form_error('nama', "<small class='text-danger pl-3'>", ' </small>'); ?>
    </div>
    <div class="form-group  col-md-6">
        <label for="formGroupExampleInput3">Matakuliahh</label>
        <input type="text" class="form-control" name="matakuliah" id="formGroupExampleInput3" placeholder="Matakuliah">
        <?php echo form_error('nama', "<small class='text-danger pl-3'>", ' </small>'); ?>
    </div>
    <div class="form-group  col-md-6">
        <label for="formGroupExampleInput4">Foto</label>
        <input type="file" class="form-control" name="foto" id="formGroupExampleInput4" placeholder="Foto">
        <?php echo form_error('nama', "<small class='text-danger pl-3'>", ' </small>'); ?>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>