<form method="post" action="<?=base_url('/pbarang/Save')?>">

    <div class="container">
        <h2 align="center" class="text">Pemesanan Barang</h2>
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
            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-6">
                <input type="text" name="jenis" value="<?=$data['jenis']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="qty" class="col-sm-2 col-form-label">Qty.</label>
            <div class="col-sm-6">
                <input type="text" name="qty" value="<?=$data['qty']?? ''?>"> 
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