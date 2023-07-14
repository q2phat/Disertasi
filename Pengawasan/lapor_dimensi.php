<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pelaporan Dimensi Pekerjaan</title>
</head>

<body>
<form id="form1" name="form_regis" method="post" action="ins_lapor_dimensi.php">
  <p>&nbsp;</p>
  <table width="453" border="0" align="center">
    <tr>
      <td colspan="2"><div align="left">
        <font color="orange" size="5"><strong>Pelaporan Ukuran Dimensi Pekerjaan</strong> </font>
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
      <td>Panjang Pekerjaan (m)</td>
      <td><input type="text" name="panjang" size="20" maxlength="12"/></td>
    </tr>
    <tr>
      <td> Dokumentasi Pengukuran Panjang</td>
      <td><input type="text" name="dokpanjang" size="20" maxlength="200" />      </td>
    </tr>
	      <tr>
      <td> GPS Dokumentasi Pengukuran Panjang</td>
      <td><input type="text" name="gpspanjang" size="20" maxlength="120" />      </td>
    </tr>
	      <tr>
      <td> Waktu Dokumentasi Pengukuran Panjang</td>
      <td><input type="text" name="wktpanjang" size="20" maxlength="60" />      </td>
    </tr>
	
	      <td>Lebar Pekerjaan (m)</td>
      <td><input type="text" name="lebar" size="20" maxlength="12"/></td>
    </tr>
    <tr>
      <td> Dokumentasi Pengukuran Lebar</td>
      <td><input type="text" name="doklebar" size="20" maxlength="200" />      </td>
    </tr>
	      <tr>
      <td> GPS Dokumentasi Pengukuran Lebar</td>
      <td><input type="text" name="gpslebar" size="20" maxlength="120" />      </td>
    </tr>
	      <tr>
      <td> Waktu Dokumentasi Pengukuran Lebar</td>
      <td><input type="text" name="wktlebar" size="20" maxlength="60" />      </td>
    </tr>
	
	      <td>Tebal Pekerjaan (m)</td>
      <td><input type="text" name="tebal" size="20" maxlength="12"/></td>
    </tr>
    <tr>
      <td> Dokumentasi Pengukuran Tebal</td>
      <td><input type="text" name="doktebal" size="20" maxlength="200" />      </td>
    </tr>
	      <tr>
      <td> GPS Dokumentasi Pengukuran Tebal</td>
      <td><input type="text" name="gpstebal" size="20" maxlength="120" />      </td>
    </tr>
	      <tr>
      <td> Waktu Dokumentasi Pengukuran Tebal</td>
      <td><input type="text" name="wkttebal" size="20" maxlength="60" />      </td>
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
