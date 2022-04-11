<?php
	$active_page = basename($_SERVER['PHP_SELF'], ".php");
?>
<li class="active">
	<a href="index.php">
	<i class="fa fa-th-large"></i> <span class="nav-label">Data Master</span> <span class="fa arrow"></span></a>
	<ul class="nav nav-second-level collapse">
		<li class="<?php if ($active_page=="list_mahasiswa") {echo "active"; } else  {echo "";}?>"><a href="list_mahasiswa.php">Inquiry Mahasiswa</a></li>
		<li class="<?php if ($active_page=="input_mahasiswa" || $active_page=="edit_mahasiswa") {echo "active"; } else  {echo "";}?>"><a href="input_mahasiswa.php?action_menu=INSERT">Input Mahasiswa</a></li>
	</ul>
</li>