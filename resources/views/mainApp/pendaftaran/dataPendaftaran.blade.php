<!-- div tabel data pendaftaran santri  -->
<div id="divDataPendaftaran">
    <div class="alert alert-primary">
        Untuk menerima pendaftaran santri silahkan klik "Detail" santri, kemudian "Approve pendaftaran"
    </div>
    <div class="row" style="padding-left:20px;margin-right:10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <table id="tblPendaftaran" class="table table-hover table-bordered table-stripped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pendaftar</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataPendaftaran as $df)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $df->nama_santri }}</td>
                        <td>{{ $df->ConvertJk($df->jk) }}</td>
                        <td>{{ $df->alamat }}</td>
                        <td>{{ $df->kelas }}</td>
                        <td>{{ $df->StatusDiterima($df->status) }}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="editAtc('{{ $df->id_pendaftaran }}')">
                                <i class="fas fa-exclamation-circle"></i> Detail
                            </a>&nbsp;
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ asset('ladun/') }}/base/js/pendaftaran.js"></script>
