<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Mahasiswa
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Mahasiswa</li>
    </ol>
  </section>

  <section class="content">
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Tambah Data Mahasiswa</i></button>
    <a class="btn btn-danger" href="<?php echo base_url('mahasiswa/print') ?>">
      <i class="fa fa-print"></i> Print</a>

    <div class="dropdown inline">
      <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fa fa-download"></i> Export
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="<?php echo base_url('mahasiswa/pdf') ?>">PDF</a></li>
        <li><a href="<?php echo base_url('mahasiswa/excel') ?>">EXCEL</a></li>
      </ul>
    </div>

    <div class="navbar-form navbar-right">
      <?php echo form_open('mahasiswa/search') ?>

      <input type="text" name="keyword" class="form-control" placeholder="Search..">
      <button type="submit" class="btn btn-success"> Cari </button>

      <?php form_close() ?>
    </div>


    <table class="table">
      <tr>
        <th>NO</th>
        <th>NAMA MAHASISWA</th>
        <th>NIK</th>
        <th>TANGGAL LAHIR</th>
        <th>JURUSAN</th>
        <th colspan="3">AKSI</th>
      </tr>

      <?php
      $no = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $mhs->nama ?></td>
          <td><?= $mhs->nim ?></td>
          <td><?= $mhs->tgl_lahir ?></td>
          <td><?= $mhs->jurusan ?></td>
          <td>
            <?php echo anchor('mahasiswa/detail/' . $mhs->id, '<div class="btn btn-success btn-sm"><i class=" fa fa-search-plus"></i></div>') ?>
          </td>

          <td onclick="javascript: return confirm('Yakin ?')"><?php echo anchor('mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

          <td><?php echo anchor('mahasiswa/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i></div>') ?></td>

        </tr>
      <?php endforeach; ?>
    </table>

  </section>

  <!-- Modal -->
  <div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php echo form_open_multipart('mahasiswa/tambah_aksi'); ?>

          <div class="form-group">
            <label for="nama"> Nama Mahasiswa</label>
            <input type="text" name="nama" id="nama" class="form-control">
          </div>

          <div class="form-group">
            <label for="nim"> NIM</label>
            <input type="number" name="nim" id="nim" class="form-control">
          </div>

          <div class="form-group">
            <label for="tgl_lahir"> Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" name="jurusan" id="jurusan">
              <option>Teknik Geologi</option>
              <option>Teknik Geodesi & Geomatika</option>
              <option>Oseanografi</option>
              <option>Meteorologi</option>
            </select>
          </div>

          <div class="form-group">
            <label for="alamat"> Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
          </div>

          <div class="form-group">
            <label for="email"> Email</label>
            <input type="email" name="email" id="email" class="form-control">
          </div>

          <div class="form-group">
            <label for="no_telp"> No Telepon</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control">
          </div>

          <div class="form-group">
            <label for="foto">Upload Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>