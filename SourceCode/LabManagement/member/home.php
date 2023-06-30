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
					Reservation Status
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
				<div class="row">
					<div class="panel panel-default">
					
						<div class="panel-body">
							<form class="form-horizontal client_reservation" action="" >
								<fieldset>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Items (maximum of 5 items)</label>
										<div class="col-md-9">
											<select class="form-control input-lg borrowitem" name="reserve_item[]" multiple="multiple" required="required" style="width: 100%">
												<option></option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="email">Date </label>
										<div class="col-md-9">
											<input type="date" name="e_date_added" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
										</div>
									</div>
									
									<div class="form-group">
	<label class="col-md-3 control-label" for="message">Time</label>
	<div class="col-md-9">
		<input type="time" placeholder="" class="form-control" name="reserved_time" required="required">
		<input type="hidden" name="client_id" value="<?php echo $_SESSION['member_id']; ?>">
	</div>
</div>

<script>
	// Get the current time
	var currentTime = new Date();
  
	// Format the time
	var hours = currentTime.getHours();
	var minutes = currentTime.getMinutes();
  
	// Pad single digit hours and minutes with leading zeros
	if (hours < 10) {
		hours = '0' + hours;
	}
	if (minutes < 10) {
		minutes = '0' + minutes;
	}
  
	// Set the current time to the input field
	var timeInput = document.querySelector('input[name="reserved_time"]');
	timeInput.value = hours + ':' + minutes;
</script>

									<div class="form-group">
										<label  class="col-md-3 control-label">Select Room</label>
										<div class="col-md-9">
											<select class="form-control" name="reserve_room" required></select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Time Limit</label>
										<div class="col-md-9">
											<input name="time_limit" id="timeLimit" type="text" class="form-control" value="" />
										</div>
									</div>
									
									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-12 widget-right">
											<button type="submit" class="btn btn-primary btn-md pull-right">Make Reservation</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</div>



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