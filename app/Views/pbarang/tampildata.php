<a href="<?=base_url('/pbarang/form')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Nama Barang</td>
            <td>Jenis</td>
            <td>Qty.</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_admin as $baris):?>
            <tr>
                <td><?=$baris['namabarang']?></td>
                <td><?=$baris['jenis']?></td>
                <td><?=$baris['qty']?></td>
                <td><a href="<?=base_url('pbarang/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('pbarang/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>