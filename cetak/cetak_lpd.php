 <body onload="window.print()">
<?php
//error_reporting(0);
session_start();
include "../inc/koneksi.php"; 
$id = mysql_escape_string($_GET['kode_lpd']);
$query = mysql_query("SELECT
tb_lpd.dasar,
tb_lpd.maksud,
tb_lpd.waktu_pelaksanaan,
tb_lpd.daerah,
tb_lpd.nama_kegiatan,
tb_lpd.arahan,
tb_lpd.masalah,
tb_lpd.saran,
tb_lpd.lain_lain,
tb_lpd.kode_lpd,
tb_pegawai.nama_pegawai,
tb_pegawai.nip,
tb_jabatan.jabatan,
tb_golongan.golongan
FROM
tb_lpd
Inner Join tb_pegawai ON tb_lpd.kode_pegawai = tb_pegawai.kode_pegawai
Inner Join tb_golongan ON tb_pegawai.kode_golongan = tb_golongan.kode_golongan
Inner Join tb_jabatan ON tb_pegawai.kode_jabatan = tb_jabatan.kode_jabatan
WHERE kode_lpd= '$id'");
while($tampil=mysql_fetch_array($query)){

?>
<table align="center"> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>
    <div style="border-bottom: 1px solid #000;">LAPORAN PERJALANAN DINAS</div>

    </td>
</tr> 
</table>

<br>

<table>
  <tr>
    <td width="30px" align="center ">I.</td>
    <td width="680px">DASAR</td>
    <td width="25px" align="center">:</td>
    <td width="850px">
      <div style="margin-top: 25px; margin-bottom: 10px;">Surat Perintah Tugas Nomor : <br><?php echo $tampil['dasar']?></div></td>
  </tr>
  <tr>
    <td width="30px" align="center ">II.</td>
    <td>MAKSUD TUJUAN</td>
    <td align="center">:</td>
    <td ><div style="margin-top: 13px; margin-bottom: 10px;"><?php echo $tampil['maksud'] ;?></div></td>
  </tr>
  <tr>
    <td width="30px" align="center ">III.</td>
    <td>WAKTU PELAKSANAAN</td>
    <td align="center">:</td>
    <td ><div style="margin-bottom: 10px; margin-top: 13px;"><?php echo date("d F Y", strtotime($tampil ['waktu_pelaksanaan'])) ;?></div></td>
  </tr>
   <tr>
    <td width="30px" align="center ">IV.</td>
    <td>NAMA PETUGAS</td>
    <td align="center">:</td>
    <td><div style="margin-bottom: 10px; margin-top: 13px;"><?php echo $tampil ['nama_pegawai'] ;?></div></td>
  </tr>
   <tr>
    <td width="30px" align="center ">V.</td>
    <td><div style="margin-top: 15px;">DAERAH TUJUAN / INSTANSI YANG DIKUNJUNGI</div></td>
    <td align="center">:</td>
    <td><div style="margin-top: 13px; margin-bottom: 10px;"><?php echo $tampil ['daerah'] ;?></div></td>
  </tr>
   <tr>
    <td width="30px" align="center ">VI.</td>
    <td>HADIR DALAM PERTEMUAN</td>
    <td align="center">:</td>
    <td> <div style="margin-top: 13px; margin-bottom: 10px;"><?php echo $tampil ['nama_kegiatan'] ;?></div></td>
  </tr>
   <tr>
    <td width="30px" align="center ">VII.</td>
    <td><div style="margin-top: 15px;">PETUNJUK / ARAHAN YANG DIBERIKAN</div></td>
    <td align="center">:</td>
    <td><div style="margin-top: 10px; margin-bottom: 5px;"><?php echo $tampil ['arahan'] ;?></div></td>
  </tr>
   <tr>
    <td width="30px" align="center ">VIII.</td>
    <td>MASALAH / TEMUAN</td>
    <td align="center"><br><div style="margin-top: -20px;">:</div></td>
    <td> <div style="margin-top: 23px; margin-bottom: 10px;"><?php echo $tampil ['masalah'] ;?></div></td>
  </tr>
   <tr>
    <td width="30px" align="center ">IX.</td>
    <td>SARAN / TINDAKAN</td>
    <td align="center">:</td>
    <td> <div style="margin-top: 12px; margin-bottom: 10px;"><?php echo $tampil ['saran'] ;?></div></td>
  </tr>
   <tr>
    <td width="30px" align="center ">X.</td>
    <td>LAIN - LAIN</td>
    <td align="center">:</td>
    <td> <div style="margin-top: 20px; margin-bottom: 10px;"><?php echo $tampil ['lain_lain'] ;?></div></td>
  </tr>
</table>

<br>
<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="20%">



    <td >

        <table>
            <tr><td>Bondowoso, </td><td> <?php $tgl=gmdate ('d-m-Y'); echo "  ".date("d F Y", strtotime($tgl)); ?> </td></tr>
        </table><br>
    <table>
      <tr>
        <td><div style="margin-left: 120px; ">Pelapor,</div></td>
      </tr>
      <tr>
        <td style="width: 500px; "><br><br><br><br><center><div style="margin-left: -40px; font-weight: bold;"><u><?php echo $tampil['nama_pegawai'] ?></u></div></td>
      </tr>
       <tr>
        <td style="width: 500px; "><div style="margin-left: 70px;">NIP. <?php echo $tampil['nip'] ?></div></td>
      </tr>
    </table>
    </td>
  </tr>
</table> 
<?php } ?>
</body>