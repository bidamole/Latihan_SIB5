<div class="col-md-8">

	<?php 
	$contact = "Contact Us";
	$address = "Address";
	$address1 = "Desa Waloindi, Binongko";
	$address2 = "Sulawesi Tenggara, Indonesia";
	$address3 = "Kode Pos: 93794";
	$wa = "WhatsApp";
	$no = "+6281239300965";
	$fb = "Facebook";
	$user1 = "Rk Vz";
	$ig = "Instagram";
	$user2 = "bda";
	$tiktok = "TikTok";
	$user3 = "Sy Bi";
	$name = "Name";
	$email1 = "Email";
	$subject = "Subject";
	$message = "Message";
	$send = "Send Message!";
	?>

	<div class="row">
		<div class="col-md-12">
			<div id="contact-section">
			<h3><br>
				<?php echo $contact; ?>
			</h3>
		</div>
	</div>
</div>
	<div class="row"><br>
		<div class="col-md-4">
			<link rel="stylesheet" href="icofont/icofont.css">
			<link rel="stylesheet" href="icofont/icofont.min.css">
			<link rel="stylesheet" href="icofont/demo.html">
			<img alt="Bootstrap Image Preview" src="https://www.simple-c.cc/wp-content/uploads/2014/02/contactus-300x288.jpg" class="rounded-circle"> 
			<address>
				 <strong><?php echo $address; ?></strong><br><?php echo $address1; ?><br><?php echo $address2; ?><br> <p><?php echo $address3; ?></p>
			</address>
		</div>
		<div class="col-md-4">
			<dl>
				<dt>
					<div class="icofont-whatsapp"><?php echo $wa; ?></div>
				</dt>
				<dd>
					<a href="https://wa.me/qr/GIVUIROYWOK7N1"><?php echo $no; ?></a>
				</dd>
				<dt>
					<div class="icofont-facebook"><?php echo $fb; ?></div>
				</dt>
				<dd>
					<a href="https://www.facebook.com/cyng.deb.5"><?php echo $user1; ?></a>
				</dd>
				<dt>
					<div class="icofont-instagram"><?php echo $ig; ?></div>
				</dt>
				<dd>
					<a href="https://instagram.com/bda702_?igshid=ZGUzMzM3NWJiOQ=="><?php echo $user2; ?></a>
				</dd>
				<dt>
					<div class="icofont-tiktok"><?php echo $tiktok; ?></div>
				</dt>
				<dd>
					<a href="https://www.tiktok.com/@sybi28_?_t=8fofbJfD16I&_r=1"><?php echo $user3; ?></a>
				</dd>
			</dl>
		</div>
		<div class="col-md-4">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputName1">
						<?php echo $name; ?>
					</label>
					<input type="text" class="form-control" id="exampleInputname1">
				</div>
				<div class="form-group">

					<label for="exampleInputEmail1">
						<?php echo $email1; ?>
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
				<div class="form-group">

					<label for="exampleInputSubject1">
						<?php echo $subject; ?>
					</label>
					<input type="text" class="form-control" id="exampleInputSubject1">
				</div>
				<div class="form-group">
					 
					<label for="exampleInputMessage1">
						<?php echo $message; ?>
					</label>
					<textarea name="message" cols="50" rows="5"></textarea>
				</div>
				<div class="form-group">
					 
				<button type="submit" class="btn btn-primary">
					<?php echo $send; ?>
				</button>
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>