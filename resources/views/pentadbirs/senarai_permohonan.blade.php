@include('header')
<article>
    <div class="container">
        <h1 class="mt-4">Senarai Permohonan</h1>

        <style>
            /* Style for the table */
            .table-custom {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            /* Style for table headers */
            .table-custom th {
                background-color: #343a40;
                color: #ffffff;
                padding: 10px;
                text-align: left;
            }

            /* Style for table rows */
            .table-custom td, .table-custom th {
                border: 1px solid #dee2e6;
                padding: 10px;
            }

            /* Zebra-striping for table rows */
            .table-custom tbody tr:nth-child(even) {
                background-color: #f8f9fa;
            }

            /* Hover effect for table rows */
            .table-custom tbody tr:hover {
                background-color: #d6d8db;
            }
        </style>

        <table class="table-custom">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>NO.S</th>
                    <th>JAWATAN<br>UNIT/<br>BAHAGIAN</th>
                    <th>MESYUARAT:</th>
                    <th>BILIK</th>
                    <th>PENGERUSI<br>VIP</th>
                    <th>Dari</th>
                    <th>Hingga</th>
                    <th>BILANGAN<br>AHLI</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($borangs as $borang)
                    <tr>
                        <td>{{ $borang->id }}</td>
                        <td>{{ $borang->nama_pemohon }}</td>
                        <td>{{ $borang->email_pemohon }}</td>
                        <td>{{ $borang->no_sambungan }}</td>
                        <td>{{ $borang->jawatan }}
                        {{ $borang->unit_bahagian }}</td>
                        <td>{{ $borang->nama_mesyuarat }}</td>
                        <td>{{ $borang->nama_bilik}}</td>
                        <td>{{ $borang->pengerusi }}</td>
                        <td>{{ $borang->dari }}</td>
                        <td>{{ $borang->hingga }}</td>
                        <td>{{ $borang->bilangan_ahli }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>
