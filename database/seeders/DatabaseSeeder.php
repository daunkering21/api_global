<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\DepoWd;
use Illuminate\Support\Str;
use App\Models\DataBonusUrl;
use App\Models\DataSettings;
use Illuminate\Database\Seeder;
use App\Models\DataPemberitahuan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create User
        $usernamesLogin = [
            'adminglobal',
            'dedaunan'
        ];
        foreach($usernamesLogin as $userLogin){
            User::create([
                'username' => $userLogin,
                'password' => bcrypt('hapus123'),
            ]);
        }
        
        // DepoWd Dummy Data
        $usernameDepoWd = [
            'dedaunan',
            'daftar1',
            'daftar2',
            'daftar3',
            'daftar4',
            'daftar5',
            'daftar6',
            'daftar7',
            'daftar8',
            'daftar9',
            'daftar10',
            'jojomt21',
        ];
        foreach($usernameDepoWd as $userDepoWd){
            $a = rand(0,9);
            $b = rand(0,9);
            $c = rand(0,9);
            $d = rand(0,9);
            $e = rand(0,9);
            $f = rand(0,9);
            $g = rand(0,9);
            $h = rand(0,9);
            $i = rand(0,9);
            $j = rand(0,9);
            $y = $a.$b.$c.$d.$e.$f.$g.$h.$i.$j;

            DepoWd::create([
                'id' => Str::uuid(),
                'username' => $userDepoWd,
                'referral' => 'dedaunan',
                'amount' => '150',
                'keterangan' => 'test_data911',
                'jenis' => 'DP',
                'groupbank' => 'bank1',
                'bank' => 'BCA',
                'namarek' => strtoupper($userDepoWd),
                'norek' => $y,
                'mbank' => 'BCA',
                'mnamarek' => strtoupper($userDepoWd),
                'mnorek' => $y,
                'txnid' => 'tx0'.rand(0,50),
                'balance' => '150',
                'status' => rand(1,3),
                'approved_by' => 'adminl21',
            ]);
        }
        $websites = [
            'arwanatoto',
            'doyantoto',
            'jeeptoto',
            'tstoto',
            'arta4d',
            'zara4d',
            'roma4d',
            'neon4d',
            'nero4d',
            'duogaming',
            'diorgaming',
        ];
        foreach ($websites as $index => $website){
            DataBonusUrl::create([
                'group' => 'lotto21',
                'website' => $website,
                'banner_url' => 'https://sinarperak.b-cdn.net/content_site/'.$website.'/web-1-'.$index.'.jpg',
                'gifevent' => 'https://sinarperak.b-cdn.net/asset/img/textgifrtp.gif',
                'linkevent' => 'https://event/'.$website.'.com/'
            ]);
        }
        foreach ($websites as $website) {
            DataSettings::create([
                'group' => 'lotto21',
                'website' => $website,
                'home' => 'https://'.$website.'.com',
                'server1' => 'https://xn--80abgzw0a7d.com/',
                'server2' => 'https://xn--7ckd0j.com/',
                'server3' => 'https://xn--goc2ehe6cp0gb.com/',
                'promo' => 'https://l21paito.org/promosibanner/'.$website,
                'hadiah' => 'https://l21top.net/hadiah_diskon/'.$website,
                'jadwal' => 'https://l21top.net/listpools',
                'rtp' => 'https://rtp21group.com/',
                'syair' => 'https://l21paito.org',
                'facebook' => 'https://www.facebook.com/groups/'.$website,
                'instagram' => 'https://www.instagram.com/'.$website.'.official21/',
                'line' => 'line_id_'.$website,
                'livechat' => 'https://direct.lc.chat/9718355/'.$website,
                'whatsapp' => 'https://wa.me/6285932940417',
                'telegram' => 'https://t.me/'.$website.'_l21',
                'switch_sticky' => '1',
                'deposit' => null,
                'klasemen' => null,
                'peraturan' => null,
                'livescore' => null,
                'prediksi' => null,
                'linkalternatif1' => $website.'.com',
                'linkalternatif2' => $website.'.net',
                'linkalternatif3' => $website.'.org',
                'linkalternatif4' => '#',
                'linkalternatif5' => '#',
                'linkdownload' => $website.'.sinardewi.com',
                'version_apk' => '3.0.0',
            ]);
        }
        $indexKe = [
            'Pertama',
            'Kedua',
            'Ketiga',
            'Keempat',
        ];
        foreach ($indexKe as $sat){
            DataPemberitahuan::create([
                'title' => 'Judul '.$sat,
                'content' => 'Konten '.$sat,
            ]);
        }

        $bolas = [
            'globalbola21',
            'ciabola',
            'daunbola',
        ];
        foreach ($bolas as $bola) {
            DataSettings::create([
                'group' => 'lotto21',
                'website' => $bola,
                'home' => 'https://'.$bola.'.com',
                'server1' => 'https://xn--80abgzw0a7d.com/',
                'server2' => 'https://xn--7ckd0j.com/',
                'server3' => 'https://xn--goc2ehe6cp0gb.com/',
                'promo' => 'https://l21paito.org/promosibanner/'.$bola,
                'hadiah' => 'https://l21top.net/hadiah_diskon/'.$bola,
                'jadwal' => 'https://l21top.net/listpools',
                'rtp' => 'https://rtp21group.com/',
                'syair' => 'https://l21paito.org',
                'facebook' => 'https://www.facebook.com/groups/'.$bola,
                'instagram' => 'https://www.instagram.com/'.$bola.'.official21/',
                'line' => 'line_id_'.$bola,
                'livechat' => 'https://direct.lc.chat/9718355/'.$bola,
                'whatsapp' => 'https://wa.me/6285932940417',
                'telegram' => 'https://t.me/'.$bola.'_l21',
                'switch_sticky' => '1',
                'deposit' => 'http://deposit.home',
                'klasemen' => 'http://klasemen.home',
                'peraturan' => 'http://peraturan.home',
                'livescore' => 'http://livescore.home',
                'prediksi' => 'http://prediksi.home2',
                'linkalternatif1' => $bola.'.com',
                'linkalternatif2' => $bola.'.net',
                'linkalternatif3' => $bola.'.org',
                'linkalternatif4' => '#',
                'linkalternatif5' => '#',
                'linkdownload' => $bola.'.sinardewi.com',
                'version_apk' => '3.0.0',
            ]);
        }
        
        // Ini Paling Bawah
    }
}
