<!-- div tabel data pengurus  -->
<div id="divDataPengurus">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="tambahPengurusAtc()">
            <i class="fas fa-plus-circle"></i> Tambah pengurus
        </a>
    </div>
    <div class="row" id="divTabelDataPengurus" style="padding-left:20px;margin-right:10px;">
        <table id="tblPengurus" class="table table-hover table-bordered table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Induk</th>
                    <th>Nama Pengurus</th>
                    <th>JK</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dataPengurus as $pengurus)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $pengurus -> id_pengurus }}</td>
                <td><b>{{ $pengurus -> nama }}</b></td>
                @if($pengurus -> jk == 'L')
                <td>Laki Laki</td>
                @else
                <td>Perempuan</td>
                @endif
                <td>{{ $pengurus -> alamat }}</td>
                <td>{{ $pengurus -> jabatan }}</td>
                <td>
                    <a href="javascript:void(0)" class="btn btn-sm btn-warning" @click="hapusAtc('{{ $pengurus -> id_pengurus }}')">
                        <i class="fas fa-trash-alt"></i> Hapus
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>