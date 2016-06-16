<meta charset="utf-8">
<?php
class PostOffice{
	public function newPostOffice(){
         $this->mailFiler();
         $this->mailRegex();
         $this->spiltroad();
    }
	public function mailFiler(){
		$myfile = fopen("string.txt", "r");
		echo fread($myfile,filesize("string.txt"));
		fclose($myfile);
	}
	public function mailRegex(){
		$myfile = fopen("string.txt", "r");
		$data=fread($myfile,filesize("string.txt"));
		echo $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $data);
		fclose($myfile);
	}
	public function spiltroad(){
	$file = file("road.txt");
	foreach($file as &$line){
		$array=str_split($line,3);
		print_r($array);
		echo '<br/>';
	} 
	}
}

$PostOfficeObject = new PostOffice();
$PostOfficeObject->mailFiler();
echo '<br/>';
$PostOfficeObject->mailRegex();
echo '<br/>';
$PostOfficeObject->spiltroad();

?>
