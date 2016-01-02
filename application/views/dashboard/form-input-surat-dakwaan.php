<input type="hidden" name="id_ref_dakwaan[]" value="<?php echo $id;?>">
<div class="">
	<!-- -->
	<h2 class="page-header">Data Dakwaan</h2> 
	<div class="form-group">
		<label for="idTanggalDakwaan">Tanggal Dakwaan</label>
		<input type="text" name="tanggal_berkas_dakwaan[]" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="idTanggalDakwaan" maxlength="10" placeholder="dd/mm/yyyy"/>
	</div>
	<div class="form-group">
		<label for="idDakwaan">Nomor dakwaan</label>
			<input type="text" maxlength='99' name="nomor_dakwaan[]" class="form-control" placeholder="nomor_dakwaan" />
	</div>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="#Tunggal" aria-controls="Tunggal" role="tab" data-toggle="tab" class="Tunggal">Tunggal</a></li>
		<li role="presentation"><a href="#Alternatif" aria-controls="Alternatif" role="tab" data-toggle="tab"  class="Alternatif">Alternatif</a></li>
		<li role="presentation"><a href="#Kumulatif" aria-controls="Kumulatif" role="tab" data-toggle="tab" class="Kumulatif">Kumulatif</a></li>
	 </ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="Tunggal">
			<div class="form-group">
				<label for="idTunggal">: Tunggal</label>
				<textarea name="tunggal[]" class="form-control" id="idTunggal"></textarea>			
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="Alternatif">
			<div class="form-group">
				<label for="idAlternatif">: Alternatif</label>
				<textarea name="alternatif[]" class="form-control" id="idAlternatif"></textarea>			
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="Kumulatif">
			<div class="form-group">
				<label for="idKumulatif">: Kumulatif</label>
				<textarea name="kumulatif[]" class="form-control" id="idKumulatif"></textarea>			
			</div>
		</div>
	 </div>
	 <script>
		$(document).ready(function()
		{
			$('.Tunggal').click(function (e) 
			{
			//alert();
			  $("#idAlternatif").val("");
			  $("#idKumulatif").val("");
			  e.preventDefault(); 
			  $(this).tab('show');
			});
			$('.Alternatif').click(function (e) 
			{
			  $("#idTunggal").val("");
			  $("#idKumulatif").val("");
			  e.preventDefault();
			  $(this).tab('show');
			});
			$('.Kumulatif').click(function (e) 
			{
			  $("#idTunggal").val("");
			  $("#idAlternatif").val("");
			  e.preventDefault();
			  $(this).tab('show');
			});
		});
	 </script>
	<!-- -->
	<div class="form-group">
		<!--
		<label for="idPenyidik">Penyidik</label>
		<textarea name="form[penyidik]" class="form-control" id="idPenyidik"></textarea>			
		-->
		<label for="idPenyidik">Penyidik</label>
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
			<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penyidik_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					<input type="hidden" name="penyidik_datestart[]" class="findMe" id="penyidik_datestart" maxlength="10" value="" />
	            </div>
	            */ ?>
				<input type="text" name="penyidik_datestart[]" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="penyidik_datestart" maxlength="10" placeholder="dd/mm/yyyy"/>
	         </div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penyidik_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	    			<input type="hidden" name="penyidik_dateend[]" class="findMe" id="penyidik_dateend" maxlength="10" value="" />
		        </div>
		        */?>
	    			<input type="text" name="penyidik_dateend[]" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="penyidik_dateend" maxlength="10" placeholder="dd/mm/yyyy" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<!--
		<label for="idPenyidik">Penyidik</label>
		<textarea name="form[penyidik]" class="form-control" id="idPenyidik"></textarea>			
		-->
		<label for="idPenyidik">Perpanjangan Penyidik oleh Penuntut Umum</label>
		<!-- <label for="idPenyidik">Perpanjangan Penyidik oleh Pengadilan Negeri</label> -->
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
			<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penyidik_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					<input type="hidden" name="penyidik_datestart[]" class="findMe" id="penyidik_datestart" maxlength="10" value="" />
	            </div>
	            */ ?>
				<input type="text" name="perpanjangan_penyidik_pn_datestart[]" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="penyidik_datestart" maxlength="10" placeholder="dd/mm/yyyy"/>
	         </div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penyidik_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	    			<input type="hidden" name="penyidik_dateend[]" class="findMe" id="penyidik_dateend" maxlength="10" value="" />
		        </div>
		        */?>
	    			<input type="text" name="perpanjangan_penyidik_pn_dateend[]" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="penyidik_dateend" maxlength="10" placeholder="dd/mm/yyyy" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<!--
		<label for="idPenyidik">Penyidik</label>
		<textarea name="form[penyidik]" class="form-control" id="idPenyidik"></textarea>			
		-->
		<label for="idPenyidik">Perpanjangan Penyidik oleh Ketua Pengadilan Negeri</label>
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
			<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penyidik_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					<input type="hidden" name="penyidik_datestart[]" class="findMe" id="penyidik_datestart" maxlength="10" value="" />
	            </div>
	            */ ?>
				<input type="text" name="perpanjangan_penyidik_kpn_datestart[]" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="penyidik_datestart" maxlength="10" placeholder="dd/mm/yyyy"/>
	         </div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penyidik_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	    			<input type="hidden" name="penyidik_dateend[]" class="findMe" id="penyidik_dateend" maxlength="10" value="" />
		        </div>
		        */?>
	    			<input type="text" name="perpanjangan_penyidik_kpn_dateend[]" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="penyidik_dateend" maxlength="10" placeholder="dd/mm/yyyy" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="idPenuntut_umum">Penuntut Umum</label>
		<!--
		<textarea name="form[penuntut_umum]" class="form-control" id="idPenuntut_umum"></textarea>			
		-->
			<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php 
				/*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penuntut_umum_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" class="findMe" name="penuntut_umum_datestart[]" id="penuntut_umum_datestart" maxlength="10" value="" />
				</div>
				*/
				?>
				<input type="text" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" name="penuntut_umum_datestart[]" id="penuntut_umum_datestart" maxlength="10" placeholder="dd/mm/yyyy"/>				
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="penuntut_umum_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" class="findMe" name="penuntut_umum_dateend[]" id="penuntut_umum_dateend" maxlength="10" value="" />
				</div>
				*/?>
	            <input type="text" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" name="penuntut_umum_dateend[]" id="penuntut_umum_dateend" maxlength="10" placeholder="dd/mm/yyyy"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="idPerpanjangan_penuntut_umum">Perpanjangan Penuntut Umum oleh Ketua Pengadilan Negeri</label>
		<!--
		<textarea name="form[perpanjangan_penuntut_umum]" class="form-control" id="idPerpanjangan_penuntut_umum"></textarea>			
		-->
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_penuntut_umum_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	        		<input type="hidden" class="findMe" name="perpanjangan_penuntut_umum_datestart[]" id="perpanjangan_penuntut_umum_datestart" maxlength="10" value="" />
			    </div>
			    */?>
			    <input type="text" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" name="perpanjangan_penuntut_umum_datestart[]" id="perpanjangan_penuntut_umum_datestart" maxlength="10" placeholder="dd/mm/yyyy" />
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_penuntut_umum_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" class="findMe" name="perpanjangan_penuntut_umum_dateend[]" id="perpanjangan_penuntut_umum_dateend" maxlength="10" value="" />
				</div>
				*/ ?>
	            <input type="text" class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" name="perpanjangan_penuntut_umum_dateend[]" id="perpanjangan_penuntut_umum_dateend" maxlength="10" placeholder="dd/mm/yyyy" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="idPerpanjangan_ketua_pengadilan_negeri">Perpanjangan Penuntut Umum Oleh Ketua Pengadilan Tinggi</label>
		<!--
		<textarea name="form[perpanjangan_ketua_pengadilan_negeri]" class="form-control" id="idPerpanjangan_ketua_pengadilan_negeri"></textarea>			
		-->
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_ketua_pengadilan_negeri_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="perpanjangan_ketua_pengadilan_negeri_datestart" name="perpanjangan_ketua_pengadilan_negeri_datestart[]" class="form-control" value="" />
				</div>
	            */?>
	            <input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="perpanjangan_penuntut_umum_kpt_datestart" name="perpanjangan_penuntut_umum_kpt_datestart[]" placeholder="dd/mm/yyyy" />
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_ketua_pengadilan_negeri_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="perpanjangan_ketua_pengadilan_negeri_dateend" name="perpanjangan_ketua_pengadilan_negeri_dateend[]" class="form-control" value="" />
				</div>
				*/ ?>
	            	<input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="perpanjangan_penuntut_umum_kpt_dateend" name="perpanjangan_penuntut_umum_kpt_dateend[]" class="form-control" placeholder="dd/mm/yyyy"/>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<label for="idHakim_pengadilan_negeri_bandung">Hakim Pengadilan Negeri Bandung</label>
		<!--
		<textarea name="form[hakim_pengadilan_negeri_bandung]" class="form-control" id="idHakim_pengadilan_negeri_bandung"></textarea>			
		-->
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="hakim_pengadilan_negeri_bandung_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="hakim_pengadilan_negeri_bandung_datestart" name="hakim_pengadilan_negeri_bandung_datestart[]" class="form-control" value="" />
				</div>
				*/ ?>
	            	<input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="hakim_pengadilan_negeri_bandung_datestart" name="hakim_pengadilan_negeri_bandung_datestart[]" placeholder="dd/mm/yyyy" />
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="hakim_pengadilan_negeri_bandung_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="hakim_pengadilan_negeri_bandung_dateend" name="hakim_pengadilan_negeri_bandung_dateend[]" class="form-control" value="" />
				</div>
				*/ ?>
	            	<input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="hakim_pengadilan_negeri_bandung_dateend" name="hakim_pengadilan_negeri_bandung_dateend[]" placeholder="dd/mm/yyyy" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="idPerpanjangan_ketua_pengadilan_negeri">Perpanjangan Hakim Pengadilan oleh Ketua Pengadilan Negeri</label>
		<!--
		<textarea name="form[perpanjangan_ketua_pengadilan_negeri]" class="form-control" id="idPerpanjangan_ketua_pengadilan_negeri"></textarea>			
		-->
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_ketua_pengadilan_negeri_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="perpanjangan_ketua_pengadilan_negeri_datestart" name="perpanjangan_ketua_pengadilan_negeri_datestart[]" class="form-control" value="" />
				</div>
	            */?>
	            <input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="perpanjangan_ketua_pengadilan_negeri_datestart" name="perpanjangan_ketua_pengadilan_negeri_datestart[]" placeholder="dd/mm/yyyy" />
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_ketua_pengadilan_negeri_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="perpanjangan_ketua_pengadilan_negeri_dateend" name="perpanjangan_ketua_pengadilan_negeri_dateend[]" class="form-control" value="" />
				</div>
				*/ ?>
	            	<input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="perpanjangan_ketua_pengadilan_negeri_dateend" name="perpanjangan_ketua_pengadilan_negeri_dateend[]" class="form-control" placeholder="dd/mm/yyyy"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="idPerpanjangan_ketua_pengadilan_negeri">Perpanjangan Hakim Pengadilan oleh Ketua Pengadilan Tinggi</label>
		<!--
		<textarea name="form[perpanjangan_ketua_pengadilan_negeri]" class="form-control" id="idPerpanjangan_ketua_pengadilan_negeri"></textarea>			
		-->
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_ketua_pengadilan_negeri_datestart" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="perpanjangan_ketua_pengadilan_negeri_datestart" name="perpanjangan_ketua_pengadilan_negeri_datestart[]" class="form-control" value="" />
				</div>
	            */?>
	            <input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="perpanjangan_hakim_kpt_datestart" name="perpanjangan_hakim_kpt_datestart[]" placeholder="dd/mm/yyyy" />
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="perpanjangan_ketua_pengadilan_negeri_dateend" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	            	<input type="hidden" maxlength='10' class="findMe" id="perpanjangan_ketua_pengadilan_negeri_dateend" name="perpanjangan_ketua_pengadilan_negeri_dateend[]" class="form-control" value="" />
				</div>
				*/ ?>
	            	<input type="text" maxlength='10' class="findMe form-control datepicker" data-date-format="dd/mm/yyyy" id="perpanjangan_hakim_kpt_dateend" name="perpanjangan_hakim_kpt_dateend[]" class="form-control" placeholder="dd/mm/yyyy"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="idKeterangan">Keterangan</label>
		<textarea name="keterangan[]" class="form-control" id="idKeterangan"></textarea>			
	</div>
	<div class="form-group">
		<label for="idTuntutan">Tuntutan</label>
		<textarea name="tuntutan[]" class="form-control" id="idTuntutan"></textarea>			
	</div>
	<div class="form-group">
		<label for="idPutusan">Putusan</label>
		<textarea name="putusan[]" class="form-control" id="idPutusan"></textarea>			
	</div>
	<div class="form-group">
		<label for="idBanding">Banding</label>
		<textarea name="banding[]" class="form-control" id="idBanding"></textarea>			
	</div>
	<div class="form-group">
		<label for="idKasasi">Kasasi</label>
		<textarea name="kasasi[]" class="form-control" id="idKasasi"></textarea>			
	</div>
	<div class="form-group">
		<label for="idInkrach">Inkrach</label>
		<textarea name="inkrach[]" class="form-control" id="idInkrach"></textarea>			
	</div>
	<!--
	<div class="form-group">
		<label for="idNomor_perkara">Nomor Perkara</label>
		<textarea name="form[nomor_perkara]" class="form-control" id="idNomor_perkara"></textarea>			
	</div>
	<div class="form-group">
		<label for="idHakim_ketua">Hakim Ketua</label>
		<textarea name="form[hakim_ketua]" class="form-control" id="idHakim_ketua"></textarea>			
	</div>
	<div class="form-group">
		<label for="idHakim_anggota">Hakim Anggota</label>
		<textarea name="form[hakim_anggota]" class="form-control" id="idHakim_anggota"></textarea>			
	</div>
	<div class="form-group">
		<label for="idHakim_anggota_2">Hakim Anggota 2</label>
		<textarea name="form[hakim_anggota_2]" class="form-control" id="idHakim_anggota_2"></textarea>			
	</div>
	<div class="form-group">
		<label for="idPanitera_pengganti">Panitera Pengganti</label>
		<textarea name="form[panitera_pengganti]" class="form-control" id="idPanitera_pengganti"></textarea>			
	</div>
	-->
</div>
<script>
	$('.datepicker').datepicker();
	$(".form_date").on("click",function(data)
	{
		$(this).datetimepicker({
	        language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
	    });
	});
</script>