<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <?php $__currentLoopData = $borangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $borang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($borang->id); ?></td>
                        <td><?php echo e($borang->nama_pemohon); ?></td>
                        <td><?php echo e($borang->email_pemohon); ?></td>
                        <td><?php echo e($borang->no_sambungan); ?></td>
                        <td><?php echo e($borang->jawatan); ?>

                        <?php echo e($borang->unit_bahagian); ?></td>
                        <td><?php echo e($borang->nama_mesyuarat); ?></td>
                        <td><?php echo e($borang->nama_bilik); ?></td>
                        <td><?php echo e($borang->pengerusi); ?></td>
                        <td><?php echo e($borang->dari); ?></td>
                        <td><?php echo e($borang->hingga); ?></td>
                        <td><?php echo e($borang->bilangan_ahli); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</article>
<?php /**PATH C:\PDIE\htdocs\FAMA\tempahan-bilik-mesyuarat\resources\views/pentadbirs/senarai_permohonan.blade.php ENDPATH**/ ?>