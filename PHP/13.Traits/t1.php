<?php
trait NumberSeriesOne{
     private function numberSeriesA(){
        echo"Number Series A\n";
    }
    function numberSeriesB(){
        $this->numberSeriesA();
        echo"Number Series B\n";
    }
}
trait NumberSeriesTwo{
    use NumberSeriesOne;
    function numberSeriesC(){
        echo"Number Series C\n";
    }
    function numberSeriesD(){
        $this->numberSeriesA();
        echo"Number Series D\n";
    }
}
class NumberSeries{
    use NumberSeriesOne,NumberSeriesTwo;
}
$ns=new NumberSeries();
//$ns->numberSeriesA();
$ns->numberSeriesB();
$ns->numberSeriesC();
$ns->numberSeriesD();
?>