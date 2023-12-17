<form method="post" action="<?=base_url('/pengguna/Save')?>">

    <div class="container">
        <h2 align="center" class="text">Form Admin</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">
                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" name="email" value="<?=$data['email']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" name="namalengkap" value="<?=$data['namalengkap']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-6">
                <select name="jeniskelamin" value="<?=$data['jeniskelamin']?? ''?>">
                    <option value="" disabled selected>-</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="katasandi" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <textarea name="katasandi" value="<?=$data['katasandi']?? ''?>"></textarea>
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