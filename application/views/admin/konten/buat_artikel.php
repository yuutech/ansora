<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
    </div>
    <p class="mb-4">Buat Artikel</p>
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Buat Artikel</h6>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('admin/konten/buat_artikel'); ?>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-8">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="status">Status Publikasi</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Publikasi</option>
                                <option value="2">Simpan Sebagai Draft</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-8">
                            <label for="kategori">Kategori Artikel</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <?php foreach ($kategori as $cat) : ?>
                                    <option value="<?= $cat['slug_cat']; ?>"><?= $cat['nama_cat']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="upload">Upload Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadd" name="gambar">
                                <label class="custom-file-label" for="uploadd">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <textarea name="content" id="ckeditor" required></textarea>
                    <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                    <button type="button" class="btn btn-secondary mt-4">Batal</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->