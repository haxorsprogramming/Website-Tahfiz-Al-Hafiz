<!-- div tabel data setting  -->
<div id="divDataSetting">
    <div style="margin-bottom:15px;">
    </div>
    <div class="row" id="divTabelDataSetting" style="padding-left:20px;margin-right:10px;">
        <table id="tblDataSetting" class="table table-hover table-bordered table-stripped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Setting</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dataSetting as $setting)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td><b>{{ $setting -> nama_setting  }}</b></td>
                    <td>{{ $setting -> value  }}</td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="editAtc('{{ $setting -> id }}')">
                            <i class="fas fa-edit"></i> Edit
                        </a>&nbsp;
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="divEditDataSetting" style="display: none;">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Edit setting</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Setting</label>
                        <input type="text" class="form-control" id="txtNamaSetting" readonly placeholder="Nama setting">
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control" id="txtNilaiSetting" placeholder="Nilai setting">
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-primary" onclick="updateProsesAtc()">Update setting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
