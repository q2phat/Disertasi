<?php 
echo "Database Item Pekerjaan Konstruksi Bina Marga"; 
//Menu Kontraktor
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form_regis" method="post" action="ins_tabelitemkerja.php">
  <p>&nbsp;</p>
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2"><div align="left">
        <p><font color="orange" size="5"><strong>Item Pekerjaan</strong> </font>
		  </p>
        <p><font size="4"><strong>Pengisian Database Item Kerja</strong> </font>
        </p>
        <p></p>
      </div></td>
    </tr>
    <tr>
      <td width="200" nowrap="nowrap">Nomor Item Pekerjaan</td>
      <td width="300" nowrap="nowrap"><input type="text" name="noitem" />      </td>
    </tr>
    <tr>
      <td>Uraian</td>
      <td><input type="text" name="uraian" /></td>
    </tr>
    <tr>
      <td>Satuan</td>
      <td><input type="text" name="satuan" /></td>
    </tr>
	<tr>
      <td>Kuantitas</td>
      <td><input type="text" name="kuantitas" /></td>
    </tr>
	<tr>
      <td>Keterangan</td>
      <td><input type="text" name="ket" /></td>
    </tr>
		  
 
    <tr>
      <td><input type="submit" name="Submit" value="INPUT"/></td>
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
