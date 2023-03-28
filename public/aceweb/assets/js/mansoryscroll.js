var images = [
    "https://aceweb.kanalapps.web.id/public/uploads/all/rjD3x1HdHsxgeGh4bLKuo8CNEMbcc5GWxDfWBOme.png",
    "https://aceweb.kanalapps.web.id/public/uploads/all/1lLknWCjWbhLmnXunJjdSbKGXiTJk53OV2yqrSk3.png",
    "https://aceweb.kanalapps.web.id/public/uploads/all/IKCrd0wlwZrG8HiBJc8Hyw6WhXokCNonis7QawAa.png",

    "https://aceweb.kanalapps.web.id/public/uploads/all/4su51XgI2N89PilSig0FnS5Xn0pEDvMbAkCuAkgz.png",

    "https://aceweb.kanalapps.web.id/public/uploads/all/RKV5vTJO7jQAXN27Jigs2tWcZ7Cs4NFpP9sAIFjA.png",
    "https://aceweb.kanalapps.web.id/public/uploads/all/AzEFLQDFA7kxtp3pATb6KBXlRkGIKkR1wge9cjce.png",
    "https://aceweb.kanalapps.web.id/public/uploads/all/tveT9mPzpuGCGcy67iAJKOj4kTfTO8j0zqhrBpNf.png",
  ];

  console.log(images);

  var lists = document.getElementsByClassName("selfie-img");
  var list = lists;
  console.log(lists);
  console.log(list);
  // Var or Let works in the for loop
  let counter = 0;
  let counter2 = 0;
  for (let i = 0; i < lists.length; i++) {
    // console.log(list[i]);
    if (i < images.length) {
      list[i].style.backgroundImage = "url(" + images[i] + ")";
    } else if (i < 2 * images.length) {
      list[i].style.backgroundImage = "url(" + images[counter] + ")";
      counter = counter + 1;
    } else {
      list[i].style.backgroundImage = "url(" + images[counter2] + ")";
      counter2 = counter2 + 1;
    }
  }

  var clone1 = $(".col1 ul li").clone();
  clone1.appendTo(".col1 ul");
  var clone2 = $(".col2 ul li").clone();
  clone2.appendTo(".col2 ul");
  var clone3 = $(".col3 ul li").clone();
  clone3.appendTo(".col3 ul");
