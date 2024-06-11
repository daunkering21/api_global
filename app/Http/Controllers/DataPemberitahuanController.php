<?php

namespace App\Http\Controllers;

use App\Models\DataPemberitahuan;
use Illuminate\Http\Request;

class DataPemberitahuanController extends Controller
{
    public function index()
    {
        try {
            $data = DataPemberitahuan::all();
            $response = $data->toArray();
            return response()->json(['data' => $response], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        try {
            DataPemberitahuan::create($validatedData);
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function update(Request $request, DataPemberitahuan $dataPemberitahuan, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        try {
            $dataBonusUrl = DataPemberitahuan::findOrFail($id);
            $dataBonusUrl->update($validatedData);
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function delete($id)
    {
        try {
            $dataBonusUrl = DataPemberitahuan::where('id', $id)->firstOrFail();
            $dataBonusUrl->delete();
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
}
