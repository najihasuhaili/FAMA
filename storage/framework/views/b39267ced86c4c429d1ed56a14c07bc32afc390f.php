<!-- resources/views/pentadbirs/index.blade.php -->

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as Pentadbir</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, jQuery, and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #333;
        }

        form {
            margin: 0;
        }

        .form-label {
            margin-bottom: 0;
            width: 50%;
        }

        .form-control {
            width: 100%;
            padding: 5px 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 15%;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
<article>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">PENTADBIR</h2>
                <form action="<?php echo e(route('pentadbir.login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama_pentadbir" class="form-label">Nama Pentadbir:</label>
                        <input type="text" name="nama_pentadbir" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email_pentadbir" class="form-label">Email:</label>
                        <input type="text" name="email_pentadbir" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="no_sambungan" class="form-label">No Sambungan:</label>
                        <input type="text" name="no_sambungan" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </article>
</body>

</html>
<?php /**PATH C:\PDIE\htdocs\FAMA\tempahan-bilik-mesyuarat\resources\views/pentadbirs/index.blade.php ENDPATH**/ ?>