<?php $this->load->view('layouts/Header') ?>
<section class="section-dark" style="background-color:#5D382C;height:200px">
    <div class="container">
        <p class="text-center">
            <h1 style="color:white !important">Konsultasi</h1>
        </p>
    </div>
</section>

<div class="container">
    <section class="section-white">
        <div class="center text-center">
            <h3>Apakah anda mengalami penyakit dibawah ini?</h3>
            <h5>Demam</h5>
            <p>
                <form action="<?=base_url()?>index.php/C_konsultasi/pilih" method="post">
                    <p style="display:none">
                        <input type="radio" name="rdpilih" id="rdya" value="Y"> Ya
                        <input type="radio" name="rdpilih" id="rdno" value="N"> tidak
                        <input type="text" name="id_gejala" value="<?=$gejala->id_gejala?>">
                        <input type="text" name="id_diagnosa" value="<?=$gejala->id_diagnosa?>">
                    </p>
                    <button type="submit" name="button" onclick="ya()" class="btn btn-success btn-lg">Ya</button> &nbsp;
                    <button type="submit" name="button" onclick="tidak()" class="btn btn-danger btn-lg">Tidak</button>
                </form>
            </p>
            <br>
        </div>
    </section>
</div>
<?php $this->load->view('layouts/Footer') ?>
<script type="text/javascript">
    function ya() {
        var ya = document.querySelector('#rdya');
        ya.checked = true;
    }
    function tidak() {
        var no = document.querySelector('#rdno');
        // console.log(no.value);
        no.checked = true;
    }
</script>
