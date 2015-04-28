<?php 

abstract class Academy{
	protected $academy_name;
	protected $academy_years;
}

interface iAcademy{
	public function teach();
}

class WebDesign extends Academy implements iAcademy{
	private $html;
	private $social_media_marketing;

	public function teach(){
		echo "We teach Web Design";
	}
}

class GraphicDesign extends Academy implements iAcademy{
	private $arts;
	private $typography;

	public function teach(){
		echo "We teach Graphic Design";
	}
}

$wd = new WebDesign;
$wd->teach();

echo "<br/>";

$gd = new GraphicDesign;
$gd->teach();

?>