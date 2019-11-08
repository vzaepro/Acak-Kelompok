<?php
function garis($jum) {
	for ($i=1; $i<= $jum; $i++) {
		echo "=";
		}
}
echo '------------------------------------';
echo "\r\n";
echo 'Karya Anak Bangsa : Zen';
echo "\r\n";
echo " \n\t[x] PILIH DATA KELAS [x]\n\t 1. S1 INFORMATIKA"; // ini cuma tampilan
echo "\n [?] Masukkan Nomor Kelas : "; // ini tampilan juga
$pilih = trim(fgets(STDIN)); // ini juga dihapus pilihan kelas juga gpp
echo '------------------------------------';
echo "\nWait for load data...\n";
sleep(2);
garis(40);
echo "\nmasukkan jumlah anggota per kelompok : ";
$jumlah = trim(fgets(STDIN)); 
echo "\nprocessing data... \n";
sleep(3);
flush();
$totalkel = 37 / $jumlah; // 3 ganti dengan jumlah data / array kalian
$tot = $totalkel;
if(37 % $jumlah == 1 ) { // 33 ganti juga
	echo "\n anggota kelompok akan ada yang ganjil, sesuai kesepatakan yang ganjil akan ikut kelompok terakhir\n";
	}
	sleep(2);
garis(30);
echo "\ntotal kelompok = $tot\n";

$data = array("Dandy", "Angga", "Anjar", "Lia", "Brian", "Kevin", "Alvian", "Farrel", "Zen", "Iqbal", "Wirawan", "Fauzi", "Aris", "Deby", "Adam", "Tia", "Asep", "Hazmi", "Rifqi", "Erika", "Dina", "Bidin", "Alwi", "Danu", "Solar", "Eko", "Dedy", "Yusak", "Hidan", "Kholis", "Wafi", "Fikri", "Faisal", "Yoshi", "Holil", "Endi", "Anhar"); // sesuaikan dengan array kalian ( nama mahasiwa2 dikelas)
		
for ($i = 1; $i<$tot; $i++){
	garis(30);
	echo "\nkelompok ke $i\n";
	garis(30);
	for ( $ii = 0; $ii<$jumlah; $ii++) {
shuffle($data);
$hasil = array_shift($data);
sleep(1);
flush();
echo "\n$ii > $hasil\n";
}
}
?>
