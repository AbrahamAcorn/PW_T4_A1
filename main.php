<html>
    <body>
        <h1>======== Vectores (Arrays) ====== </h1>
        <?php
          
          $vector = array(
            "Juan perez Roberts" => array(100, 100, 100, 100, 90, 50),
            "Kim Un Pollo" => array(90, 93, 100, 99, 36,40),
            "Adrian Yoongi Juarez" => array(100, 99, 95, 98, 90, 90),
            "Laura Jimenez Teul" => array(99, 90, 100, 92, 78, 88),
            "Patricia Lee Jones" => array(93, 96, 90, 100, 88, 78),
            "Ana Pops Hank" => array(90, 100, 92, 97, 65, 89),
            "Borat Sagdiyev" => array(98, 94, 90, 100, 67, 70),
            "Sacha Baron Cohen" => array(98, 94, 90, 100, 67, 70),
            "Craig Suns" => array(98, 94, 90, 100, 67, 70),
            "Mike Suarez Felix" => array(98, 94, 90, 100, 67, 70));

            function printArray($arrayStudents) {
                foreach($arrayStudents as $nombre => $value) {
                    echo 'Student: '.$nombre.' promedio:'.array_sum($value)/6;
                    echo'<br>';
                    foreach($value as $key => $s_value) {
                        echo 'Materia xd '.($key+1).' ='.$s_value.'<br />';
                    }
                    echo '<br />';
                }
            }

            function promedioGeneral($arrayStudents) {
                $sum=0;
                foreach($arrayStudents as $nombre => $value) {
                    $sum=$sum+array_sum($value);
                }
                echo '<br />'. $sum/60;
            }

            function promedioAlumno($arrayStudents) {
                foreach($arrayStudents as $nombre => $value) {
                    echo 'Etufiante: '.$nombre.' promedio:'.array_sum($value)/6;
                    echo'<br>';
                }
            }

            function mayorPromedio($arrayStudents) {
                foreach($arrayStudents as $nombre => $value) {
                    if((array_sum($value)/6)>87.85){
                        echo 'Estudiante: '.$nombre.' promedio:'.array_sum($value)/6;
                        echo'<br>';
                    }
                    echo'<br>';
                }
            }
            
            echo"<br>------Listado------<br>";
            printArray($vector);

            echo"<br>------promedio general------<br>";
            promedioGeneral($vector);

            echo"<br>------promedio por alumno------<br>";
            promedioAlumno($vector);

            echo"<br>------alumnos mayores al promedio general------<br>";
            mayorPromedio($vector);

        ?>

    </body>
</html> 