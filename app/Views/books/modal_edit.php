<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalEditLabel">Edit Data Buku</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="<?= base_url('update/book/' . $book['id_book']) ?>" method="post">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Kode Buku</label>
                            <input type="text" name="code_book" class="form-control" value="<?= esc($book['code_book']) ?>" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ISBN</label>
                            <input type="text" name="isbn_book" class="form-control" value="<?= esc($book['isbn_book']) ?>" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="title_book" class="form-control" value="<?= esc($book['title_book']) ?>" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Penulis</label>
                            <input type="text" name="author_book" class="form-control" value="<?= esc($book['author_book']) ?>" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Penerbit</label>
                            <input type="text" name="publisher_book" class="form-control" value="<?= esc($book['publisher_book']) ?>" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tahun Terbit</label>
                            <input type="number" name="published_year" class="form-control" value="<?= esc($book['published_year']) ?>" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Stok Buku</label>
                            <input type="number" name="stock" class="form-control" value="<?= esc($book['stock']) ?>" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Keterangan / Deskripsi</label>
                            <textarea name="description_book" class="form-control" rows="3"><?= esc($book['description_book']) ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>