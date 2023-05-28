<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/js/pages/pengiriman_surat.js"></script>
<script src="assets/static/js/components/dark.js"></script>
<script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/compiled/js/app.js"></script>
<script src="assets/extensions/jquery/jquery.min.js"></script>
<script src="assets/extensions/parsleyjs/parsley.min.js"></script>
<script src="assets/static/js/pages/parsley.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    function datachart(item) {
        let data = JSON.parse(item)
        for (let i = 0; i < data.length; i++) {
            series.push(data[i])
        }
        chart.render();
    }
    var series = [];

    function getSeries() {
        return series;
    }

    var options = {
        chart: {
            type: 'pie',
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center'
        },
        series: getSeries(),
        labels: ['Garansi', 'Tidak Garansi'],
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);
</script>
