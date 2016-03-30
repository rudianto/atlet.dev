<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  
        <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-plus"></i> <?php echo strtoupper($action)?> Data Atlet
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Koni</a></li>
			<li><a href="<?php echo site_url()?>atlet/"><i class="fa fa-male"></i> List Atlet</a></li>
			<li class="active"><?php echo strtoupper($action)?></li>
		</ol>
	</section>

   	<!-- Main content -->
    <section class="content">
    	
    		<div class="col-md-6">
    			<?php if($action=='insert') {?>
				<form action="#" class="form-horizontal validate-atlet" id="quick-atlet" method="post" role="form">
				<?php } else {?>
				<form action="#" class="form-horizontal validate-atlet" id="quick-atlet" method="post" role="form">
				<?php  } ?>  

    			<div class="form-group">
    				<label for="exampleInputEmail1">ID Atlet</label>
					<input type="text" class="form-control" id="id_atlet" name="id_atlet" value="<?php echo isset($atlet) ? $atlet->id_atlet : '';?>">
				</div>
				<div class="form-group">
    				<label for="exampleInputEmail1">Nama Atlet</label>
					<input type="text" class="form-control" id="nama_atlet" name="nama_atlet" value="<?php echo isset($atlet) ? $atlet->nama_atlet : '';?>">
				</div>
				<div class="form-group">
    				<label for="exampleInputEmail1">Papi</label>
					<input type="text" class="form-control" id="papi" name="papi" value="<?php echo isset($atlet) ? $atlet->papi : '';?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Pilih Jabatan</label>
					<select name="id_jabatan" class="form-control">
						<option value="">Jabatan</option>
						<option value="atlet">Atlet</option>
						<option value="pelatih">Pelatih</option>
					</select>
    			</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Cabang Olahraga</label>
					<select name="id_cabor" class="form-control">
						<option>Cabang Olahraga</option>
						<?php foreach($cabor as $cab) {?>
						<option value="<?php echo $cab->id_cabor;?>"><?php echo $cab->nama_cabor;?></option>
						<?php }?>
					</select>
    			</div>
  
    			<div class="form-group">
    				<label for="exampleInputEmail1">Form</label>
					<input type="checkbox" id="form" name="form" value="1"> 
		
    				<label for="exampleInputEmail1">KTP</label>
					<input type="checkbox" id="ktp" name="ktp" value="1"> 
	
    				<label for="exampleInputEmail1">Akta</label>
					<input type="checkbox" id="akta" name="akta" value="1"> 
		
    				<label for="exampleInputEmail1">kk</label>
					<input type="checkbox" id="kk" name="kk" value="1"> 
	
    				<label for="exampleInputEmail1">Ijazah</label>
					<input type="checkbox" id="ijazah" name="ijazah" value="1"> 
		
    				<label for="exampleInputEmail1">Mutasi</label>
					<input type="checkbox" id="mutasi" name="mutasi" value="1"> 
		
    				<label for="exampleInputEmail1">Foto</label>
					<input type="checkbox" id="foto" name="foto" value="1"> <br>
					<button type="submit" class="btn btn-primary">Simpan</button>
             	<button type="reset" class="btn btn-danger">Ulangi</button>
			</div>
				</div>						
            </div>
       <!--
            <div class="form-group">
             	<button type="submit" class="btn btn-primary">Simpan</button>
             	<button type="reset" class="btn btn-danger">Ulangi</button>
			</div>-->
    		</form>
    	</div>
    </section>
</div>
</body>
</html>