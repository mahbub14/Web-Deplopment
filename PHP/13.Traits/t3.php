<?php
trait NumberSeriesOne{
    function numberSeriesA(){
        echo"Number Series A\n";
        parent::numberSeriesA();
    }
    function numberSeriesB(){
        
        echo"Number Series B\n";
    }
}
trait NumberSeriesTwo{
    function numberSeriesC(){
        echo"Number Series C\n";
        parent::numberSeriesA();
    }
    function numberSeriesD(){
        
        echo"Number Series D\n";
    }
}
class SomeClass{
    function numberSeriesA(){
        echo"Printing+Printing Number Series A\n";
      }
}
class NumberSeries extends SomeClass{
  use NumberSeriesOne,NumberSeriesTwo{
    NumberSeriesOne::numberSeriesA as numberSeriesAA;
  }
  function numberSeriesA(){
    echo"Printing+Printing Number Series A\n";
  }
  
}
$ns=new NumberSeries();
$ns->numberSeriesA();
?>