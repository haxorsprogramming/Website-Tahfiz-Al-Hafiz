@include('layout.headerPdf')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <table style="width:100%;font-size:10px;">
            <tr>
                <td>Bulan : {{ $bulan }}</td>
                <td>Tahun : {{ $tahun }}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <table class="table table-bordered" style="font-size:10px;">
        <thead>
            <tr style="background-color: #636e72;color:#dfe6e9;">
                <td>No</td>
                <td>Arus</td>
                <td>Tipe</td>
                <td>Detail</td>
                <td>Total</td>
                <td>Tanggal</td>
            </tr>
        </thead>
        <tbody>
        @foreach($dataFlow as $flow)
        <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ $flow -> flow }}</td>
            <td>{{ $flow -> type }}</td>
            <td>{{ $flow -> setDetail($flow -> type, $flow -> id_event) }}</td>
            <td>Rp. {{ number_format($flow -> total) }}</td>
            <td>{{ $flow -> setTanggal($flow -> created_at) }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div>
    <ul style="font-size: 11px;">
        <li>Total pemasukan : Rp. {{ number_format($pembukuan['pemasukan']) }}</li>
        <li>Total pengeluaran : Rp. {{ number_format($pembukuan['pengeluaran']) }}</li>
        <li>Selisih saldo : Rp. {{ number_format($pembukuan['selisih']) }}</li>
    </ul>
</div>

@include('layout.footerPdf')