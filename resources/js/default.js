
function printSection() {
   window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
   window.frames["print_frame"].window.focus();
   window.frames["print_frame"].window.print();
 }
 
$(document).ready(function(){

    var w  = $(window).width(),  //mengambil data lebar layar
        h = $(window).height(); //mengambil data tinggi layar

    if(w<560){
      $("#alertDevice").addClass("show");
      $("#alertDevice").show();
    }else{
      $("#alertDevice").removeClass("show");
    }
            
     $(window).resize(function() {
       window.location="";
     });

  $(document).on('click', '#hapus_tindakan', function (e) {
      var no_daftar = $(this).attr('data-no');
    var kode_tindakan = $(this).attr('data-kode');
    var nama_tindakan = $(this).attr('data-nama');

     $.ajax({
        url:"../../remove-detail",
        method:"POST",
        data:{no_daftar:no_daftar,kode_tindakan:kode_tindakan,nama_tindakan:nama_tindakan},
        success:function(data)
        {
         var no_daftar=$('#no_daftar').val();
          $('#view-table').load("../../view-detail/"+no_daftar);
                 
        }
       });

     
    });

  $(document).on('click', '#tambah_tindakan', function (e) {
      var no_daftar = $('#no_daftar').val();
      var kode_tindakan = $('#kode_tindakan').val();
      var nama_tindakan = $('#nama_tindakan').val();
      var ket = $('#ket').val();


     $.ajax({
        url:"../../add-detail",
        method:"POST",
        data:{no_daftar:no_daftar,kode_tindakan:kode_tindakan,nama_tindakan:nama_tindakan,ket:ket},
        success:function(data)
        {

         var no_daftar=$('#no_daftar').val();
          $('#view-table').load("../../view-detail/"+no_daftar);
                 $('#kode_tindakan').val("");
                 $('#nama_tindakan').val("");
                 $('#ket').val("");
        }
       });

     
    });
    

	form_pasien();
   $('#btn-pilih-poli').click(function(){
   		$('#contentModalPoli').empty();
   		$('#contentModalDokter').empty();
   		$('#contentModalPasien').empty();
      		$('#contentModalPoli').load("../data-poli/modal");
   });




  $('#btn-pilih-obat').click(function(){
          $('#contentModalObat').load("../../data-obat/modal");
   });

    var no_daftar=$('#no_daftar').val();
  $('#view-table').load("../../view-detail/"+no_daftar);



   $('#btn-pilih-dokter').click(function(){
   		$('#contentModalPoli').empty();
   		$('#contentModalDokter').empty();
   		$('#contentModalPasien').empty();
   	  		var kode_poli=$('#kode_poli').val();
      		$('#contentModalDokter').load("../data-dokter/modal/"+kode_poli);
   });

   $('#btn-pilih-pasien').click(function(){
   		$('#contentModalPoli').empty();
   		$('#contentModalDokter').empty();
   		$('#contentModalPasien').empty();
      		$('#contentModalPasien').load("../data-pasien/modal/");
   });

    $('#btn-pilih-tindakan').click(function(){
      $('#contentModalPoli').empty();
      $('#contentModalDokter').empty();
      $('#contentModalPasien').empty();
      $('#contentModalTindakan').load("http://localhost/CliniCare/web/data-tindakan/modal/");
   });

   $('#btn-pilih-data').click(function(){
      $('#contentModalData').empty();
          $('#contentModalData').load("../transaksi-pendaftaran/modal");
   });

   $('#btn-pasien-baru').click(function(){
   		form_pasien_baru();
   		$('#status').val("baru");
   		$('#btn-pasien-baru').addClass("active");   		
   		$('#btn-pasien-lama').removeClass("active");
   });
   $('#btn-pasien-lama').click(function(){
   		form_pasien_lama();
   		$('#status').val("terdaftar");
   		$('#btn-pasien-baru').removeClass("active");   		
   		$('#btn-pasien-lama').addClass("active");
   });




    $(document).on('click', '#pilih_poli_row', function (e) {
	    document.getElementById("kode_poli").value = $(this).attr('data-id');
	    document.getElementById("nama_poli").value = $(this).attr('data-name');
		document.getElementById("kode_dokter").value="";
		document.getElementById("nama_dokter").value="";
     });
     $(document).on('click', '#pilih_tindakan_row', function (e) {
      document.getElementById("kode_tindakan").value = $(this).attr('data-id');
      document.getElementById("nama_tindakan").value = $(this).attr('data-name');
     });

     $(document).on('click', '#pilih_obat_row', function (e) {
      document.getElementById("kode").value = $(this).attr('data-id');
      document.getElementById("nama").value = $(this).attr('data-name');
      document.getElementById("harga").value = $(this).attr('data-price');
      $('#banyak').attr("max",$(this).attr('data-max'));    
     });

    $(document).on('click', '#pilih_dokter_row', function (e) {
	    document.getElementById("kode_dokter").value = $(this).attr('data-id');
	    document.getElementById("nama_dokter").value = $(this).attr('data-name');
	    var kode_dokter=$('#kode_dokter').val();
	    $.get("../antrian/"+kode_dokter, function(data,status){
    			$('#no_antri').val(data);
  		});
	    
     });
    $(document).on('click', '#pilih_pasien_row', function (e) {
	    document.getElementById("no_pasien").value = $(this).attr('data-id');
	    document.getElementById("nama_pasien").value = $(this).attr('data-name');	   
	    document.getElementById("jenis_kelamin").value = $(this).attr('data-gender');
	    document.getElementById("alamat").value = $(this).attr('data-address');
	    document.getElementById("tanggal_lahir").value = $(this).attr('data-date');
	    document.getElementById("usia").value = $(this).attr('data-age');
	    document.getElementById("no_telp").value = $(this).attr('data-phone');
	    
     });
    
    $(document).on('click', '#pilih_pendaftaran_row', function (e) {
      var id=document.getElementById("no_daftar").value = $(this).attr('data-id');
      document.getElementById("nomor_pasien").value = $(this).attr('data-nomor-pasien');
      document.getElementById("nama_pasien").value = $(this).attr('data-nama-pasien');
      document.getElementById("nama_dokter").value = $(this).attr('data-nama-dokter');
      var tarif=document.getElementById("tarif").value = $(this).attr('data-tarif');
      var biaya_tindakan;
        $('#tabelTindakan').load("../modal-detail/"+$(this).attr('data-id'));
        $('#tabelResep').load("../medis-resep/modal/"+$(this).attr('data-id'));
        $.get("../get_biaya_tindakan/"+id, function(data,status){
              biaya_tindakan=$('#biaya_tindakan').val(data);
            });
        $.get("../medis-resep/total/"+id, function(data,status){
            var pembayaran_obat=$('#pembayaran_obat').val(data);
            
            $('#total').val(parseInt(pembayaran_obat.val())+parseInt(tarif)+parseInt(biaya_tindakan.val()));

        });
        
     });
    $('#bayar').on('input',function(e){
        hitung_kembalian();
    });
    $('#harga_modal').on('input',function(e){
        hitung_harga();
    });


    $(document).on('change', '#tanggal_lahir', function (e) {
      var date=$('#tanggal_lahir').val();
      document.getElementById("usia").value = get_umur(date);
     });
     $(document).on('change', '#tl', function (e) {
      var date=$('#tl').val();
      document.getElementById("usia_pasien").value = get_umur(date);
     });

    function hitung_kembalian(){
        var total=parseInt($('#total').val());
        var bayar=parseInt($('#bayar').val());
        var kembalian=bayar-total;
        $('#kembali').val(kembalian);

    }
    function hitung_harga(){
        var harga_modal=parseInt($('#harga_modal').val());
        var a=5/10;
        var harga=harga_modal+(harga_modal*a);
        $('#harga').val(harga);

    }

    function form_pasien(){
    	$('#btn-pilih-pasien').attr("disabled","yes");
    	$('#nama_pasien').attr("readonly","yes");
    	$('#jenis_kelamin').attr("disabled","yes");
    	$('#alamat').attr("readonly","yes");
    	$('#tanggal_lahir').attr("readonly","yes");
    	$('#usia').attr("readonly","yes");
    	$('#no_telp').attr("readonly","yes");
    }

    function form_pasien_baru(){

    	$.get("../an-pasien", function(data,status){
    			$('#no_pasien').val(data);
  		});

    	$('#btn-pilih-pasien').attr("disabled","yes");
    	$('#nama_pasien').removeAttr("readonly");
    	$('#jenis_kelamin').removeAttr("disabled","yes");
    	$('#alamat').removeAttr("readonly");
    	$('#tanggal_lahir').removeAttr("readonly");
    	$('#no_telp').removeAttr("readonly");

    	$('#no_pasien').val("");
    	$('#nama_pasien').val("");
    	$('#jenis_kelamin').val("");
    	$('#alamat').val("");
    	$('#tanggal_lahir').val("");
    	$('#usia').val("");
    	$('#no_telp').val("");
    }

    function form_pasien_lama(){
    	$('#no_pasien').val("");
    	$('#btn-pilih-pasien').removeAttr("disabled","yes");
    	$('#nama_pasien').attr("readonly","yes");
    	$('#jenis_kelamin').attr("disabled","yes");
    	$('#alamat').attr("readonly","yes");
    	$('#tanggal_lahir').attr("readonly","yes");
    	$('#usia').attr("readonly","yes");
    	$('#no_telp').attr("readonly","yes");

    	$('#no_pasien').val("");
    	$('#nama_pasien').val("");
    	$('#jenis_kelamin').val("");
    	$('#alamat').val("");
    	$('#tanggal_lahir').val("");
    	$('#usia').val("");
    	$('#no_telp').val("");
    }

    function get_umur(date){
      var today = new Date();
      var birthday = new Date(date);
      var year = 0;
      if (today.getMonth() < birthday.getMonth()) {
        year = 1;
      } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
        year = 1;
      }
      var age = today.getFullYear() - birthday.getFullYear() - year;
   
      if(age < 0){
        age = 0;
      }
      return age;
    }


});
