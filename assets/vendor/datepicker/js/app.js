$(document).ready(function(){
	$.ajax({
		url: "php/chart.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var productid = [];
			var description = [];
			var size_unit = [];
			var soldtimes = [];

			for(var i in data) {
				productid.push(data[i].productid);
				soldtimes.push(data[i].soldtimes);
			}

			var chartdataLine = {
				labels: productid,
				datasets : [
					{
						label: 'Top 10 Most Popuplar Items',
						borderColor: 'rgba(255, 77, 77, 1)',
						hoverBackgroundColor: 'rgba(255, 102, 102, 0.75)',
						hoverBorderColor: 'rgba(255, 102, 102, 0.75)',
						data: soldtimes
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdataLine
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});