<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3v1;

class Genre extends \PHPExiftool\Driver\Tag
{

    protected $Id = 127;

    protected $Name = 'Genre';

    protected $FullName = 'ID3::v1';

    protected $GroupName = 'ID3v1';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v1';

    protected $g2 = 'Audio';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Genre';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Blues',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Classic Rock',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Country',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Dance',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Disco',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Funk',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Grunge',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Hip-Hop',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Jazz',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Metal',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'New Age',
        ),
        11 => array(
            'Id' => 11,
            'Label' => 'Oldies',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Other',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Pop',
        ),
        14 => array(
            'Id' => 14,
            'Label' => 'R&B',
        ),
        15 => array(
            'Id' => 15,
            'Label' => 'Rap',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Reggae',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'Rock',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'Techno',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'Industrial',
        ),
        20 => array(
            'Id' => 20,
            'Label' => 'Alternative',
        ),
        21 => array(
            'Id' => 21,
            'Label' => 'Ska',
        ),
        22 => array(
            'Id' => 22,
            'Label' => 'Death Metal',
        ),
        23 => array(
            'Id' => 23,
            'Label' => 'Pranks',
        ),
        24 => array(
            'Id' => 24,
            'Label' => 'Soundtrack',
        ),
        25 => array(
            'Id' => 25,
            'Label' => 'Euro-Techno',
        ),
        26 => array(
            'Id' => 26,
            'Label' => 'Ambient',
        ),
        27 => array(
            'Id' => 27,
            'Label' => 'Trip-Hop',
        ),
        28 => array(
            'Id' => 28,
            'Label' => 'Vocal',
        ),
        29 => array(
            'Id' => 29,
            'Label' => 'Jazz+Funk',
        ),
        30 => array(
            'Id' => 30,
            'Label' => 'Fusion',
        ),
        31 => array(
            'Id' => 31,
            'Label' => 'Trance',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Classical',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Instrumental',
        ),
        34 => array(
            'Id' => 34,
            'Label' => 'Acid',
        ),
        35 => array(
            'Id' => 35,
            'Label' => 'House',
        ),
        36 => array(
            'Id' => 36,
            'Label' => 'Game',
        ),
        37 => array(
            'Id' => 37,
            'Label' => 'Sound Clip',
        ),
        38 => array(
            'Id' => 38,
            'Label' => 'Gospel',
        ),
        39 => array(
            'Id' => 39,
            'Label' => 'Noise',
        ),
        40 => array(
            'Id' => 40,
            'Label' => 'AlternRock',
        ),
        41 => array(
            'Id' => 41,
            'Label' => 'Bass',
        ),
        42 => array(
            'Id' => 42,
            'Label' => 'Soul',
        ),
        43 => array(
            'Id' => 43,
            'Label' => 'Punk',
        ),
        44 => array(
            'Id' => 44,
            'Label' => 'Space',
        ),
        45 => array(
            'Id' => 45,
            'Label' => 'Meditative',
        ),
        46 => array(
            'Id' => 46,
            'Label' => 'Instrumental Pop',
        ),
        47 => array(
            'Id' => 47,
            'Label' => 'Instrumental Rock',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Ethnic',
        ),
        49 => array(
            'Id' => 49,
            'Label' => 'Gothic',
        ),
        50 => array(
            'Id' => 50,
            'Label' => 'Darkwave',
        ),
        51 => array(
            'Id' => 51,
            'Label' => 'Techno-Industrial',
        ),
        52 => array(
            'Id' => 52,
            'Label' => 'Electronic',
        ),
        53 => array(
            'Id' => 53,
            'Label' => 'Pop-Folk',
        ),
        54 => array(
            'Id' => 54,
            'Label' => 'Eurodance',
        ),
        55 => array(
            'Id' => 55,
            'Label' => 'Dream',
        ),
        56 => array(
            'Id' => 56,
            'Label' => 'Southern Rock',
        ),
        57 => array(
            'Id' => 57,
            'Label' => 'Comedy',
        ),
        58 => array(
            'Id' => 58,
            'Label' => 'Cult',
        ),
        59 => array(
            'Id' => 59,
            'Label' => 'Gangsta',
        ),
        60 => array(
            'Id' => 60,
            'Label' => 'Top 40',
        ),
        61 => array(
            'Id' => 61,
            'Label' => 'Christian Rap',
        ),
        62 => array(
            'Id' => 62,
            'Label' => 'Pop/Funk',
        ),
        63 => array(
            'Id' => 63,
            'Label' => 'Jungle',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Native American',
        ),
        65 => array(
            'Id' => 65,
            'Label' => 'Cabaret',
        ),
        66 => array(
            'Id' => 66,
            'Label' => 'New Wave',
        ),
        67 => array(
            'Id' => 67,
            'Label' => 'Psychadelic',
        ),
        68 => array(
            'Id' => 68,
            'Label' => 'Rave',
        ),
        69 => array(
            'Id' => 69,
            'Label' => 'Showtunes',
        ),
        70 => array(
            'Id' => 70,
            'Label' => 'Trailer',
        ),
        71 => array(
            'Id' => 71,
            'Label' => 'Lo-Fi',
        ),
        72 => array(
            'Id' => 72,
            'Label' => 'Tribal',
        ),
        73 => array(
            'Id' => 73,
            'Label' => 'Acid Punk',
        ),
        74 => array(
            'Id' => 74,
            'Label' => 'Acid Jazz',
        ),
        75 => array(
            'Id' => 75,
            'Label' => 'Polka',
        ),
        76 => array(
            'Id' => 76,
            'Label' => 'Retro',
        ),
        77 => array(
            'Id' => 77,
            'Label' => 'Musical',
        ),
        78 => array(
            'Id' => 78,
            'Label' => 'Rock & Roll',
        ),
        79 => array(
            'Id' => 79,
            'Label' => 'Hard Rock',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'Folk',
        ),
        81 => array(
            'Id' => 81,
            'Label' => 'Folk-Rock',
        ),
        82 => array(
            'Id' => 82,
            'Label' => 'National Folk',
        ),
        83 => array(
            'Id' => 83,
            'Label' => 'Swing',
        ),
        84 => array(
            'Id' => 84,
            'Label' => 'Fast Fusion',
        ),
        85 => array(
            'Id' => 85,
            'Label' => 'Bebob',
        ),
        86 => array(
            'Id' => 86,
            'Label' => 'Latin',
        ),
        87 => array(
            'Id' => 87,
            'Label' => 'Revival',
        ),
        88 => array(
            'Id' => 88,
            'Label' => 'Celtic',
        ),
        89 => array(
            'Id' => 89,
            'Label' => 'Bluegrass',
        ),
        90 => array(
            'Id' => 90,
            'Label' => 'Avantgarde',
        ),
        91 => array(
            'Id' => 91,
            'Label' => 'Gothic Rock',
        ),
        92 => array(
            'Id' => 92,
            'Label' => 'Progressive Rock',
        ),
        93 => array(
            'Id' => 93,
            'Label' => 'Psychedelic Rock',
        ),
        94 => array(
            'Id' => 94,
            'Label' => 'Symphonic Rock',
        ),
        95 => array(
            'Id' => 95,
            'Label' => 'Slow Rock',
        ),
        96 => array(
            'Id' => 96,
            'Label' => 'Big Band',
        ),
        97 => array(
            'Id' => 97,
            'Label' => 'Chorus',
        ),
        98 => array(
            'Id' => 98,
            'Label' => 'Easy Listening',
        ),
        99 => array(
            'Id' => 99,
            'Label' => 'Acoustic',
        ),
        100 => array(
            'Id' => 100,
            'Label' => 'Humour',
        ),
        101 => array(
            'Id' => 101,
            'Label' => 'Speech',
        ),
        102 => array(
            'Id' => 102,
            'Label' => 'Chanson',
        ),
        103 => array(
            'Id' => 103,
            'Label' => 'Opera',
        ),
        104 => array(
            'Id' => 104,
            'Label' => 'Chamber Music',
        ),
        105 => array(
            'Id' => 105,
            'Label' => 'Sonata',
        ),
        106 => array(
            'Id' => 106,
            'Label' => 'Symphony',
        ),
        107 => array(
            'Id' => 107,
            'Label' => 'Booty Bass',
        ),
        108 => array(
            'Id' => 108,
            'Label' => 'Primus',
        ),
        109 => array(
            'Id' => 109,
            'Label' => 'Porn Groove',
        ),
        110 => array(
            'Id' => 110,
            'Label' => 'Satire',
        ),
        111 => array(
            'Id' => 111,
            'Label' => 'Slow Jam',
        ),
        112 => array(
            'Id' => 112,
            'Label' => 'Club',
        ),
        113 => array(
            'Id' => 113,
            'Label' => 'Tango',
        ),
        114 => array(
            'Id' => 114,
            'Label' => 'Samba',
        ),
        115 => array(
            'Id' => 115,
            'Label' => 'Folklore',
        ),
        116 => array(
            'Id' => 116,
            'Label' => 'Ballad',
        ),
        117 => array(
            'Id' => 117,
            'Label' => 'Power Ballad',
        ),
        118 => array(
            'Id' => 118,
            'Label' => 'Rhythmic Soul',
        ),
        119 => array(
            'Id' => 119,
            'Label' => 'Freestyle',
        ),
        120 => array(
            'Id' => 120,
            'Label' => 'Duet',
        ),
        121 => array(
            'Id' => 121,
            'Label' => 'Punk Rock',
        ),
        122 => array(
            'Id' => 122,
            'Label' => 'Drum Solo',
        ),
        123 => array(
            'Id' => 123,
            'Label' => 'Acapella',
        ),
        124 => array(
            'Id' => 124,
            'Label' => 'Euro-House',
        ),
        125 => array(
            'Id' => 125,
            'Label' => 'Dance Hall',
        ),
        126 => array(
            'Id' => 126,
            'Label' => 'Goa',
        ),
        127 => array(
            'Id' => 127,
            'Label' => 'Drum & Bass',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Club-House',
        ),
        129 => array(
            'Id' => 129,
            'Label' => 'Hardcore',
        ),
        130 => array(
            'Id' => 130,
            'Label' => 'Terror',
        ),
        131 => array(
            'Id' => 131,
            'Label' => 'Indie',
        ),
        132 => array(
            'Id' => 132,
            'Label' => 'BritPop',
        ),
        133 => array(
            'Id' => 133,
            'Label' => 'Negerpunk',
        ),
        134 => array(
            'Id' => 134,
            'Label' => 'Polsk Punk',
        ),
        135 => array(
            'Id' => 135,
            'Label' => 'Beat',
        ),
        136 => array(
            'Id' => 136,
            'Label' => 'Christian Gangsta',
        ),
        137 => array(
            'Id' => 137,
            'Label' => 'Heavy Metal',
        ),
        138 => array(
            'Id' => 138,
            'Label' => 'Black Metal',
        ),
        139 => array(
            'Id' => 139,
            'Label' => 'Crossover',
        ),
        140 => array(
            'Id' => 140,
            'Label' => 'Contemporary C',
        ),
        141 => array(
            'Id' => 141,
            'Label' => 'Christian Rock',
        ),
        142 => array(
            'Id' => 142,
            'Label' => 'Merengue',
        ),
        143 => array(
            'Id' => 143,
            'Label' => 'Salsa',
        ),
        144 => array(
            'Id' => 144,
            'Label' => 'Thrash Metal',
        ),
        145 => array(
            'Id' => 145,
            'Label' => 'Anime',
        ),
        146 => array(
            'Id' => 146,
            'Label' => 'JPop',
        ),
        147 => array(
            'Id' => 147,
            'Label' => 'SynthPop',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'None',
        ),
        'CR' => array(
            'Id' => 'CR',
            'Label' => 'Cover',
        ),
        'RX' => array(
            'Id' => 'RX',
            'Label' => 'Remix',
        ),
    );

}
