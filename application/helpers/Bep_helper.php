<?php
function get_bep($bep)
{
    return $bep;
}

function get_tfc($tfc)
{
    return $tfc;
}

function get_p($p)
{
    return $p;
}

function get_v($v)
{
    return $v;
}

function get_x($x)
{
    return $x;
}

function bep_unit($tfc,$p,$v){
    return get_tfc($tfc)/ (get_p($p) - get_v($v));
}

function bep_waktu($tfc,$p,$v,$x){
    return bep_unit($tfc,$p,$v)/get_x($x);
}

function bep_nilai($tfc,$v,$p){
    return get_tfc($tfc)/ 1-(get_v($v) - get_p($p));
}
?>