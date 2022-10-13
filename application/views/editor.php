<!DOCTYPE html>

<head>
<title>Rumah Sakit Sultan Fatah Demak</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" >

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-theme.min.css') ?>" >


<link href="<?php echo base_url('asset/css/fresh-bootstrap-table.css') ?>" rel="stylesheet" />


<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">


<!-- Latest compiled and minified JavaScript -->


<style>
	/* width */
::-webkit-scrollbar {
  width: 7px;
  height: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

input{
	color : black;
	width : 50px;
}



th{
	width : 10px;
}
td{
	width : 10px;
}


.btn-outline {
  color: #4fbfa8;
  background-color: #ffffff;
  border-color: #4fbfa8;
  font-weight: bold;
  letter-spacing: 0.05em;
}

.btn-outline {
  color: #4fbfa8;
  background-color: #ffffff;
  border-color: #4fbfa8;
  font-weight: bold;
  border-radius: 0;
}

.btn-outline:hover,
.btn-outline:active,
.btn-outline:focus,
.btn-outline.active {
  background: #4fbfa8;
  color: #ffffff;
  border-color: #4fbfa8;
  
}


.btn-colour-1 {
  color: #fff;
  background-color: #004E64;
  border-color: #004E64;
  font-weight: bold;
  letter-spacing: 0.05em;
  border-radius: 0;
}

.btn-colour-1:hover,
.btn-colour-1:active,
.btn-colour-1:focus,
.btn-colour-1.active {
  /* let's darken #004E64 a bit for hover effect */
  background: #003D4F;
  color: #ffffff;
  border-color: #003D4F;
}

</style>
</head>
<body style='font-family : roboto; '>
<div class="modal fade" id="modaltarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Ruang Perawatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form id='forma'  action="<?php echo site_url('rs/add') ?>" method='post'>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Nama Ruang</label>
    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama ruang perawatan" name='nama'>
    		<small id="emailHelp" class="form-text text-muted">Isi nama ruang perawatan</small>
  		</div>
  		<div class="form-group">
    		<label for="exampleInputPassword1">Kelas</label>
    		<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukan kelas" min="1" max="3" name='kelas'>
			<small id="emailHelp" class="form-text text-muted">Isi nomor kelas ruang perawatan (1 atau 2 atau 3)</small>
  		</div>
  		<button type="submit" class="btn btn-colour-1" style='color : white;'>Submit</button>
	  </form>
      </div>
    </div>
  </div>
</div>





  <div id='bg1' class="fresh-table full-color-blue" style='overflow-x : hidden;  width : 100vw; height : 100vh; z-index : 0'>
  

  <br>
  <h1 class="front-page" style='color : white; width : 100vw; text-align : center; margin-top : 0; font-family : roboto; font-size : 2vw; font-weight : bold;'>INFORMASI TEMPAT TIDUR</h1>
  <table class="table display responsive nowrap table-bordered table table-dark table-striped table-hover"  style="margin-bottom: 0px;" id="fresh-table">
  	<thead>
		  <tr style='color : white; width : 1px;'>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5); ">No</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Ruang Perawatan</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Action</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Kelas (Dropdown)</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">JML TT</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Lama</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Baru</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Pulang</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Pria</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Wanita</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Umum</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Jamda</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">BPJS</th> 
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Action Update</th> 
		</tr>
	</thead>

	<tbody>
		  <?php 
		  $count = 1;
			foreach ($rp as $value) {
		?>
		<tr>
			<td style='color : white;'><center><?php echo $count; $count += 1; ?></center></td>
			<td style='color : white;'><?php echo $value->nama; ?></td>
			<td style='color : white;'><center><b onclick="changeformari(<?php echo $value->id ?>)" style='color : white; cursor : pointer; font-weight : bold;' data-toggle="modal" data-target="#modaltarget" >Edit</b>  | <?php echo anchor('rs/delete/'.$value->id, 'Hapus', 'style="font-weight : bold; color : white;"'); ?></center></td>
			<td style='color : white; text-align: center;'><?php echo $value->kelas; ?></td>
			<form action="<?php echo site_url('rs/data/'.$value->id) ?>" method='post'>
			<td style='text-align: center;'><div> <input id='r1<?php echo $value->id; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="jumlah" placeholder="xxx" value='<?php echo $value->jumlah; ?>' /> </div></td>
			<td style='text-align: center;'><div> <input id='r2<?php echo $value->id; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="lama" placeholder="xxx" value='<?php echo $value->lama; ?>' /> </div></td>
			<td style='text-align: center;'><div> <input id='r3<?php echo $value->id; ?>' value='<?php echo $value->baru; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="baru" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r4<?php echo $value->id; ?>' value='<?php echo $value->pulang; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="pulang" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r5<?php echo $value->id; ?>' value='<?php echo $value->pria; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="pria" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r6<?php echo $value->id; ?>' value='<?php echo $value->wanita; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="wanita" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r7<?php echo $value->id; ?>' value='<?php echo $value->umum; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="umum" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r8<?php echo $value->id; ?>' value='<?php echo $value->janda; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="janda" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r9<?php echo $value->id; ?>' value='<?php echo $value->bpjs; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="bpjs" placeholder="xxx" /> </div></td>
			<td><center><button type="submit" class="btn btn-colour-1" style='color : white; font-size : 10px;' name='submit' value='submit'>Update</button></td>
			</form>
		</tr>
		<?php
			}
		?>

		<tr>
			<td onclick="changeforma(1)" style='color : white; cursor : pointer; background : rgba(0,255,0,0.2); font-weight : bold;' data-toggle="modal" data-target="#modaltarget"><center><i class="fas fa-plus"></i></center></td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			
			<td colspan="3" style='text-align: center; color : white; font-weight : bold;'></td>
			
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
		</tr>
		<tr class="total">
			<th class="total-480"">&nbsp;</th>
			<th style="text-align: center; color : white;">T O T A L</th>
			<th style="text-align: center;">&nbsp;</th>
			<th style="text-align: center;">&nbsp;</th>
			<th style="text-align: center;"><div> <input disabled id='s1' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s2' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s3' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s4' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s5' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s6' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s7' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s8' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s9' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<td style='text-align: center;'>&nbsp;</td>
		</tr>
	</tbody>
</table>
<br>

<table class="table display responsive nowrap table-bordered table table-dark table-striped table-hover" style="margin-bottom: 0px;" id="fresh-table2">
	<thead>
		<tr>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">No</th>
			<th width="70" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Ruang Perawatan</th>
			<th width="70" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Action</th>
			<th width="39" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Kelas (Dropdown)</th>
			<th width="38" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">JML TT</th>
			<th width="38" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">INAP</th>
			<th width="33" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">RJ</th>
			<th width="45" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">APS</th>
			<th width="23" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Rujuk</th>
			<th width="23" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">DOA</th>
			<th width="23" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Umum</th>
			<th width="23" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Jamda</th>
			<th width="23" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">BPJS</th> 
			<th width="23" style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Action Update</th> 
		</tr>
	</thead>
	<tbody>
		  <?php 
		  $counta = 1;
			foreach ($rp2 as $value) { 
  		?>
		<tr>
			<td style='color : white;'><center><?php echo $counta; $counta += 1; ?></center></td>
			<td style='color : white;'><?php echo $value->nama; ?></td>
			<td style='color : white;'><center> <b onclick="changeformari2(<?php echo $value->id ?>)" style='color : white; cursor : pointer; font-weight : bold;' data-toggle="modal" data-target="#modaltarget" >Edit</b> | <?php echo anchor('rs/delete2/'.$value->id, 'Hapus', 'style="font-weight : bold; color : white;"'); ?></center></td>
			<td style='text-align: center; color : white;'><?php echo $value->kelas; ?></td>
			<form action="<?php echo site_url('rs/data2/'.$value->id) ?>" method='post'>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d1<?php echo $value->id; ?>' type="number" name="jumlah" placeholder="xxx" value='<?php echo $value->jumlah; ?>' /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d2<?php echo $value->id; ?>' type="number" name="inap" placeholder="xxx" value='<?php echo $value->inap; ?>' /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d3<?php echo $value->id; ?>' value='<?php echo $value->rj; ?>' type="number" name="rj" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d4<?php echo $value->id; ?>' value='<?php echo $value->aps; ?>' type="number" name="aps" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d5<?php echo $value->id; ?>' value='<?php echo $value->rujuk; ?>' type="number" name="rujuk" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d6<?php echo $value->id; ?>' value='<?php echo $value->doa; ?>' type="number" name="doa" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d7<?php echo $value->id; ?>' value='<?php echo $value->umum; ?>' type="number" name="umum" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d8<?php echo $value->id; ?>' value='<?php echo $value->janda; ?>' type="number" name="janda" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d9<?php echo $value->id; ?>' value='<?php echo $value->bpjs; ?>' type="number" name="bpjs" placeholder="xxx" /> </div></td>
			<td><center><button type="submit" class="btn btn-colour-1" style='color : white; font-size : 10px;' name='submit' value='submit'>Update</button></td>
			</form>
		</tr>
		<?php
			}
		?>
		<tr>
		<td onclick="changeforma(2)" style='color : white; cursor : pointer; background : rgba(0,255,0,0.2); font-weight : bold;' data-toggle="modal" data-target="#modaltarget"><center><i class="fas fa-plus"></i></center></td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			
			<td colspan="3" style='text-align: center; color : white; font-weight : bold;'></td>
			
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
			<td style='text-align: center;'>&nbsp;</td>
		</tr>
	</tbody>

	<tfoot>
		<tr class="total">
			<th class="total-480" style="">&nbsp;</th>
			<th style="text-align: center; color : white;">T O T A L</th>
			<th style="text-align: center;">&nbsp;</th>
			<th style="text-align: center;">&nbsp;</th>
			<th style="text-align: center;"><div> <input disabled id='ss1' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss2' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss3' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss4' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss5' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss6' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss7' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss8' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss9' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<td style='text-align: center;'>&nbsp;</td>
		</tr>			
	</tfoot>
</table>

	<div class="d-flex justify-content-center" style='float : right;  margin-top : 20px; margin-right : 20px'>
	<a href="<?php echo site_url('rs') ?>"><button type="button" class="btn btn-colour-1">VIEW</button></a>
	<a href="<?php echo site_url('login/logout') ?>"><button type="button" class="btn btn-colour-1">LOG OUT</button></a>
	
	</div>



</div>



<script src="<?php echo base_url('asset/js/jquery.js') ?>" ></script>
<script src="<?php echo base_url('asset/js/bootstrap-table.min.js') ?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>" ></script>

<script>

function changeforma(pilihan){
	document.getElementById('exampleModalLabel').innerHTML = "Tambah Ruang Perawatan";
	if(pilihan == 1){
		document.getElementById('forma').action = "<?php echo site_url('rs/add') ?>";
	}else if(pilihan == 2){
		document.getElementById('forma').action = "<?php echo site_url('rs/add2') ?>";
	}
}

function changeformari(pilihan){
		document.getElementById('exampleModalLabel').innerHTML = "Edit Ruang Perawatan";
		document.getElementById('forma').action = "<?php echo site_url('rs/update/') ?>"+pilihan;

}


function changeformari2(pilihan){
	document.getElementById('exampleModalLabel').innerHTML = "Edit Ruang Perawatan";
	document.getElementById('forma').action = "<?php echo site_url('rs/update2/') ?>"+pilihan;
}



setTimeout(() => {
	document.getElementById('bg1').style.height = '100vh';
	document.getElementById('bg2').style.height = '100vh';
}, 1000);


var arrayRPJumlah = new Array();
var arrayRPInap = new Array();
var arrayRPRj = new Array();
var arrayRPAps = new Array();
var arrayRPRujuk = new Array();
var arrayRPDoa = new Array();
var arrayRPUmum = new Array();
var arrayRPJanda = new Array();
var arrayRPBpjs = new Array();
var arrayRPTotal = new Array();
var arrayAll = new Array();

arrayRPTotal.push(document.getElementById('s1'));
arrayRPTotal.push(document.getElementById('s2'));
arrayRPTotal.push(document.getElementById('s3'));
arrayRPTotal.push(document.getElementById('s4'));
arrayRPTotal.push(document.getElementById('s5'));
arrayRPTotal.push(document.getElementById('s6'));
arrayRPTotal.push(document.getElementById('s7'));
arrayRPTotal.push(document.getElementById('s8'));
arrayRPTotal.push(document.getElementById('s9'));

<?php foreach($rp as $value) { ?>
	arrayRPJumlah.push(document.getElementById(<?php echo "'r1".$value->id."'"; ?>));
	arrayRPInap.push(document.getElementById(<?php echo "'r2".$value->id."'"; ?>));
	arrayRPRj.push(document.getElementById(<?php echo "'r3".$value->id."'"; ?>));
	arrayRPAps.push(document.getElementById(<?php echo "'r4".$value->id."'"; ?>));
	arrayRPRujuk.push(document.getElementById(<?php echo "'r5".$value->id."'"; ?>));
	arrayRPDoa.push(document.getElementById(<?php echo "'r6".$value->id."'"; ?>));
	arrayRPUmum.push(document.getElementById(<?php echo "'r7".$value->id."'"; ?>));
	arrayRPJanda.push(document.getElementById(<?php echo "'r8".$value->id."'"; ?>));
	arrayRPBpjs.push(document.getElementById(<?php echo "'r9".$value->id."'"; ?>));
	
<?php } ?>

arrayAll.push(arrayRPJumlah);
arrayAll.push(arrayRPInap);
arrayAll.push(arrayRPRj);
arrayAll.push(arrayRPAps);
arrayAll.push(arrayRPRujuk);
arrayAll.push(arrayRPDoa);
arrayAll.push(arrayRPUmum);
arrayAll.push(arrayRPJanda);
arrayAll.push(arrayRPBpjs);


function calculate(){
	for(var i = 0; i < arrayRPTotal.length; i++){
		arrayRPTotal[i].value = 0;
		for(var j = 0; j < arrayAll[i].length; j++){
			
			arrayRPTotal[i].value = Number(arrayRPTotal[i].value) + Number(arrayAll[i][j].value);
			
		}
	}
}

calculate();

var array2RPJumlah = new Array();
var array2RPInap = new Array();
var array2RPRj = new Array();
var array2RPAps = new Array();
var array2RPRujuk = new Array();
var array2RPDoa = new Array();
var array2RPUmum = new Array();
var array2RPJanda = new Array();
var array2RPBpjs = new Array();
var array2RPTotal = new Array();
var array2All = new Array();

array2RPTotal.push(document.getElementById('ss1'));
array2RPTotal.push(document.getElementById('ss2'));
array2RPTotal.push(document.getElementById('ss3'));
array2RPTotal.push(document.getElementById('ss4'));
array2RPTotal.push(document.getElementById('ss5'));
array2RPTotal.push(document.getElementById('ss6'));
array2RPTotal.push(document.getElementById('ss7'));
array2RPTotal.push(document.getElementById('ss8'));
array2RPTotal.push(document.getElementById('ss9'));

<?php foreach($rp2 as $value) { ?>
	array2RPJumlah.push(document.getElementById(<?php echo "'d1".$value->id."'"; ?>));
	array2RPInap.push(document.getElementById(<?php echo "'d2".$value->id."'"; ?>));
	array2RPRj.push(document.getElementById(<?php echo "'d3".$value->id."'"; ?>));
	array2RPAps.push(document.getElementById(<?php echo "'d4".$value->id."'"; ?>));
	array2RPRujuk.push(document.getElementById(<?php echo "'d5".$value->id."'"; ?>));
	array2RPDoa.push(document.getElementById(<?php echo "'d6".$value->id."'"; ?>));
	array2RPUmum.push(document.getElementById(<?php echo "'d7".$value->id."'"; ?>));
	array2RPJanda.push(document.getElementById(<?php echo "'d8".$value->id."'"; ?>));
	array2RPBpjs.push(document.getElementById(<?php echo "'d9".$value->id."'"; ?>));
	
<?php } ?>

array2All.push(array2RPJumlah);
array2All.push(array2RPInap);
array2All.push(array2RPRj);
array2All.push(array2RPAps);
array2All.push(array2RPRujuk);
array2All.push(array2RPDoa);
array2All.push(array2RPUmum);
array2All.push(array2RPJanda);
array2All.push(array2RPBpjs);


function calculates(){
	for(var i = 0; i < array2RPTotal.length; i++){
		array2RPTotal[i].value = 0;
		for(var j = 0; j < array2All[i].length; j++){
			
			array2RPTotal[i].value = Number(array2RPTotal[i].value) + Number(array2All[i][j].value);
			
		}
	}
}

calculates();


</script>


</div>
</body>

</html>