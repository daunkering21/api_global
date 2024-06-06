<?php

namespace App\Http\Controllers;

use App\Models\DataBonusUrl;
use App\Models\DataPemberitahuan;
use App\Models\DataSettings;

class ApkController extends Controller
{
    public function dataWebsite($web = '') {
        try {
            if ($web === '') {
                $bonusUrls = DataBonusUrl::all();
                $pemberitahuans = DataPemberitahuan::all();
                $settings = DataSettings::all();
            } else {
                $bonusUrls = DataBonusUrl::where('website', $web)->get();
                $pemberitahuans = DataPemberitahuan::all();
                $settings = DataSettings::where('website', $web)->get();
            }
    
            $databonusurl = $bonusUrls->map(function ($item) {
                return [
                    'group' => $item->group,
                    'website' => $item->website,
                    'banner_url' => $item->banner_url,
                    'gifevent' => $item->gifevent,
                    'linkevent' => $item->linkevent,
                ];
            });
    
            $datapemberitahuan = $pemberitahuans->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'content' => $item->content,
                ];
            });
    
            $datasettings = $settings->map(function ($item) {
                $data = [
                    'group' => $item->group,
                    'website' => $item->website,
                    'home' => $item->home,
                    'server1' => $item->server1,
                    'server2' => $item->server2,
                    'server3' => $item->server3,
                    'promo' => $item->promo,
                    'hadiah' => $item->hadiah,
                    'jadwal' => $item->jadwal,
                    'rtp' => $item->rtp,
                    'syair' => $item->syair,
                    'facebook' => $item->facebook,
                    'instagram' => $item->instagram,
                    'line' => $item->line,
                    'livechat' => $item->livechat,
                    'whatsapp' => $item->whatsapp,
                    'telegram' => $item->telegram,
                    'switch_sticky' => strval($item->switch_sticky),
                    'linkalternatif1' => $item->linkalternatif1,
                    'linkalternatif2' => $item->linkalternatif2,
                    'linkalternatif3' => $item->linkalternatif3,
                    'linkalternatif4' => $item->linkalternatif4,
                    'linkalternatif5' => $item->linkalternatif5,
                    'linkdownload' => $item->linkdownload,
                    'version_apk' => $item->version_apk,
                ];
    
                // Jika website mengandung kata 'bola', tambahkan properti tertentu
                if (stripos($item->website, 'bola') !== false) {
                    $data['deposit'] = $item->deposit;
                    $data['klasemen'] = $item->klasemen;
                    $data['peraturan'] = $item->peraturan;
                    $data['livescore'] = $item->livescore;
                    $data['prediksi'] = $item->prediksi;
                }
    
                return $data;
            });
    
            $data = [
                'databonusurl' => $databonusurl,
                'datapemberitahuan' => $datapemberitahuan,
                'datasettings' => $datasettings,
            ];
            
            return response()->json($data, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'not success', 'error' => $e->getMessage()], 500);
        }
    }
    
}
