<?php 

class Tanggal{
   
  function tanggal($tgl, $opt) {
    $D = date('D', strtotime($tgl));
    $d = date('d', strtotime($tgl));
    $m = date('m', strtotime($tgl));
    $M = date('M', strtotime($tgl));
    $y = date('Y', strtotime($tgl));
    $w = date('H:i:s', strtotime($tgl));
    $t = date('H:i a', strtotime($tgl));
    switch ($opt) {
        case 'time' : return $t;
        break;
        case 'day' : return self::$namahari[$D];
        break;
        case 'short_date' : return date('d/m/Y', strtotime($tgl));
        break;
        case 'long_date' : return intval($d) . ' ' . self::$namabulan[$m - 1] . ' ' . $y;
        break;
        case 'short_date_time' : return date('d/m/Y H:i:s', strtotime($tgl));
        break;
        case 'long_date_time' : return intval($d) . ' ' . self::$namabulan[$m - 1] . ' ' . $y . ' [' . $w . ']';
        break;
        case 'date_month' : return intval($d) . ' ' . $M;
        break;
    }
}

}