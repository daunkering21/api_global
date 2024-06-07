<?php

namespace App\Http\Controllers;

use App\Models\DataSettings;
use Illuminate\Http\Request;


class DataSettingsController extends Controller
{
    public function index()
    {
        try {
            $data = DataSettings::all();
            $response = $data->toArray();
            return response()->json(['data' => $response], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function store(Request $request)
    {
        if (stripos($request->website, 'bola') !== false ){
            $validatedData = $request->validate([
                'group' => 'required',
                'website' => 'required',
                'home' => 'required',
                'server1' => 'required',
                'server2' => 'required',
                'server3' => 'required',
                'promo' => 'required',
                'hadiah' => 'required',
                'jadwal' => 'required',
                'rtp' => 'required',
                'syair' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'line' => 'required',
                'livechat' => 'required',
                'whatsapp' => 'required',
                'telegram' => 'required',
                'switch_sticky' => 'required',
                'deposit' => 'required',
                'klasemen' => 'required',
                'peraturan' => 'required',
                'livescore' => 'required',
                'prediksi' => 'required',
                'linkalternatif1' => 'required',
                'linkalternatif2' => 'required',
                'linkalternatif3' => 'required',
                'linkalternatif4' => 'required',
                'linkalternatif5' => 'required',
                'linkdownload' => 'required',
                'version_apk' => 'required',
            ]);
        } else {
            $validatedData = $request->validate([
                'group' => 'required',
                'website' => 'required',
                'home' => 'required',
                'server1' => 'required',
                'server2' => 'required',
                'server3' => 'required',
                'promo' => 'required',
                'hadiah' => 'required',
                'jadwal' => 'required',
                'rtp' => 'required',
                'syair' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'line' => 'required',
                'livechat' => 'required',
                'whatsapp' => 'required',
                'telegram' => 'required',
                'switch_sticky' => 'required',
                'linkalternatif1' => 'required',
                'linkalternatif2' => 'required',
                'linkalternatif3' => 'required',
                'linkalternatif4' => 'required',
                'linkalternatif5' => 'required',
                'linkdownload' => 'required',
                'version_apk' => 'required',
            ]);
            try {
                DataSettings::create($validatedData);
                return response()->json(['message' => 'success'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
            }
        }
    }
    public function update(Request $request, DataSettings $dataSettings, $id)
    {
        if (stripos($request->website, 'bola') !== false ){
            $validatedData = $request->validate([
                'group' => 'required',
                'website' => 'required',
                'home' => 'required',
                'server1' => 'required',
                'server2' => 'required',
                'server3' => 'required',
                'promo' => 'required',
                'hadiah' => 'required',
                'jadwal' => 'required',
                'rtp' => 'required',
                'syair' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'line' => 'required',
                'livechat' => 'required',
                'whatsapp' => 'required',
                'telegram' => 'required',
                'switch_sticky' => 'required',
                'deposit' => 'required',
                'klasemen' => 'required',
                'peraturan' => 'required',
                'livescore' => 'required',
                'prediksi' => 'required',
                'linkalternatif1' => 'required',
                'linkalternatif2' => 'required',
                'linkalternatif3' => 'required',
                'linkalternatif4' => 'required',
                'linkalternatif5' => 'required',
                'linkdownload' => 'required',
                'version_apk' => 'required',
            ]);
        } else {
            $validatedData = $request->validate([
                'group' => 'required',
                'website' => 'required',
                'home' => 'required',
                'server1' => 'required',
                'server2' => 'required',
                'server3' => 'required',
                'promo' => 'required',
                'hadiah' => 'required',
                'jadwal' => 'required',
                'rtp' => 'required',
                'syair' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'line' => 'required',
                'livechat' => 'required',
                'whatsapp' => 'required',
                'telegram' => 'required',
                'switch_sticky' => 'required',
                'linkalternatif1' => 'required',
                'linkalternatif2' => 'required',
                'linkalternatif3' => 'required',
                'linkalternatif4' => 'required',
                'linkalternatif5' => 'required',
                'linkdownload' => 'required',
                'version_apk' => 'required',
            ]);
        }
        try {
            $dataSettings = DataSettings::findOrFail($id);
            $dataSettings->update($validatedData);
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    public function delete($id)
    {
        try {
            $dataSettings = DataSettings::where('id',$id)->firstOrFail();
            $dataSettings->delete();
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
}
