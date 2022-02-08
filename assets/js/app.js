App = {


    loading : document.getElementById('loading'),
    l_header : document.getElementById('h'),
    form : document.getElementById('form'),
    form_data : {},
    qr : new Image(),
    qr_online : null,
    canvas : document.getElementById('canvas'),
    ctx : document.getElementById('canvas').getContext('2d'),
    card_front : document.getElementById('card_work'),
    circle_qr : document.getElementById('circle'),
    result_image : document.getElementById('result'),
    three_canvas : document.getElementById('canvas2'),
    result_container : document.getElementById('result_container'),
    recaptcha : null,

    init : ()=>{

        App.canvas.width = App.card_front.naturalWidth;
        App.canvas.height = App.card_front.naturalHeight;

        
        App.ctx.drawImage(App.card_front, 0, 0);
        App.ctx.font = "70px Arial";

        document.getElementById('logo').addEventListener('click',()=>{

            document.getElementById('logo').style.animationName = 'scale';
        
            setTimeout(()=>{
                window.location.reload();
        
            },300)
            
        },false);

        window.onerror = ()=>{alert('Error Happend!\r\nTry again, maybe with a different browser!');window.location.reload();}

        App.recaptcha = grecaptcha.render('recaptcha', {
            'sitekey' : '6Lfe_lweAAAAAKBrJBoupVujrXa5_HRRMbxaED7J',
          });

    },

    genearetQr : async (data)=>{

        let q = await  new QRCode(document.getElementById("qr_card"),{
            width: 200,
            height: 200,
            colorLight : "#dce0e8",
            colordark: "#212422",
            text : "https://zsoltfehervari.xyz/public/covid-card/covid-card.php?"+data.uuid,
            });

        let qq = await  new QRCode(document.getElementById("qr_online"),{
            width: 200,
            height: 200,
            colordark: "#212422",
            text : "https://zsoltfehervari.xyz/public/covid-card/covid-card.php?"+data.uuid,
            });

            //let im = await new Image();
            App.qr.src = await document.querySelector('#qr_card').querySelector('canvas').toDataURL('image/png',1.0);
            App.qr_online = await document.querySelector('#qr_online').querySelector('canvas').toDataURL('image/png',1.0);

            return 0;

    },
    processingData : async ()=>{

        
        if(grecaptcha.getResponse(App.recaptcha).length > 0){

            App.form.style.display = 'none';
            App.loading.style.display = 'block';
            App.l_header.innerText = 'vaccinating...';
    
            App.form_data = await {
    
                title : document.getElementById('title').value,
                fname : document.getElementById('fname').value.toUpperCase(),
                sname : document.getElementById('sname').value.toUpperCase(),
                name : document.getElementById('sname').value.toUpperCase() + " " + document.getElementById('fname').value.toUpperCase(),
                date_of_birth : document.getElementById('date_of_birth').value.replace('-','.').replace('-','.'),
                f_v_date : document.getElementById('f_v_date').value.replace('-','.').replace('-','.'),
                s_v_date : document.getElementById('s_v_date').value.replace('-','.').replace('-','.'),
                t_v_date : document.getElementById('t_v_date').value.replace('-','.').replace('-','.'),
                manufacturer : document.getElementById('manufacturer').value,
                uuid : CryptoJS.MD5(this.name + Date.now().toString()).toString(),
                id : document.getElementById('id').value.toUpperCase(),
                cardnumber:  "V"+Math.floor(Math.random()*(99999999 - 10000000) + 10000000),  //"V13045610",
                
            }
    
            App.genearetQr(App.form_data)
            .then(r=>{
    
                $.ajax({
                    type:'post',
                    dataType:'json',
                    url:'./php/generate.php',
                    data:{
                        'uuid':App.form_data.uuid,
                        'name':App.form_data.name,
                        'title':App.form_data.title,
                        'fname':App.form_data.fname,
                        'sname':App.form_data.sname,
                        'date_of_birth' : App.form_data.date_of_birth,
                        'f_v_date':App.form_data.f_v_date,
                        's_v_date':App.form_data.s_v_date,
                        't_v_date':App.form_data.t_v_date,
                        'manufacturer':App.form_data.manufacturer, 
                        'card_id':App.form_data.id,
                        'qr':App.qr_online
                    },
                    success:(data)=>{
    
                        if(data){
                            setTimeout(App.generateCard,1000);
                        }
                            
                    }
                })
    
            })
    

        }else{
            alert('Recaptcha faild or empty!\r\nPlease try againe!');
        }
        
    },
    generateCard : ()=>{

        App.ctx.drawImage(App.qr,(App.card_front.naturalWidth - 710),500,570,570); /// qr 550
        App.ctx.drawImage(App.circle_qr,(App.canvas.width - 360) ,510,90,90); /// qr circle
        App.ctx.fillText(App.form_data.cardnumber,App.card_front.naturalWidth - 600 , 410, 400,);  /// card number

        App.ctx.font = "55px Arial";
        App.ctx.fillStyle = "#212422";

        App.ctx.fillText( App.form_data.sname, 75, 375, 400,);  ///sur name
        App.ctx.fillText( App.form_data.fname, 75, 625, 400,);  ///first name 
        App.ctx.fillText( App.form_data.id, 75, 1055, 400,);  /// id number
        App.ctx.fillText( App.form_data.f_v_date+".", 75, 1255, 400,);  /// date

        window.card = App.canvas.toDataURL('image/png',1.0);
        App.result_image.src = window.card;

        App.three_canvas.style.display = 'block';
        App.result_container.style.display = 'block';

        document.getElementById('link').href = "https://zsoltfehervari.xyz/public/covid-card/covid-card.php?"+App.form_data.uuid;
        document.getElementById('result_d').href = window.card;
        document.getElementById('result_d').download = App.form_data.fname + "_covidcard.png";
        document.getElementById('link').innerText = "Where the QR code pointing?";

        window.makeCard3D();
      
            //App.loading.style.display = 'none';
            //App.l_header.innerText = "You're virtually vaccinated.";

    
    }

}

window.addEventListener('load',App.init,false);