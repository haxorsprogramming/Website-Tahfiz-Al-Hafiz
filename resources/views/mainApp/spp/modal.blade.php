<div class="modal fade" tabindex="-1" role="dialog" id="modalSantri">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered table-stripped" id="tblDataSantri">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Santri</th>
                            <th>Nama Santri</th>
                            <th>SPP bulan ini?</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataSantri as $santri)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $santri -> id_santri }}</td>
                            <td>{{ $santri -> nama }}</td>
                            <td></td>
                            <td style="text-align: center;">
                                <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-primary" @click="pilihSantriAtc('{{ $santri -> id_santri }}|{{ $santri -> nama }}')">Pilih</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>