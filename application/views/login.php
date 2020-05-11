<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form action=<?= base_url('login'); ?> method="POST">
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="login-username" aria-describedby="emailHelp" placeholder="Enter email">
        <?php echo form_error('login-username', "<small class='text-danger pl-3'>", ' </small>'); ?>
    </div>
    <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        <?php echo form_error('password', "<small class='text-danger pl-3'>", ' </small>'); ?>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>