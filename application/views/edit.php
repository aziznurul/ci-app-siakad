<div class="content-wrapper">
  <section class="content">
    <?php foreach ($mahasiswa as $mhs) : ?>
      <form action="<?php echo base_url() . 'mahasiswa/update'; ?>" method="post">

        <div class="form-group">
          <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $mhs->id ?>">

          <label for="nama">Nama Mahasiswa</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $mhs->nama ?>">
        </div>

        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="number" name="nim" id="nim" class="form-control" value="<?php echo $mhs->nim ?>">
        </div>

        <div class="form-group">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
        </div>

        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select name="jurusan" class="form-control" required>
            <option <?php if ($mhs->jurusan == "Teknik Geologi") {
                      echo 'selected="selected"';
                    } ?>>Teknik Geologi</option>
            <option <?php if ($mhs->jurusan == "Teknik Geodesi & Geomatika") {
                      echo 'selected="selected"';
                    } ?>>Teknik Geodesi & Geomatika</option>
            <option <?php if ($mhs->jurusan == "Oseanografi") {
                      echo 'selected="selected"';
                    } ?>>Oseanografi</option>
            <option <?php if ($mhs->jurusan == "Meteorologi") {
                      echo 'selected="selected"';
                    } ?>>Meteorologi</option>
          </select>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" value="<?php echo $mhs->email ?>">
        </div>

        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?php echo $mhs->no_telp ?>">
        </div>

        <button type="reset" class="btn btn-danger">Reset</button>

        <button type="submit" class="btn btn-primary">Simpan</button>



      </form>
    <?php endforeach ?>
  </section>
</div>