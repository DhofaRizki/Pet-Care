<form method="post" action="<?=base_url('/barang/Save')?>">

    <div class="container">
        <h2 align="center" class="text">Form Barang</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">
                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

        <div class="form-group row">
            <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-6">
                <input type="text" name="namabarang" value="<?=$data['namabarang']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" name="namalengkap" value="<?=$data['namalengkap']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-6">
                <input type="text" name="jenis" value="<?=$data['jenis']?? ''?>"> 
            </div>
        </div>

        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-6">
                <input type="text" name="harga" value="<?=$data['harga']?? ''?>"> 
            </div>
        </div>

        <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-6">
                <input type="text" name="lokasi" value="<?=$data['katasandi']?? ''?>">
            </div>
        </div>
        <br>

        <button>Save</button>

                
        </div>
        </div>
        </div>
        </div>
    </div>
</form>