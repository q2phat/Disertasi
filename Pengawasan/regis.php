<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form_regis" method="post" action="ins_user.php">
  <p>&nbsp;</p>
  <table width="453" border="0" align="center">
    <tr>
      <td colspan="2"><div align="left">
        <font color="orange" size="5"><strong>Form Registrasi User</strong> </font>
        <p></p>
      </div></td>
    </tr>
    <tr>
      <td width="198" nowrap="nowrap">Nama Lengkap </td>
      <td width="245" nowrap="nowrap"><input type="text" name="nama_l" />      </td>
    </tr>
    <tr>
      <td>NIK</td>
      <td><input type="text" name="nik" /></td>
    </tr>
    <tr>
      <td>Instansi</td>
      <td><input type="text" name="inst" /></td>
    </tr>
    <tr>
      <td>Jabatan</td>
      <td><select name="jab">
        <option value="">Pilih Jabatan...</option>
        <option value="1">Pejabat Pembuat Komitmen</option>
        <option value="2">Pejabat Pengadaan</option>
        <option value="3">Penyedia</option>
        <option value="4">Pengawas</option>
      </select></td>
    </tr>
    <tr>
      <td>Nama User</td>
      <td><input type="text" name="user" size="20" maxlength="12"/></td>
    </tr>
    <tr>
      <td> Password</td>
      <td><input type="text" name="pswd" size="20" maxlength="12" />      </td>
    </tr><tr>
      <td> Konfirmasi Password</td>
      <td><input type="text" name="kpswd" size="20" maxlength="12" />      </td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Registrasi" /></td>
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
