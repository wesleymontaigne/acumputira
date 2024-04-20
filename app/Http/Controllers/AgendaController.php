<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\User;
use auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HourBrasil; 

class AgendaController extends Controller
{

  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, HourBrasil $hourBrasil) 
    {  
        /* validando se a data de agendamento*/
        $hournow= $hourBrasil->index();
        $hourBrasil->comparehour( $hournow,$request->proxima_consulta);
        $dateInTheFuture='';
        

        $validated = $request->validate([
        'paciente_id' => 'required|integer|max:4',
        'proxima_consulta' => 'date',
        'faltas'=>'required|string|max:255',
        'horario'=>'required|string|max:255',
        'user_id'=>'',
        'checkbox'=>'',
        ]);
       
        /*Primeira consulta ?*/
       
       $primeiraconsulta=Agenda::all()->where('paciente_id','=',$request->paciente_id);
      
       if(!isset($primeiraconsulta[0]->paciente_id)||isset($request->checkbox)){
        //inserir mais nove datas para frente
        $dias=7; 
      
        for($i=0; $i<10;$i++){
         //a primeira data nao sofre alteração
        if($i==0){
        $create = Agenda::create([
        'paciente_id' => $request->paciente_id,
        'proxima_consulta' => $request->proxima_consulta,
        'faltas' => $request->faltas,
        'horario' => $request->horario,
        'user_id' => auth()->user()->id,
        ]);
        echo 'primeira data';
        echo "<br>";
        echo $request->proxima_consulta;
       
        }else{

      //ja tem a data de inicio acrecetar mais 9  

 
   
   
   $dateInTheFuture= date('Y-m-d', strtotime($request->proxima_consulta. " + $dias days")); 

   

    $dateInTheFutureName=date('D', strtotime($dateInTheFuture));
    //se for sabado acrenctar dois dias se for domingo um dia 
    if($dateInTheFutureName=="Sat"||$dateInTheFutureName=="Sun"){ 
    if($dateInTheFutureName=="Sat"){
    $dateInTheFuture= date('Y-m-d', strtotime($dateInTheFuture.'+ 9 days'));   
    }else{
    $dateInTheFuture= date('Y-m-d', strtotime($dateInTheFuture.'+ 8 days'));   
    } 
  
    }else{ 
    echo "<br>";
    echo"nao era sabado ou domingo";
    }

    echo $request->proxima_consulta;
    echo "<br>";
    echo"ultimo loop";
   
    $create = Agenda::create([
    'paciente_id' => $request->paciente_id,
    'proxima_consulta' =>$dateInTheFuture,
    'faltas' => $request->faltas,
    'horario' => $request->horario,
    'user_id' => auth()->user()->id,
    ]);


    $dias=$dias+7; 
  
    //lixo requeste automatica 
    //$request->user()->agenda()->create($validated);    
    
    }


    








     
     
       }
          
       // dd( 'terminei de inserir as datas futuras');
       }else{
       $request->user()->agenda()->create($validated);

       }
      
       return redirect()->route('pacienteAgenda', ['id' => $request->paciente_id]);        


       
     
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    { 
        $agenda = Agenda::find($request->agenda_id);
        $agenda->horario=$request->horario; 
        $agenda->proxima_consulta=$request->proxima_consulta;
        $agenda->faltas=$request->faltas;
        $agenda->save();


        // return to paciente agenda with the intitle data
       return redirect()->route('pacienteAgenda', ['id' => $request->paciente_id]);
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        dd('deleted');
    }

    public function deletar(Request $request){
        $agenda = Agenda::find($request->itemid);
        $agenda->delete();
        return response()->json([
            'name' => [$agenda],
            'code' =>200,
        ]);
    }
}
