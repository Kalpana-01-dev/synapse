<div class="container">
<div id="excelData"></div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // ✅ Path to your uploaded Excel file
    let fileUrl = "{{ asset('/assets/upload/report/TH25-116Axlsx(1).xlsx') }}";

    fetch(fileUrl)
        .then(response => response.arrayBuffer())
        .then(data => {
            let workbook = XLSX.read(data, { type: "array" });

            // Get first sheet
            let sheetName = workbook.SheetNames[0];
            let worksheet = workbook.Sheets[sheetName];

            // Convert to JSON (array of arrays)
            let jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1 });

            // Build HTML table
            let table = "<table border='1' class='table table-bordered table-striped'>";
            jsonData.forEach((row, i) => {
                table += "<tr>";
                row.forEach(cell => {
                    table += i === 0 
                        ? `<th>${cell ?? ""}</th>` 
                        : `<td>${cell ?? ""}</td>`;
                });
                table += "</tr>";
            });
            table += "</table>";

            document.getElementById("excelData").innerHTML = table;
        })
        .catch(error => console.error("Error loading Excel file:", error));
});
</script>
