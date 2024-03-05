<?php
include '>>/aut/config.php';
$id=$_GET['id'];
$query = mysqli_query($mysqli, "SELECT * from tb_mahasiswa WHERE id = '$id'");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1> Form edit </h1>
<form action="edit-data.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="row mb-3">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Nama</label>
        <input type="text" id="form6Example1" class="form-control" placeholder="Nama" name="nama" required >
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example2">Nim</label>
        <input type="text" id="form6Example2" class="form-control" placeholder="Nim" name="nim" required >
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-3">
    <label class="form-label" for="form6Example3">Semester</label>
    <input type="text" id="form6Example3" class="form-control" placeholder="Semester" name="semester" required >
  </div>

  <!-- Text input -->
  <div class="form-outline mb-3">
    <label class="form-label" for="form6Example4">Username</label>
    <input type="text" id="form6Example4" class="form-control" placeholder="Username" name="username" required >
  </div>

  <!-- Email input -->
  <div class="form-outline mb-3">
    <label class="form-label" for="form6Example5">Password</label>
    <input type="text" id="form6Example5" class="form-control" placeholder="Password" name="password" required >
  </div>

  <!-- Submit button -->
<!--  <button type="submit" class="btn btn-primary btn-block mb-1">Sign in</button> -->

  <button type="submit" class="btn btn-primary">Simpan</button>

  </form>