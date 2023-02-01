<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //scrivere ina funzione array2ul che dato un array come argomento restituisce una stringa che return una stringa che rappresenta un elenco html

    /** return una stringa che rappresenta un elenco html (ul)*/
   /* String array2ul(Array $array) {
    }
    echo array2ul(array("rosso","verde"));*/
  
      $lezioni = array("Javascript","Java","HTML","PHP","SQL");
        
        /* function array2ul($lezioni = array("Javascript", "Java", "HTML","PHP","SQL")) {
            $stampa=0;
              if ($i=0; $i < count($lezioni); $i++) { 
                 return $lezioni[$i];
             }*/

        echo "<ul>";
            function array2ul($lezioni) {
                foreach($lezioni as $stampa) {
                    echo "<li>$stampa<li>"; 
            }
        }

        echo array2ul($lezioni)."</ul>";
    ?>
    
</body>
</html>