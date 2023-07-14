<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pelaporan Dimensi Pekerjaan</title>
</head>

<body>
<form id="form1" name="form_regis" method="post" action="ins_kesiapankerja.php">
  <p>&nbsp;</p>
  <table width="453" border="0" align="center">
    <tr>
      <td colspan="2"><div align="left">
        <font color="orange" size="5"><strong>Pelaporan Kesiapan Lahan Kerja Pengaspalan</strong> </font>
        <p></p>
      </div></td>
    </tr>
    <tr>
      <td width="198" nowrap="nowrap">Nomor Item Pekerjaan</td>
        <td><select name="no_item">
        <option value="">Pilih Nomor Item Pekerjaan...</option>
        <option value="1">6.3(3a)</option>
        <option value="2">6.3(3b)</option>
        <option value="3">6.3.(4a)</option>
        <option value="4">6.3.(4b)</option>
      </select></td>
    </tr>
    <tr>
      <td>Nama Item Pekerjaan</td>
      <td><select name="nm_item">
        <option value="">Pilih Nama Item Pekerjaan...</option>
        <option value="1">Lataston Lapis Aus (HRS-WC)</option>
        <option value="2">Lataston Lapis Aus Perata (HRS-WC(L))</option>
        <option value="3">Lataston Lapis Pondasi (HRS-Base)</option>
        <option value="4">Lataston Lapis Pondasi Perata (HRS-Base(L))</option>
      </select></td>
    </tr>
    <tr>
      <td>Peruntukan</td>
      <td><input type="text" name="untuk" /></td>
    </tr>
	<tr>
      <td>Cuaca di AMP</td>
      <td><select name="cuaca_amp">
        <option value="">Pilih tipe Cuaca...</option>
        <option value="1">Cerah</option>
        <option value="2">Berawan</option>
        <option value="3">Gerimis</option>
        <option value="4">Hujan Lebat</option>
      </select></td>
    </tr>  
	<tr>
      <td> Dokumentasi Cuaca di AMP</td>
      <td><input type="text" name="dok_amp" size="20" maxlength="200" />      </td>
    </tr>
	<tr>
      <td> GPS Dokumentasi Cuaca di AMP</td>
      <td><input type="text" name="gpsamp" size="20" maxlength="120" />      </td>
    </tr>
	<tr>
      <td> Waktu Dokumentasi Cuaca di AMP</td>
      <td><input type="text" name="wktamp" size="20" maxlength="60" />      </td>
    </tr>

 	<tr>
      <td>Cuaca di Lokasi Penghamparan</td>
      <td><select name="cuaca_lahan">
        <option value="">Pilih tipe Cuaca...</option>
        <option value="1">Cerah</option>
        <option value="2">Berawan</option>
        <option value="3">Gerimis</option>
        <option value="4">Hujan Lebat</option>
      </select></td>
    </tr>  
	<tr>
      <td> Dokumentasi Cuaca di Lokasi Penghamparan</td>
      <td><input type="text" name="doklahan" size="20" maxlength="200" />      </td>
    </tr>
	<tr>
      <td> GPS Dokumentasi Cuaca di Lokasi Penghamparan</td>
      <td><input type="text" name="gpslahan" size="20" maxlength="120" />      </td>
    </tr>
	<tr>
      <td> Waktu Dokumentasi Cuaca di Lokasi Penghamparan</td>
      <td><input type="text" name="wktlahan" size="20" maxlength="60" />      </td>
    </tr>
	  
   	<tr>
      <td>Kondisi Lahan Penghamparan</td>
      <td><select name="kondisi_lahan">
        <option value="">Pilih tipe Cuaca...</option>
        <option value="1">Bersih Kering</option>
        <option value="2">Kotor dan Berdebu</option>
        <option value="3">Basah</option>
        <option value="4">Basah dan Kotor</option>
      </select></td>
    </tr>  
	<tr>
      <td> Dokumentasi Kondisi Lahan Penghamparan</td>
      <td><input type="text" name="doklahanhampar" size="20" maxlength="200" />      </td>
    </tr>
	<tr>
      <td> GPS Dokumentasi Kondisi Lahan Penghamparan</td>
      <td><input type="text" name="gpslahanhampar" size="20" maxlength="120" />      </td>
    </tr>
	<tr>
      <td> Waktu Dokumentasi Kondisi Lahan Penghamparan</td>
      <td><input type="text" name="wktlahanhampar" size="20" maxlength="60" />      </td>
    </tr>
	  
	
	<tr>
	  <td>Dokumen Request Kerja</td>
      <td><input type="text" name="lebar" size="20" maxlength="60"/></td>
    </tr>
    
	
		  
	  <tr>
      <td><input type="submit" name="Submit" value="INPUT" /></td>
      <td>
        <div align="center">
          <input type="reset" name="Reset" value="Cancel" />
            </div></td></tr>

<tr>
      <td colspan="2">
      <div align="center"><p align="left">Kembali ke <a href="index.php">Index</a></div></td>
      </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
