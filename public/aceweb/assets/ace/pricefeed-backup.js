const url = 'wss://snappy.ace2u.com/socket.io/?EIO=3socket.io/?EIO=3&transport=websocket';
let socket;

function changeprice(price){
  var pricelast = price*0.5;
  console.log("Price / (gram) :"+price+" Jika 0.5 gram ="+pricelast);
}

function connect() {
  socket = new WebSocket(url);

  socket.addEventListener('open', (event) => {
    console.log('WebSocket connection opened');
  });

  socket.addEventListener('message', (event) => {
    var text    = event.data.replace(42,'');
            try {
              var json    = JSON.parse(text);
              if(json[0]=='gpweb'){
              document.getElementById("datepricefeed").innerHTML = json[1].gp_createDate;
              
              document.getElementById("datepricefeed-mobile").innerHTML = json[1].gp_createDate;
               var oldbuy               = document.getElementById('gp_livebuyprice_gm').innerHTML;
               var oldbuyrmtael         = document.getElementById('gp_livebuyprice_tael').innerHTML;
               var gp_livebuyprice_tael = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
               //var gp_livebuyprice_gm   = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
               var gp_livebuyprice_gm   = json[1].gp_livebuyprice_gm.toFixed(3);
               
               //var gp_livebuyprice_gm_mobile = (Math.round(json[1].gp_livebuyprice_gm_mobile * 100) / 100).toFixed(3);
               var gp_livebuyprice_gm_mobile = json[1].gp_livebuyprice_gm.toFixed(3);

               


               var oldsell               = document.getElementById('gp_livesellprice_gm').innerHTML;
               var oldsellrmtael         = document.getElementById('gp_livesellprice_tael').innerHTML;
               var gp_livesellprice_tael = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
              // var gp_livesellprice_gm   = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
               var gp_livesellprice_gm   = json[1].gp_livesellprice_gm.toFixed(3);

               //console.log("waktu : "+json[1].gp_createDate+" Harga : "+json[1].gp_livesellprice_gm.toFixed(3));

               changeprice(json[1].gp_livesellprice_gm.toFixed(3));
               
               


              
               /* for condition gp_livebuyprice_tael*/
               if(gp_livebuyprice_tael > oldbuyrmtael){
                 document.getElementById("iconlivebuytael").style.color = "#1ac69c";
                 document.getElementById("iconlivebuytael").className = "fa fa-long-arrow-up";
                 document.getElementById("gp_livebuyprice_tael").style.color = "#1ac69c";
                 document.getElementById("gp_livebuyprice_tael_mobile").style.color = "#1ac69c";
                 document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
                 document.getElementById("gp_livebuyprice_tael_mobile").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
               }
               if(gp_livebuyprice_tael < oldbuyrmtael){
                 document.getElementById("iconlivebuytael").style.color = "red";
                 document.getElementById("iconlivebuytael").className = "fa fa-long-arrow-down";
                 document.getElementById("gp_livebuyprice_tael").style.color = "red";
                 document.getElementById("gp_livebuyprice_tael_mobile").style.color = "red";
                 document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
                 document.getElementById("gp_livebuyprice_tael_mobile").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);

               }
               if(gp_livebuyprice_tael == oldbuyrmtael){
                document.getElementById("iconlivebuytael").className = "";
                document.getElementById("gp_livebuyprice_tael").style.color = "black";
                 document.getElementById("gp_livebuyprice_tael_mobile").style.color = "black";
                 document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
                 document.getElementById("gp_livebuyprice_tael_mobile").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);

               }
               /*ENd Condition*/

               if(gp_livebuyprice_gm > oldbuy){
                
                 document.getElementById("gp_livebuyprice_gm").style.color = "#1ac69c";
                 document.getElementById("gp_livebuyprice_gm_mobile").style.color = "#1ac69c";
                 document.getElementById("iconlivebuy").style.color = "#1ac69c";
                 document.getElementById("iconlivebuy").className = "fa fa-long-arrow-up";
                 //document.getElementById("gp_livebuyprice_gm").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                 document.getElementById("gp_livebuyprice_gm").innerHTML = json[1].gp_livebuyprice_gm.toFixed(3);
                 //document.getElementById("gp_livebuyprice_gm_mobile").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                 document.getElementById("gp_livebuyprice_gm_mobile").innerHTML = json[1].gp_livebuyprice_gm.toFixed(3);

               }if(gp_livebuyprice_gm < oldbuy){
                 document.getElementById("gp_livebuyprice_gm").style.color = "red";
                 document.getElementById("gp_livebuyprice_gm_mobile").style.color = "red";
                 document.getElementById("iconlivebuy").style.color = "red";
                 document.getElementById("iconlivebuy").className = "fa fa-long-arrow-down";

                 //document.getElementById("gp_livebuyprice_gm").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                 document.getElementById("gp_livebuyprice_gm").innerHTML = json[1].gp_livebuyprice_gm.toFixed(3);
                 //document.getElementById("gp_livebuyprice_gm_mobile").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                 document.getElementById("gp_livebuyprice_gm_mobile").innerHTML = json[1].gp_livebuyprice_gm.toFixed(3);
                 document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
                 document.getElementById("gp_livebuyprice_tael_mobile").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);


               }

               if(gp_livebuyprice_gm == oldbuy){
                document.getElementById("iconlivebuy").className = "";
                 document.getElementById("gp_livebuyprice_gm").style.color = "black";
                 document.getElementById("gp_livebuyprice_gm_mobile").style.color = "black";
                 //document.getElementById("gp_livebuyprice_gm").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                 document.getElementById("gp_livebuyprice_gm").innerHTML = json[1].gp_livebuyprice_gm.toFixed(3);
                 //document.getElementById("gp_livebuyprice_gm_mobile").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                 document.getElementById("gp_livebuyprice_gm_mobile").innerHTML = json[1].gp_livebuyprice_gm.toFixed(3);
               }




               if(gp_livesellprice_gm > oldsell){
                  document.getElementById("iconlivesell").style.color = "#1ac69c";
                  document.getElementById("iconlivesell").className = "fa fa-long-arrow-up";
                  document.getElementById("gp_livesellprice_gm").style.color = "#1ac69c";
                  document.getElementById("gp_livesellprice_gm_mobile").style.color = "#1ac69c";
                  //document.getElementById("gp_livesellprice_gm").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                  document.getElementById("gp_livesellprice_gm").innerHTML = json[1].gp_livesellprice_gm.toFixed(3);
                  //document.getElementById("gp_livesellprice_gm_mobile").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                  document.getElementById("gp_livesellprice_gm_mobile").innerHTML = json[1].gp_livesellprice_gm.toFixed(3);
               }

               if(gp_livesellprice_gm < oldsell){
                  document.getElementById("iconlivesell").style.color = "red";
                  document.getElementById("iconlivesell").className = "fa fa-long-arrow-down";
                  document.getElementById("gp_livesellprice_gm").style.color = "red";
                  document.getElementById("gp_livesellprice_gm_mobile").style.color = "red";
                  //document.getElementById("gp_livesellprice_gm").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                  document.getElementById("gp_livesellprice_gm").innerHTML = json[1].gp_livesellprice_gm.toFixed(3);
                  //document.getElementById("gp_livesellprice_gm_mobile").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                  document.getElementById("gp_livesellprice_gm_mobile").innerHTML = json[1].gp_livesellprice_gm.toFixed(3);
               }
               if(gp_livesellprice_gm == oldsell){
                  document.getElementById("iconlivesell").className = "";
                  document.getElementById("gp_livesellprice_gm").style.color = "black";
                  document.getElementById("gp_livesellprice_gm_mobile").style.color = "black";
                  //document.getElementById("gp_livesellprice_gm").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                  document.getElementById("gp_livesellprice_gm").innerHTML = json[1].gp_livesellprice_gm.toFixed(3);
                  //document.getElementById("gp_livesellprice_gm_mobile").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                  document.getElementById("gp_livesellprice_gm_mobile").innerHTML = json[1].gp_livesellprice_gm.toFixed(3);

               }

               if(gp_livesellprice_tael > oldsellrmtael){
                  document.getElementById("iconliveselltael").style.color = "#1ac69c";
                  document.getElementById("iconliveselltael").className = "fa fa-long-arrow-up";
                  document.getElementById("gp_livesellprice_tael").style.color = "#1ac69c";
                  document.getElementById("gp_livesellprice_tael_mobile").style.color = "#1ac69c";
                  document.getElementById("gp_livesellprice_tael").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
                  document.getElementById("gp_livesellprice_tael_mobile").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
               }
               if(gp_livesellprice_tael < oldsellrmtael){
                  document.getElementById("iconliveselltael").style.color = "red";
                  document.getElementById("iconliveselltael").className = "fa fa-long-arrow-down";
                  document.getElementById("gp_livesellprice_tael").style.color = "red";
                  document.getElementById("gp_livesellprice_tael_mobile").style.color = "red";
                  document.getElementById("gp_livesellprice_tael").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
                  document.getElementById("gp_livesellprice_tael_mobile").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
               }

               if(gp_livesellprice_tael == oldsellrmtael){
                document.getElementById("iconliveselltael").className = "";
                document.getElementById("gp_livesellprice_tael").style.color = "black";
                document.getElementById("gp_livesellprice_tael_mobile").style.color = "black";
                document.getElementById("gp_livesellprice_tael").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
                document.getElementById("gp_livesellprice_tael_mobile").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
               }


               //console.log(oldbuy);










              }else{
                if(json[0]=='tradeopen' && json[1]=='false'){
                  document.getElementById("tradeopen").innerHTML = 'CLOSE';
                  document.getElementById("tradeopen").style.color = "#e21c3f";
                  document.getElementById("tradeopen-mobile").style.color = "#e21c3f";
                  document.getElementById("tradeopen-mobile").innerHTML = 'CLOSE';
                }else if(json[0]=='tradeopen' && json[1]=='true'){
                  document.getElementById("tradeopen").innerHTML = 'OPEN';
                  document.getElementById("tradeopen").style.color = "#198754";
                  document.getElementById("tradeopen-mobile").style.color = "#198754";
                  document.getElementById("tradeopen-mobile").innerHTML = 'OPEN';
                }else{
                  if(json[1].gp_createDate != null){
                  //document.getElementById("datepricefeed").innerHTML = json[1].gp_createDate;
                  //document.getElementById("datepricefeed-mobile").innerHTML = json[1].gp_createDate;

                }
                }


              }

            } catch (error) {

            }
  });

  socket.addEventListener('close', (event) => {
    console.log('WebSocket connection closed');
    setTimeout(connect, 100); // try to reconnect after 1 second
  });
}

connect();
