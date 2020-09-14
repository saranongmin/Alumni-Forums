<?php


namespace App\Http\Controllers;
use App\Http\Requests\GaroRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Image;
use App\Garo;
use Carbon\Carbon;

class GaroController extends Controller
{
     
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 20 : 0;

        $garos = Garo::orderBy('created_at', 'asc')->paginate(20);

        return view('backend.garos.index', compact('garos', 'sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
       $this->authorize('garos.create');

        $garos =Garo::pluck('name','id');
        return view('backend.garos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaroRequest $request)
    {
      
        try {        
           

            Garo::create($request->all());
            return redirect()->route('garos.index')->withStatus('Created Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage());
    

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Garo $garo) //route model model binding/ dependency injection
    {

        return view('backend.garos.show', compact('garo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Garo $garo)
    {


       $this->authorize('garos.viewAny');

        return view('backend.garos.edit', compact('garo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GaroRequest $request, Garo $garo)
    {
               $this->authorize('garos.update()');

        try{
            $garo->update($request->all());
            return redirect()->route('garos.index')->withStatus('Updated Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    
    public function destroy(Garo $garo)
    {
               $this->authorize('garos.delete()');

        try{
            $garo->delete();
            return redirect()->route('garos.index')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

   

   
}
