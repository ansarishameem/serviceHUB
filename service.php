<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Management · Dashboard</title>
  <!-- Bootstrap 4 + Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/service.css">
</head>
<body>

<div class="dashboard-card">

  <!-- HEADER -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-2 border-bottom" style="border-color: var(--border-light) !important;">
    <div class="d-flex align-items-center">
      <i class="fas fa-cubes header-icon mr-3"></i>
      <h1 class="header-title mb-0">Service <span>Management</span></h1>
    </div>
    <div class="d-flex mt-2 mt-sm-0">
      <span class="badge-date mr-2"><i class="far fa-calendar-alt mr-2"></i>17 Jul 2026</span>
      <span class="badge-date"><i class="fas fa-sync-alt mr-2"></i>live</span>
    </div>
  </div>

  <!-- ★ SERVICE OPTION (the core) ★ -->
  <div class="service-option-block mb-4 d-flex flex-wrap align-items-center justify-content-between">
    <div class="d-flex align-items-center">
      <div class="icon-box mr-3"><i class="fas fa-sliders-h"></i></div>
      <h2 class="mb-0">Service Option <small>· dashboard module</small></h2>
    </div>
    <div class="mt-2 mt-sm-0">
      <span class="btn btn-outline-soft mr-1"><i class="fas fa-plus-circle"></i> New</span>
      <span class="btn btn-outline-soft mr-1"><i class="fas fa-filter"></i> Filter</span>
      <span class="btn btn-primary-soft"><i class="fas fa-chart-pie"></i> Analytics</span>
    </div>
  </div>

  <!-- STATS ROW -->
  <div class="row mb-4">
    <div class="col-md-3 col-6 mb-3 mb-md-0">
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-server"></i></div>
        <div class="stat-content">
          <div class="stat-label">Total services</div>
          <div class="stat-number">24</div>
          <div class="stat-badge">+2 this month</div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6 mb-3 mb-md-0">
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
        <div class="stat-content">
          <div class="stat-label">Active</div>
          <div class="stat-number">18</div>
          <div class="stat-badge">75%</div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6 mb-3 mb-md-0">
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-exclamation-triangle"></i></div>
        <div class="stat-content">
          <div class="stat-label">Attention</div>
          <div class="stat-number">3</div>
          <div class="stat-badge">2 warnings</div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-clock"></i></div>
        <div class="stat-content">
          <div class="stat-label">Avg. uptime</div>
          <div class="stat-number">99.8%</div>
          <div class="stat-badge">last 30d</div>
        </div>
      </div>
    </div>
  </div>

  <!-- SERVICE TABLE -->
  <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
    <h5 class="font-weight-bold mb-0" style="color: var(--primary-navy);"><i class="fas fa-list-ul mr-2" style="color: var(--primary-pink);"></i>Active services</h5>
    <span class="badge-count">8 displayed</span>
  </div>

  <div class="table-responsive border rounded-lg" style="background:white; border-color: var(--border-light) !important;">
    <table class="table table-service mb-0">
      <thead>
        <tr>
          <th style="width:35%;">Service</th>
          <th style="width:20%;">Status</th>
          <th style="width:20%;">Type</th>
          <th style="width:25%; text-align:right;">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-cloud"></i><span>API Gateway</span></div></td>
          <td><span class="status-badge"><i class="fas fa-circle" style="color: var(--status-green);"></i> operational</span></td>
          <td>Core</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-database"></i><span>User DB</span></div></td>
          <td><span class="status-badge"><i class="fas fa-circle" style="color: var(--status-green);"></i> active</span></td>
          <td>Storage</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-envelope"></i><span>Notification Hub</span></div></td>
          <td><span class="status-badge warning"><i class="fas fa-exclamation-triangle"></i> degraded</span></td>
          <td>Messaging</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-shield-alt"></i><span>Auth Service</span></div></td>
          <td><span class="status-badge"><i class="fas fa-circle" style="color: var(--status-green);"></i> operational</span></td>
          <td>Security</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-chart-line"></i><span>Analytics Engine</span></div></td>
          <td><span class="status-badge inactive"><i class="fas fa-circle" style="color: var(--status-gray);"></i> maintenance</span></td>
          <td>Data</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-file-alt"></i><span>Report Generator</span></div></td>
          <td><span class="status-badge"><i class="fas fa-circle" style="color: var(--status-green);"></i> active</span></td>
          <td>Reporting</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-cart-plus"></i><span>Billing Service</span></div></td>
          <td><span class="status-badge"><i class="fas fa-circle" style="color: var(--status-green);"></i> operational</span></td>
          <td>Finance</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
        <tr>
          <td><div class="service-name-icon"><i class="fas fa-code-branch"></i><span>Deploy Pipeline</span></div></td>
          <td><span class="status-badge warning"><i class="fas fa-clock"></i> pending</span></td>
          <td>DevOps</td>
          <td style="text-align:right;"><div class="action-icons"><i class="fas fa-eye"></i><i class="fas fa-cog"></i></div></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- FOOTER -->
  <div class="footer-meta d-flex flex-wrap justify-content-between">
    <span><i class="fas fa-arrow-right mr-2"></i>Showing services from <span class="badge-option">Service Option</span></span>
    <span><i class="far fa-clock mr-2"></i>last updated: today 14:32</span>
  </div>

</div>

<!-- Bootstrap 4 JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>