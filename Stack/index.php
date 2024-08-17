

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Php  Code</h4>
                    </div>
                    <div class="card-body">
                    <center>
                    <?php
                   
                   class Stack{
                    private $stack=NULL; 
                    private $size=NULL;
                    public function __construct()
                    {
                        $this->stack=[]; 
                        $this->size=0; 
                         
                    }
                    public function push($item){
                        if ($item) {
                            $this->stack[$this->size]=$item; 
                            //$stack[0]="A"; 
                            $this->size ++; 
                        }else {
                            return 'Something Was Wring !';
                        }
                        

                    }
                    public function peek(){
                       if ($this->isEmpty()) {
                            return "Stack Is Empty<br>"; 
                       }else{
                            return $this->stack[$this->size - 1]; 
                       }
                    }
                    public function pop(){
                        if ($this->isEmpty()) {
                            return 'Stack is Empty!';
                        }else{
                           $this->size--; 
                           $element = $this->stack[$this->size]; 
                           unset($this->stack[$this->size]);
                           return $element;
                        }
                    }
                    public function getSize() {
                        return $this->size;
                    }
                    public function isEmpty(){
                        return $this->size == 0; 
                    }
                    public function result(){
                        echo '<pre>';   
                        print_r($this->stack); 
                        echo '</pre>';
                    }



                   }

                   
                    echo '<pre>'; 

                    $stack = new Stack(5);
                    $stack->push("A");
                    $stack->push("B");
                    $stack->push("C");
                    echo "Top of the stack: " . $stack->peek() . "<br>";

                    // Pop item from the stack
                    echo "Popped: " . $stack->pop() . "<br>"; 
                    echo "Popped: " . $stack->pop() . "<br>";



                   $stack->result(); 

                    echo '</pre>'; 

                    ?>
                    </center>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
    
    
   
    
    
    
    ?>


    <script type="text/javascript">
       
    </script>
</body>
</html>