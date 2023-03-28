const url = 'wss://snappy.ace2u.com/socket.io/?EIO=3socket.io/?EIO=3&transport=websocket';
let socket;

function changeprice(price){
    const myDivs = document.querySelectorAll('.price');
    const gram   = document.querySelectorAll('.gram');
    let totalorder = document.getElementById("quantity_order");
    //let totalprice = document.getElementById('chosen_price');

    if(totalorder !== null){
        let totalprice = document.querySelectorAll('#chosen_price');
        for (let i = 0; i < myDivs.length; i++) {
            var pricelast = price*gram[i].innerText;
            myDivs[i].textContent = "RM"+pricelast.toFixed(2);

            /*var total = (price*gram[i].innerText)*totalorder.value;
            totalprice[i].textContent = "RM"+total.toFixed(2);*/


        }
    }else{
        for (let i = 0; i < myDivs.length; i++) {
            var pricelast = price*gram[i].innerText;
            var grams = gram[i].innerText;

            if(grams=='0.5'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+82)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }else if(grams=='1'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+48)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }
            else if(grams=='2.5'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+36)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }
            else if(grams=='5'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+33)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }
            else if(grams=='10'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+33)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }
            else if(grams=='4.25'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+39)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }
            else if(grams=='21.25'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+27)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }else if(grams=='50'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+20)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }else if(grams=='100'){
              const priceb = parseFloat(price, 10);
              const denomprice =  (priceb+13)*grams;
              myDivs[i].textContent = "RM"+denomprice.toFixed(2);
              console.log(grams +" Price"+priceb);
            }

        }
    }

  //
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
               changeprice(Math.ceil(json[1].gp_livesellprice_gm).toFixed(2));

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
