<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApkResource;
use App\Models\DepoWd;
use Illuminate\Http\Request;
use App\Http\Resources\DepoWdResource;


class DepoWdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DepoWd::all();
        return DepoWdResource::collection($data);
        // return response()->json(['data' => $data]);
    }
    public function store(Request $request)
    {
        dd($request);
    }
    public function apkApi()
    {
        $data = [
            "databonusurl" => [
                [
                    'linkevent' => 'https://romaharum.com/',
                    'gifevent' => 'https://sinarperak.b-cdn.net/asset/img/textgifrtp.gif',
                    'banner_url' => 'https://sinarperak.b-cdn.net/content_site/roma4d/ROMA-1-01.jpg',
                ],
            ],
            "datapemberitahuan" => [
                [
                    'content' => 'Login Sekarang dan Dapatkan Bonus Terbaru dari DUOGAMING',
                    'id' => 45,
                    'title' => 'BONUS ANTI RUNGKAD'
                ],
            ],
            "datasettings" => [
                'id' => 1,
                'home' => 'https://romaharum.com/',
                'server1' => 'https://xn--80abgzw0a7d.com/',
                'server2' => 'https://xn--7ckd0j.com/',
                'server3' => 'https://xn--goc2ehe6cp0gb.com/',
                'promo' => 'https://l21paito.org/promosibanner/roma4d',
                'hadiah' => 'https://l21top.net/hadiah_diskon/duogaming',
                'jadwal' => 'https://l21top.net/listpools',
                'rtp' => 'https://rtp21group.com/',
                'syair' => 'https://l21paito.org',
                'facebook' => 'https://www.facebook.com/groups/duogaming',
                'instagram' => 'https://www.instagram.com/duogaming.official21/',
                'line' => 'line_id',
                'livechat' => 'https://direct.lc.chat/9718355/',
                'whatsapp' => 'https://wa.me/6285932940417',
                'telegram' => 'https://t.me/duogaming_l21',
                'switch_sticky' => 1,
                'linkalternatif1' => 'duotajir.com',
                'linkalternatif2' => 'duotajir.net',
                'linkalternatif3' => 'duotajir.org',
                'linkalternatif4' => '#',
                'linkalternatif5' => '#',
                'linkdownload' => 'duolain.sinardewi.com',
                'version_apk' => '3.0.0'
            ]
        ];

        return response()->json($data);
    }

}
