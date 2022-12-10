

		<br /><br /><br /><br /><br /><br />
		<div class="container">
			<h1 class="heading pb-3">Perkembangan Covid-19</h1>
			<canvas id="chartDataCovid" class="pb-5"></canvas>
		</div>
		<script>
			const labels = [
				<?php echo $labels; ?>
			];
			const dataPositif = {
				label: "Data Positif Covid-19",
				borderColor: "red",
				data: [<?php echo $jumlahPositif ?>],
			}
			const dataSembuh = {
				label: "Data Sembuh Covid-19",
				borderColor: "green",
				data: [<?php echo $jumlahSembuh ?>],
			}
			const data = {
				labels: labels,
				datasets: [dataPositif, dataSembuh],
			};

			const config = {
				type: "line",
				data: data,
				options: {},
			};

			// === include 'setup' then 'config' above ===

			var myChart = new Chart(
				document.getElementById("chartDataCovid"),
				config
			);
		</script>

		