<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
        <body class="container"> 
            <div class=" color "> Имя: {{--$name--}}     Город {{$year??date('d.m.Y')}}</div>
           

            <div class="justify-content-center d-flex" >
       
            <p>
               @if(count($ar)) 
                    Сумма: {{$sum}}
                @else 
                Количество элементов равно нулю
                @endif
            </p>

            </div>
        </body> 
</html>

<style>
    .color{
        color: red
        
    }
</style>




