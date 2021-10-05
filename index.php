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
print_r($arr);
?>
<script>

</script>
<button type=""></button>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>


<table border="1">
      <thead>
          <tr>
              <th>nota</th>
              <th>fecha</th>
              <th></th>
              <th >acciones</th>

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
           echo("</td>");
           echo('</tr>');
        }
        ?>
      </tbody>
  </table>
  
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>



</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>