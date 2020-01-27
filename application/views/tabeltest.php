<!--TABEL DATA UJI -->
<div class="row">
	<div class="col-lg-5 col-lg-offset-7 text-right" id="persentase-wrapper">
        <h2>Akurasi Sistem : <span id="akurasi-percentage"></span>%</h2>
		<p style="padding:0; margin: 10px 0px;"><a href="#confusion-matrix" class="link">Lihat Selengkapnya</a></p>
	</div>
</div>
<div class="row" id="table-wrapper">
    <div class="col-md-12 panel panel-default">
		<div class="panel-heading text-center">
            Tabel Data Uji
		</div>
    <!-- Datatable -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th width="25%">Judul BERITA</th>
                            <th>KLASIFIKASI Asli</th>
                            <th>P <em>Politik</em></th>
                            <th>P <em>Olahraga</em></th>
							<th>P <em>Kesehatan</em></th>
							<th>P <em>Pendidikan</em></th>
							<th>P <em>Entertainment</em></th>
							<th>P <em>Bisnis</em></th>
							<th>P <em>Teknologi</em></th>
                            <th>Hasil Analisis</th>
                            <th>Hasil</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!--Akhir dari datatable -->
	<div class="col-md-12" id="confusion-matrix">
		<!--Confusion Matrix-->
		<div class="alert alert-info">
				<p class="text-center" style="padding-top:0;padding-bottom:10px;"><strong>Confusion Matrix</strong></p>
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<td>Jumlah Data Uji : <span id="total-datauji"></span></td>
							<td><strong>Klasifikasi POLITIK (A)</strong></td>
							<td><strong>Klasifikasi OLAHRAGA (B)</strong></td>
							<td><strong>Klasifikasi KESEHATAN (C)</strong></td>
							<td><strong>Klasifikasi PENDIDIKAN (D)</strong></td>
							<td><strong>Klasifikasi ENTERTAINMENT (E)</strong></td>
							<td><strong>Klasifikasi BISNIS (F)</strong></td>
							<td><strong>Klasifikasi TEKNOLOGI (G)</strong></td>
							<td><strong>Akurasi (G)</strong></td>
						</tr>
						<tr>
							<td><strong>POLITIK (A)</strong></td>
							<td><strong>TP</strong> A = <span id="tpa"></span></td>
							<td><strong>E</strong> ab = <span id="eab"></span></td>
							<td><strong>E</strong> ac = <span id="eac"></span></td>
							<td><strong>E</strong> ad = <span id="ead"></span></td>
							<td><strong>E</strong> ae = <span id="eae"></span></td>
							<td><strong>E</strong> af = <span id="eaf"></span></td>
							<td><strong>E</strong> ag = <span id="eag"></span></td>
							<td><span id="acc_politik_persen"></span></td>
						</tr>
						<tr>
							<td><strong>OLAHRAGA (B)</strong></td>
							<td><strong>E</strong> ba = <span id="eba"></span></td>
							<td><strong>TP</strong> B = <span id="tpb"></span></td>
							<td><strong>E</strong> bc = <span id="ebc"></span></td>
							<td><strong>E</strong> bd = <span id="ebd"></span></td>
							<td><strong>E</strong> be = <span id="ebe"></span></td>
							<td><strong>E</strong> bf = <span id="ebf"></span></td>
							<td><strong>E</strong> bg = <span id="ebg"></span></td>
						</tr>
						<tr>
							<td><strong>KESEHATAN (C)</strong></td>
							<td><strong>E</strong> ca = <span id="eca"></span></td>
							<td><strong>E</strong> cb = <span id="ecb"></span></td>
							<td><strong>TP</strong> C = <span id="tpc"></span></td>
							<td><strong>E</strong> cd = <span id="ecd"></span></td>
							<td><strong>E</strong> ce = <span id="ece"></span></td>
							<td><strong>E</strong> cf = <span id="ecf"></span></td>
							<td><strong>E</strong> cg = <span id="ecg"></span></td>
						</tr>
						<tr>
							<td><strong>PENDIDIKAN (D)</strong></td>
							<td><strong>E</strong> da = <span id="eda"></span></td>
							<td><strong>E</strong> db = <span id="edb"></span></td>
							<td><strong>E</strong> dc = <span id="edc"></span></td>
							<td><strong>TP</strong> D = <span id="tpd"></span></td>
							<td><strong>E</strong> de = <span id="ede"></span></td>
							<td><strong>E</strong> df = <span id="edf"></span></td>
							<td><strong>E</strong> dg = <span id="edg"></span></td>
						</tr>
						<tr>
							<td><strong>ENTERTAINMENT (E)</strong></td>
							<td><strong>E</strong> ea = <span id="eea"></span></td>
							<td><strong>E</strong> eb = <span id="eeb"></span></td>
							<td><strong>E</strong> ec = <span id="eec"></span></td>
							<td><strong>E</strong> ed = <span id="eed"></span></td>
							<td><strong>TP</strong> E = <span id="tpe"></span></td>
							<td><strong>E</strong> ef = <span id="eef"></span></td>
							<td><strong>E</strong> eg = <span id="eeg"></span></td>
						</tr>
						<tr>
							<td><strong>BISNIS (F)</strong></td>
							<td><strong>E</strong> fa = <span id="efa"></span></td>
							<td><strong>E</strong> fb = <span id="efb"></span></td>
							<td><strong>E</strong> fc = <span id="efc"></span></td>
							<td><strong>E</strong> fd = <span id="efd"></span></td>
							<td><strong>E</strong> fe = <span id="efe"></span></td>
							<td><strong>TP</strong> F = <span id="tpf"></span></td>
							<td><strong>E</strong> fg = <span id="efg"></span></td>
						</tr>
						<tr>
							<td><strong>TEKNOLOGI (G)</strong></td>
							<td><strong>E</strong> ga = <span id="ega"></span></td>
							<td><strong>E</strong> gb = <span id="egb"></span></td>
							<td><strong>E</strong> gc = <span id="egc"></span></td>
							<td><strong>E</strong> gd = <span id="egd"></span></td>
							<td><strong>E</strong> ge = <span id="ege"></span></td>
							<td><strong>E</strong> gf = <span id="egf"></span></td>
							<td><strong>TP</strong> G = <span id="tpg"></span></td>
						</tr>
					</table>
				</div>
        </div>
		<div class="alert alert-info">
			<table class="borderless">
				<th width="310"><strong>Akurasi (TP+TN/Total Prediksi)</strong></th>
				<th width="20">=</th>
				<th><span id="akurasi"></span></th>
			</table>
		</div>
		<div class="alert alert-info">
			<table class="borderless">
				<th width="310"><strong>Error Rate (1 - Akurasi)</strong></th>
				<th width="20">=</th>
				<th><span id="error-rate"></span></th>
			</table>
		</div>
		<!-- <div class="alert alert-info">
			<table class="borderless">
				<th width="310"><strong>Positive Predictive Value / Presisi (TP/TP+FP)</strong></th>
				<th width="20">=</th>
				<th><span id="ppv"></span></th>
			</table>
		</div>
		<div class="alert alert-info">
			<table class="borderless">
				<th width="310"><strong>Negative Predictive Value (TN/TN+FN)</strong></th>
				<th width="20">=</th>
				<th><span id="npv"></span></th>
			</table>
		</div>
				<div class="alert alert-info">
			<table class="borderless">
				<th width="310"><strong>Sensitivity / Recall (TP/TP+FN)</strong></th>
				<th width="20">=</th>
				<th><span id="sensitivity"></span></th>
			</table>
		</div>
				<div class="alert alert-info">
			<table class="borderless">
				<th width="310"><strong>Specificity (TN/TN+FP)</strong></th>
				<th width="20">=</th>
				<th><span id="specificity"></span></th>
			</table>
		</div> -->
		<!--End COnfusion Matrix-->
	</div>
</div>
