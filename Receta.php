<?php 

class Receta{
    //atributos
    public array $ingredientes;
    public string $preparacion;
    public int $minutos;
    public string $titulo;
    public string $dificultad;
    public string $img;
    //constructor
    public function __construct(array $ing, string $pre, int $min, string $tit, string $dif, string $img){
        $this -> ingredientes = $ing;
        $this -> preparacion = $pre;
        $this -> minutos = $min;
        $this -> titulo = $tit;
        $this -> dificultad = $dif;
        $this -> img = $img;
    }


    //métodos
    public function imprimirIngredientes(){
        $lista = '';
        for($i=0;$i<count($this -> ingredientes);$i++){
            $lista = $lista . "<li>".$this ->ingredientes[$i]."</li>";
        }
        return $lista;
    }
    

    public function imprimirReceta(){
        echo ("<div class='w-96 bg-emerald-200 rounded'>
                <img src='".$this -> img."'>
                <label class='bg-red-500 rounded px-3'>".$this -> dificultad."</label> <label>". $this -> minutos." minutos</label>
                <h2 class='font-bold text-3xl'>".$this -> titulo."</h2>
                <h3>Ingredientes:</h3>
                <ul>".
                $this -> imprimirIngredientes()
                ."</ul>
                <h3>Preparación:</h3>
                <p>".$this -> preparacion."</p>
            </div>");
    }
}

$brownie = new Receta(['mantequilla','chocolate','huevos'], 
"Derretimos el chocolate troceado y la mantequilla a baño maría. Debemos ir removiendo en todo 
momento hasta conseguir una crema homogénea. Para hacer el baño maría, pondríamos una cazuela 
al fuego con agua y encima otra cazuela de forma que no toque el fondo.
Si no podemos hacer un baño maría en casa, podemos derretir el chocolate con la mantequilla 
en el microondas. Calentaríamos el chocolate con la mantequilla durante 2 minutos, retiraríamos,
 y removeríamos. Repetiríamos la operación varias veces hasta conseguir una mezcla lisa y brillante.",
  60, "Brownie de chocolate clásico: la receta infalible y fácil", "Fácil",
   "https://www.recetasderechupete.com/wp-content/uploads/2019/11/Brownie-1200x828.jpg");

$brownie -> imprimirReceta();


?>