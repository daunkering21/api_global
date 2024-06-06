<?php

namespace App\Http\Controllers;

use App\Models\DataBonusUrl;
use Illuminate\Http\Request;

class DataBonusUrlController extends Controller
{
    public function index()
    {
        try {
            $data = DataBonusUrl::all();
            $response = $data->toArray();
            return response()->json(['data' => $response], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'group' => 'required',
            'website' => 'required',
            'linkevent' => 'required',
            'gifevent' => 'required',
            'banner_url' => 'required',
        ]);
        try {
            DataBonusUrl::create($validatedData);
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function update(Request $request, DataBonusUrl $dataBonusUrl, $id)
    {
        $validatedData = $request->validate([
            'linkevent' => 'required',
            'gifevent' => 'required',
            'banner_url' => 'required'
        ]);
        try {
            $dataBonusUrl = DataBonusUrl::findOrFail($id);
            $dataBonusUrl->update($validatedData);
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function delete($id)
    {
        try {
            $dataBonusUrl = DataBonusUrl::where('id', $id)->firstOrFail();
            $dataBonusUrl->delete();
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
}
