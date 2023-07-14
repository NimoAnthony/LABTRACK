<?php 
date_default_timezone_set('Asia/Manila');
	include 'header.php';
?>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
		<form role="search">
			<div class="form-group">
				<!-- <input type="text" class="form-control" placeholder="Search"> -->
			</div>
		</form>
		<ul class="nav menu">
			<li class="active">
				<a href="#">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Dashboard
				</a>
			</li>
			<li>
				<a href="reserve_logs">
					<svg class="glyph stroked female user">
						<use xlink:href="#stroked-female-user"/>
					</svg>
					Requesting Status
				</a>
			</li>
			
		</ul>
	</div><!--/.sidebar-->

	<div class="row-fluid">
		<div class="col-md-12 main">
			<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3">
				
				
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Requesting</h1>
					</div>
				</div><!--/.row-->
				<hr>
				<div class="container-fluid kiosk-display">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table table-bordered table_equipment">
            <thead>
              <tr>
                <th>Image</th>
                <th>Model</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Quantity Left</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Table rows will be dynamically populated -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="right-sidebar equipment-side">
  <div class="sidebar-form">
    <h4 class="alert bg-success">
      <svg class="glyph stroked plus sign">
        <use xlink:href="#stroked-plus-sign"/>
      </svg>
      Add Item
    </h4>
    <form class="frm_addequipment" enctype="multipart/form-data">
      <input type="hidden" name="key" value="add_equipment" />
      <div class="form-group">
        <label>Item ID</label>
        <input type="text" id="e_number" name="e_number" class="form-control" required>
      </div>
    </form>
  </div>
</div>

<script>
  // Generate unique 5-digit ID
  function generateDeviceID() {
    var currentID = parseInt(localStorage.getItem("currentID")) || 11110; // Retrieve the last generated ID or start from 11110
    var deviceID = currentID.toString(); // Convert the current ID to a string
    localStorage.setItem("currentID", currentID + 1); // Increment the ID for the next generation
    return deviceID;
  }

  // Assign generated ID to input field on page load
  document.addEventListener("DOMContentLoaded", function () {
    var deviceIDField = document.getElementById("e_number");
    deviceIDField.value = generateDeviceID();
  });
</script>



<?php include 'footer.php'; ?>

<script type="text/javascript">
$(document).ready(function(){
	$("#timeLimit").datetimepicker({
		minTime: '<?php echo date("H:i"); ?>',
		maxTime: '18:00',
		minDate: 0,
		format:'Y-m-d h:i A',
		step: 15
	});
});
</script>