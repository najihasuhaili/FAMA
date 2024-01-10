@include('header')

<!DOCTYPE html>
<html>
<head>
<title>PENTADBIR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
/* Styles for the header remain unchanged */
body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

.login-container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 60px auto 0;
  max-width: 400px;
}

.login-container h2 {
  text-align: center;
  color: #3498db; /* Updated color to a shade of blue */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Updated font family */
  font-size: 1.8rem; /* Updated font size */
  margin-bottom: 20px; /* Added bottom margin for better spacing */
}

.login-container form {
  margin: 0;
}

.login-container input[type="text"],
.login-container input[type="email"],
.login-container input[type="text"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.login-container input[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.login-container input[type="submit"]:hover {
  background-color: #45a049;
}

.login-container p {
  text-align: center;
  margin-top: 10px;
  color: #333;
}
</style>
</head>
<body>
<div class="login-container">
  <h2>LOG MASUK PENTADBIR</h2>
  <form action='' method='POST' autofocus>
    NAMA PENTADBIR: <input type='text' name='nama_pentadbir'><br>
    EMAIL PENTADBIR: <input type='email' name='email_pentadbir'><br>
    NO SAMBUNGAN: <input type='text' name='noSambungan_pentadbir'><br>
    <input type='submit' value='Log Masuk'>
  </form>
</div>