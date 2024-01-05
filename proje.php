<?php
	@include('baglan.php');
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
	$say_yazar_bay = mysqli_num_rows(mysqli_query($conn,"select * from musteri_2 where CINS='E'"));
	$say_yazar_bayan = mysqli_num_rows(mysqli_query($conn,"select * from musteri_2 where CINS='K'"));	
?>	


    <section class="about_section layout_padding">
    <div class="container" >
      <h2 class="main-heading " style="color:white">
        <?php echo $genel_bilgiler['site_adi'] ?> İstatistikler
      </h2>
      <div class="d-flex justify-content-center mt-5">	 
			<strong style="color:white">Toplam müşteri Sayısı : <?php echo $say_yazar_bay+$say_yazar_bayan; ?> </strong>
	  </div>
      <div class="d-flex justify-content-center mt-5" style="display:flex ; justify-content: center ; align-items: center;">	  
			<div style='width:400px;height:400px;'><canvas id="grafik1"></canvas></div>
      </div>
      
	  

         

    </div>
  </section>


<script>
new Chart(document.getElementById("grafik1"), {
    type: 'pie',
    data: {
      labels: ["Bay", "Bayan"],
      datasets: [{
        label: " Yazar Sayısı",
        backgroundColor: ["#2a9d8f", "#f4a261"],
        data: [<?php echo $say_yazar_bay; ?>,<?php echo $say_yazar_bayan; ?>]
      }]
    },
    options: {
    responsive: true,
	animation : false,
	mainAspectRatio: false,
    plugins: {
      legend: {
        position: 'top',
      }
    }
  },
});
</script>
