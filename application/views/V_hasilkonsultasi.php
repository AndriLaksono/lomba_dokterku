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
            <h3 style="color:white !important;margin-top:40px">Hasil Konsultasi</h3>
        </p>
    </div>
</section>

<div class="container">
    <section class="section-white">
        <div class="center text-center">
            <?php foreach ($hasil as $x): ?>
                <h3 style="padding:20px">Anda memiliki penyakit <?php echo $x->penyakit;?> </h3>
            <?php endforeach; ?>
                <h4 style="padding:20px">Alternatif pengobatan yang bisa Anda lakukan :</h1>
                <ul>
                  <?php foreach ($obat as $x): ?>
                    <li><?php echo $x->cara_pengobatan;?></li>
                  <?php endforeach; ?>
                </ul>
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
