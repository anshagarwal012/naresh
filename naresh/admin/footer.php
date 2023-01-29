</div>
<div id="x-teleport-target"></div>
<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());

    function tableToCSV() {
        csv_data = [];
        var hea = document.querySelectorAll('table th.gridjs-th');
        var data = document.querySelector('.data').value;
        data = JSON.parse(data.replaceAll("'", '"'))
        data.reverse();
        var row = []
        for (let i = 0; i < hea.length; i++) {
            row.push(hea[i].textContent.trim());
        }

        data.unshift(row);
        for (let j = 0; j < data.length; j++) {
            csv_data.push(data[j].join(','));
        }
        downloadCSVFile(csv_data.join('\n'));
    }

    function downloadCSVFile(csv_data) {
        CSVFile = new Blob([csv_data], {
            type: "text/csv"
        });
        var temp_link = document.createElement('a');
        temp_link.download = "donwload.csv";
        var url = window.URL.createObjectURL(CSVFile);
        temp_link.href = url;
        temp_link.style.display = "none";
        document.body.appendChild(temp_link);
        temp_link.click();
        document.body.removeChild(temp_link);
    }
</script>
</body>

</html>
<?php
mysqli_close($conn);
