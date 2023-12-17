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
            <label for="jenishewan" class="col-sm-2 col-form-label">Jenis Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="jenishewan" value="<?=$data['jenishewan']?? ''?>"> 
            </div>
        </div>

        <div class="form-group row">
            <label for="tgl_dtg" class="col-sm-2 col-form-label">Tgl. Datang</label>
            <div class="col-sm-6">
                <input type="text" name="tgl_dtg" value="<?=$data['tgl_dtg']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jam" class="col-sm-2 col-form-label">JAM</label>
            <div class="col-sm-6">
                <input type="text" name="jam" value="<?=$data['jam']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="notlp" class="col-sm-2 col-form-label">No Telp.</label>
            <div class="col-sm-6">
                <input type="text" name="notlp" value="<?=$data['notlp']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="keluhan" class="col-sm-2 col-form-label">Keluhan</label>
            <div class="col-sm-6">
                <input type="text" name="keluhan" value="<?=$data['keluhan']?? ''?>">
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