<form method="post" action="<?=base_url('/pdokter/Save')?>">

    <div class="container">
        <h2 align="center" class="text">Pemesanan Dokter</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">
                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Jenis Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="nama" value="<?=$data['nama']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="namahewan" class="col-sm-2 col-form-label">Nama Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="namahewan" value="<?=$data['namahewan']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="kelamin" class="col-sm-2 col-form-label">Kelamin</label>
            <div class="col-sm-6">
                <input type="text" name="kelamin" value="<?=$data['kelamin']?? ''?>"> 
            </div>
        </div>

        <div class="form-group row">
            <label for="jenispaket" class="col-sm-2 col-form-label">Jenis Paket</label>
            <div class="col-sm-6">
                <input type="text" name="jenispaket" value="<?=$data['jenispaket']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-6">
                <input type="text" name="harga" value="<?=$data['harga']?? ''?>">
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