<?
    class TopGames implements Iterator{
        
        public $price;
        public $game_collection = array();
    
        private $counter;
        
        public function current(){
            return $this->game_collection[$this->counter];    
        }
        
        public function key(){
            return $this->counter;
        }
        
        public function next(){
            $this->counter++;
        }
        
        public function rewind(){
            $this->counter = 1;
        }
        
        public function valid(){
            return isset($this->game_collection[$this->counter]);
        }        
    }
    
    $my_games = new TopGames;
    $my_games->price = 100;
    $my_games->game_collection = array("WC3 TFT", "AOE2", "Collin McRea Rally 2","Soldier of Fortune","Fifa 2001","Zanzarah - the hidden portal Demo");
    $my_str = "<table border = 7  >";
    $my_str .= "<tr><td>#</td><td>Price</td><td>Name</td></tr>";
    foreach ($my_games as $pc_game => $interesting_game){
        $my_str .= "<tr><td bgcolor = #ABCCAA>$pc_game </font></td><td bgcolor = #FAFACC>".round_up($my_games->price,3)." &euro;</td><td bgcolor = #AACACE>$interesting_game</td></tr>";
        $my_games->price *= 1.35;
        
    }
    function round_up($number, $precision = 2){
        $fig = (int) str_pad('1', $precision, '0');
        return (ceil($number * $fig) / $fig);
    }
    
    $my_str .="</table>";
    echo $my_str;
?>