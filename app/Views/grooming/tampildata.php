<a href="<?=base_url('/grooming/form')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Jenis Hewan</td>
            <td>Jenis Paket</td>
            <td>Harga</td>
            <td>Lokasi</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_grooming as $baris):?>
            <tr>
                <td><?=$baris['jenishewan']?></td>
                <td><?=$baris['jenispaket']?></td>
                <td><?=$baris['harga']?></td>
                <td><?=$baris['lokasi']?></td>
                <td><a href="<?=base_url('grooming/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('grooming/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>