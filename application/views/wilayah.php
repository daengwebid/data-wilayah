<!DOCTYPE html>
<html>
<head>
	<title>DaengWeb - Data Wilayah</title>
	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#provinsi").change(function(){
			var provinsi_id = $("#provinsi").val();
			$.ajax({
				type: "GET",
				url: "<?php echo site_url('wilayah/data_kabupaten'); ?>",
				data: "provinsi_id="+provinsi_id,
				success: function(html) {
					$("#kabupaten").html(html);
				}

			});
		});
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#kabupaten").change(function(){
			var kabupaten_id = $("#kabupaten").val();
			$.ajax({
				type: "GET",
				url: "<?php echo site_url('wilayah/data_kecamatan'); ?>",
				data: "kabupaten_id="+kabupaten_id,
				success: function(html) {
					$("#kecamatan").html(html);
				}

			});
		});
	});
	</script>
</head>
<body>
Pilih Provinsi : 
<select id="provinsi" onchange="data_provinsi">
	<option value="0">Silahkan Pilih</option>
	<?php 
	foreach ($provinsi->result() as $p) {
	?>
	<option value="<?php echo $p->provinsi_id; ?>"><?php echo $p->nama_provinsi; ?></option>
	<?php } ?>
</select> <br>
Pilih Kabupaten :
<select id="kabupaten"></select> <br>
Pilih Kecamatan :
<select id="kecamatan"></select>

</body>
</html>