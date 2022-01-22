<!-- modal pilih tahun -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTahun">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih tahun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered table-stripped" id="tblDataPengurus">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tahunList as $tahun)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $tahun }}</td>
                            <td>
                                <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-primary" @click="pilihTahunModalAtc('{{ $tahun }}')">Pilih</a>
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