<body onload="window.print()">
<?php
#error_reporting(0);
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

?>

<img src="../image/s.jpg" width="100%">

</table>
<hr style='border:1px solid #000; margin-top: -10px' >

<table style="margin-left: 400px">
<tr>
    <td><p>Nomor : </p></td>
</tr>

<tr>
    <td><p>Lembar Ke : </p></td>
</tr>
</table>
<table align="center"> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>
    <div style="border-bottom: 1px solid #000;">SURAT PERINTAH PERJALANAN DINAS</div>

    <div>(S P P D)</div>
    </td>
</tr> 
</table>

<br>

<table border="bordered">
  <tr>
    <td width="30px" align="center ">1</td>
    <td width="680px">PEJABAT YANG MEMBERI PERINTAH </td>
    <td width="25px" align="center">:</td>
    <td width="850px"><?php echo $tampil['nama_pejabat'] ;?></td>
  </tr>
  <tr>
    <td width="30px" align="center ">2</td>
    <td>NAMA / NIP PEGAWAI YANG DIPERINTAH</td>
    <td align="center">:<br>:</td>
    <td ><?php echo $tampil['nama_pegawai'] ;?><br><?php echo $tampil['nip'] ;?></td>
  </tr>
  <tr>
    <td width="30px" align="center ">3</td>
    <td>A. PANGKAT / GOLONGAN RUANG<br>B. JABATAN</td>
    <td align="center">:<br>:</td>
    <td >a. <?php echo $tampil ['golongan'] ;?><br>b. <?php echo $tampil ['jabatan'] ;?></td>
  </tr>
   <tr>
    <td width="30px" align="center ">4</td>
    <td>MAKSUD PERJALANAN DINAS</td>
    <td align="center">:</td>
    <td><?php echo $tampil ['maksud'] ;?></td>
  </tr>
   <tr>
    <td width="30px" align="center ">5</td>
    <td>ALAT ANGKUTAN YANG DIPERGUNAKAN</td>
    <td align="center">:</td>
    <td><?php echo $tampil ['alat_angkut'] ;?></td>
  </tr>
   <tr>
    <td width="30px" align="center ">6</td>
    <td>A. TEMPAT BERANGKAT<br>B. TEMPAT TUJUAN</td>
    <td align="center">:<br>:</td>
    <td>a. <?php echo $tampil ['tempat_berangkat'] ;?><br>b. <?php echo $tampil ['tempat_tujuan'] ;?></td>
  </tr>
   <tr>
    <td width="30px" align="center ">7</td>
    <td>A. LAMANYA PERJALANAN DINAS<br>B. TANGGAL BERANGKAT<br>C. TANGGAL HARUS KEMBALI</td>
    <td align="center">:<br>:<br>:</td>
    <td>a. <?php echo $tampil ['lama_perjalanan'] ;?>Hari<br>b. <?php echo date("d F Y", strtotime($tampil ['tgl_berangkat'])) ;?><br>c. <?php echo date("d F Y", strtotime($tampil ['tgl_kembali'])) ;?></td>
  </tr>
   <tr>
    <td width="30px" align="center ">8</td>
    <td>PEMBEBANAN ANGGARAN<br>A. INSTANSI<br>B. KODE REKENING</td>
    <td align="center"><br>:<br>:</td>
    <td>a. Dinas Komunikasi dan Informatika<br>b. 5.2.2.15.02<br></td>
  </tr>
   <tr>
    <td width="30px" align="center ">9</td>
    <td>KETERANGAN LAIN-LAIN</td>
    <td align="center">:</td>
    <td><?php echo $tampil ['keterangan'] ;?></td>
  </tr>
</table>
<br>
<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="20%">
    <td>
        <table>
            <tr><td width="100px">Dikeluarkan di </td><td>: Bondowoso</td></tr>
            <tr><td>Pada Tanggal </td><td>: <?php $tgl=gmdate ('d-m-Y'); echo "  ".date("d F Y", strtotime($tgl)); ?> </td></tr>
        </table><br>
        <table>
          <tr>
            <td style="width: 50px; ">KEPALA DINAS KOMUNIKSI DAN INFORMATIKA<br><center>KABUPATEN BONDOWOSO</td>
          </tr>
          <tr>
            <td style="width: 500px; "><br><br><br><br><center><?php echo $tampil ['nama_pejabat']?><hr style='border:1px solid #000' width="210"></td>
          </tr>
          <tr>
            <td style="width: 500px; "><center>Pembina Tk.I</td>
          </tr>
          <tr>
            <td style="width: 500px; "><center>NIP. <?php echo $tampil['nippj']?></td>
          </tr>
        </table>
    </td>
  </tr>
</table> 
<?php } ?>
</body>