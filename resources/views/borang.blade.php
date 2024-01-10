@include('header')
<style>
        .form-container {
            width: 1000px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border: 1px solid #ccc;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 25px;
            margin-top: 20px; /* Add margin for better separation */
        }

        label {
            display: block;
            margin-bottom: 1px;
            font-weight: bold;
            font-size: 13px;
        }

        input {
            width: 90%;
            padding: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="date"],
        input[type="datetime-local"],
        input[type="number"] {
            width: 30%;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 15%;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .center-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <article>
    <div class="form-container">
        <h2>MAKLUMAT PEMOHON</h2>
        <form action="{{ route('borang.submit') }}" method="POST">
            @csrf
            <label for="nama_pemohon">NAMA:</label>
            <input type="text" id="nama_pemohon" name="nama_pemohon" required>
            <br>
            <label for="email_Pemohon">EMAIL:</label>
            <input type="email" id="email_pemohon" name="email_pemohon" required>
            <br>
            <label for="no_sambungan">NO SAMBUNGAN:</label>
            <input type="tel" id="no_sambungan" name="no_sambungan" required>
            <br>
            <label for="jawatan">JAWATAN:</label>
            <input type="text" id="jawatan" name="jawatan" required>
            <br>
            <label for="unit/bahagian">BAHAGIAN/UNIT:</label>
            <input type="text" id="unit_bahagian" name="unit_bahagian" required>
        
        <h2>MAKLUMAT MESYUARAT</h2>
            <label for="nama_mesyuarat">NAMA MESYUARAT:</label>
            <input type="text" id="nama_mesyuarat" name="nama_mesyuarat" required>
            <br>
            <label for="nama_bilik">NAMA BILIK:</label>
            <input type="text" id="nama_bilik" name="nama_bilik" required>
            <br>
            <label for="pengerusi">PENGERUSI/VIP PROGRAM:</label>
            <input type="text" id="pengerusi" name="pengerusi" required>
            <br>
            <label for="dari">DARI:</label>
            <input type="datetime-local" id="dari" name="dari" required>
            <br>
            <label for="hingga">HINGGA:</label>
            <input type="datetime-local" id="hingga" name="hingga" required>
            <br>
            <label for="bilangan_ahli">BILANGAN AHLI:</label>
            <input type="number" id="bilangan_ahli" name="bilangan_ahli" required>
             <div class="center-container">
        <input type="submit" value="Submit">
    </div>
    </form>
    </div>
    </article>
</body>
</html>

