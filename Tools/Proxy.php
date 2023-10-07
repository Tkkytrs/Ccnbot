<?php

# -------------------- [PROXY SECTION] -------------------#

$input = 
["xxc2fkn4vuk6itxvpld9f33kh88oc36xnvvhezxg",
 "268rqxv61hp254ybjoxa9xoztg9taaqmjg9h93cx",
 "5xbvaxj9auxef19v9lzcjechwetclq7ixbr52uys", 
 "bg23lna964x2edzzbi1nb5fg6u74ib4v6xwszkl9",
 "ujwqgwcvb8mz7oa4dpm8yddqbkgo2m2266nsy2fq",
 "jmrl4fpi3ym11uhqzxsq6kz0h0nho5upejl780hr",
 "myje0r52vct9ynn2umr2jnj3k06senjayj8gxw5k",
 "r3y5fbubh7k2ym1lpiyr7bh7t5fbm0ztbq1xtu85",
 "c872a6pi0c5fe1lu5s0bmbvzxvn4rhn1qki2ym4x",
 "qwld8kiin5mnalwfb0y0wr0yw7ihoc0vt96ymw78",
 "t3323ivjuhd24fj0jozmfzg46hxlttfje1w2m986",
 "hvd2wfeqimypg8nlbg6c727knda4g9vyigoir9ky",
 "rpbi8f5fwfl3lsppdvjslzydo9e4qdzyo3ztebdz",
 "7fp965igt32n74h5u56hi303b7x6jguazk39zjt7",
 "e3iwax0hqunmhc7jj1y32ivccgttlweoa92vj8l3",
 "vepzufnwe9ur1gkvpeubqhepjcusiumfs6a313q1",
 "i1lgukgl5zkaj2fpjfj3f3tgv4mwrgzc0nk3dgms",
 "zthgfxoybudjsey5fj2feu0p5mu8wz7mhwf98zh2",
 "u31fzcsw1d3y7vrvjt1d5kcso65y5pxi3hd8qpwk",
 "kuw0r3ltpoetmb1iuy5vw3e6vtxdv6akaj9aden9",
 "vn5zflgxizqwl8sqdb1riqg8xf1tm6eknh8gokoz",
 "973cz5kuacc6acuom7d5ax9wotfhpvhu69324mr9",
 "ncqrujmg6m6dxhv0q010ucx75kucfnrpc22mc8w6",
 "oa32s1u4gj4g93x6kcztg9p3fjr67ve7628dv0ya",
 "skjanv68vg8jcc9x3r2bsp8yq28xff3czi5g9cb6",
 "2tvrfhukls5vmfl8oquqgv4lgksflfk51omsc33s",
 "nqdnyrq7p7trlmo0k6dw53kffk1lpslbuepgnel3",
 "jojraoppo0apmhm3xnkeipyedprfwswdqfw27nrb",
 "qnocpdm8qmkh08qahq2bvvkqk2op0kpyqvleinlv",
 "apgcjs7er7z291g1qh23qcvxmkocusmia14gm0b1"];

//$input = ["ymcy1i0sktz0xkgr08lhr7cc5p4ouf4w8xw8bwid"];

$webshare_token = $input[array_rand($input)];
$prox = curl_init();
curl_setopt($prox, CURLOPT_URL, 'https://proxy.webshare.io/api/proxy/list/');
curl_setopt($prox, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($prox, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Authorization: Token '.$webshare_token.'';
curl_setopt($prox, CURLOPT_HTTPHEADER, $headers);
$result1 = curl_exec($prox);
curl_close($prox);

$prox_res = json_decode($result1, 1);
$count = $prox_res['count'];
$random = rand(0,$count-1);

$proxy_ip = $prox_res['results'][$random]['proxy_address'];
$proxy_port = $prox_res['results'][$random]['ports']['socks5'];
$proxy_user = $prox_res['results'][$random]['username'];
$proxy_pass = $prox_res['results'][$random]['password'];

$proxy = ''.$proxy_ip.':'.$proxy_port.'';
$credentials = ''.$proxy_user.':'.$proxy_pass.'';
$useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";

/*
$proxy = "91.239.130.34:44445";
$credentials = "mr24017Vsbs:MNzixYAObj_country-us";*/
?>