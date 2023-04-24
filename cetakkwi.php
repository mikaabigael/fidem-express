<!DOCTYPE html>
  <html>

  <head>
	  <style type="text/css">
  		.lead {
			  font-family: "Times New Roman";
  			font-weight: bold;
		}
		
		.value {
			font-family: "Times New Roman";
		}
		
		.value-big {
			font-family: "Verdana";
			font-weight: bold;
			font-size: large;
		}
		
		.td {
			align-items: top;
		}
		
		/* @page { size: with x height */
			/*@page { size: 20cm 10cm; margin: 0px; }*/
			@page {
				size: A4;
				margin: 0px;
			}
			
			/*		@media print {
				html, body {
					width: 210mm;
			  }
			}*/
			/*body { border: 2px solid #000000;  }*/
			</style>
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
  </head>
  <?php
	require "functions.php";
	// Display selected user data based on id
	// Getting id from url
	
	// Fetech user data based on id
	$result = mysqli_query($conn, "SELECT * FROM `order` ORDER BY id DESC LIMIT 1");
	
	$d = mysqli_fetch_array($result); {
		
	?>
<title>Print kwitansi No. <?php echo $d['id']?></title>

<body>
	<table border="1px">
		<tr>
			<td width="80px"><img src="image/logo_asli.png" width="200px" /></td>
			<td>
				<table cellpadding="4">
  						<tr>
							  <td width="200px">
								  <div class="lead">No Resi :
									  </td>
									  <td>
										  <div class="" value=""><?php echo $d['no_resi']; ?></div>
										</td>
									</tr>
									<tr>
  							<td>
  								<div class="lead">Pengirim :</div>
  							</td>
  							<td>
  								<div class="value"><?php echo $d['nama_pengirim']; ?></div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Asal Pengirim :</div>
  							</td>
  							<td>
  								<div class="value"><?php echo $d['asal_pengirim']; ?></div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Penerima :</div>
  							</td>
  							<td>
  								<div class="value"><?php echo $d['nama_penerima']; ?></div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Asal Penerima :</div>
  							</td>
  							<td>
  								<div class="value"><?php echo $d['asal_penerima']; ?></div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Nama Barang :</div>
  							</td>
  							<td>
  								<div class="value"><?php echo $d['nama_barang']; ?></div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Berat Barang :</div>
  							</td>
  							<td>
  								<div class="value"><?php echo $d['berat_barang']; ?> Kg</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Tanggal Pembayaran :</div>
  							</td>
  							<td>
  								<div class="value"><?php echo date("d-m-Y"); ?></div>
  							</td>
  						</tr>
  						<tr>
  							<td>&nbsp;</td>
  							<td>____________________________________________________</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Total Harga :</div>
  							</td>
  							<td>
  								<div class="value-big"><?php echo rupiah($d['total_transaksi']); ?></div>
  							</td>
  						</tr>
  						<tr>
  							<td colspan="2">&nbsp;</td>
  						</tr>
  						<tr>
  							<td>&nbsp;</td>
  							<td>
  								<div class="md-me-2" align="right" style="position: relative; right:50px">Admin</div>
  							</td>
  						</tr>
  					</table>
  				</td>
  			</tr>
  		</table>
  	<?php } ?>
  	<hr>
  	<script src="/js/jquery.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function() {
  			window.print();
  		});
  	</script>

	<script>
		window.print();
	</script>
    
  	</body>

  </html>