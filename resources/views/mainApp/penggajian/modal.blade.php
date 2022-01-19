<!-- modal pengurus  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalPengurus">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Pengurus Tahfiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered table-stripped" id="tblDataPengurus">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pengurus</th>
                            <th>Nama Pengurus</th>
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
                        <td>{{ $pengurus -> jabatan }}</td>
                        <td>
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-primary" @click="pilihPengurusAtc('{{ $pengurus -> id_pengurus }}|{{ $pengurus -> nama }}')">Pilih</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>