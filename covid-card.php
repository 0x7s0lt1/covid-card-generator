<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Védettségi igazolvány ellenőrzése</title>
        
        <meta name="viewport" content="width=device-width">
        <link href="./assets/images/favicon.ico" rel="Shortcut Icon">
        <link href="./assets/css/covid_card.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>Védettségi igazolvány ellenőrzés</h1>
                <h2>COVID-card validation</h2>
            </header>
            <article class="main">
                <div><div id="content">
            <div class="validity-icon">
                <div class="bg-valid"></div>
            </div>
            
            <div class="data-row">
                <div class="main-cell main-title">Kártya érvényessége/Card validity:</div>
                <div class="main-cell main-data valid-card">érvényes/valid</div>
                
        </div>
        
        <div class="data-row">
                <div class="main-cell main-title">Név/Name:</div>
                <div class="main-cell main-data "><span class="fname"></span>&nbsp;<span class="title"></span>&nbsp;<span class="sname"></span></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Születési dátum/Date of birth:</div>
                <div class="main-cell main-data "><span class="date_of_birth"></span></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Egyedi igazolványazonosító/Unique certificate identifier:</div>
                <div class="main-cell main-data ">URN:UVCI:01:HU:<span class="urn"></span>#2</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Célzott betegség vagy kórokozó/Disease or agent targeted:</div>
                <div class="main-cell main-data ">COVID-19</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyag vagy profilaxis/COVID-19 vaccine or prophylaxis:</div>
                <div class="main-cell main-data v_type"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyagtermék neve/COVID-19 vaccine product:</div>
                <div class="main-cell main-data v_bussines_name"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyag forgalombahozatali engedély jogosultja vagy oltóanyag gyártója/COVID-19 vaccine marketing authorisation holder or manufacturer:</div>
                <div class="main-cell main-data manufacturer"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Dózis sorszáma - sorozat hossza/Number in a series of doses - The overall number of doses in the series:</div>
                <div class="main-cell main-data ">3/3</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltás időpontja, a legkésőbbi dózis beadásának dátumát feltüntetve/Date of vaccination:</div>
                <div class="main-cell main-data t_v_date"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltás tagállam/Member State or third country in which the vaccine was administered:</div>
                <div class="main-cell main-data ">HU</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Igazolvány kibocsátója/Certificate issuer:</div>
                <div class="main-cell main-data ">Budapest Főváros Kormányhivatala</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">QR kód/QR Code:</div>
        
                <div class="main-cell main-data"><img src="#"></div>
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Név/Name:</div>
                <div class="main-cell main-data "><span class="fname"></span>&nbsp;<span class="title"></span>&nbsp;<span class="sname"></span></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Születési dátum/Date of birth:</div>
                <div class="main-cell main-data "><span class="date_of_birth"></span></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Egyedi igazolványazonosító/Unique certificate identifier:</div>
                <div class="main-cell main-data ">URN:UVCI:01:HU:<span class="urn"></span>#2</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Célzott betegség vagy kórokozó/Disease or agent targeted:</div>
                <div class="main-cell main-data ">COVID-19</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyag vagy profilaxis/COVID-19 vaccine or prophylaxis:</div>
                <div class="main-cell main-data v_type"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyagtermék neve/COVID-19 vaccine product:</div>
                <div class="main-cell main-data v_bussines_name"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyag forgalombahozatali engedély jogosultja vagy oltóanyag gyártója/COVID-19 vaccine marketing authorisation holder or manufacturer:</div>
                <div class="main-cell main-data manufacturer"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Dózis sorszáma - sorozat hossza/Number in a series of doses - The overall number of doses in the series:</div>
                <div class="main-cell main-data ">2/2</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltás időpontja, a legkésőbbi dózis beadásának dátumát feltüntetve/Date of vaccination:</div>
                <div class="main-cell main-data s_v_date"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltás tagállam/Member State or third country in which the vaccine was administered:</div>
                <div class="main-cell main-data ">HU</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Igazolvány kibocsátója/Certificate issuer:</div>
                <div class="main-cell main-data ">Budapest Főváros Kormányhivatala</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">QR kód/QR Code:</div>
        
                <div class="main-cell main-data"><img src="#"></div>
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Név/Name:</div>
                <div class="main-cell main-data "><span class="fname"></span>&nbsp;<span class="title"></span>&nbsp;<span class="sname"></span></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Születési dátum/Date of birth:</div>
                <div class="main-cell main-data "><span class="date_of_birth"></span></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Egyedi igazolványazonosító/Unique certificate identifier:</div>
                <div class="main-cell main-data ">URN:UVCI:01:HU:<span class="urn"></span>#7</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Célzott betegség vagy kórokozó/Disease or agent targeted:</div>
                <div class="main-cell main-data ">COVID-19</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyag vagy profilaxis/COVID-19 vaccine or prophylaxis:</div>
                <div class="main-cell main-data v_type"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyagtermék neve/COVID-19 vaccine product:</div>
                <div class="main-cell main-data v_bussines_name"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltóanyag forgalombahozatali engedély jogosultja vagy oltóanyag gyártója/COVID-19 vaccine marketing authorisation holder or manufacturer:</div>
                <div class="main-cell main-data manufacturer"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Dózis sorszáma - sorozat hossza/Number in a series of doses - The overall number of doses in the series:</div>
                <div class="main-cell main-data ">1/2</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltás időpontja, a legkésőbbi dózis beadásának dátumát feltüntetve/Date of vaccination:</div>
                <div class="main-cell main-data f_v_date"></div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Oltás tagállam/Member State or third country in which the vaccine was administered:</div>
                <div class="main-cell main-data ">HU</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">Igazolvány kibocsátója/Certificate issuer:</div>
                <div class="main-cell main-data ">Budapest Főváros Kormányhivatala</div>
                
        </div>
            <div class="data-row">
                <div class="main-cell main-title">QR kód/QR Code:</div>
                
                <div class="main-cell main-data"><img src="#"></div>
        </div>
    </div>
            </div></article>
            <footer>
                <div class="footer-block">
                    <div class="bg-footer_address"></div>
                    <div>Országos Kórházi Főigazgatóság<br>1125 Budapest, Diós árok 3.</div>
                </div>
                <div class="footer-block">
                    <div class="bg-footer_phone"></div>
                    <div>+36 1 920 1050</div>
                </div>
                <div class="footer-block">
                    <div class="bg-footer_email"></div>
                    <div>
                        <a href="mailto:helpdesk.eeszt@okfo.gov.hu" class="footer-email">helpdesk.eeszt@okfo.gov.hu</a>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            $.ajax({
                        type:'post',
                        dataType:'json',
                        url:'./php/generate.php',
                        data:{'uuid': window.location.search.substr(1),'v':true},
                        success:(data)=>{

                            document.querySelectorAll('.fname').forEach(i=>{
                                i.innerText = data.fname
                            })
                            document.querySelectorAll('.sname').forEach(i=>{
                                i.innerText = data.sname
                            })
                            document.querySelectorAll('.title').forEach(i=>{
                                i.innerText = data.title
                            })
                            document.querySelectorAll('.urn').forEach(i=>{
                                i.innerText = data.uuid.toUpperCase()
                            })
                            document.querySelectorAll('.date_of_birth').forEach(i=>{
                                i.innerText = data.date_of_birth
                            })
                            document.querySelectorAll('.manufacturer').forEach(i=>{
                                i.innerText = data.v_manufacturer;
                            })
                            document.querySelectorAll('.v_bussines_name').forEach(i=>{
                                i.innerText = data.v_bussines_name;
                            })
                            document.querySelectorAll('.v_type').forEach(i=>{
                                i.innerText = data.v_type;
                            })
							document.querySelectorAll('img').forEach(i=>{
                                i.src = data.qr;
                            })

                            document.querySelector('.f_v_date').innerText = data.f_v_date;
                            document.querySelector('.s_v_date').innerText = data.s_v_date;
                            document.querySelector('.t_v_date').innerText = data.t_v_date;


                        }
                    })
        </script>
</body>
</html>