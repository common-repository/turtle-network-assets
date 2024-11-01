<?php
/**
 * Plugin Name: Turtle Network Assets
 * Plugin URI: https://t.me/mir_dev
 * Description: This plugin allows you to get some info about all assets created on Turtle Network blockchain.
 * Version: 1.0.0
 * Author: Inozemtsev Roman
 * Author URI: https://inozemtsev_roman
 * License: MIT
 */

function tn_asset( $atts ) {
    extract( shortcode_atts( array(
        'id' => '',
        'priceid' => '',
'fiat' => '',
    ), $atts, 'asset' ) );

    $demolph_output = tn_show( $id,$fiat,$priceid );  
    return $demolph_output;
}
add_shortcode( "asset", "tn_asset" );

function tn_show( $id,$fiat,$priceid ) { 
    $response = wp_remote_get( "https://bot.blackturtle.eu/api/ticker/$id/$priceid" );
    $body = wp_remote_retrieve_body( $response );
$data = json_decode($body, TRUE);
$cmcap = wp_remote_get("https://api.coinranking.com/v1/public/coin/980?base=USD");
$cmbody = wp_remote_retrieve_body($cmcap);
$cmdata = json_decode($cmbody, TRUE);
    $asset = array_search("$id", array_column($data, 'amountAssetID'));
    $price = $data['24h_close'];
    $pricein = $data["priceAssetID"];
    $pricename = $data["priceAssetName"];
    $tnprice = $cmdata[0]["price"];
     if ($pricein == "TN"){
    if($fiat == "tn"){
return round($price,8);
    } else{
         return number_format($price*$tnprice, 8);
    }
    } else {
         return "$price $pricename";
    }
} 

function tn_tna( $atts ) {
    extract( shortcode_atts( array(
        'id' => '',
        'priceid' => '',
'type' => '',
    ), $atts, 'tna' ) );

    $demolph_output = tn_shinfo( $id,$type,$priceid );  
    return $demolph_output;
}
add_shortcode( "tna", "tn_tna" );

function tn_shinfo( $id,$type,$priceid ) { 
     $rinfo = wp_remote_get( "https://bot.blackturtle.eu/api/ticker/$id/$priceid" );
    $binfo = wp_remote_retrieve_body( $rinfo );
$dinfo = json_decode($binfo, TRUE);
$decimals = $dinfo["priceAssetDecimals"];
$volume24h = $dinfo["24h_volume"];
$totalsupply = $dinfo["amountAssetTotalSupply"];
$circusupply = $dinfo["amountAssetCirculatingSupply"];
$maxsupply = $dinfo["amountAssetMaxSupply"];
$low24h = $dinfo["24h_low"];
$high24h = $dinfo["24h_high"];
if ($type == "decimals"){
    return $decimals;
} elseif ($type == "24hvolume"){
    return $volume24h;
} elseif ($type == "totalsupply"){
 return $totalsupply;   
} elseif ($type == "circulatingsupply"){
    return $circusupply;
} elseif ($type == "maxsupply"){
    return $maxsupply;
} elseif ($type == "24hlow"){
    return $low24h;
} elseif ($type == "24hhigh"){
    return $high24h;
}
}
?>