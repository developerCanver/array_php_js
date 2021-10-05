<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>
    <?php
$arr=array(
    '1'=>'a',
    '2'=>'b',
    '3'=>'c',
    '4'=>'d',
    '5'=>'e',
);

$data=array(
    '2010-10-20'=>'nota 1',
    '2011-11-21'=>'nota b',
    '2010-10-22'=>'nota c',
    '2010-10-23'=>'nota d',
    '2010-10-24'=>'nota e',
);
//print_r($arr);
?>


    <form action="#">
        <table border="1">
            <thead>
                <tr>
                    <th>nota</th>
                    <th>fecha</th>
                    <th></th>
                    <th>acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php 
        foreach ($arr as $id => $abc) {
           echo('<tr>');
           echo("<td>$id </td>");
           echo("<td>$abc </td>");
           echo("<td>");
           $conta=0;
           foreach ($data as $fecha => $nota) {
               
            $datos[$id]=$fecha;
          
           }
     
                echo('<pre>');
            print_r($datos);
          // $dats="'.'json_encode($datos)'.'";
           echo("</td>");

       
            //$result = "'" . implode ( "', '", $temp ) . "'";
            //$result = "'" . implode ( "', '", $dats ) . "'";

            //echo $result;
           ?>
                <td>

                    <button onclick="funcion('<?php echo $id ?>')" id="myBtn<?php echo $id ?>">Open Modal</button>

                </td>
                <div style="opacity: 1; display:none;/* position: absolute;*/" id="myModal<?php echo $id ?>"  class="modal">

                    <!-- Modal content -->
                    
                    <div class="modal-content">
                        <span  onclick="cerrar('<?php echo $id ?>')" class="close">&times;</span>
                       
                        <?php
                        foreach ($datos as $key => $value) {
                           echo($key);
                        }?>
                    </div>
                </div>
                <?php
           echo('</tr>');
        }
        ?>
            </tbody>
        </table>
    </form>

    <script>
      

        function funcion(id) {
            console.log(id)
            // Get the modal
            
            mymodal='myModal'+id;
            let modal = document.getElementById(mymodal);
            document.getElementById(mymodal).style.opacity = "1";
             //let myBtn2=

            // // Get the button that opens the modal
            // let btn = document.getElementById("myBtn2");
            // console.log(btn.value)

            // // Get the <span> element that closes the modal
             let span = document.getElementsByClassName("close")[0];

            // // When the user clicks the button, open the modal 
            // btn.onclick = function () {
                 modal.style.display = "block";
            // }

            // When the user clicks on <span> (x), close the modal
      
        }
        function cerrar(id) {
            console.log(id)
            // Get the modal
            
            mymodal='myModal'+id;
            let modal = document.getElementById(mymodal);
            document.getElementById(mymodal).style.opacity = "0";
            document.getElementById(mymodal).style.display = "none";
        
          
        }

        
    </script>
</body>

</html>