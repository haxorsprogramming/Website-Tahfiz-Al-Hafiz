<!-- div tabel data penggajian  -->
<div id="divDataPenggajian">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="buatSpillAtc()">
            <i class="fas fa-plus-circle"></i> Buat Spill Penggajian
        </a>
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <table id="tblPenggajian" class="table table-hover table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Token</th>
                        <th>Nama Pengurus</th>
                        <th>Tanggal Penggajian</th>
                        <th>Total Gaji</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPenggajian as $gaji)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ substr($gaji -> token_penggajian, 0, 7) }} ...</td>
                        <td>{{ $gaji -> pengurusData -> nama }}</td>
                        <td>{{ Carbon\Carbon::parse($gaji-> tanggal_pembayaran) -> format('d-m-Y'); }}</td>
                        <td>Rp. {{ number_format($gaji -> total_gaji) }}</td>
                        <td>
                            <a href="#!" class="btn btn-primary">Cetak Slip</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>