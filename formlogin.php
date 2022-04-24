<!DOCTYPE html>
<html>
<head>
    <meta content="url=http://localhost/Tugas5/redirect.php">
    <title>Form Login</title>
</head>
<body>
    <form method="post" action="postAct.php">
        <table width = "400" align = "center" cellpadding = "2" cellspacing = "2">
            <tr>
                <td width = "130">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width = "130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnLogin" value="Login">
                    <input type="reset" name="btnReset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>