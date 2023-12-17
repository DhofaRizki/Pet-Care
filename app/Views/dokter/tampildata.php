<a href="<?=base_url('/dokter/form')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Nama Dokter</td>
            <td>No Telp.</td>
            <td>Jadwal</td>
            <td>Lokasi</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_dokter as $baris):?>
            <tr>
                <td><?=$baris['nama']?></td>
                <td><?=$baris['notlp']?></td>
                <td><?=$baris['jadwal']?></td>
                <td><?=$baris['lokasi']?></td>
                <td><a href="<?=base_url('dokter/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('dokter/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>