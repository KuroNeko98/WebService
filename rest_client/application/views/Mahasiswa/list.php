<?php echo $this->session->flashdata('hasil'); ?>
<table border="2">
    <tr><th>NIM</th><th>NAMA</th><th>ID JURUSAN</th><th>ALAMAT</th><th></th></tr>
    <?php
    foreach ($mahasiswa as $m){
        echo "<tr>
              <td>$m->nim</td>
              <td>$m->nama</td>
              <td>$m->id_jurusan</td>
              <td>$m->alamat</td>
              <td>".anchor('mahasiswa/edit/'.$m->nim,'Edit')."
                  ".anchor('mahasiswa/delete/'.$m->nim,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<br>
<table border="3">
<tr>
<td>
<?php echo anchor('mahasiswa/create','Tambah');?>
</td>
</tr>
</table> 