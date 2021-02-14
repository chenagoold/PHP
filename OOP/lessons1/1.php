<?php 

class Page{  // создание класс 

	//kod klass
	//свойство класс
	public $header = 'HEADER'; // свойства класс
	public $content;
	public $footer;

	function __construct($shapka, $text){ //конструктар создается перед началом созданием объекта 
		$this->header = $shapka;
		$this->content = $text;
		
	}

        //method klass
	public function view_header($var1, $var2){
		echo "<br>".$this->header.$var1.$var2."<br>"; //$this - обращение к свойству



	
	}

	public function foo(){
		$var1 = 1;
		$var2 = 2;
	        $this->view_header($var1, $var2);
	
	}
}

$index = new Page('INDEX','Content'); // создание объекта
//$index->header = 'index'; // обращение к свойству класс  
//$index->content = 'Text for content';
$index->foo();

echo $index->header; //вывод свойства 
echo '<br>'.$index->content;

$admin = new Page('Admin', 'admin-text');
//$admin->header = 'Admin';
echo "<br>".$admin->header;

$view = new Page('view', 'views');
//$view->header .= 'View';
echo "<br>".$view->header;



?>
