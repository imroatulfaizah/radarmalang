var url = $("meta[name=url]").attr("content");

function loadtabel(){
  $('#dataTables-example').dataTable({
    "language": {
    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
    "sLengthMenu": "_MENU_  review per halaman",
    "sSearch": "Cari: ",
    "sNext": "Selanjutnya",
    "sPrevious": "Sebelumnya"
     },
    "processing": true,
    "serverSide": true,
    "ajax": url + "klasifikasi/tabeltest"
  });
}

function loadmatrix(){
	$.ajax({
		url: url + "klasifikasi/matrix_akurasi",
		dataType: "json",
		success: function(data){
			//print_matrix_contents(data);
			var arr = [];
			for(var i in data){
				arr.push(data[i]);
			}
			print_matrix_contents(arr);
		},
		error: function(){
			alert("Tidak dapat mengambil matriks");
		}
	});
}

function print_matrix_contents(matrix){
	$("#total-datauji").append(matrix[0]); //total data uji
	//$("#totaltp").append(matrix[1]); //true positives
	$("#tpa").append(matrix[1]);
	$("#tpb").append(matrix[2]);
	$("#tpc").append(matrix[3]);
	$("#tpd").append(matrix[4]);
	$("#tpe").append(matrix[5]);
	$("#tpf").append(matrix[6]);
	$("#tpg").append(matrix[7]);
	// $("#true-negatives").append(matrix[2]); //true negatives
	// $("#false-positives").append(matrix[3]); //false positives
	// $("#false-negatives").append(matrix[4]); //false negatives
	$("#akurasi").append(matrix[8]); //akurasi
	$("#error-rate").append(matrix[9]); //error rate
	// $("#ppv").append(matrix[7]); //positive predictive value
	// $("#npv").append(matrix[8]); //negative predictive value
	// $("#sensitivity").append(matrix[9]); //sensitivity
	// $("#specificity").append(matrix[10]); //specitivity
	// $eab + $eac + $ead + $eae + $eaf + $eag + $eba +	$ebc + $ebd + $ebe +
	// 	$ebf + $ebg + $eca + $ecb + $ecd + $ece + $ecf + $ecg +	$eda + $edb + $edc + $ede +
	// 	$edf + $edg + $eea + $eeb + $eec + $eed + $eef + $eeg + $efa + $efb + $efc + $efd + $efe + $efg +
	// 	$ega + $egb + $egc + $egd + $ege + $egf
	$("#eab").append(matrix[10]);
	$("#eac").append(matrix[11]);
	$("#ead").append(matrix[12]);
	$("#eae").append(matrix[13]);
	$("#eaf").append(matrix[14]);
	$("#eag").append(matrix[15]);
	
	$("#eba").append(matrix[16]);
	$("#ebc").append(matrix[17]);
	$("#ebd").append(matrix[18]);
	$("#ebe").append(matrix[19]);
	$("#ebf").append(matrix[20]);
	$("#ebg").append(matrix[21]);

	$("#eca").append(matrix[22]);
	$("#ecb").append(matrix[23]);
	$("#ecd").append(matrix[24]);
	$("#ece").append(matrix[25]);
	$("#ecf").append(matrix[26]);
	$("#ecg").append(matrix[27]);

	$("#eda").append(matrix[28]);
	$("#edb").append(matrix[29]);
	$("#edc").append(matrix[30]);
	$("#ede").append(matrix[31]);
	$("#edf").append(matrix[32]);
	$("#edg").append(matrix[33]);

	$("#eea").append(matrix[34]);
	$("#eeb").append(matrix[35]);
	$("#eec").append(matrix[36]);
	$("#eed").append(matrix[37]);
	$("#eef").append(matrix[38]);
	$("#eeg").append(matrix[39]);

	$("#efa").append(matrix[40]);
	$("#efb").append(matrix[41]);
	$("#efc").append(matrix[42]);
	$("#efd").append(matrix[43]);
	$("#efe").append(matrix[44]);
	$("#efg").append(matrix[45]);

	$("#ega").append(matrix[46]);
	$("#egb").append(matrix[47]);
	$("#egc").append(matrix[48]);
	$("#egd").append(matrix[49]);
	$("#ege").append(matrix[50]);
	$("#egf").append(matrix[51]);
	$("#acc_politik").append(matrix[52]);
	$("#acc_politik_persen").append((matrix[52]*100).toFixed(2));
	$("#akurasi-percentage").append((matrix[8]*100).toFixed(2)); //error rate
	
}

$(document).ready(function () {
	$('#divtabeltest').load(url+'klasifikasi/displaytabeltest', function(){
    //LOAD DATATABLES
    loadtabel();
	loadmatrix();
    }); 
  
  $('#klasifikasi').click(function(){
    $('#divtabeltest').html('');
	$('#persentase-wrapper').html('');
    $('#divtabeltest').addClass('loader');
	$('#persentase-wrapper').hide();
	//INSERT HASIL PERHITUNGAN DATA UJI
    $.ajax({
       url: url + "klasifikasi/insert_klasifikasi",
       success: function(){
				loadmatrix();
				$('#divtabeltest').removeClass('loader');
				$('#persentase-wrapper').show();
             },
       error: function(){
                $('#divtabeltest').removeClass('loader');
				$('#persentase-wrapper').show();
				alert("Tidak dapat memperbarui tabel");
             }
    });
    $('#divtabeltest').load(url+'klasifikasi/displaytabeltest', function(){
      //LOAD DATATABLES
      loadtabel();
    });  
  });
});
