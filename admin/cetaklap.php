<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
  		var beforePrint = function() {};
		  
  		var afterPrint = function() {
			  window.close();
			};
			
			if (window.matchMedia) {
				var mediaQueryList = window.matchMedia('print');
				mediaQueryList.addListener(function(mql) {
					if (mql.matches) {
  					beforePrint();
  				} else {
					  afterPrint();
  				}
			});
		}
		
		window.onbeforeprint = beforePrint;
		window.onafterprint = afterPrint;
		</script>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Laporan Pengiriman</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<style type="text/css" media="print">
  @page { size: landscape; }
</style>
<body class="sb-nav-fixed">

                <div class="container-fluid px-4">
                <div class="d-flex justify-content-center">
                    <h1 class="mt-4">Laporan Pengiriman</h1>
                </div>
                        <div class="card-body">
                            <table class="table table-bordered border-dark" border="1">
                                <thead>
                                    <tr style="text-align: center;">
                                    <th scope="col">No.</th>
                                        <th scope="col" width="100px">Tanggal Transaksi</th>
                                        <th scope="col">No. Resi</th>
                                        <th scope="col">Nama Pengirim</th>
                                        <th scope="col">Nama Penerima</th>
                                        <th scope="col">Asal Penerima</th>
                                        <th scope="col">Berat Barang</th>
                                        <th scope="col" width="120px">Total Harga</th>
                                        <th width="50" scope="col">Status Pengiriman</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT * from `order`");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr style="text-align: center;">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['tgl_transaksi']; ?></td>
                                            <td><?php echo $d['no_resi']; ?></td>
                                            <td><?php echo $d['nama_pengirim']; ?></td>
                                            <td><?php echo $d['nama_penerima']; ?></td>
                                            <td><?php echo $d['asal_penerima']; ?></td>
                                            <td><?php echo $d['berat_barang']; ?></td>
                                            <td><?php echo rupiah($d['total_transaksi']); ?></td>
                                            <td><?php echo $d['status']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>
</body>
<script src="/js/jquery.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function() {
  			window.print();
  		});
  	</script>

	<script>
		window.print();
	</script>
</html>