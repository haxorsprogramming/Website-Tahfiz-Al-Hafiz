<!-- div tabel data cash flow  -->
<div id="divDataCashFlow">
    <div class="row" style="padding-left:20px;margin-right:10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <table id="tblCashFlow" class="table table-hover table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Token</th>
                        <th>Flow</th>
                        <th>Type</th>
                        <th>Detail</th>
                        <th>Nominal</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dataCashFlow as $flow)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ substr($flow -> token_flow, 0, 7) }} ...</td>
                        <td>{{ $flow -> flow }}</td>
                        <td>{{ $flow -> type }}</td>
                        <td>{{ $flow -> setDetail($flow -> type, $flow -> id_event) }}</td>
                        <td>Rp. {{ number_format($flow -> total) }}</td>
                        <td>{{ $flow -> created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>