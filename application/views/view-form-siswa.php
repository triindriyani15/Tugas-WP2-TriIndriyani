<html>

<head>
    <title>Form Data Siswa</title>
</head>

<body>
    <center> 
        <?php echo validation_errors(); ?>
        <form action="<?= base_url('Datasiswa/Cetak'); ?>"
method="post"> 
            <table cellpadding="5">
                <tr> 
                    <th colspan="3" bgcolor="#B0C4DE">
                        <font color="white" size="6"> 
                        Form Data Siswa 
                    </th> 
                </tr> 
                <br></br>
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr>
                <tr> 
                    <td>Nama Siswa</td> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="nama" id="nama">
                    </td> 
                </tr> 
                <tr> 
                    <td>NIS</td> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="nis" id="nis"> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Kelas</td> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="kelas" id="kelas"> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Tanggal Lahir</td> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="tanggallahir" id="tanggallahir"> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Tempat Lahir</td> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="tempatlahir" id="tempatlahir"> 
                    </td> 
                </tr>
                <tr> 
                    <td>Alamat</td> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="alamat" id="alamat"> 
                    </td> 
                </tr>
                <tr> 
                    <td>Jenis Kelamin</td> 
                    <td>:</td> 
                    <td> 
                        <input type="radio" name="jk" value="Laki-laki"> Laki-Laki
                        <input type="radio" name="jk" value="Perempuan"> Perempuan<br>
                    </td> 
                </tr>
                <tr> 
                    <td>Agama</td> 
                    <td>:</td> 
                    <td>
                        <select name="agama" id="agama"> 
                            <option value="">Pilih...</option> 
                            <option value="Islam">Islam</option> 
                            <option value="Kristen">Kristen</option> 
                            <option value="Katolik">Katolik</option> 
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select> 
                    </td> 
                </tr> 
                <tr> 
                    <br>
                    <td bgcolor="#B0C4DE" colspan="3" align="center">  
                        <input type="submit" value="Simpan">
                        <input type="reset" value="Clear"> 
                    </td> 
                </tr> 
            </table>
        </form> 
    </center>
</body>

</html>