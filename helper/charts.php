
<?php
require_once './config.php';
class charts
	{
		
		public function makeChart($type,$chartId,$width,$height,$divId,$typeOfData,$actualData)
			{
	 			 $columnChart = new FusionCharts("Column2D", "myFirstChart" , 600, 300, "chart-1", "json",
            $actualData
    );
		
		
			$columnChart->render();

			}
	/*public function renderChart($chart)
		{
			$chart->render();
		}*/
	}
?>
