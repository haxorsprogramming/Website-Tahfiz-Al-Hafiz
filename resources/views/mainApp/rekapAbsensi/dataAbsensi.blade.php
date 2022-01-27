<!-- div tabel data rekap absensi  -->
<div id="divDataLapkeu">
    <div style="margin-bottom:15px;width:50%;">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Tahun</label>
                <select class="form-control" id="txtTahun">
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Bulan</label>
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
            <div class="form-group col-md-2" style="padding-top:30px;">
                <a href="javascript:void(0)" class="btn btn-primary" @click="modalPilihWaktuAtc()">Filter waktu rekap</a>
                
            </div>
        </div>

    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;" id="divRawAbsensi">
        
    </div>
</div>