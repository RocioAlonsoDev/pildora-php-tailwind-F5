<?php 
    class Receta{
        public string $titulo;
        public int $tiempo;
        public array $ingredientes;
        public string $categoria;
        public string $preparacion;
        public string $img;
        
        public function __construct(string $titulo,int $tiempo,array $ingredientes,string $categoria,string $preparacion,string $img){
            $this->titulo = $titulo;
            $this->tiempo = $tiempo;
            $this->ingredientes = $ingredientes;
            $this->categoria = $categoria;
            $this->preparacion = $preparacion;
            $this->img = $img;
        }
        public function imprimirIngredientes(){
            $lista = '';
            for($i=0;$i<count($this->ingredientes);$i++){
                $lista = $lista."<li>".$this->ingredientes[$i]."</li>";
            }
            return $lista;
        }
        public function imprimirReceta(){
            echo (
                "<div class='w-96 bg-lime-100 rounded'>
                    <img src='$this->img' class='rounded'>
                    <div class='p-5'>
                        <div class='flex flex-row gap-5'>
                            <label class='text-lime-900 bg-lime-200 rounded px-2 '>$this->categoria</label>
                            <label>$this->tiempo minutos</label>
                        </div>
                        <h2 class='text-3xl font-bold'>$this->titulo</h2>
                        <h3 class='font-bold'>Ingredientes:</h3>
                        <ul>".$this->imprimirIngredientes()."</ul>
                        <h3 class='font-bold'>Preparación:</h3>
                        <p>$this->preparacion</p>
                    </div>
                    
                </div>"
            );
        }
    };


    $arrozconpollo=new Receta("Lentejas con Chorizo",90,["lentejas","zanahoria","cebolla","chorizo","pimiento"],"Fácil","Echamos las lentejas en un bol con agua fría y las dejamos en remojo durante la noche, normalmente 12 horas. No es necesario echar sal a la hora del remojo. Si por cualquier razón no tuvieses tiempo las puedes hacer directamente. Siempre que sean pardinas y no te olvides de lavarlas para quitar impurezas. Únicamente recuerda cocerlas durante 1/2 hora más.","https://www.paulinacocina.net/wp-content/uploads/2023/01/receta-de-lentejas-de-chorizo.jpg");
    
    $lentejas=new Receta("Lentejas con Chorizo",90,["lentejas","zanahoria","cebolla","chorizo","pimiento"],"Fácil","Echamos las lentejas en un bol con agua fría y las dejamos en remojo durante la noche, normalmente 12 horas. No es necesario echar sal a la hora del remojo. Si por cualquier razón no tuvieses tiempo las puedes hacer directamente. Siempre que sean pardinas y no te olvides de lavarlas para quitar impurezas. Únicamente recuerda cocerlas durante 1/2 hora más.","https://www.paulinacocina.net/wp-content/uploads/2023/01/receta-de-lentejas-de-chorizo.jpg");

    $hummus=new Receta("Lentejas con Chorizo",90,["lentejas","zanahoria","cebolla","chorizo","pimiento"],"Fácil","Echamos las lentejas en un bol con agua fría y las dejamos en remojo durante la noche, normalmente 12 horas. No es necesario echar sal a la hora del remojo. Si por cualquier razón no tuvieses tiempo las puedes hacer directamente. Siempre que sean pardinas y no te olvides de lavarlas para quitar impurezas. Únicamente recuerda cocerlas durante 1/2 hora más.","https://www.paulinacocina.net/wp-content/uploads/2023/01/receta-de-lentejas-de-chorizo.jpg");


    echo $arrozconpollo->imprimirReceta();
    echo $lentejas->imprimirReceta();
    echo $hummus->imprimirReceta();
?>