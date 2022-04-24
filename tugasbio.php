<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <b><center>FORM BIODATA</center></b>
    <form method="post" action="PostAct.php">
        <table width = "400" align = "center" cellpadding = "2" cellspacing = "2">
            <tr>
                <td width = "130">Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="25"></td>
            </tr>
            <tr>
                <td width = "130">NPM</td>
                <td>:</td>
                <td><input type="number" name="npm" size="25"></td>
            </tr>
            <tr>
                <td width = "130">Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" size="25"></td>
            </tr>
            <tr>
                <td width = "130">Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jkelamin" size="25" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jkelamin" size="25" value="Perempuan">Perempuan
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td width = "130">Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgllahir"></td>
            </tr>
             <tr>
                <td width = "130">Status</td>
                <td>:</td>
                <td> 
                    <select name="status">
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Bekerja">Bekerja</option>
                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                    </select>
                </td>
            </tr>
                <td>
                    <input type="submit" name="btnSave" value="Save">
                    <input type="reset" name="btnReset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>