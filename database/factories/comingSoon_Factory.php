<?php

use Faker\Generator as Faker;


$factory->define(App\comingSoon::class, function (Faker $faker) {

    return [

        'company' => $faker->randomElement([
            'htc',
            'Lenovo',
            'Vivo',]),
        'name' => $faker->randomLetter.' '.random_int(1,50),
        'new' => $faker->realText(600),
        'price' => 'RS. '.random_int(10000,70000),
        'OS' => 'Android '. $faker->randomElement([
                'KitKat 4.4',
                'Lollipop 5.0',
                'Marshmallow 6.0',
                'Nougat 7.0',
                'Oreo 8.0']),
        'Dimensions' => 'N/A',
        'Weight' => rand('100','300').' g',
        'sim' => $faker->randomElement(['Single','Double']),
        'colors' => $faker->randomElement(['Black','White']),
        '2G band'=>'GSM 850 / 900 / 1800 / 1900 ',
        '3G band'=>'HSDPA 850 / 900 / 1900 / 2100 ',
        '4G band'=>'LTE',
        'CPU' => $faker->randomElement([
            'Octa-core (4 x 2.4 GHz Cortex-A73 + 4 x 1.8 GHz Cortex-A53)',
            '1.3 Ghz Octa Core Cortex A53, 64 bit',
            '1.25 Ghz Quad Core',
            '2Ghz Octa Core Cortex-A53 ',
            '2.5 Ghz Octa Core Cortex-A53 ',
            '1.3 Ghz Quad Core']),
        'Chipset'=>$faker->randomElement([
            'Hisilicon Kirin 970',
            'MediaTek MT6753',
            'MT6737',
            'Qualcomm MSM8953 Snapdragon 625',
            'Mediatek MT6763T Helio P23',
            'Media Tek MT6580M ',
            'N\A']),
        'GPU'=>$faker->randomElement([
            'Mali-400 MP1',
            'Mali-G71 MP2',
            'Adreno 506',
            'ARM MALI-T720',
            'Mali-G72 MP12',
            'N\A']),
        'Size'=>$faker->randomElement([
            '5.0 Inches',
            '5.5 Inches',
            '5.7 Inches',
            '6.0 Inches',
            '6.5 Inches']),
        'Protection'=>'Corning Gorilla Glass'.random_int(1,5),
        'Built-in'=>$faker->randomElement([
            '64/128GB Built-in, 4/6GB RAM  ',
            '64GB Built-in, 6GB RAM ',
            '32GB Built-in, 3GB RAM  ',
            '16GB Built-in, 2GB RAM  ']),
        'Card'=>$faker->randomElement([
            'microSD Card, (supports upto 128GB)',
            'N\A']),
        'Main camera'=>$faker->randomElement([
            '13 MP, autofocus, LED flash',
            'Dual 12 MP, autofocus, (dual-LED + dual tone) flash',
            '5 MP, LED flash ',
            '16 MP, autofocus, LED flash',
            'Dual 20 MP + 12 MP, laser autofocus, (dual-LED + dual tone) flash',
        ]),
        'Features'=>$faker->randomElement([
            'f/1.6, OIS, 2x lossless zoom, Leica optics, phase detection, Geo-tagging, touch focus, face/smile detection, panorama, HDR, Video (2160p@30fps, 1080p@30/60fps)  ',
            'f/1.8, Phase detection , Geo-tagging, touch focus, face detection, HDR, panorama, Video (1080p@30fps)  ',
            '(26mm, f/2.2; 50mm, f/2.6), phase detection, 2x optical zoom, 1.25 Âµm/ 1.0 Âµm pixel size, Geo-tagging, touch focus, face detection, HDR, panorama, Video (2160p@30fps, 720p@120fps)  ',
            'F/2.0, Face detection, Geo-tagging, Panorama, HDR, Video',
            'Face detection, Geo-tagging, touch focus, face detection, HDR, panorama, Video (1080p@30fps)',
        ]),
        'Front'=>$faker->randomElement([
            '16 MP (f/2.0, 2.0 Î¼m)',
            '5 MP',
            '5 MP, 1080p  ',
            '8 MP ',
            '20 MP with Artifical Intellegence, f/2.0, 1/2.8',
        ]),
        'WLAN'=>'Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, WiFi Direct',
        'Bluetooth'=>'Yes',
        'GPS'=>'Yes',
        'Radio'=>'N\A',
        'USB'=>$faker->randomElement([
            'microUSB 2.0',
            'microUSB 3.0',
            'microUSB Type C  ',
            'microUSB 3.1 ',
            '20 MP with Artifical Intellegence, f/2.0, 1/2.8',
        ]),
        'NFC'=>'NO',
        'Data'=>'GPRS, Edge, 3G HSPA, 4G LTE',
        'Sensors'=>$faker->randomElement([
            'Accelerometer, Compass, Proximity, FingerPrint',
            'Accelerometer, Gyro, Compass, Proximity, FingerPrint',
            'Accelerometer, Compass, Proximity, FingerPrint ',
        ]),
        'Audio'=>'3.5mm Audio Jack, MP4/WMV/H.264 player, MP3/WAV/WMA/eAAC+/FLAC player, Speaker Phone',
        'Browser'=>'HTML5',
        'Messaging'=>'SMS(threaded view), MMS, Email, Push Mail, IM',
        'Games'=>'	Built-in + Downloadable ',
        'Torch'=>'Yes',
        'Extra'=>$faker->randomElement([
            'Photo/video editor, Document viewer ',
            'Front glass, aluminum frame & back, Photo/video editor, Document viewer  ',
            'Face Unlock, O-Share, Gaming DND, Night Shield, Active noise cancellation with dedicated mic, Document viewer, Photo/video editor, Maps, Gmail, Calendar, Google Talk ',
            'Document viewer, Photo viewer/editor, Google Search, Maps, Gmail, Voice memo/dial/commands, Calendar, YouTube, Google Talk  ',
            '	Artificial Intelligence Chip, 24-bit/192kHz audio, Active noise cancellation with dedicated mic, Photo/video editor, Document viewer  '
        ]),
        'Capacity'=>random_int(2000,4500).' mAh',
        'More'=>$faker->randomElement([
            '- Fast battery charging 4.5V/5A (58% in 30 min)  ',
            'N\A'
        ]),
        'img'=>'/Image/mobile/IMG ('.random_int(1,60).').png'
    ];
});