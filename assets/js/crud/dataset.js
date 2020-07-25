$(document).ready(function () {
  var url = $("meta[name=url]").attr("content");

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
    "ajax": url +"dataset/review"
   });

   $(document).on('click', ".btn-delete", function(e){
      var idReview = $(this).data('id');
      $('#deletereviewmodal #id_berita').val(idReview);
   });

   $(".btn-add").on('click', function(){
      $(".modal-action").text("Tambah");
      $("#modaldataset form").attr("action", url + "dataset/inputdataset");
      $('#modaldataset #id_berita').val("");
      
      //kosongkan form setiap klik button tambah
      $("#modaldataset input[name=judul_berita]").val('');
      $("#modaldataset textarea[name=isi_berita]").val('');
      $("#countreviewchar").text("0");
	    $("#modaldataset select[name=kategori_berita]").val('DATA LATIH');
      $("#modaldataset select[name=jenis_data]").val('POLITIK');

      document.getElementById('countreviewchar').style.color = 'grey';
   });

   $(document).on('click', ".btn-edit", function(e){
      $(".modal-action").text("Edit");
      $("#modaldataset form").attr("action", url + "dataset/editdataset");
      var idReview = $(this).data('id');
      $('#modaldataset #id_berita').val(idReview);
      $.ajax({
        method:'post',
        url: url + "dataset/fetchid",
        data:{id_berita:idReview},
        success:function(data){
          var review = JSON.parse(data);
          $("#modaldataset input[name=judul_berita]").val(review.judul_berita);
          $("#modaldataset textarea[name=isi_berita]").val(review.isi_berita);
		      $("#modaldataset select[name=kategori_berita]").val(review.kategori_berita);
          $("#modaldataset select[name=jenis_data]").val(review.jenis_data);

          var count = $("#modaldataset textarea[name=isi_berita]").val().length;
          $("#countreviewchar").text(count);
          document.getElementById('countreviewchar').style.color = 'grey';
        },
        error:function(e){
          alert(e)
        }
      });
   });
});