<a href="<?=base_url('/admin/form')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Email</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_admin as $baris):?>
            <tr>
                <td><?=$baris['email']?></td>
                <td><?=$baris['namalengkap']?></td>
                <td><?=$baris['jeniskelamin']?></td>
                <td><a href="<?=base_url('admin/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('admin/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>