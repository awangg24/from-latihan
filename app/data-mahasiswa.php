<?php
include '../auth/config.php';

$query = mysqli_query($mysqli, "SELECT * from tb_mahasiswa");


?>

<center>
<h1> Data Mahasiswa </h1>
<a href="tambah-data.php" class="btn btn-sm btn-primary"  style="float:left;"> Tambah data</a>
<table class="table table-striped table-bordered">
    <thead class="bg-dark text-white">
        <tr>
            <th>No</th><th>Nama</th><th>Nim</th><th>semester</th><th>username</th><th>Action
        </tr>
    </thead>
    <tbody>
        <?php
        $no=0;
        while ($result = mysqli_fetch_array($query)){
            $no++;
            ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $result['nama'];?></td>
            <td><?php echo $result['nim'];?></td>
            <td><?php echo $result['semester'];?></td>
            <td><?php echo $result['username'];?></td>
            <td>
                <a href="delete-data.php?id=<?php echo $result['id'];?>" class="btn btn-sm btn-danger"> Delete </a>
                <a href="home.php?id=<?php echo $result['id'];?>&&page=edit" class="btn btn-sm btn-warning"> Edit </a>
            </td>
        </tr>
        <?php }?>
</tbody>
</table>
</center>