<html>

<head>
    <title>Form Input Matakuliah</title>
</head>
<table>
    <tr>
        <th colspan="3">
            Data Mata Kuliah
        </th>
    </tr>
    <tr>
        <td colspan="3">
            <hr>
        </td>
    </tr>
    <tr>
        <th>Kode MTK</th>
        <th>:</th>
        <td>
          <?php echo $kode ?>
        </td>
    </tr>
    <tr>
        <th>Nama MTK</th>
        <th>:</th>
        <td>
            <?= $nama ?>
        </td>
    </tr>
    <tr>
        <th>SKS</th>
        <th>:</th>
        <td>
            <?= $sks ?>
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
            <a href="<?= base_url('matakuliah') ?>">Kembali</a>
        </td>
    </tr>
</table>    