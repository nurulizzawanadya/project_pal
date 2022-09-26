

<div class="row">
<div class="col-sm-12">
    <div class="form-group">
        <!-- <label class="form-control-label" for="cari_nip" id="coba">NIP</label> -->
        <input type="hidden" id="cari_nip" name="nip" class="form-control" value="<?php
        $id = $userku->nip;
        echo str_pad($id,9,"0",STR_PAD_LEFT);
        ?>" 
        placeholder="<?php
        $id = $userku->nip;
        echo str_pad($id,9,"0",STR_PAD_LEFT);
        ?>" disabled>
    </div>
</div>

<div class="col-sm-12">
    <div class="form-group">
        <label class="form-control-label" for="nama">Nama</label><br>
        <input type="text" id="nama" name="nama" class="form-control" value="{{ $userku->nama }}" disabled>
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        <label class="form-control-label" for="id_divisi">Divisi</label><br>
        <!-- <input type="hidden" id="id_divisi" name="id_divisi" class="form-control" value="{{ $userku->id_divisi }}" readonly="">
        <input type="text" id="id_divisi" name="divisi" class="form-control" value="{{ $userku->divisi->divisi }}" readonly=""> -->
         <select id="id_divisi" name="id_divisi" class="form-control" readonly>
            <option value="{{ $userku->id_divisi }}">{{ $userku->divisi->divisi }}
            </option>
            
        </select>
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        <label class="form-control-label" for="id_departmen">Departmen</label><br>
     <!--  <input type="hidden" name="id_departmen" id="id_departmen" class="form-control" value="{{ $userku->id_departmen }}" readonly="">
      <input type="text" name="id_departmen" id="departmen" class="form-control" value="{{ $userku->departmen->departmen }}" readonly=""> -->
       <select id="id_departmen" name="id_departmen" class="form-control" readonly>
            <option value="{{ $userku->id_departmen }}">{{ $userku->departmen->departmen }}
            </option>
            
        </select>
    </div>
</div>
</div>

<!-- <div class="row">

                    <div class="col-sm-12">
                      <label class="form-control-label" for="id_detail">Kategori Masalah</label>
                        <select name="id_detail" class="chosen-select form-control tag-input-style" id="form-field-select-4" data-placeholder="Pilih kategori">
                                                    <optgroup label="AC">
                                                        <option value="1" > Instalasi Baru (AC)</option>  
                                                        <option value="2" > Gangguan (AC)</option>  
                                                        <option value="3" > Lainnya (AC)</option> 
                                                    </optgroup>
                                                  <optgroup label="Air">
                                                        <option value="4" > Instalasi Baru (Air)</option> 
                                                        <option value="5" > Gangguan (Air)</option> 
                                                        <option value="6" > Lainnya (Air)</option>  
                                                        <option value="7" > Permintaan Supply (Air)</option>  
                                                    </optgroup>
                                                  <optgroup label="Telp">
                                                        <option value="21" > Gangguan (Telp)</option> 
                                                        <option value="22" > Instalasi Baru (Telp)</option> 
                                                        <option value="23" > Lainnya (Telp)</option>  
                                                    </optgroup>
                                                  <optgroup label="Listrik">
                                                        <option value="18" > Perbaikan (Listrik)</option> 
                                                        <option value="19" > Instalasi Baru (Listrik)</option>  
                                                        <option value="20" > Gangguan (Listrik)</option>  
                                                    </optgroup>
                                                  <optgroup label="Jalan">
                                                        <option value="12" > Perbaikan (Jalan)</option> 
                                                    </optgroup>
                                                  <optgroup label="Dermaga">
                                                        <option value="11" > Perbaikan (Dermaga)</option> 
                                                    </optgroup>
                                                  <optgroup label="Kantor">
                                                        <option value="13" > Perbaikan (Kantor)</option>  
                                                    </optgroup>
                                                  <optgroup label="Bengkel">
                                                        <option value="10" > Perbaikan (Bengkel)</option> 
                                                    </optgroup>
                                                  <optgroup label="APAR">
                                                        <option value="8" > Penambahan APAR</option>  
                                                        <option value="9" > Pengecekan APAR</option>  
                                                    </optgroup>
                                                  <optgroup label="Kebersihan">
                                                        <option value="15" > Pengangkutan Sampah</option> 
                                                        <option value="16" > Penataan Taman</option>  
                                                    </optgroup>
                                                  <optgroup label="Tata Ruang Tata Graha">
                                                        <option value="17" > Permintaan Desain Interior & Furnishing</option> 
                                                    </optgroup>
                                              </select>
                                              <br>
                    </div >

                   <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="telp_ext">No Telp Ext</label>
                        <input type="text" id="telp_ext" name="telp_ext" class="form-control" placeholder="No Telp Ext"/>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="trouble">Deskripsi Kerusakan</label>
                        <input type="text" id="trouble" name="trouble" class="form-control" placeholder="Deskripsi Kerusakan Yang Terjadi"/>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="ket_masalah">Tambahkan Keterangan</label>
                        <input type="text" id="ket_masalah" name="ket_masalah" class="form-control" placeholder="Tambahkan Keterangan"/>
                      </div>
                    </div>
                    <input type="hidden" name="tgl_pengajuan" value="<?php echo date('Y-m-d H:i:s') ?>">
                    <input type="hidden" name="tgl_selesai" value="<?php echo date('Y-m-d H:i:s') ?>">
                    
                    <input type="hidden" name="solved" value="NULL"> -->
                    <!-- <input type="hidden" name="foto_awal" value="NULL"> -->
                    <!-- <input type="hidden" name="foto_akhir" value="NULL">
                    <input type="hidden" name="ttd" value="NULL">
                    <input type="hidden" name="officer" value="NULL">
                    <input type="hidden" name="status" value="0">
                    <input type="hidden" name="rating" value="0">


                   <div class="col-sm-12">
                    <div class="form-group">
                     <label class="form-control-label" for="foto_awal">Tambahkan Foto <font color="red"></font></label>
                    <div class="col-sm-12S">
                      <input type="file" id="foto_awal" name="foto_awal">
                    </div>
                  </div>
                </div>



                  </div>

                <div class="form-group">
                        <br>
                        
                       <input type="submit" name="submit" class="btn btn-success" value="Laporkan Masalah" style="margin-left: 200px">
                      </div> -->