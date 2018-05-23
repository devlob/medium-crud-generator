<?php

namespace App\Http\Controllers;

use App\Http\Requests\{{modelName}}Request;
use App\{{modelName}};

class {{modelName}}Controller extends Controller
{
    public function index()
    {
        ${{modelNamePluralLowerCase}} = {{modelName}}::latest()->get();

        return response()->json(${{modelNamePluralLowerCase}}, 201);
    }

    public function store({{modelName}}Request $request)
    {
        ${{modelNameSingularLowerCase}} = {{modelName}}::create($request->all());

        return response()->json(${{modelNameSingularLowerCase}}, 201);
    }

    public function show($id)
    {
        ${{modelNameSingularLowerCase}} = {{modelName}}::findOrFail($id);

        return response()->json(${{modelNameSingularLowerCase}});
    }

    public function update({{modelName}}Request $request, $id)
    {
        ${{modelNameSingularLowerCase}} = {{modelName}}::findOrFail($id);
        ${{modelNameSingularLowerCase}}->update($request->all());

        return response()->json(${{modelNameSingularLowerCase}}, 200);
    }

    public function destroy($id)
    {
        {{modelName}}::destroy($id);

        return response()->json(null, 204);
    }
}