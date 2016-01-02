<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-8">
		<form method="POST">
		<?php
			if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{
		/*
					foreach($row as $key => $row->)
					{
		?>
			<div class="form-group">
				<label for="id<?php echo $key;?>"><?php echo $key;?></label>
				<div class="row">
					<input type="text" class="form-control" name="form[<?php echo $key;?>]" maxlength="99" id="id<?php echo $key;?>" value="<?php echo $value;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<?php
					}
			*/ 
		?>
		<div class="form-group">
				<label for="idNo">No</label>
				<div class="row">
					<input type="text" class="form-control" name="form[no]" maxlength="99" id="idNo" value="<?php echo $row->no;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idtanggal_masuk">Tanggal Masuk Berkas</label>
				<div class="row">
					<input type="date" class="form-control" name="form[tanggal_masuk]" maxlength="99" id="idtanggal_masuk" value="<?php echo date("d/m/Y",strtotime($row->tanggal_masuk));?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
			<?php /*
		<div class="form-group">
				<label for="inama">nama</label>
				<div class="row">
					<input type="text" class="form-control" name="form[nama]" maxlength="99" id="idnama" value="<?php echo $row->nama;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idtempat_lahir">Tempat Lahir</label>
				<div class="row">
					<input type="text" class="form-control" name="form[tempat_lahir]" maxlength="99" id="idtempat_lahir" value="<?php echo $row->tempat_lahir;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idtanggal_lahir">Tanggal lahir</label>
				<div class="row">
					<input type="date" class="form-control" name="form[tanggal_lahir]" maxlength="99" id="idtanggal_lahir" value="<?php echo date("d-m-Y",strtotime($row->tanggal_lahir));?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idjenis_kelamin">jenis kelamin</label>
				<div class="row">
					<select name="form[jenis_kelamin]" class="form-control" id="idjenis_kelamin" <?php if(!isset($config) or $config == false){echo "readonly";}?>>
						<option value='laki-laki' <?php if($row->jenis_kelamin == "laki-laki"){echo "selected";}?>>laki-laki</option>
						<option value='perempuan' <?php if($row->jenis_kelamin == "perempuan"){echo "selected";}?>>perempuan</option>
						<option value='lainnya' <?php if($row->jenis_kelamin == "lainnya"){echo "selected";}?>>lainnya</option>
					</select>
				</div>
			</div>
		<div class="form-group">
				<label for="idkebangsaan">kebangsaan</label>
				<div class="row">
					<input type="text" class="form-control" name="form[kebangsaan]" maxlength="99" id="idkebangsaan" value="<?php echo $row->kebangsaan;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idtempat_tinggal">Tempat Tinggal</label>
				<div class="row">
					<textarea class="form-control" name="form[tempat_tinggal]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->tempat_tinggal;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idagama">agama</label>
				<div class="row">
					<input type="text" class="form-control" name="form[agama]" maxlength="99" id="idagama" value="<?php echo $row->agama;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">pekerjaan</label>
				<div class="row">
					<textarea class="form-control" name="form[pekerjaan]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->pekerjaan;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idDakwaan">Nomor dakwaan</label>
				<div class="row">
					<input type="text" class="form-control" name="form[nomor_dakwaan]" maxlength="99" id="idDakwaan" value="<?php echo $row->nomor_dakwaan;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">tunggal</label>
				<div class="row">
					<textarea class="form-control" name="form[tunggal]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->tunggal;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">alternatif</label>
				<div class="row">
					<textarea class="form-control" name="form[alternatif]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->alternatif;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">kumulatif</label>
				<div class="row">
					<textarea class="form-control" name="form[kumulatif]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->kumulatif;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">penyidik</label>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-lg-6">
				<input type="date" maxlength='10' name="form[penyidik_datestart]" class="form-control" placeholder="tanggal mulai :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->penyidik_datestart));?>"/>
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<input type="date" maxlength='10' name="form[penyidik_dateend]" class="form-control"  placeholder="tanggal akhir :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->penyidik_dateend));?>"/>
			</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">perpanjangan penuntut umum</label>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-lg-6">
					<input type="date" maxlength='10' name="form[perpanjangan_penuntut_umum_datestart]" class="form-control" placeholder="tanggal mulai :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->perpanjangan_penuntut_umum_datestart));?>"/>
				</div>
				<div class="col-md-6 col-xs-12 col-lg-6">
					<input type="date" maxlength='10' name="form[perpanjangan_penuntut_umum_dateend]" class="form-control"  placeholder="tanggal akhir :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->perpanjangan_penuntut_umum_dateend));?>"/>
				</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">penuntut_umum</label>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="date" maxlength='10' name="form[penuntut_umum_datestart]" class="form-control" placeholder="tanggal mulai :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->penuntut_umum_datestart));?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="date" maxlength='10' name="form[penuntut_umum_dateend]" class="form-control"  placeholder="tanggal akhir :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->penuntut_umum_dateend));?>"/>
					</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">perpanjangan ketua pengadilan negeri</label>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="date" maxlength='10' name="form[perpanjangan_ketua_pengadilan_negeri_datestart]" class="form-control" placeholder="tanggal mulai :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->perpanjangan_ketua_pengadilan_negeri_datestart));?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="date" maxlength='10' name="form[perpanjangan_ketua_pengadilan_negeri_dateend]" class="form-control"  placeholder="tanggal akhir :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->perpanjangan_ketua_pengadilan_negeri_dateend));?>"/>
					</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">hakim pengadilan negeri bandung</label>
				<div class="row">
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="date" maxlength='10' name="form[hakim_pengadilan_negeri_bandung_datestart]" class="form-control" placeholder="tanggal mulai :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->hakim_pengadilan_negeri_bandung_datestart));?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="date" maxlength='10' name="form[hakim_pengadilan_negeri_bandung_dateend]" class="form-control"  placeholder="tanggal akhir :yyyy-mm-dd" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo date("d-m-Y",strtotime($row->hakim_pengadilan_negeri_bandung_dateend));?>"/>
					</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">tuntutan</label>
				<div class="row">
					<textarea class="form-control" name="form[tuntutan]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->tuntutan;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">putusan</label>
				<div class="row">
					<textarea class="form-control" name="form[putusan]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->putusan;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">banding</label>
				<div class="row">
					<textarea class="form-control" name="form[banding]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->banding;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">kasasi</label>
				<div class="row">
					<textarea class="form-control" name="form[kasasi]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->kasasi;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">inkrach</label>
				<div class="row">
					<textarea class="form-control" name="form[inkrach]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->inkrach;?></textarea>
				</div>
			</div>
	<?php /*
		<div class="form-group">
				<label for="idpekerjaan">nomor_perkara</label>
				<div class="row">
					<textarea class="form-control" name="form[nomor_perkara]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->nomor_perkara;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idhakim_ketua">Hakim Ketua</label>
				<div class="row">
					<textarea class="form-control" name="form[hakim_ketua]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_ketua;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idhakim_anggota">Hakim Anggota</label>
				<div class="row">
						<textarea class="form-control" name="form[hakim_anggota]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_anggota;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idhakim_anggota_2">Hakim Anggota 2</label>
				<div class="row">
					<textarea class="form-control" name="form[hakim_anggota_2]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_anggota_2;?></textarea>
			</div>
			</div>
		<div class="form-group">
				<label for="idpanitera_pengganti">panitera_pengganti</label>
				<div class="row">
						<textarea class="form-control" name="form[panitera_pengganti]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->panitera_pengganti;?></textarea>
				</div>
			</div>
	*/?>
				<?php 
				}
			}?>
			<?php 
				if(isset($_content))
				{ 
			?><div class="form-group">
					<?php
					echo $_content;	
					?>
				</div>
			<?php
				}
			?>
		</form>
	</div>
</div>