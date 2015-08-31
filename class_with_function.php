<?
class Investment{
    public $interest;
    public $amount;
    public $result;
    
    function calculate($interest,$amount){
        $this->result = $this->amount * $this->interest+ $this->amount;
    }
    
}

$investment = new Investment;
$investment->interest = 0.1;
$investment->amount = 250;
$investment->calculate($investment->interest, $investment->amount);

echo "Finally I calculated that from <br>".$investment->amount." 
      if we have ".$investment->interest." we will get ".$investment->result.". <hr>";
?>