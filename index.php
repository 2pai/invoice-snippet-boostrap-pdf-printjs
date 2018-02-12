<!DOCTYPE html>
<html>
<head>
	<title>Invoice Order</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body id="main">
		<div class="col-md-12 mx-auto">
		<div class="card">
			<div class="card-body">
				<h1 class="col-md-12 text-left text-info font-weight-bold">Invoice Order</h1>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-6">
						<p class="font-weight-bold">Playstation Inc</p>
							26847 Bay avenue
							Ohio,Bahamas 42322
						</div>
					</div>
					<div class="col-md-6">
				<img width="100px" height="100px" src="https://vignette.wikia.nocookie.net/gtawiki/images/9/9a/PlayStation_1_Logo.png" class="img-rounded float-right">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-10">
							<p class="font-weight-bold col-md-12">Bill To </p>
							<p class="font-weight-normal col-md-12">Iqbal Syamil</p>
							<p class="col-md-12">Jalan sawo raya nomor 8 rt 01 rw 05 kranggan jatisampurna bekasi. 17433</p>							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-10">
							<p class="font-weight-bold col-md-12">Ship To </p>
							<p class="font-weight-normal col-md-12">Iqbal Syamil</p>
							<p class="col-md-12">Jalan sawo raya nomor 8 rt 01 rw 05 kranggan jatisampurna bekasi. 17433</p>							
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<table class="table table-sm">
							<tbody>
								<tr>
									<td class="table-active" scope="row"><small>Order ID</small></td>
									<td>1008987</td>
								</tr>
								<tr>
									<td class="table-active" scope="row"><small>Invoice Date</small></td>
									<td><small><?php echo date("l,d F Y"); ?></small></td>
								</tr>
								<tr>
									<td class="table-active" scope="row"><small>Shipping Method</small></td>
									<td><small>JNE REGULAR</small></td>
								</tr>
								<tr>
									<td class="table-active" scope="row"><small>Payment method</small></td>
									<td><small>Bank Transfer</small></td>
								</tr>
								<tr>
									<td class="table-active" scope="row"><small>Status Payment</small></td>
									<td><small class="font-weight-bold text-success">PAID</small></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Product Name</th>
							<th scope="col">QTY</th>
							<th scope="col">Unit Price</th>
							<th scope="col">Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row">Playstation 4 (500GB, 2 joystick , Deluxe Edition)</td>
							<td>1</td>
							<td>200$</td>
							<td>200$</td>
						</tr>
						<tr>
							<td scope="row">Playstation 4 (500GB, 2 joystick , Deluxe Edition)</td>
							<td>1</td>
							<td>200$</td>
							<td>200$</td>
						</tr>
						<tr>
							<td scope="row">(PREORDER)Playstation 5 (1TB, 2 joystick , Premium Edition)</td>
							<td>1</td>
							<td>200$</td>
							<td>200$</td>
						</tr>
						<!-- maximal item = 3 -->
						<tr>
							<td scope="row">(PREORDER)Playstation 5 (1TB, 2 joystick , Premium Edition)</td>
							<td>1</td>
							<td>200$</td>
							<td>200$</td>
						</tr>
						<tr>
							<td rowspan="4" colspan="2"><div class="mx-auto" id="qr"></div></td>
							<td class="font-weight-bold">Subtotal</td>
							<td class="font-weight-bold text-default">400$</td>
						</tr>
						<tr>
							<td class="font-weight-bold">Tax 2.5%</td>
							<td class="font-weight-bold text-danger">10$</td>
						</tr>
						<tr>
							<td class="font-weight-bold">Discount/Promo</td>
							<td class="font-weight-bold text-danger">10$</td>
						</tr>
						<tr>
							<td class="font-weight-bold">Total</td>
							<td class="font-weight-bold text-success">410$</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<div class="col-md-12">
					<p class="font-weight-bold">Information</p>
					<p><small>
						Untuk Informasi Coverage Garansi dan membuka invoice secara online dapat menscan barcode ini <br>
						
					</small></p>
				</div>
			</div>
			<div class="card-footer text-center">
				<small>
				&copy; Playstation Tel : 0878 8720 9045 Email : contact@playstation.com Web : playstation.com
				</small>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="dist/html2pdf.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/qrcode.js"></script>
<script type="text/javascript">
	function test() {
		var element = document.getElementById('main');
		html2pdf(element, {
		  filename:     'd.pdf',
		  enableLinks: true,
		  image:        { type: 'jpeg', quality: 0.98 },
		  html2canvas:  { dpi: 192, letterRendering: true },
		  jsPDF:        { unit: 'mm', format: 'a4', orientation: 'p' }
		});		
	}
	var qcode = new QRCode("qr",{
		text : "123123",
	    width: 128,
	    height: 128,
	    colorDark : "#000000",
	    colorLight : "#ffffff",
	    correctLevel : QRCode.CorrectLevel.H
	});     	
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>