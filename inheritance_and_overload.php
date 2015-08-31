<?
class Person{
        public $name;
        public $age;
        public $city;
    
    public function get_information(){
        return "<i>".$this->name."</i> is from ".$this->city.".";  
    }
}

class Athlete extends Person{
    public $sports = array();
    
    public function get_information(){
        $str_information = "<i>".$this->name."</i> is an athlete from ".$this->city.". ";
        $str_information .= "The athlete is ".$this->age." years old. ";
        $str_information .= "The athlete is good in the following sports: <br/>";
        $str_information .= "<table bgcolor=#00FF00 border = 2>";
        foreach($this->sport as $one_sport){
            $str_information .= "<tr><td>$one_sport</td></tr>"; 
        }
        $str_information .= "</table>";
        return $str_information;
    }
    
}

$person = new Person;
$person->name = "Vitosh";
$person->city = "Sofia";
$person->age = 29; //still!:)
echo $person->get_information();
echo "<hr>";

$athlete = new Athlete;
$athlete->name = "Vityata";
$athlete->city = "Druzhba city";
$athlete->age = 28; 
$athlete->sport = array("WC3","WC3 - TFT", "Civilization III","Quake 3","AOE","Collin McRea Rally 2");
echo $athlete->get_information();
?>

