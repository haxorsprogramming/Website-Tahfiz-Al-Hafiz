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
