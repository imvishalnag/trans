	<!-- Default JS (DO NOT TOUCH) -->
	<script src="lib/js/jquery.min.js"></script>
	<script src="lib/js/jquery-ui.min.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
	<script src="lib/js/opacity.widgets.min.js"></script>
	<script src="lib/js/hogan.min.js"></script>
	<script src="lib/js/typeahead.min.js"></script>
	<script src="lib/js/typeahead-example.js"></script>
 
	<!-- Adjustable JS -->
	<script src="lib/js/perfect-scrollbar.min.js"></script>
	<script src="lib/js/opacity.switches.js"></script>
	<script src="lib/js/flot/jquery.flot.min.js"></script>
	<script src="lib/js/flot/jquery.flot.pie.min.js"></script>
	<script src="lib/js/flot/jquery.flot.selection.min.js"></script>
	<script>

		$(document).ready(function() {
			$('.switch4').change(function () {
				if($(this).val() == 0){
					$('.contain').addClass('round');
				}else{
					$('.contain').removeClass('round');
				}
			});

			$('.switch5').change(function () {
				var temp = $(".left").html();
				if($(this).val() == 0){
					$(".left").remove();
					$('.right').after('<div class="left hidden-xs">'+temp+'</div>');
				}else{
					$(".left").remove();
					$('.right').before('<div class="left hidden-xs">'+temp+'</div>');
				}
			});
		});

		function setBG(which){
			$('body').css('background-image', 'url(lib/img/bg'+which+'.jpg)');
		}

		$(document).ready(function() {
			$('a[href="index.html"]').addClass('active').parent().parent().addClass('in');
			flotSelectionChart(); 
			flotPieChart();
			$("#tabs").tabs();
			$('.wdgt-tab, .wdgt-messages').perfectScrollbar({suppressScrollX:true});
			$('.wdgt-messages').scrollTop(400);
		});

		$( window ).resize(function() {
			flotSelectionChart();
			flotPieChart();
		});

		function flotSelectionChart(){
			var data = [{
				label: "Website Hits", lines: { show: true, fill: true, fillColor: 'rgba(145, 199, 150, 0.45)' }, points: {show: true},
				data: [[-0.5, 834], [0.5, 923], [2.5, 1245], [4.5, 1090], [6.5, 999], [8.5, 1056], [10.5, 1097], [12.5, 1354], [13.5, 999]]
			}, {
				label: "Unique Visitors", lines: { show: true, fill: true }, points: {show: true}, yaxis: 2,
				data: [[-0.5, 7865], [0.5, 8976], [2.5, 19134], [4.5, 8452], [6.5, 8321], [8.5, 7987], [10.5, 8098], [12.5, 16237], [13.5, 7999]]
			}, {
				label: "Bots", lines: { show: true, fill: false }, points: {show: true}, yaxis: 3,
				data: [[-0.5, 2144], [0.5, 3456], [2.5, 6777], [4.5, 2333], [6.5, 2111], [8.5, 1889], [10.5, 1999], [12.5, 5555], [13.5, 2000]]
			}];

			var options = { series: {},
				colors: [ '#8BC198', '#7897C8', '#DAC582'],
				legend: { noColumns: 1, backgroundOpacity:0.5, backgroundColor:'#FFF' },
				xaxis: { 
					min:0, 
					max:13,
					ticks: [
						[ 0.5, "Sunday" ],
						[ 2.5, "Monday" ], 
						[ 4.5, "Tuesday" ],
						[ 6.5, "Wednesday" ], 
						[ 8.5, "Thursday" ],
						[ 10.5, "Today" ],
						[ 12.5, "Saturday" ]
					]
				},
				yaxes: [
					{ min:0, max:2000 }, 
					{ show: false, min:0, max:40000 }, 
					{ show: false, min:0, max:20000 }
				],
				selection: { mode: "x" }
			};

			var placeholder = $("#placeholder");

			var plot = $.plot(placeholder, data, options);

			plot.setSelection({
				xaxis: {
					from: 9.5,
					to: 11.5
				}
			});

		}

		function labelFormatter(label, series) {
			return "<div style='font-size:8pt; text-align:center; padding:2px; color:rgba(255,255,255,0.8);'>" + Math.round(series.percent) + "% - " + label + " </div>";
		}

		function flotPieChart(){

			var data = [];

			for (var i = 0; i < 4; i++) {
				if(i == 0){
					data[i] = { label: "Firefox", data: 28 }
				}
				if(i == 1){ 
					data[i] = { label: "Chrome", data: 46 }
				}
				if(i == 2){
					data[i] = { label: "Safari", data: 18 }
				}
				if(i == 3){
					data[i] = { label: "IE", data: 8 }
				}
			}

			$.plot('#pieholder', data, {
				colors: [ '#8BC198', '#7897C8', '#DAC582', '#7CACCE'],
				series: {
					pie: { 
						show: true,
						radius: 1,
						label: {
							show: true,
							radius: 3/4,
							formatter: labelFormatter,
							background: {  opacity: 0.5, color: '#000' }
						}
					}
				},
				legend: { show: false }
			});
		}
	  
	</script>

	