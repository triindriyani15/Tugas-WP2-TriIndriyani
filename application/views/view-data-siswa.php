<html>

<head> 
    <title>Tampil Data Datasiswa</title>
</head>

<body> 
    <center> 
        <table cellpadding="5"> 
            <tr> 
                <th colspan="3" bgcolor="#B0C4DE"> 
                    <font color="white" size="6">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3"> 
                    <hr>
                </td>
            </tr>
            <br></br>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tanggallahir; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tempatlahir; ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jk; ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td bgcolor="#B0C4DE" colspan="3" align="center">
                    <a href="<?= base_url('Datasiswa');
                    ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
    
    </html>