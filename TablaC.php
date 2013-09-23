<http>
 <head>
  <title>Tabla Cebra</title>
  <meta name="Tabla Cebra" content="Creación de tabla con dos colores en PHP y CSS">
  <link href="Cebra.css" type="text/css" rel="stylesheet">
 </head>
 
 <body>
  <header>
   <h1>Tabla Cebra</h1>
   <p>Insertar tabla de manera dinamica con PHP en la cual deber&aacute ser una line de con color y otra sin color de manera consecutiva.</p>
  </header>
  
  <section>
   <table>
    <?php
	 $Filas=10;
	 $Columnas=10;
	 $Numero=1;
	 $Comparativo=0;
	 
	for($i=0;$i<$Filas;$i++)
	{
	 echo "<tr>";
	 for($j=0;$j<$Columnas;$j++)
	 {
	  $Comparativo++;
	  if($Comparativo<=10)
	  {
        echo "<td>".$Numero."</td>";
	  }
	  else
	  {
	   echo "<td style=background-color:#FFFFFF;>".$Numero."</td>";
	   if($Comparativo==20)
		{
		 $Comparativo=0;
		}
	  }
	  
	  $Numero++;
	 }
	 echo "</tr>";
	}
	?>
   </table>
  </section>
 </body>
</http>