<script>
	var pengirim = (prompt("Nama Pengirim: ", "Nama pengirim"));
	var penerima = (prompt("Nama Penerima: ", "Nama penerima"));
	var jarak = (prompt("Jarak Pengiriman(Km): ", 1));
	var alamat = (prompt("Alamat Penerima: ", "Alamat"));
	var jenis = (prompt("Jenis Barang: "));
	var berat = (prompt("Berat Barang(Kg): ", 1));

	document.write('<strong>Detail Pengiriman</strong><br><br>Nama Pengirim : ${pengirim}<br> Nama Penerima : ${penerima}<br>Jarak Pengiriman(Km) : ${jarak}<br>Alamat Penerima : ${alamat}<br>Jenis Barang : ${jenis}<br>Berat Barang(Kg) : ${berat};

	var biayajarak = jarak * 5000;
	var potonganjarak = "";
	if (biayajarak > 50000) {
		potonganjarak = biayajarak * 0.1
	} else {
		potonganjarak = 0
	};

	var biayaberat = berat * 5000;
	var potonganberat = "";
	if (biayaberat > 50000) {
		potonganberat = biayaberat * 0.05
	} else {
		potonganberat = 0
	};

	var total_potongan = potonganjarak + potonganberat;
	var biaya_pengiriman = (biayajarak + biayaberat) - total_potongan;

	document.write('<br><br><strong>Biaya</strong><br><br>Biaya jarak pengiriman(${jarak}Km) : ${biayaberat}')
	</script>
