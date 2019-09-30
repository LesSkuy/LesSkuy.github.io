<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pelajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <h1><center>Pelajar List</center></h1>
      <table class="table table-striped">
        <thead>
          <tr>
          <th scope="col">No</th>
            <th scope="col">Id Pelajar</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nama</th>
            <th scope="col">Password</th>
            <th scope="col">Pendidikan</th>
            <th width="200">Action</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($pelajar->result() as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->id_pelajar;?></td>
            <td><?php echo $row->username_pelajar;?></td>
            <td><?php echo $row->email_pelajar;?></td>
            <td><?php echo $row->nama_pelajar;?></td>
            <td><?php echo $row->password_pelajar;?></td>
            <td><?php echo $row->pendidikan_pelajar;?></td>
            <td>
            		<a href="<?php echo site_url('product/get_edit/'.$row->id_pelajar);?>" class="btn btn-sm btn-info">Update</a>
                <a href="<?php echo site_url('product/delete/'.$row->id_pelajar);?>" class="btn btn-sm btn-danger">Delete</a>
            <td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>

    </div>
</body>
</html>