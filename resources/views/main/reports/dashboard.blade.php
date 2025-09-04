<div class="container mt-4">
<h3 class="mb-4">Market Segmentation (2019-2029)</h3>
<div class="container mt-4 d-flex justify-content-between align-items-center">

    @foreach($data as $index => $dataset)
    <div class="card mb-4 p-3 shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">{{ $dataset['title'] }}</h5>
            <button class="btn btn-primary toggle-btn w-auto" data-index="{{ $index }}">
                Switch to Table
            </button>
        </div>

        <!-- Graph Section -->
        <div id="graphSection-{{ $index }}">
            <canvas id="chart-{{ $index }}" height="150"></canvas>
        </div>

        <!-- Table Section (Hidden Initially) -->
        <div id="tableSection-{{ $index }}" class="d-none">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Revenue (USD Billion)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataset['data'] as $row)
                    <tr>
                        <td>{{ $row['year'] }}</td>
                        <td>{{ $row['value'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const datasets = @json($data);

    datasets.forEach((dataset, index) => {
        const labels = dataset.data.map(item => item.year);
        const values = dataset.data.map(item => item.value);

        // Chart Initialization
        new Chart(document.getElementById(`chart-${index}`), {
            type: dataset.type,
            data: {
                labels: labels,
                datasets: [{
                    label: "Revenue (USD Billion)",
                    data: values,
                    backgroundColor: dataset.type === 'pie'
                        ? ['#4285f4', '#34a853', '#fbbc05', '#ea4335', '#9c27b0', '#00acc1', '#ff5722']
                        : '#4285f4',
                    borderColor: '#1a73e8',
                    fill: true
                }]
            }
        });

        // Toggle Graph/Table
        document.querySelector(`[data-index="${index}"]`).addEventListener("click", function() {
            let graph = document.getElementById(`graphSection-${index}`);
            let table = document.getElementById(`tableSection-${index}`);
            if (graph.classList.contains("d-none")) {
                graph.classList.remove("d-none");
                table.classList.add("d-none");
                this.innerText = "Switch to Table";
            } else {
                graph.classList.add("d-none");
                table.classList.remove("d-none");
                this.innerText = "Switch to Graph";
            }
        });
    });
</script>