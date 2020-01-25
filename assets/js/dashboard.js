$(document).ready(function () {
	var data_latih = $("#jumlah-data-latih").text();
	var data_uji = $("#jumlah-data-uji").text();
	var data_latih_pos = $("#jumlah-data-latih-positif").text();
	var data_latih_neg = $("#jumlah-data-latih-negatif").text();
	var data_latih_kes = $("#jumlah-data-latih-kesehatan").text();
	var data_latih_pen = $("#jumlah-data-latih-pendidikan").text();
	var data_latih_ent = $("#jumlah-data-latih-entertainment").text();
	var data_latih_bis = $("#jumlah-data-latih-bisnis").text();
	var data_latih_tek = $("#jumlah-data-latih-teknologi").text();
	
	Morris.Donut({
	element: 'latih-dan-uji-chart',
	data: [
		{label: "Data Latih", value: data_latih},
		{label: "Data Uji", value: data_uji}
	],
	colors: [
		'#4CB1CF',
		'#F0AD4E',
	]
	});
	
	Morris.Donut({
	element: 'pos-neg-chart',
	data: [
		{label: "Berita Politik", value: data_latih_pos},
		{label: "Berita Olahraga", value: data_latih_neg},
		{label: "Berita Kesehatan", value: data_latih_kes},
		{label: "Berita Pendidikan", value: data_latih_pen},
		{label: "Berita Entertainment", value: data_latih_ent},
		{label: "Berita Bisnis", value: data_latih_bis},
		{label: "Berita Teknologi", value: data_latih_tek}
	],
	colors: [
		'#5CB85C',
		'#F0433D',
		'#F0AD4E',
		'#4CB1CF',
		'#00ccff',
		'#6600cc',
		'#ff0066',
	]
	});
});