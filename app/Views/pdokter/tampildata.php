<a href="<?=base_url('/pdokter/form')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Nama Dokter</td>
            <td>Nama Hewan</td>
            <td>Jenis Hewan</td>
            <td>Tgl. Datang</td>
            <td>No. Telp</td>
            <td>Keluhan</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_pdokter as $baris):?>
            <tr>
                <td><?=$baris['namabarang']?></td>
                <td><?=$baris['jenis']?></td>
                <td><?=$baris['qty']?></td>
                <td><a href="<?=base_url('pdokter/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('pdokter/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>