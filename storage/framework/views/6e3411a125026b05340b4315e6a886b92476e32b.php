<!DOCTYPE html>
<html lang="en">
<head>
  <title>FAMA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Style the header */
    header {
      background-color: dodgerblue;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    /* Logo styles */
    header img {
      width: 500px; /* Adjust as needed */
      height: auto;
      margin-right: 20px;
    }

    /* Create two columns/boxes that float next to each other */
    nav {
      float: left;
      width: 20%;
      background: #ddd;
      padding: 10px;
      height: 100vh; /* full height of the viewport */
      overflow-y: auto; /* add scroll if content overflows */
    }

    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    nav li {
      margin-bottom: 10px;
    }

    nav a {
      text-decoration: none;
      font-weight: bold;
      color: #333;
    }

    nav a:hover {
      color: #555;
    }

    article {
      float: left;
      padding: 20px;
      width: 80%;
      background-color: #f5f5f5;
      height: 100vh; /* full height of the viewport */
      overflow-y: auto; /* add scroll if content overflows */
    }

    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Style the footer */
    footer {
      background-color: dodgerblue;
      padding: 5px;
      text-align: center;
      color: white;
      position: fixed;
      width: 100%;
      bottom: 0;
    }

    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {
      nav,
      article {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <header>
    <!-- Logo -->
    <img src="<?php echo e(asset('images/logo fama.png')); ?>" alt="Logo">
  </header>

  <section>
    <nav>
      <ul>
        <li><a href="/">LAMAN UTAMA</a></li>
        <li><a href="borang">BORANG PERMOHONAN</a></li>
        <li><a href="pentadbirs">PENTADBIR</a></li>
      </ul>
    </nav>

</body>

</html>
<?php /**PATH C:\PDIE\htdocs\FAMA\tempahan-bilik-mesyuarat\resources\views/header.blade.php ENDPATH**/ ?>