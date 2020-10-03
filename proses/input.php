<?php 
	include 'koneksi.php';

	if (isset($_POST['submitdata'])) {
		$nm = strtoupper($_POST['nm_tamu']);
		$jk = strtoupper($_POST['jk_tamu']);
		$tl = strtoupper($_POST['tmp_lahir']);
		$lh = $_POST['tglla'];
		$as = strtoupper($_POST['asl_sklh']);
		$jr = strtoupper($_POST['jurusan']);
		$ln = $_POST['idline'];

		$sql = mysqli_query($conn,"INSERT INTO t_bukutamu VALUES(
							'',
							'$nm',
							'$jk',
							'$tl',
							'$lh',
							'$as',
							'$jr',
							'$ln')");
		?>
				<script type="text/javascript">
					alert("TERIMA KASIH ^_^");
					window.location = "../form.php";
				</script> 
		<?php
	}
 ?>