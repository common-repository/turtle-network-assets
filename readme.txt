=== Plugin Name ===
Turtle Network Assets
Plugin URI: https://t.me/mirplatform
Contributors: Roman Inozemtsev
Donate link: https://t.me/mirplatform
Tags: Turtle Network Assets, Turtle Network Blockchain, Turtle Network assets price, Turtle Network Assets plugin for WordPress
Requires at least: 5.2
Tested up to: 5.2
Stable tag: 5.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Turtle Network Assets plugin for show the info of assets created on Turtle Network Blockchain https://www.turtlenetwork.eu
With this plugin you can show 24h price, 24h high, 24h low, circulating supply, max supply, total supply, and assets's decimal.
This info comes from TN DEX.
The info for Turtle Network assets comes from the two links below:
https://bot.blackturtle.eu/api/ticker/$id/$priceid => For Turtle Network Assets
Example: https://bot.blackturtle.eu/api/ticker/DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk/TN
https://api.coinranking.com/v1/public/coin/980?base=USD => For Showing the prices of assets in other currencies.

== Installation ==

The installation is very easy!

1. Upload the plugin in WordPress
2. Activate the plugin
3. Use shortcode [asset id="" priceid="" fiat=""] to show the 24h price of a asset. ID is the assetID of the asset you want to show the assets price.
EXAMPLE1: [asset id="DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk" priceid="TN" fiat="tn"] => This shows the price of asset DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk exchanged with TN on DEX in terms of tn.
EXAMPLE2: [asset id="DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk" priceid="3GvqjyJFBe1fpiYnGsmiZ1YJTkYiRktQ86M2KMzcTb2s"] => This shows the price of asset DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk exchanged with DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk in terms of DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk. You Can't use fiat in this option.

To show the info of assets you need to use shortcode 
[tna id="" priceid="" type=""]. 

Put the id of the asset in id, the priceid is the price which the asset is shown (REMEMBER this is not the price you want to show the asset with! This is the price id of what your asset has been traded in TN DEX).

For type you need to enter what you need to show. List of commands:
    - 24hhigh [Shows the 24h highest price]
    - 24hlow [Shows the 24h lowest price]
    - maxsupply [Shows the max supply of the asset]
    - circulatingsupply [Shows the circulating supply of the asset]
    - totalsupply [Shows the total supply of the asset]
    - 24hvolume [Shows the 24h volume of the asset]
    - decimals [Shows the decimals of the asset]
    
EXAMPLE : [tna id="DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk" priceid="TN" type="decimals"] => Shows decimals of asset DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk traded with TN.
** Remember that 24h high, 24h low, and 24h volume are shown in terms of priceid. 

== Screenshots ==
1. Demo table https://mir.one/turtlenetwork.
2. Content demo in TablePress plugin.
3. Request https://bot.blackturtle.eu/api/ticker/DJEsVYyW6DJFrcDXVAz6fD1VVEK8MbXvDNu3t27hXWAk/TN.

== Changelog ==
= 1.0.0 =
* no new changes made since 1.0.0

== Upgrade Notice ==
= 1.0.0 =
In this version you can show 24h price, 24h high, 24h low, circulating supply, max supply, total supply, and assets decimal.
