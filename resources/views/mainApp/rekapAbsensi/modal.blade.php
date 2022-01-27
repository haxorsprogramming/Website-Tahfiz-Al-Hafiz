<!-- modal modal pilih waktu  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalPilihWaktu">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Waktu Rekap</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Bulan</label>
                    <select class="form-control" id="txtBulan">
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <select class="form-control" id="txtTahun">
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="modalPilihWaktuAtc()">Pilih</button>&nbsp;
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>