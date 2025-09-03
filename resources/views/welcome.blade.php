<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Market Analysis Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #ecf0f1;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-text);
            background-color: #f5f7f9;
        }
        
        .dashboard-wrapper {
            display: flex;
            min-height: 100vh;
        }
        
        .sidebar {
            width: 280px;
            background: var(--primary-color);
            color: var(--light-text);
            padding: 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        .main-content {
            flex: 1;
            margin-left: 280px;
            padding: 30px;
        }
        
        .logo-area {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }
        
        .nav-item {
            margin: 5px 0;
            width: 100%;
        }
        
        .nav-link {
            color: #b8c7ce;
            padding: 12px 20px;
            border-left: 4px solid transparent;
            transition: all 0.3s;
        }
        
        .nav-link:hover, .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left: 4px solid var(--secondary-color);
        }
        
        .nav-link i {
            margin-right: 10px;
            width: 24px;
            text-align: center;
        }
        
        .content-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 25px;
            margin-bottom: 25px;
        }
        
        .section-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .stats-box {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(145deg, #f0f0f0, #e0e0e0);
            box-shadow: 5px 5px 15px #d9d9d9, -5px -5px 15px #ffffff;
            transition: transform 0.3s;
        }
        
        .stats-box:hover {
            transform: translateY(-5px);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-color);
        }
        
        .stats-label {
            font-size: 1rem;
            color: var(--dark-text);
            margin-top: 10px;
        }
        
        .header-row {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        
        .chart-container {
            height: 300px;
            margin: 20px 0;
        }
        
        .keyword {
            display: inline-block;
            background: var(--light-bg);
            padding: 5px 12px;
            border-radius: 20px;
            margin: 5px;
            font-size: 0.9rem;
            color: var(--secondary-color);
            border: 1px solid #ddd;
        }
        
        @media (max-width: 992px) {
            .sidebar {
                width: 220px;
            }
            .main-content {
                margin-left: 220px;
            }
        }
        
        @media (max-width: 768px) {
            .dashboard-wrapper {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo-area">
                <h3><i class="fas fa-chart-line"></i> MarketSynapse</h3>
                <p class="text-muted">Feed Industry Analytics</p>
            </div>
            <nav class="nav flex-column mt-4">
                <a class="nav-link active" href="#"><i class="fas fa-home"></i> Dashboard</a>
                <a class="nav-link" href="#"><i class="fas fa-globe"></i> Global Overview</a>
                <a class="nav-link" href="#"><i class="fas fa-egg"></i> Poultry Market</a>
                <a class="nav-link" href="#"><i class="fas fa-cow"></i> Beef Market</a>
                <a class="nav-link" href="#"><i class="fas fa-piggy-bank"></i> Pork Market</a>
                <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Research Methodology</a>
                <a class="nav-link" href="#"><i class="fas fa-flask"></i> Primary Research</a>
                <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Why Choose Us</a>
                <a class="nav-link" href="#"><i class="fas fa-download"></i> Reports</a>
                <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header-row">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>Feed Additive Industry Dashboard</h1>
                        <p class="mb-0">Comprehensive market analysis at your fingertips</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <button class="btn btn-light"><i class="fas fa-download me-2"></i>Download Report</button>
                    </div>
                </div>
            </div>

            <!-- Stats Overview -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="stats-box">
                        <div class="stats-number">$280B</div>
                        <div class="stats-label">Global Feed Market</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-box">
                        <div class="stats-number">+5.2%</div>
                        <div class="stats-label">Annual Growth Rate</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-box">
                        <div class="stats-number">64%</div>
                        <div class="stats-label">Poultry Segment</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-box">
                        <div class="stats-number">128</div>
                        <div class="stats-label">Countries Covered</div>
                    </div>
                </div>
            </div>

            <!-- Introduction Section -->
            <div class="content-card">
                <h2 class="section-title">Introduction</h2>
                <p>The global feed market is experiencing a growth spurt, driven by a rising demand for animal protein across the globe. Soaring poultry consumption, particularly in emerging economies, a rising appetite for beef coupled with expanding farm operations, and the enduring popularity of pork in Asia-Pacific are contributing to this growth. Understanding these diverse drivers is crucial for navigating this dynamic market.</p>
                <p>Enter Synapse from Mordor Intelligence: your key to unlocking the feed additive industry. Access everything you need in a single, intuitive dashboard – reports, market estimates, and data charts, all available at a granular country level.</p>
                
                <div class="mt-4">
                    <span class="keyword">Animal Protein</span>
                    <span class="keyword">Poultry Consumption</span>
                    <span class="keyword">Emerging Economies</span>
                    <span class="keyword">Feed Additives</span>
                    <span class="keyword">Asia-Pacific</span>
                </div>
            </div>

            <!-- Market Segmentation -->
            <div class="content-card">
                <h2 class="section-title">Market Segmentation</h2>
                <div class="chart-container">
                    <!-- Placeholder for chart -->
                    <div style="background: linear-gradient(45deg, #f8f9fa, #e9ecef); height: 100%; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: #6c757d;">
                        <i class="fas fa-chart-pie fa-3x me-3"></i>
                        <span>Market Segmentation Chart</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h4><i class="fas fa-egg text-warning me-2"></i>Poultry Feed</h4>
                        <p>Poultry feed represents the largest segment, accounting for over 45% of the global feed market. Growth is particularly strong in Asia and Latin America.</p>
                    </div>
                    <div class="col-md-6">
                        <h4><i class="fas fa-cow text-primary me-2"></i>Ruminant Feed</h4>
                        <p>Ruminant feed is experiencing steady growth, driven by increasing beef and dairy consumption in developing economies.</p>
                    </div>
                </div>
            </div>

            <!-- Regional Analysis -->
            <div class="content-card">
                <h2 class="section-title">Regional Analysis</h2>
                <div class="chart-container">
                    <!-- Placeholder for chart -->
                    <div style="background: linear-gradient(45deg, #f8f9fa, #e9ecef); height: 100%; border-radius: 8px; display: flex; justify-content: center; align-items: center; color: #6c757d;">
                        <i class="fas fa-map-marked-alt fa-3x me-3"></i>
                        <span>Regional Analysis Map</span>
                    </div>
                </div>
                <p class="mt-3">Asia-Pacific dominates the feed market, accounting for over 40% of global consumption. North America and Europe represent mature markets with steady growth, while Latin America and Africa show the highest growth potential.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>