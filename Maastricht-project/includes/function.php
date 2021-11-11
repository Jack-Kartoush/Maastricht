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
            case 3:
                cannon();
                  break;
        }
    }

    function TestPage(){
        echo("not a page");
    }

    function drieMuskPage(){
        echo("
            <div class='text-container'>
           
                <div class='text-content'>
                    <p>Charles de Batz de Castelmore, graaf van Artagnan was een 'eerste musketier' in het leger van de Franse koning Lodewijk XIV. 
                    Hij stierf tijdens het beleg van Maastricht (1673). Toen Charles' broer overleed erfde hij de titel Graaf van Artagnan (Comte d'Artagnan). 
                    In 1673 leidde de 62-jarige D'Artagnan als gardeofficier van Lodewijk XIV persoonlijk de belegering van Maastricht.  
                    Toen de Franse musketiers de stad bestormden kwam hij bij de Tongersepoort om het leven door een musketkogel door zijn keel.
                    D'Artagnans graf is onbekend, maar de Franse historica Odile Bordaz, auteur van een biografie over D'Artagnan[1] en directrice van het museum van Vincennes,
                    beweerde in 2008 dat hij mogelijk begraven ligt op de begraafplaats van de Sint-Peter-en-Pauluskerk in Wolder, 
                    dat tegenwoordig als wijk deel uitmaakt van Maastricht.</p>
                    <div class='fun-fotos'>
                    <img src='./img/QRC-vier-musketier.jpg' alt='Error' id='Fun-ID'> 
                    </div>
                 </div>
                    <div class='fun-fotos'>
                        <img src='./img/Vierde-musketier.jpg' alt='Error: 0-fun.line-40' id='Fun-ID'> 
                    </div>
                    
              </div>   
           
        ");
    }
    function SintServaasbrug(){
        echo("
        <div class='text-container2'>
        <div class='fun-fotos'>
                    <img src='./img/sub-brug.jpg' alt='new monument' id='card'> 
                </div>
           <div class='text-content'>
          
               <p> de brug werd tussen 1280 en 1298 gebouwd in opdracht van het kapittel van Sint-Servaas, ter vervanging van de in 1275 ingestorte vorige brug.
                Waarschijnlijker is echter dat de ingestorte brug een (vroeg)middeleeuwse opvolger van de Romeinse brug was,
                die mogelijk op dezelfde locatie als de huidige brug lag, in het verlengde van de maastrichter Brugstraat.
                Het geld voor de bouw van een nieuwe brug na 1275 was voor een deel afkomstig van een aflaat,
                waarvoor op 29 januari 1284 te Orvieto (Italië) negentien bisschoppen toestemming verleenden. 
                In de toen opgemaakte oorkonde staat te lezen dat de brug – anders dan zijn voorganger – van steen zou zijn.
                egin 20e eeuw begon het steeds duidelijker te worden dat de brug niet meer kon voldoen aan de eisen die het toenemende verkeer aan de brug stelde. 
                In de jaren twintig was het gemeentebestuur van plan om de brug geheel af te breken en te vervangen door een nieuwe (naar plannen van o.a. G. de Hoog).
                Aanleiding hiervoor waren diverse instortingen van gedeelten van de brug in 1926, 1928 en 1931. Het Rijk blokkeerde deze plannen echter.
                Uiteindelijk werd na veel protest van de Maastrichtse bevolking besloten om de oude brug te behouden en ongeveer 300 meter noordelijker, ter hoogte van de Markt, een tweede brug te bouwen.</p>
            </div>
            <div class='fun-fotos2'>
            <img src='./IMG/main-brug.jpg' alt='new monument' id='card'> 
             </div>
           
            <div class='text-content'>
            <div class='fun-fotos-QRC'>
            <img src='./img/QRC-brug.jpg' alt='Error' id='Fun-ID'> 
            </div>
                <p> De brug heeft in de Tweede Wereldoorlog ernstig te lijden gehad. 
                Op 10 mei 1940 werd het stalen gedeelte aan de kant van Wyck op bevel van de Nederlandse legerleiding opgeblazen. 
                De rest van de brug liep daarbij nauwelijks schade op. 
                De opmars van het Duitse leger werd hier echter nauwelijks door vertraagd en de slag om Maastricht was dan ook in een paar uur voorbij. 
                De ontstane opening kon door de Duitsers gemakkelijk worden gedicht en reeds op 11 mei lag er een provisorische noodbrug die op 
                28 augustus werd vervangen door een definitieve noodbrug. </p>
                
            </div>
           
        </div>
        ");
    }

    function muurMaastricht(){
        echo("
        <div class='text-container2'>
           <div class='fun-fotos'>
              <img src='./img/muurmaas.jpg' alt='new monument' id='card3'> 
            </div>
        <div class='text-content'>
             
               <p> De stad is vanaf de Romeinse tijd tot na 1867 (toen de vestingstatus werd opgeheven) ommuurd en versterkt geweest. 
                Door de eeuwen heen is er voortdurend gebouwd aan wallen, muren, poorten, torens, bastions en andere fortificaties. 
                Grofweg kan men spreken over vier bouwperiodes: de Romeins-Keltische versterkingen, de vroegmiddeleeuwse versterkingen,
              
                 <div class='fun-fotos2'>
                   <img src='./img/kastelen-voldiagram.jpg' alt='new monument' id='card3'> 
                 </div>
                 <br>
             <div class='fun-fotos-QRC'>
                 <img src='./img/QRC-muurmaas.jpg' alt='Error' id='#card3'> 
             </div>
             <br>
           de middeleeuwse stadsmuren en de 16e tot 19e-eeuwse buitenwerken. 
           Eeuwenlang stond de vestingstad Maastricht bekend als het bolwerk der Nederlanden, een vooruitgeschoven post van de Republiek der Zeven Verenigde Nederlanden. 
           Hoewel in de 19e eeuw grote delen van de stadsmuren.
           
           (inclusief alle stadspoorten, op een na) en buitenwerken zijn geslecht,  
           vormen de overgebleven vestingwerken 
   
           (in totaal ca. 150 objecten met 30.000 m2 muurwerk en 11 km gangenstelsels). 
            een voor Europa unieke staalkaart van een versterkte stad door de eeuwen heen. 
            
       </div>
    
      </div>
        ");
    }
    function cannon(){
        echo("
        <div class='text-container2'>
        <div class='fun-fotos'>
        <img src='./img/vield-cannon.jpg' alt='new monument' id='card3'> 
       </div>
        <div class='text-content'>
                
               <p> De stad is vanaf de Romeinse tijd tot na 1867 (toen de vestingstatus werd opgeheven) ommuurd en versterkt geweest. 
                Door de eeuwen heen is er voortdurend gebouwd aan wallen, muren, poorten, torens, bastions en andere fortificaties. 
                Grofweg kan men spreken over vier bouwperiodes: de Romeins-Keltische versterkingen, de vroegmiddeleeuwse versterkingen,
                
                 <div class='fun-fotos2'>
            <img src='./img/cannon.jpeg' alt='new monument' id='card3'> 
           </div>
           de middeleeuwse stadsmuren en de 16e tot 19e-eeuwse buitenwerken. 
           Eeuwenlang stond de vestingstad Maastricht bekend als het bolwerk der Nederlanden, een vooruitgeschoven post van de Republiek der Zeven Verenigde Nederlanden. 
           Hoewel in de 19e eeuw grote delen van de stadsmuren (inclusief alle stadspoorten, op een na) en buitenwerken zijn geslecht,  
           vormen de overgebleven vestingwerken (in totaal ca. 150 objecten met 30.000 m2 muurwerk en 11 km gangenstelsels). 
            een voor Europa unieke staalkaart van een versterkte stad door de eeuwen heen. 
            </div>
            
        </div>
        ");

    }

 
?>