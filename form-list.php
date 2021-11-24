<?php
include('header.php');
if ($_SESSION['level'] == 'admin') {
    header("Location: manage.php");
} else if ($_SESSION['level'] != 'user') {
    header("Location: index.php");
}
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <form class="needs-validation" novalidate method="POST" action="list.php?aksi=tambah">
                <h5 class="modal-title">Tambah List</h5>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="judul">Judul Kegiatan</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Kegiatan" required>
                        <div class="invalid-feedback">
                            Silahkan Isi Judul Kegiatan Anda
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tempat">Tempat</label>
                        <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat" required>
                        <div class="invalid-feedback">
                            Silahkan Isi Tempat Kegiatan Anda
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="waktu">Tenggat waktu</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg>
                                </span>
                            </div>
                            <input type="datetime-local" class="form-control" id="waktu" name="waktu" placeholder="Tanggal / Waktu" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Silahkan isi waktu kegiatan anda
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="custom-select" name="kategori" id="kategori" required>
                        <option value="" disabled selected>Kategori</option>
                        <option value="Tugas Kuliah">Tugas Kuliah</option>
                        <option value="Magang">Magang</option>
                        <option value="Lain - Lain">Lain - Lain</option>
                    </select>
                    <div class="invalid-feedback">Silahkan isi Kategori kegiatan anda</div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" required>Keterangan Kegiatan</textarea>
                    <div class="invalid-feedback">Silahkan isi keterangan kegiatan anda</div>
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="dashboard.php" class="btn btn-secondary" >Close</a>
            </form>
        </div>
    </div>
</div>

<script>

(function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


    tinymce.init({
        selector: '#keterangan'
    });
    
</script>
<?php
include('footer.php');
?>