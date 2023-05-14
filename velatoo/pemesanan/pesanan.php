<!-- Tampilan Awal Form Pemesanan -->
<html>
 <form method="POST" name="frmpost" action="">
 <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th><h2> Form Pemesanan </h2></th>
  </tr>
  <tr>
    <td>
      <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

        <tr height="40"> 
            <td width="200" valign="center">Tanggal Pesanan</td>
            <td width="10" valign="center"> : </td>
            <td><input type="date" name="tanggal"></td>
        </tr>

        <tr height="30">
          <td width="200" valign="center">Nama </td>
          <td width="10" valign="center"> : </td>
          <td><input name="namcus[]" type="text" size="20" /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Email</td>
          <td width="10" valign="center"> : </td>
          <td><input name="noId[]" type="text" size="40" /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Pembayaran</td>
          <td width="10" valign="center"> : </td>
          <td>
            <select name="tipe">
              <option name="-" value="-" hidden>-</option>
              <option name="deluxe" value="Deluxe">Online</option>
              <option name="superior" value="Superior">COD</option>
            </select>
          </td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Alamat</td>
          <td width="10" valign="center"> : </td>
          <td><input  name="durasi" type="text" size="10"  /></td>
        </tr>

        <tr>
          <td align="right" colspan="2"><input type="submit" name="btnOk" value="Simpan" /></td>
          <td><input type="reset" name="btnCancel" value="Cancel" /></td>
        </tr>

      </table>
      </table>
      <br>
      <br>
      
 <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td>
            <?php
            //Pemanggilan Function
              hasil();
            ?>
          </td>
        </tr>
 </table>

</form>
</center>
</html>