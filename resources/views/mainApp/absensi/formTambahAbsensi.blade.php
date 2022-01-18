<!-- div form add absensi  -->
<div id="divTambahAbsensi" style="display: none;">
    <div>
        <a href="javascript:void(0)" class="btn btn-primary btn-icon icon-left">
            <i class="fas fa-reply"></i> Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Form tambah absensi ({{ date("d-M-Y"); }})</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="tblDataSantri">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Santri</th>
                                <th>Nama</th>
                                <th>Khafilah</th>
                                <th>Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataSantri as $santri)
                            @php
                                $idSantri = $santri -> id_santri;
                                $tanggal = date("d");
                                $bulan = date("m");
                                $tahun = date("Y");
                                $cekAbsensi = DB::table('tbl_absensi') -> where('id_santri', $idSantri) -> where('tanggal', $tanggal) -> where('bulan', $bulan) -> where('tahun', $tahun) -> count();
                            @endphp
                            <?php
                            if($cekAbsensi < 1){
                                $stCheck = "";
                            }else{
                                $stCheck = "checked";
                            }
                            ?>
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td>{{ $santri -> id_santri }}</td>
                                <td>{{ $santri -> nama }}</td>
                                <td>{{ $santri -> kafilahData -> nama }}</td>
                                <td>
                                    <label class="custom-switch mt-2">
                                        <input type="checkbox" <?=$stCheck; ?> @click="setAbsensiAtc('{{ $santri -> id_santri }}|{{ $santri -> nama }}')" name="custom-switch-checkbox" id="ck_{{ $santri -> id_santri }}" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-icon icon-left">
                            <i class="fas fa-save"></i>Proses Absensi
                        </a>
                        &nbsp;&nbsp;
                        <a href="javascript:void(0)" class="btn btn-lg btn-info btn-icon icon-left" id="btnClearForm">
                            <i class="fas fa-i-cursor"></i> Clear
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>