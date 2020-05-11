<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form action=<?= base_url('mahasiswa') ?> method='POST'>
    <div class="form-group col-md-6">
        <label for="formGroupExampleInput">Nama</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama">
    </div>
    <div class="form-group  col-md-6">
        <label for="formGroupExampleInput2">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Email">
    </div>
    <div class="form-group  col-md-6">
        <label for="formGroupExampleInput3">Matakuliahh</label>
        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Matakuliah">
    </div>
    <div class="form-group  col-md-6">
        <label for="formGroupExampleInput4">Foto</label>
        <input type="file" class="form-control" id="formGroupExampleInput4" placeholder="Foto">
    </div>
</form>