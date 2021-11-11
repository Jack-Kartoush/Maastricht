<?php

    function HistoryInfo($contentID){
        switch($contentID){
            default:
                TestPage();
                break;
            case 0:
                drieMuskPage();
                break;
            case 1:
                SintServaasbrug();
                break;
            case 2:
                muurMaastricht();
                 break;
        }
    }

    function TestPage(){
        echo("not a page");
    }

    function drieMuskPage(){
        echo("
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-3'>
                    <h1>De Vierde musketier</h1>
                    Charles de Batz de Castelmore, graaf van Artagnan was een 'eerste musketier' in het leger van de Franse koning Lodewijk XIV. </br>
                    Hij stierf tijdens het beleg van Maastricht (1673). Toen Charles' broer overleed erfde hij de titel Graaf van Artagnan (Comte d'Artagnan). </br>
                    In 1673 leidde de 62-jarige D'Artagnan als gardeofficier van Lodewijk XIV persoonlijk de belegering van Maastricht.  </br>
                    Toen de Franse musketiers de stad bestormden kwam hij bij de Tongersepoort om het leven door een musketkogel door zijn keel. </br>
                    D'Artagnans graf is onbekend, maar de Franse historica Odile Bordaz, auteur van een biografie over D'Artagnan[1] en directrice van het museum van Vincennes, </br>
                    beweerde in 2008 dat hij mogelijk begraven ligt op de begraafplaats van de Sint-Peter-en-Pauluskerk in Wolder,  </br>
                    dat tegenwoordig als wijk deel uitmaakt van Maastricht.
                    
                    </div>
                    <div class='col-md-4'>
                        <img src='./IMG/musket1.jpg' alt='new monument' width='100%' height='100%'> 
                    </div>
                </div>
            </div>
        ");
    }
    function SintServaasbrug(){
        echo("
        <div class='container-fluid'>
            <h1>Sint Servaasbrug </h1>
            <div class='row'>
                <div class='col-md-4'>
                de brug werd tussen 1280 en 1298 gebouwd in opdracht van het kapittel van Sint-Servaas, ter vervanging van de in 1275 ingestorte vorige brug. </br>
                Waarschijnlijker is echter dat de ingestorte brug een (vroeg)middeleeuwse opvolger van de Romeinse brug was, </br>
                die mogelijk op dezelfde locatie als de huidige brug lag, in het verlengde van de maastrichter Brugstraat. </br>
                Het geld voor de bouw van een nieuwe brug na 1275 was voor een deel afkomstig van een aflaat, </br>
                waarvoor op 29 januari 1284 te Orvieto (Italië) negentien bisschoppen toestemming verleenden.  </br>
                In de toen opgemaakte oorkonde staat te lezen dat de brug – anders dan zijn voorganger – van steen zou zijn. </br>
                egin 20e eeuw begon het steeds duidelijker te worden dat de brug niet meer kon voldoen aan de eisen die het toenemende verkeer aan de brug stelde.  </br>
                In de jaren twintig was het gemeentebestuur van plan om de brug geheel af te breken en te vervangen door een nieuwe (naar plannen van o.a. G. de Hoog). </br>
                Aanleiding hiervoor waren diverse instortingen van gedeelten van de brug in 1926, 1928 en 1931. Het Rijk blokkeerde deze plannen echter. </br>
                Uiteindelijk werd na veel protest van de Maastrichtse bevolking besloten om de oude brug te behouden en ongeveer 300 meter noordelijker, ter hoogte van de Markt, een tweede brug te bouwen. </br>
                </div>
                <div class='col-md-4'>
                    <img src='./IMG/brug2.jpg' alt='new monument' width='100%' height='100%'> 
                </div>
            </div>
            <div class='row'>
                <div class='col-md-4'>
                De brug heeft in de Tweede Wereldoorlog ernstig te lijden gehad. </br>
                Op 10 mei 1940 werd het stalen gedeelte aan de kant van Wyck op bevel van de Nederlandse legerleiding opgeblazen. </br>
                De rest van de brug liep daarbij nauwelijks schade op. </br>
                De opmars van het Duitse leger werd hier echter nauwelijks door vertraagd en de slag om Maastricht was dan ook in een paar uur voorbij. </br>
                De ontstane opening kon door de Duitsers gemakkelijk worden gedicht en reeds op 11 mei lag er een provisorische noodbrug die op 
                28 augustus werd vervangen door een definitieve noodbrug. </br>
                </div>
            </div>
            <div class='row'>
            <div class='col-md-6'>
                <img src='./IMG/brug1.jpg' alt='new monument' width='50%' height='100%'> 
            </div>
        </div>
        </div>
        ");
    }

    function muurMaastricht(){
        echo("
        <div class='container-fluid'>
            <div class='row'>
                <h1>/Vestingwerken van Maastricht </h1>
                De stad is vanaf de Romeinse tijd tot na 1867 (toen de vestingstatus werd opgeheven) ommuurd en versterkt geweest. </br>
                Door de eeuwen heen is er voortdurend gebouwd aan wallen, muren, poorten, torens, bastions en andere fortificaties. </br>
                Grofweg kan men spreken over vier bouwperiodes: de Romeins-Keltische versterkingen, de vroegmiddeleeuwse versterkingen,
                 de middeleeuwse stadsmuren en de 16e tot 19e-eeuwse buitenwerken. </br>
                Eeuwenlang stond de vestingstad Maastricht bekend als het bolwerk der Nederlanden, een vooruitgeschoven post van de Republiek der Zeven Verenigde Nederlanden. </br>
                Hoewel in de 19e eeuw grote delen van de stadsmuren (inclusief alle stadspoorten, op een na) en buitenwerken zijn geslecht,  
                vormen de overgebleven vestingwerken (in totaal ca. 150 objecten met 30.000 m2 muurwerk en 11 km gangenstelsels). </br>
                 een voor Europa unieke staalkaart van een versterkte stad door de eeuwen heen. </br>

            </div>
        </div>
        ");
    }
 
?>