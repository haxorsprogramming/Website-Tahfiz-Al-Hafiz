<!-- div tabel data santri  -->
<div id="divDataSantri">
    <div style="margin-bottom:15px;">
        <a href="javascript:void(0)" class="btn btn-lg btn-primary  btn-icon icon-left" @click="tambahSantriAtc()">
            <i class="fas fa-plus-circle"></i> Tambah Santri
        </a>
    </div>
    <div class="row" id="divTabelDataSantri" style="padding-left:20px;margin-right:10px;">
        <table id="tblSantri" class="table table-hover table-bordered table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Induk</th>
                    <th>Nama Santri</th>
                    <th>JK</th>
                    <th>Alamat</th>
                    <th>Kafilah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataSantri as $santri)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $santri -> id_santri }}</td>
                    <td><b>{{ $santri -> nama }}</b></td>
                    @if($santri -> jk == 'L')
                    <td>Laki Laki</td>
                    @else
                    <td>Perempuan</td>
                    @endif
                    <td>{{ $santri -> alamat }}</td>
                    <td>{{ $santri -> getDataKafilah($santri -> id_kafilah) -> nama }}</td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="editAtc('{{ $santri -> id_santri }}')">
                            <i class="fas fa-exclamation-circle"></i> Detail
                        </a>&nbsp;
                        <a href="javascript:void(0)" class="btn btn-sm btn-warning" @click="hapusAtc('{{ $santri -> id_santri }}')">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
