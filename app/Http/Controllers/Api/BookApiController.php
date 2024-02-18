<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookApiController extends Controller
{

//poner el middleware de autenticación
//poner el except en el show para acceder sin loguearse

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $books = Book::all();

        $data = [
            "status" => "ok",
            "message" => "lista de todos los libros",
            "data" => $books
        ];
        return response()->json($data, 200);
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
    public function store(Request $request)
    {
        $this->authorize('create',Book::class);
        
        //validamos los datos de entrada
$validator = Validator::make($request->all(), [
    'titulo' => 'required|string|max:60',
    'autor'=>['required','string','max:50'],
    'fechapub'=>'nullable|date|before_or_equal:today',
    'genero'=>'required|in:Ficcion,Novela',
    'numeroPag'=>'nullable|numeric|gt:0|lte:3000'

    ]);
    if ($validator->fails()) {
    return response()->json(['errors' => $validator->errors()], 422);
    }
    $new = Book::create($request->all());
    return response()->json($new, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $book = Book::find($id); // busco el libro con ese id

        $data = [
            "status" => "ok",
            "message" => "datos de un libro",
            "data" => $book
        ];


        if (!$book) {
            $data = [
                "status" => "fracaso",
                "message" => "libro no encontrado",
                "data" => ""
            ];
            return response()->json($data, 404);
        }
        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $book = Book::find($id);
//si no se encuentra 404
if (!$book) {
return response()->json([
'status' => 404,
'message' => 'No se ha encontrado un libro con ese código' , 404]);
}
//si no valida 422
$validator = Validator::make($request->all(), [
    'titulo' => 'required|string|max:60',
    'autor'=>['required','string','max:50'],
    'fechapub'=>'nullable|date|before_or_equal:today',
    'genero'=>'required|in:Ficcion,Novela',
    'numeroPag'=>'nullable|numeric|gt:0|lte:3000'
    ]);
if ($validator->fails()) {
return response()->json(['errors' => $validator->errors()], 422);
}
//todo ok 200
$book->fill($request->all());
$book->save();
return response()->json(['status' => 'ok','data' => $book], 200);
    }

    
//DRY. Don't Repeat Yourself
public function check404($book)
{
    if (!$book) {
        response()->json([
            'status' => 404,
            'message' => 'No se ha encontrado un libro con ese id'
        ], 404)->send();
        die();
    }
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $this->check404($book);
    
        try {
            //status 204: No content
            $book->delete();
            return response()->json([
                'Sin contenido'
            ], 204);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Borrado fallido',
                'error_message' => $th->getMessage()
            ], 409);
        }
    }






}
