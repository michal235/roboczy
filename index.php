<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DELL PowerEdge Server Generation 14</title>
    <link rel="stylesheet" href="/bundles/css/index.css?v=3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Digital Holding Sp z o.o. http://digitalholding.pl">
    <meta name="theme-color" content="#142026">
</head>
<body>
<header>
    <img class="dell_emc-img" src="/resources/gfx/logo_emc.png">
    <div class="text-container">
        <h2>PowerEdge Server</h2>
        <h1>Generation 14</h1>
        <h4 class="description">
            <p>
                Najnowsza seria jednoprocesorowych serwerów Dell PowerEdge 14 generacji w obudowie Rack 1U jak i Tower
                przeznaczony dla małych i średnich firm poszukujących elastycznego oraz niezwodnego serwera, który
                zaspokoi rosnące potrzeby rozwijającego się biznesu, a zarazem łatwego w instalacji, zarządzaniu i
                wdrażaniu praktycznego serwera.
            </p>
        </h4>
    </div>
    <img class="banner-img" src="/resources/gfx/foto/baner.png">
    <img class="banner_gradient-img" src="/resources/gfx/bg-gradient.png">
</header>

<main>
    <img class="main_bg-img" src="/resources/gfx/foto/bg.png">

    <div class="server_benefits-container">
        <div class="element">

            <h2>2x</h2>
            <h3>więcej rdzeni</h3>
            <p>Zwiększona wydajność dzięki najnowszej generacji 4 i 6 rdzeniowych procesorów Intel® Xeon® E-2100.</p>
        </div>
        <div class="element">

            <h2>11%</h2>
            <h3>szybszy transfer danych</h3>

            <p>Dzięki zwiększonej prędkości pamięci RAM.</p>
        </div>
        <div class="element">

            <h2>iDRAC9</h2>
            <h3>lepsza wydajnośc pracy</h3>

            <p>Zdalne zarządzanie serwerem za pomocą najnowszego iDRAC9.</p>
        </div>
    </div>
    <div id="vue-root">

        <servers inline-template>
            <section class="server_view-container">
                <div class="imgs-container">

                    <div class="image">
                        <img src="/resources/gfx/opacity/t140.png" v-on:click="select(3)"
                             :class="selected===3?'is-active':''" v-scroll-to="'.server_view-title'">
                    </div>

                    <div class="image">
                        <img src="/resources/gfx/opacity/t340.png" v-on:click="select(4)"
                             :class="selected===4?'is-active':''" v-scroll-to="'.server_view-title'">
                    </div>

                    <div class="image">
                        <img src="/resources/gfx/opacity/r340.png" v-on:click="select(2)"
                             :class="selected===2?'is-active':''" v-scroll-to="'.server_view-title'">
                    </div>

                    <div class="image">
                        <img src="/resources/gfx/opacity/r240.png" v-cloak v-on:click="select(1)"
                             :class="selected===1?'is-active':''" v-scroll-to="'.server_view-title'">
                    </div>

                </div>

                <h1 class="server_view-title">Poznaj serwery PowerEdge</h1>

                <div class="radio_btn-container">
                    <img class="fading_line" src="resources/gfx/l_fading_line.png">
                    <ul class="radioBtn">
                        <li v-cloak v-on:click="select(1)" :class="selected===1?'is-active':''">
                            R240
                            <img class="bottom_line" src="resources/gfx/highlited_line.png">
                        </li>

                        <li v-on:click="select(2)" :class="selected===2?'is-active':''">
                            R340
                            <img class="bottom_line" src="resources/gfx/highlited_line.png">
                        </li>

                        <li v-on:click="select(3)" :class="selected===3?'is-active':''">
                            T140
                            <img class="bottom_line" src="resources/gfx/highlited_line.png">
                        </li>

                        <li v-on:click="select(4)" :class="selected===4?'is-active':''">
                            T340
                            <img class="bottom_line" src="resources/gfx/highlited_line.png">
                        </li>
                    </ul>
                    <img class="fading_line" src="resources/gfx/r_fading_line.png">
                </div>


                <div v-if="selected===1" class="server-view container" v-cloak :class="selected===1?'is-active':''">
                    <div class="content">
                        <div class="description-container">
                            <div class="description">
                                <h2>
                                    <span class="small">PowerEdge</span>
                                    <span class="big">R240</span>
                                </h2>
                                <div class="image">
                                    <img src="/resources/gfx/foto/r240.png" alt="">
                                </div>
                                <p>
                                    Najnowszy jednoprocesorowy serwer typu Rack o wysokości 1U Dell PowerEdge R240
                                    został zaprojektowany tak, aby spełnić wymagania małych oraz średnich firm przy
                                    zastosowaniu nowej generacji procesorów Intel Xeon E-2100 oraz szybkich pamięci RAM
                                    DDR4. Możliwość instalacji 4 dysków typu Hot-Plug pozwala na uzyskanie 56TB
                                    przestrzeni dyskowej, a wydajny kontroler sprzętowy PERC gwarantuje bezpieczeństwo
                                    posiadanych danych. Dodatkowo uznane na świecie wsparcie techniczne firmy Dell
                                    zapewnia niezawodne działanie oraz ciągłość pracy serwera.
                                </p>
                            </div>
                            <div class="bottom_radio_btn">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(2)" :class="selected===2?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(3)" :class="selected===3?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T140
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(4)" :class="selected===4?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="specification-container">
                            <table>
                                <tr class="title">
                                    <td>Obudowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Głębokość</td>
                                    <td> 595.63 mm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rodzaj</td>
                                    <td>Rack 1U</td>
                                </tr>
                                <tr class="title">
                                    <td>Procesor</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Rodzina układów</td>
                                    <td>Intel® Xeon® E-2100</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>8 - 12 MB / CPU</td>
                                </tr>
                                <tr class="title">
                                    <td>Pamięć</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Typ pamięci</td>
                                    <td>DDR4</td>
                                </tr>
                                <tr>
                                    <td>Max. Taktowanie</td>
                                    <td>2666 MHz</td>
                                </tr>
                                <tr>
                                    <td> Max. Pojemność</td>
                                    <td>64 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Kontroler RAID</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Programowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td>Sprzętowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td> Poziomy RAID</td>
                                    <td>0/1/10/5/50/6/60</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>Max. 2 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Przestrzeń dyskowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Rodzaj nośników</td>
                                    <td>SATA, NLSAS, SAS, SSD</td>
                                </tr>
                                <tr>
                                    <td> Ilość nośników</td>
                                    <td>4 x 3.5"</td>
                                </tr>
                                <tr>
                                    <td>Max.Przestrzeń</td>
                                    <td>56 TB</td>
                                </tr>
                                <tr>
                                    <td>Sposób montażu</td>
                                    <td>Hot-Plug</td>
                                </tr>
                                <tr class="title">
                                    <td>Gniazda rozszerzeń</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PCIe 3.0</td>
                                    <td>max. 2</td>
                                </tr>
                                <tr class="title">
                                    <td>Podzespoły zintegrowane</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Karta sieciowa</td>
                                    <td>1 Gb Dual Port</td>
                                </tr>
                                <tr>
                                    <td>Zdalne zarządzanie</td>
                                    <td>iDRAC9</td>
                                </tr>
                                <tr class="title">
                                    <td>Zasilanie</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Redundancja</td>
                                    <td>niedostępna</td>
                                </tr>
                                <tr>
                                    <td>Możliwe warianty</td>
                                    <td>1 x 250W</td>
                                </tr>
                                <tr class="title">
                                    <td>Obsługiwane systemy operacyjne</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Linux</td>
                                    <td> Red Hat, SUSE, Ubuntu</td>
                                </tr>
                                <tr>
                                    <td>Windows Server</td>
                                    <td>2016</td>
                                </tr>
                                <tr>
                                    <td>Wirtualizacja</td>
                                    <td>VMware, Hyper-V, Citrix</td>
                                </tr>
                            </table>
                            <div class="bottom_radio_btn is-on-mobile">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(2)" :class="selected===2?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(3)" :class="selected===3?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T140
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(4)" :class="selected===4?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="selected===2" class="server-view container" :class="selected===2?'is-active':''">
                    <div class="content">
                        <div class="description-container">
                            <div class="description">
                                <h2>
                                    <span class="small">PowerEdge</span>
                                    <span class="big">R340</span>
                                </h2>
                                <div class="image">
                                    <img src="/resources/gfx/foto/r340.png" alt="">
                                </div>
                                <p>
                                    Nowy serwer Dell PowerEdge R340 to jednoprocesorowa jednostka wyposażona w najnowszą
                                    generację procesorów Intel Xeon E-2100, szybką pamięć operacyjną taktowaną 2666MHz
                                    oraz obudowę do 8 dysków 2.5 calowych. W porównaniu do poprzednika oferuje możliwość
                                    instalacji dwóch dysków rozruchowych M.2 na karcie BOSS co radykalnie wpływa na
                                    działanie systemu jak i serwera. Zastosowanie redundantnych podzespołów takich jak
                                    zasilacz wpływa na bezpieczną i nieprzerwaną pracę urządzenia, a uznane na świecie
                                    wsparcie techniczne firmy Dell pomoc w każdej sytuacji.
                                </p>
                            </div>
                            <div class="bottom_radio_btn">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(1)" :class="selected===1?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R240
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(3)" :class="selected===3?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T140
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(4)" :class="selected===4?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="specification-container">
                            <table>
                                <tr class="title">
                                    <td>Obudowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Głębokość</td>
                                    <td>595.63 mm</td>
                                </tr>
                                <tr>
                                    <td>Rodzaj</td>
                                    <td>Rack 1U</td>
                                </tr>
                                <tr class="title">
                                    <td>Procesor</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Rodzina układów</td>
                                    <td>Intel® Xeon® E-2100</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>8 - 12 MB / CPU</td>
                                </tr>
                                <tr class="title">
                                    <td>Pamięć</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Typ pamięci</td>
                                    <td>DDR4</td>
                                </tr>
                                <tr>
                                    <td>Max. Taktowanie</td>
                                    <td>2666 MHz</td>
                                </tr>
                                <tr>
                                    <td>Max. Pojemność</td>
                                    <td>64 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Kontroler RAID</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Programowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td>Sprzętowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td>Poziomy RAID</td>
                                    <td>0/1/10/5/50/6/60</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>Max. 2 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Przestrzeń dyskowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Rodzaj nośników</td>
                                    <td>SATA, NLSAS, SAS, SSD</td>
                                </tr>
                                <tr>
                                    <td>Ilość nośników</td>
                                    <td>4 x 3.5" lub 8 x 2.5"</td>
                                </tr>
                                <tr>
                                    <td>Max.Przestrzeń</td>
                                    <td>56 TB</td>
                                </tr>
                                <tr>
                                    <td>Sposób montażu</td>
                                    <td>Hot-Plug</td>
                                </tr>
                                <tr class="title">
                                    <td>Gniazda rozszerzeń</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PCIe 3.0</td>
                                    <td>max. 2</td>
                                </tr>
                                <tr class="title">
                                    <td>Podzespoły zintegrowane</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Karta sieciowa</td>
                                    <td>1 Gb Dual Port</td>
                                </tr>
                                <tr>
                                    <td>Zdalne zarządzanie</td>
                                    <td>iDRAC9</td>
                                </tr>
                                <tr class="title">
                                    <td>Zasilanie</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Redundancja</td>
                                    <td>dostępna</td>
                                </tr>
                                <tr>
                                    <td>Możliwe warianty</td>
                                    <td>1 - 2 x 350W / 550W (Hot-Plug)</td>
                                </tr>
                                <tr class="title">
                                    <td>Obsługiwane systemy operacyjne</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Linux</td>
                                    <td>Red Hat, SUSE, Ubuntu</td>
                                </tr>
                                <tr>
                                    <td>Windows Server</td>
                                    <td>2016</td>
                                </tr>
                                <tr>
                                    <td>Wirtualizacja</td>
                                    <td>VMware, Hyper-V, Citrix</td>
                                </tr>
                            </table>
                            <div class="bottom_radio_btn is-on-mobile">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(1)" :class="selected===1?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R240
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(3)" :class="selected===3?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T140
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(4)" :class="selected===4?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="selected===3" class="server-view container" :class="selected===3?'is-active':''">
                    <div class="content">
                        <div class="description-container">
                            <div class="description">
                                <h2>
                                    <span class="small">PowerEdge</span>
                                    <span class="big">T140</span>
                                </h2>
                                <div class="image">
                                    <img src="/resources/gfx/foto/t140.png" alt="">
                                </div>
                                <p>
                                    Najnowszy jednoprocesorowy serwer Dell PowerEdge T140, stworzony z myślą o małych
                                    biurach idealnie zaspokoi oczekiwania tej grupy użytkowników, zapewniając
                                    odpowiednią wydajność i podstawowe funkcjonalności. Wszystko to w niewielkiej
                                    obudowie typu Tower w połączeniu z najnowszymi procesorami Intel Xeon E-2100 o
                                    wyższym maksymalnym taktowaniu oraz większą ilość rdzeni w porównaniu z poprzednią
                                    generacją. Zastosowanie najnowszych rozwiązań, jak i wsparcie techniczne firmy Dell
                                    zapewnia niezawodność oraz bezpieczeństwo na najwyższym poziomie.
                                </p>
                            </div>
                            <div class="bottom_radio_btn">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(1)" :class="selected===1?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R240
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(2)" :class="selected===2?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(4)" :class="selected===4?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="specification-container">
                            <table>
                                <tr class="title">
                                    <td>Obudowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Głębokość</td>
                                    <td>454 mm</td>
                                </tr>
                                <tr>
                                    <td>Rodzaj</td>
                                    <td>Tower</td>
                                </tr>
                                <tr class="title">
                                    <td>Procesor</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Rodzina układów</td>
                                    <td>Intel® Xeon® E-2100</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>8 - 12 MB / CPU</td>
                                </tr>
                                <tr class="title">
                                    <td>Pamięć</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Typ pamięci</td>
                                    <td>DDR4</td>
                                </tr>
                                <tr>
                                    <td>Max. Taktowanie</td>
                                    <td>2666 MHz</td>
                                </tr>
                                <tr>
                                    <td>Max. Pojemność</td>
                                    <td>64 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Kontroler RAID</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Programowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td>Sprzętowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td>Poziomy RAID</td>
                                    <td>0/1/10/5/50/6/60</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>Max. 2 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Przestrzeń dyskowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Rodzaj nośników</td>
                                    <td>SATA, NLSAS</td>
                                </tr>
                                <tr>
                                    <td>Ilość nośników</td>
                                    <td>4 x 3.5"</td>
                                </tr>
                                <tr>
                                    <td>Max.Przestrzeń</td>
                                    <td>16 TB</td>
                                </tr>
                                <tr>
                                    <td>Sposób montażu</td>
                                    <td>Cabled</td>
                                </tr>
                                <tr class="title">
                                    <td>Gniazda rozszerzeń</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PCIe 3.0</td>
                                    <td>max. 4</td>
                                </tr>
                                <tr class="title">
                                    <td>Podzespoły zintegrowane</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Karta sieciowa</td>
                                    <td>1 Gb Dual Port</td>
                                </tr>
                                <tr>
                                    <td>Zdalne zarządzanie</td>
                                    <td>iDRAC9</td>
                                </tr>
                                <tr class="title">
                                    <td>Zasilanie</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Redundancja</td>
                                    <td>niedostępna</td>
                                </tr>
                                <tr>
                                    <td>Możliwe warianty</td>
                                    <td>1 x 365W</td>
                                </tr>
                                <tr class="title">
                                    <td>Obsługiwane systemy operacyjne</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Linux</td>
                                    <td>Red Hat, SUSE, Ubuntu</td>
                                </tr>
                                <tr>
                                    <td>Windows Server</td>
                                    <td>2016</td>
                                </tr>
                                <tr>
                                    <td>Wirtualizacja</td>
                                    <td>VMware, Hyper-V, Citrix</td>
                                </tr>
                            </table>
                            <div class="bottom_radio_btn is-on-mobile">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(1)" :class="selected===1?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R240
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(2)" :class="selected===2?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(4)" :class="selected===4?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="selected===4" class="server-view container" :class="selected===4?'is-active':''">
                    <div class="content">
                        <div class="description-container">
                            <div class="description">
                                <h2>
                                    <span class="small">PowerEdge</span>
                                    <span class="big">T340</span>
                                </h2>
                                <div class="image">
                                    <img src="/resources/gfx/foto/t340.png" alt="">
                                </div>
                                <p>
                                    Niezawodny i skalowalny serwer jednoprocesorowy Dell PowerEdge T340 to idealne
                                    rozwiązanie dla rozwijających się działalności. Zastosowanie najnowszych procesorów
                                    Intel Xeon E-2100 gwarantuje wzrost wydajności sięgający 50%. Dodatkowo możliwość
                                    instalacji 8 dysków SATA, SAS, NLSAS lub SSD SATA w połączeniu z wydajnym
                                    kontrolerem sprzętowym PERC posiadającym do 2GB pamięci podręcznej zapewni
                                    bezpieczeństwo oraz szybki dostęp do danych firmy dla całej organizacji.
                                    Zastosowanie redundantnych kluczowych komponentów oraz uznane na świecie wsparcie
                                    firmy Dell gwarantuje maksymalną ciągłość pracy serwera.
                                </p>
                            </div>
                            <div class="bottom_radio_btn">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(1)" :class="selected===1?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R240
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(2)" :class="selected===2?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(3)" :class="selected===3?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T140
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="specification-container">
                            <table>
                                <tr class="title">
                                    <td>Obudowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Głębokość</td>
                                    <td>454 mm</td>
                                </tr>
                                <tr>
                                    <td>Rodzaj</td>
                                    <td>Tower</td>
                                </tr>
                                <tr class="title">
                                    <td>Procesor</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Rodzina układów</td>
                                    <td>Intel® Xeon® E-2100</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>8 - 12 MB / CPU</td>
                                </tr>
                                <tr class="title">
                                    <td>Pamięć</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ilość gniazd</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Typ pamięci</td>
                                    <td>DDR4</td>
                                </tr>
                                <tr>
                                    <td>Max. Taktowanie</td>
                                    <td>2666 MHz</td>
                                </tr>
                                <tr>
                                    <td>Max. Pojemność</td>
                                    <td>64 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Kontroler RAID</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Programowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td>Sprzętowy</td>
                                    <td>Dostępny</td>
                                </tr>
                                <tr>
                                    <td>Poziomy RAID</td>
                                    <td>0/1/10/5/50/6/60</td>
                                </tr>
                                <tr>
                                    <td>Pamięć cache</td>
                                    <td>Max. 2 GB</td>
                                </tr>
                                <tr class="title">
                                    <td>Przestrzeń dyskowa</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Rodzaj nośników</td>
                                    <td>SATA, NLSAS, SAS, SSD</td>
                                </tr>
                                <tr>
                                    <td>Ilość nośników</td>
                                    <td>8 x 3.5"</td>
                                </tr>
                                <tr>
                                    <td>Max.Przestrzeń</td>
                                    <td>112 TB</td>
                                </tr>
                                <tr>
                                    <td>Sposób montażu</td>
                                    <td>Hot-Plug</td>
                                </tr>
                                <tr class="title">
                                    <td>Gniazda rozszerzeń</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PCIe 3.0</td>
                                    <td>max. 4</td>
                                </tr>
                                <tr class="title">
                                    <td>Podzespoły zintegrowane</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Karta sieciowa</td>
                                    <td>1 Gb Dual Port</td>
                                </tr>
                                <tr>
                                    <td>Zdalne zarządzanie</td>
                                    <td>iDRAC9</td>
                                </tr>
                                <tr class="title">
                                    <td>Zasilanie</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Redundancja</td>
                                    <td>dostępna</td>
                                </tr>
                                <tr>
                                    <td>Możliwe warianty</td>
                                    <td>1 - 2 x 495W (Hot-Plug)</td>
                                </tr>
                                <tr class="title">
                                    <td>Obsługiwane systemy operacyjne</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Linux</td>
                                    <td>Red Hat, SUSE, Ubuntu</td>
                                </tr>
                                <tr>
                                    <td>Windows Server</td>
                                    <td>2016</td>
                                </tr>
                                <tr>
                                    <td>Wirtualizacja</td>
                                    <td>VMware, Hyper-V, Citrix</td>
                                </tr>
                            </table>
                            <div class="bottom_radio_btn is-on-mobile">
                                <span>Sprawdź również</span>
                                <ul class="radioBtn">
                                    <li v-on:click="select(1)" :class="selected===1?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R240
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(2)" :class="selected===2?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        R340
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                    <li v-on:click="select(3)" :class="selected===3?'is-active':''"
                                        v-scroll-to="'.server_view-title'">
                                        T140
                                        <img class="bottom_line" src="resources/gfx/highlited_line.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (empty($_COOKIE['cookieaccept'])) {
                    ?>
                    <transition name="fade">

                        <div class="cookie_info" v-on:click="closeCookies()" v-show="!cookiesAccepted">
                            <p>Korzystając z witryny zgadzasz się na zapis lub odczyt plików cookies.</p>
                            <img class="btn-cookie_info_close" src="/resources/gfx/close.svg" alt="close button">
                        </div>
                    </transition>
                    <?php
                }
                ?>
            </section>
        </servers>
    </div>
</main>

<footer>
    <div class="lines-container">
        <img class="line" src="resources/gfx/l_long_fading_line.png">
        <span>© 2019 Cocon. All right reserved</span>
        <img class="line" src="resources/gfx/r_long_fading_line.png">
    </div>

    <div class="images-container">
        <a href="https://premiumserwer.pl/">
            <img src="resources/gfx/logo_psr.svg" alt="logo premiumserwer.pl" style="width: 183px;">
        </a>
        <a href="http://cocon.pl/">
            <img src="resources/gfx/logo_cocon.svg" alt="logo cocon" style="width: 118px;" class="is-active">
        </a>
        <a href="https://digitalholding.pl/">
            <img src="resources/gfx/logo_dh.svg" alt="logo Digital Holding" style="width: 141px;">
        </a>
    </div>
</footer>

<script src="/bundles/js/main.js"></script>
</body>
</html>
