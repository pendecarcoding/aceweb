const url = 'wss://snappy.ace2u.com/socket.io/?EIO=3socket.io/?EIO=3&transport=websocket';
let socket;





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

               let pricefeed = document.getElementById("pricecurrent");
               let override = document.getElementById("override");
               pricefeed.value = json[1].gp_livesellprice_gm.toFixed(3);
               override.value = Math.ceil(json[1].gp_livesellprice_gm).toFixed(2);

              }else{
                if(json[0]=='tradeopen' && json[1]=='false'){

                }else if(json[0]=='tradeopen' && json[1]=='true'){

                }else{
                  if(json[1].gp_createDate != null){
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
