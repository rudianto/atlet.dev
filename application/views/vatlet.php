<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Atlet
            <small>View data atlet</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Atlet</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><?php echo $title;?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
			<table id="example1" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th bgcolor="#bbdefb">ID Atlet</th>
						<th bgcolor="#bbdefb">Nama Atlet</th>
						<th bgcolor="#bbdefb">Papi</th>
						<th bgcolor="#bbdefb">ID Jabatan</th>
						<th bgcolor="#bbdefb">ID Cabor</th>
						<th bgcolor="#bbdefb">Form</th>
						<th bgcolor="#bbdefb">KTP</th>
						<th bgcolor="#bbdefb">Akta</th>
						<th bgcolor="#bbdefb">KK</th>
						<th bgcolor="#bbdefb">Ijazah</th>
						<th bgcolor="#bbdefb">Mutasi</th>
						<th bgcolor="#bbdefb">Foto</th>
						<th bgcolor="#bbdefb">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($select as $value) :?>
					<tr>
						<td><?=$value->id_atlet;?></td>
						<td><?=$value->nama_atlet;?></td>
						<td><?=$value->papi;?></td>
						<td><?=$value->id_jabatan;?></td>
						<td><?=$value->id_cabor;?></td>
						<td>
							<?php $form=$value->form;
							if ($form!=1) {
								echo '<input type="checkbox" name="lname" disabled';
							}
							else{
								
								echo '<input type="checkbox" name="lname" disabled checked>';
							}
							?>
						</td>
						<td>
							<?php 
								$ktp=$value->ktp;
								if ($ktp!=1) {
								echo '<input type="checkbox" name="lname" disabled';
							}
							else{
								
								echo '<input type="checkbox" name="lname" disabled checked>';
							}
							?>
						</td>
						<td>
							<?php 
								$akta=$value->akta;
								if ($akta!=1) {
								echo '<input type="checkbox" name="lname" disabled';
							}
							else{
								
								echo '<input type="checkbox" name="lname" disabled checked>';
							}
							?>
						</td>
						<td>
							<?php 
								$kk=$value->kk;
								if ($kk!=1) {
								echo '<input type="checkbox" name="lname" disabled';
							}
							else{
								
								echo '<input type="checkbox" name="lname" disabled checked>';
							}
							?>
						</td>
						<td>
							<?php 
								$ijazah=$value->ijazah;
								if ($ijazah!=1) {
								echo '<input type="checkbox" name="lname" disabled';
							}
							else{
								
								echo '<input type="checkbox" name="lname" disabled checked>';
							}
							?>
						</td>
						<td>
							<?php 
								$mutasi=$value->mutasi;
								if ($mutasi!=1) {
								echo '<input type="checkbox" name="lname" disabled';
							}
							else{
								
								echo '<input type="checkbox" name="lname" disabled checked>';
							}
							?>
						</td>
						<td>
							<?php
								 $foto=$value->foto;
								 if ($foto!=1) {
								echo '<input type="checkbox" name="lname" disabled';
							}
							else{
								
								echo '<input type="checkbox" name="lname" disabled checked>';
							}
							?>
						</td>
                      	<td align="center">
                        		<?=anchor('atlet/updateAtlet/'.$value->id_entry, '<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['class'=>'btn btn-warning']);?>
                        		<?=anchor('atlet/deleteAtlet/'.$value->id_entry, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', ['class'=>'btn btn-danger','onclick'=>'return confirm(\'Apakah Anda Yakin Akan di Hapus..??\')']
                                  );?>
                      	</td>

					</tr>
				<?php endforeach;?>
				
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>