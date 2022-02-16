<body onload="window.print()">
<?php
session_start();
include "../inc/koneksi.php"; 
$id = mysql_escape_string($_GET['kode_sppd']);
$query = mysql_query("SELECT
tb_sppd.tanggal_surat,
tb_sppd.maksud,
tb_sppd.alat_angkut,
tb_sppd.tempat_berangkat,
tb_sppd.tempat_tujuan,
tb_sppd.lama_perjalanan,
tb_sppd.tgl_berangkat,
tb_sppd.tgl_kembali,
tb_sppd.instansi,
tb_sppd.keterangan,
tb_sppd.dasar,
tb_sppd.biaya,
tb_sppd.biaya_tran,
tb_pegawai.nama_pegawai,
tb_pegawai.nip,
tb_pejabat.nama_pejabat,
tb_pejabat.nippj,
tb_jabatan.jabatan,
tb_golongan.golongan
FROM
tb_sppd
Inner Join tb_pegawai ON tb_sppd.kode_pegawai = tb_pegawai.kode_pegawai
Inner Join tb_pejabat ON tb_pejabat.kode_pejabat = tb_sppd.kode_pejabat
Inner Join tb_golongan ON tb_pegawai.kode_golongan = tb_golongan.kode_golongan
Inner Join tb_jabatan ON tb_pegawai.kode_jabatan = tb_jabatan.kode_jabatan

WHERE
tb_sppd.kode_sppd  = '$id'");
while($tampil=mysql_fetch_array($query)){
$bia = $tampil['biaya'];
$lama = $tampil['lama_perjalanan'];
$ako = $bia*$lama;
$tran = $tampil['biaya_tran'];
$jumlah = $ako+$tran;

?>
<table align="center"> 
<tr>
    <td align="left"><h3 style='margin-bottom:-5px' align="left">
    <div style="border-bottom: 1px solid #000;" align="left">KWITANSI</div>
    </td>
<table align="center">
<tr>
    <td><p>Nomor : </p></td>
</tr>
</table>

</tr> 
</table>

<br>
<div>
  <p>Telah Terima Dari</p>
</div>
<div style="margin-top: -35px;">
  <p style="text-indent: 2in">:</p>
</div>
<div style="margin-top: -34px;">
  <p style="text-indent: 2.5in">Bendahara Pengeluaran Dinas Komunikasi dan Informatika Kabupaten Bondowoso</p>
</div>
<br>
<div>
  <p>Jumlah Uang</p>
</div>
<div style="margin-top: -35px;">
  <p style="text-indent: 2in">:</p>
</div>
<div style="margin-top: -34px;">
  <p style="text-indent: 2.5in"><?php echo $jumlah;?></p>
</div>
<br>
<br><div>
  <p>Pembayaran</p>
</div>
<div style="margin-top: -35px;">
  <p style="text-indent: 2in">:</p>
</div>
<div style="margin-top: -34px;">
  <p style="text-indent: 2.5in"><?php echo $tampil ['maksud'] ;?></p>
</div>

<div style="margin-left: 55%">
  <div>
    <p>Ditetapkan di</p>
  </div>
  <div style="margin-top: -35px;">
    <p style="text-indent: 1in">:</p>
  </div>
  <div style="margin-top: -34px;">
    <p style="text-indent: 1.1in">Bondowoso</p>
  </div>
  <div style="margin-top: -10px;">
    <p>Pada Tanggal</p>
  </div>
  <div style="margin-top: -35px;">
    <p style="text-indent: 1in">:</p>
  </div>
  <div style="margin-top: -34px;">
    <p style="text-indent: 1.1in"><?php $tgl=gmdate ('d-m-Y'); echo "  ".date("d F Y", strtotime($tgl)); ?></p>
  </div>
</div>
<div style="margin-left: 55%">BENDAHARA PENGELUARAN </div>
<div style="margin-bottom: 100px; margin-left: 63%"></div>
<div style="margin-left: 63%">SUSANTI, S.Sos.</div>
<div style="margin-left: -490px; margin-left: 56%"><hr style='border:1px solid #000' width="210"></div>
<div style="margin-left: 70%"></div>
<div style="margin-left: 65%">NIP. 19711223 200701 2 005</div>
<?php } ?>
</body>