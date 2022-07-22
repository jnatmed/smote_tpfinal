<html>
 <head>
  <title>Prueba de PHP</title>
  <style>
    .rifa{
        height:3cm;
        width:3cm;
        border-color: black solid;
    }
  </style>
 </head>
 <body>
    <?php for ($num_rifa=1; $num_rifa < 190; $num_rifa++): ?>
    <div class="rifa">
        Rifa N° <?= $num_rifa ?> <br />  
        Asoc. Coop. E.N°9 D.E. 1
    </div>
    <?php endfor; ?> 
 </body>
</html>