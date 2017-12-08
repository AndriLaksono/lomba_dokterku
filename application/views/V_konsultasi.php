<?php $this->load->view('layouts/Header') ?>
<style media="screen">
    textarea{
        background-color: #FFFFFF !important;
        border-color: #CCCCCC !important;
    }
    .btn-brown{
        background-color: #5D382C;
        border-color: rgb(255, 255, 255);
        color: white;
    }
</style>
<section class="section-head">
    <div class="container">
        <p class="text-center">
            <h3 style="color:white !important;margin-top:40px">Konsultasi</h3>
        </p>
    </div>
</section>

<div class="container">
    <section class="section-white">
        <div class="center text-center">
            <?php if ($data==NULL) {?>
                kosong
            <?php  } else { ?>
            <h3>Apakah anda mengalami penyakit dibawah ini?</h3>
            <h3><?php echo $data->gejala ?></h3>
            <p>
                <form action="<?=base_url()?>index.php/C_konsultasi/pilih" method="post">
                    <div style="display:none">
                      <input type="text" name="id_diagnosa" value="<?=$data->id_diagnosa?>">
                      <input type="text" name="id_gejala" value="<?=$data->id_gejala?>"><br>
                      <input type="radio" value="Y" name="rule" id="rdyes">Yes
                      <input type="radio" value="N" name="rule" id="rdno">No
                    </div>
                    <input type="submit" value="Yes" onclick="btnyes()" class="btn btn-success btn-lg">
                    <input type="submit" value="No" onclick="btnno()" class="btn btn-danger btn-lg">
                </form>
            </p>
            <br>
            <?php  } ?>
        </div>
    </section>
</div>
<?php $this->load->view('layouts/Footer') ?>
<script type="text/javascript">
var rdyes = document.querySelector('#rdyes');
var rdno  = document.querySelector('#rdno');

function btnyes(){
    rdyes.checked = true;
    rdno.checked = false;
}

function btnno(){
  rdyes.checked = false;
  rdno.checked = true;
}
</script>
