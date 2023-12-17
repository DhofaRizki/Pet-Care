<a href="<?=base_url('/pgrooming/form')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Jenis Hewan</td>
            <td>Nama Hewan</td>
            <td>Jenis Kelamin</td>
            <td>Jenis Paket</td>
            <td>Harga</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_pgrooming as $baris):?>
            <tr>
                <td><?=$baris['jenishewan']?></td>
                <td><?=$baris['namahewan']?></td>
                <td><?=$baris['kelamin']?></td>
                <td><?=$baris['jenispaket']?></td>
                <td><?=$baris['harga']?></td>
                <td><a href="<?=base_url('pgrooming/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('pgrooming/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>