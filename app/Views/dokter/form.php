<form method="post" action="<?=base_url('/dokter/Save')?>">

    <div class="container">
        <h2 align="center" class="text">Form Dokter</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">
                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Dokter</label>
            <div class="col-sm-6">
                <input type="text" name="nama" value="<?=$data['nama']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="notlp" class="col-sm-2 col-form-label">No Telp.</label>
            <div class="col-sm-6">
                <input type="text" name="notlp" value="<?=$data['notlp']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jadwal" class="col-sm-2 col-form-label">Jadwal</label>
            <div class="col-sm-6">
                <input type="text" name="jadwal" value="<?=$data['jadwal']?? ''?>"> 
            </div>
        </div>

        <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-6">
                <input type="text" name="lokasi" value="<?=$data['lokasi']?? ''?>">
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