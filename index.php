

<?php 
	require_once 'includes/header.php';
?>



<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $city = $_POST['city'];
        $url = 'http://api.waqi.info/feed/' . $city . '/?token=e6089546a3dc14e1fe3d717777e9c7df3e7e5f99';
		$json = file_get_contents($url, true);
		$result = json_decode($json, true);
		$array_1 = $result['data'];
		
		if(!isset($array_1['aqi'])){
			echo "<div class=\"alert alert-warning\" id=\"error\" role=\"alert\">";
			echo "متاسفانه داده ای برای شهر \"". $_POST['city'] . "\" یافت نشد!";
			echo "</div>";
		}
		else{
			if ($result['data']['aqi'] < 51){
			$status = 'Good';
			$status_color = 'good';
			$description = 'كیفیت هوا رضایت بخش است و آلودگی هوا خطری كم یا خطر ندارد.';
			}
			elseif ($result['data']['aqi'] < 101){
				$status = 'Moderate';
				$status_color = 'moderate';
				$description = 'کیفیت هوا قابل قبول است. با این حال ، ممکن است برای برخی از افراد به ویژه افرادی که به طور غیرمعمول نسبت به آلودگی هوا حساس هستند ، خطر ایجاد کند.';
			} 
			elseif($result['data']['aqi'] < 151){
				$status = 'Unhealthy for Sensitive Groups';
				$status_color = 'usg';
				$description = 'ممکن است بر سلامتی اعضای گروههای حساس اثر بگذارد. عموم مردم کمتر تحت تأثیر قرار می گیرند.';
			}
			elseif($result['data']['aqi'] < 201){
				$status = 'Unhealthy';
				$status_color = 'unhealthy';
				$description = 'برخی از افراد عادی ممکن است اثرات آلودگی هوا را بر سلامتی خود تجربه کنند. اعضای گروههای حساس ممکن است اثرات جدی تری را تجربه کنند.';
			}
			elseif($result['data']['aqi'] < 301){
				$status = 'Very Unhealthy';
				$status_color = 'veryunhealty';
				$description = 'هشدار سلامتی: خطر تأثیرات آلودگی هوا بر سلامتی، برای همه افزایش یافته است.';
			}		
			else{
				$status = 'Hazardous';
				$status_color = 'hazardous';
				$description = 'هشدار بهداشتی در مورد شرایط اضطراری: همه به احتمال زیاد تحت تأثیر قرار می گیرند.';
			}
			?>

			<div class="jumbotron">
				<div class="float-right desc status_title pl-3">شهر </div><div class="float-right desc city_title"><?php echo $city; ?></div>
			  	<div id="<?php echo $status_color; ?>" style="text-align: center;">
					<h2><?php echo $status; ?></h2>AQI : <?php echo $result['data']['aqi'];?>
				</div>
				<p class="lead" id="location"><br>Location : <?php echo $result['data']['city']['name'];?></p>
			 	<hr class="my-4">
				 <p class="desc status_title">وضعیت آلودگی هوا</p>
			  	<p class="desc"><?php echo $description;?></p>
			  	
			</div>
		<?php

		}
		
    }
    else{

    	$city = 'shiraz';
		$url = 'http://api.waqi.info/feed/' . $city . '/?token=e6089546a3dc14e1fe3d717777e9c7df3e7e5f99';
		$json = file_get_contents($url);
		$result = json_decode($json, true);

		if ($result['data']['aqi'] < 51){
			$status = 'Good';
			$status_color = 'good';
			$description = 'كیفیت هوا رضایت بخش است و آلودگی هوا بدون خطر یا کم خطر می باشد.';
		}
		elseif ($result['data']['aqi'] < 101){
			$status = 'Moderate';
			$status_color = 'moderate';
			$description = 'کیفیت هوا قابل قبول است. با این حال ، ممکن است برای برخی از افراد به ویژه افرادی که به طور غیرمعمول نسبت به آلودگی هوا حساس هستند ، خطر ایجاد کند.';
		} 
		elseif($result['data']['aqi'] < 151){
			$status = 'Unhealthy for Sensitive Groups';
			$status_color = 'usg';
			$description = 'ممکن است بر سلامتی اعضای گروههای حساس اثر بگذارد. عموم مردم کمتر تحت تأثیر قرار می گیرند.';
		}
		elseif($result['data']['aqi'] < 201){
			$status = 'Unhealthy';
			$status_color = 'unhealthy';
			$description = 'برخی از افراد عادی ممکن است اثرات آلودگی هوا را بر سلامتی خود تجربه کنند. اعضای گروههای حساس ممکن است اثرات جدی تری را تجربه کنند.';
		}
		elseif($result['data']['aqi'] < 301){
			$status = 'Very Unhealthy';
			$status_color = 'veryunhealty';
			$description = 'هشدار سلامتی: خطر تأثیرات آلودگی هوا بر سلامتی، برای همه افزایش یافته است.';
		}		
		else{
			$status = 'Hazardous';
			$status_color = 'hazardous';
			$description = 'هشدار بهداشتی در مورد شرایط اضطراری: همه به احتمال زیاد تحت تأثیر قرار می گیرند.';
		}

?>


<div class="jumbotron">
	<div class="float-right desc status_title pl-3">شهر </div><div class="float-right desc city_title">شیراز</div>
  	<div id="<?php echo $status_color; ?>" style="text-align: center;">
		<h2><?php echo $status; ?></h2>AQI : <?php echo $result['data']['aqi'];?>
	</div>
	<p class="lead" id="location"><br>Location : <?php echo $result['data']['city']['name'];?></p>
	<div id="timestamp" class="float-right"></div><br>
 	<hr class="my-4"> 
	<p class="desc status_title">وضعیت آلودگی هوا</p>
  	<p class="desc"><?php echo $description;?></p>
	 	
</div>


<?php

	}


?>




<?php 

	require_once 'includes/footer.php';

?>


