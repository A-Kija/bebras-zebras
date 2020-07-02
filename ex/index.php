<?php


function dalyba(int $a1, $a2)
{

    // if ($a1 == 5) {
    //     throw new Exception('Viskas Blogai su antru argumentu');
    // }
    
    if ($a2 == 0) {
        throw new InvalidArgumentException('Viskas Blogai su antru argumentu');
    }

    echo $a1 / $a2;

}




try {

dalyba(5.9, 4);



}

catch(LogicException $e) {

    _dc($e);
}
catch(Error $e) {
    echo "pagavome 2";
}
finally{
    echo "URA!";
}