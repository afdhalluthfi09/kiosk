<?php
$conn =mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>

<h1 style="text-align:center;"> Data Voting Hari INI</h1>

<div style="width: 600px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
<div class="backling g-back">
    <a href="<?= BASEURL; ?>/Home"><img src="<?= BASEURL; ?>/img/back.png" alt=""></a>
</div>



<script>
 var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['puas','tidak puas'],
        datasets: [{
            label: '',
            data: [
                <?php 
					$jumlah_laki = mysqli_query($conn,"SELECT * FROM ikm where voting='puas'");
					echo mysqli_num_rows($jumlah_laki);
				?>,
                <?php 
					$jumlah_laki = mysqli_query($conn,"SELECT * FROM ikm where voting='tidak_puas'");
					echo mysqli_num_rows($jumlah_laki);
				?>,  
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>