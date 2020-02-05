<div id="visitor-analisis" class="text-left">
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Probabilitas Berita Politik</strong></th>
			<th width="20">:</th>
			<th><span id="pol-prob"></span></th>
		</table>
	</div >
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Probabilitas Berita Olahraga</strong></th>
			<th width="20">:</th>
			<th><span id="ola-prob"></span></th>
		</table>
	</div>
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Probabilitas Berita Kesehatan</strong></th>
			<th width="20">:</th>
			<th><span id="kes-prob"></span></th>
		</table>
	</div>
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Probabilitas Berita Pendidikan</strong></th>
			<th width="20">:</th>
			<th><span id="pen-prob"></span></th>
		</table>
	</div>
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Probabilitas Berita Entertainment</strong></th>
			<th width="20">:</th>
			<th><span id="ent-prob"></span></th>
		</table>
	</div>
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Probabilitas Berita Bisnis</strong></th>
			<th width="20">:</th>
			<th><span id="bis-prob"></span></th>
		</table>
	</div>
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Probabilitas Berita Teknologi</strong></th>
			<th width="20">:</th>
			<th><span id="tek-prob"></span></th>
		</table>
	</div>
	<div class="alert alert-info">
		<table class="borderless">
			<th width="300"><strong>Hasil Klasifikasi</strong></th>
			<th width="16">:</th>
			<th><span id="visitor-sentimen" style="font-size: 24px;"></span></th>
		</table>
	</div>
	<div class="alert alert-info">
		<table class="borderless">
			<tr>Term</tr>
			<tr><td></td></tr>
			<script>
			function tampilkan_nilai_form(){
    var nilai_form=document.getElementById("term").value;
    document.getElementById("hasil").innerHTML=nilai_form;
}</script>
<td id="term"></td>
		</table>
	</div>
</div>
