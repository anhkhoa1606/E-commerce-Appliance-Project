window.addEventListener("load", (event) => {
  updateCartVisual(document.getElementById("shopping-cart"));
});
function waitForElm(selector) {
  return new Promise((resolve) => {
    if (document.querySelector(selector)) {
      return resolve(document.querySelector(selector));
    }

    const observer = new MutationObserver((mutations) => {
      if (document.querySelector(selector)) {
        resolve(document.querySelector(selector));
        observer.disconnect();
      }
    });

    observer.observe(document.body, {
      childList: true,
      subtree: true,
    });
  });
}

function maxItemsNotification() {
  $(".max-items").fadeIn(function () {
    window.setTimeout(function () {
      $(".max-items").fadeOut("slow");
    }, 1500);
  });
}

function addedItemNotification() {
  $(".bottomleft").fadeIn(function () {
    window.setTimeout(function () {
      $(".bottomleft").fadeOut("slow");
    }, 1500);
  });
}

function updateCart(item_id, name, price) {
  // if list is empty, add to list
  if (localStorage.getItem("Cart") == null) {
    localStorage.setItem(
      "Cart",
      '[{"item_id": ' +
        item_id +
        ',"name": "' +
        name +
        '", "price": ' +
        price +
        ', "quantity": 1}]'
    );
    addedItemNotification();
  }

  // else add/update item in list
  else {
    let itemList = JSON.parse(localStorage.getItem("Cart"));
    let isThere = false;

    for (let i = 0; i < itemList.length; i++) {
      if (itemList[i]["item_id"] == item_id) {
        isThere = true;
        if (itemList[i]["quantity"] == 5) {
          maxItemsNotification();
        } else {
          itemList[i]["quantity"] += 1;
          localStorage.setItem("Cart", JSON.stringify(itemList));
          addedItemNotification();
        }
      }
    }

    if (isThere != true) {
      //if item DOES NOT exist in cart ADD item
      itemList[itemList.length] = {
        item_id: item_id,
        name: name,
        price: price,
        quantity: 1,
      };
      localStorage.setItem("Cart", JSON.stringify(itemList));
      addedItemNotification();
    }
  }
}

function populateTable() {
  console.log("Repopulate");
  let itemList = JSON.parse(localStorage.getItem("Cart"));

  var table = document.getElementById("shopping-cart");
  let totalPrice = 0;

  var titleRow = table.insertRow(0);
  var title1 = titleRow.insertCell(0);
  var title2 = titleRow.insertCell(1);
  var title3 = titleRow.insertCell(2);

  title1.innerHTML = "<b>Name</b>";
  title2.innerHTML = "<b>Price</b>";
  title3.innerHTML = "<b>Quantity</b>";

  for (let i = 0; i < itemList.length; i++) {
    var row = table.insertRow(i + 1);
    var name = row.insertCell(0);
    var price = row.insertCell(1);
    var quantity = row.insertCell(2);

    name.innerHTML = itemList[i]["name"];
    price.innerHTML = itemList[i]["price"] * itemList[i]["quantity"];

    if (itemList[i]["quantity"] == 1) {
      quantity.innerHTML =
        "<select name='item-quantity' class='item-quantity' id='" +
        itemList[i]["item_id"] +
        "'> <option value='0'>0 (Delete)</option> <option selected value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> </select></td></tr>";
    }
    if (itemList[i]["quantity"] == 2) {
      quantity.innerHTML =
        "<select name='item-quantity' class='item-quantity' id='" +
        itemList[i]["item_id"] +
        "'> <option value='0'>0 (Delete)</option> <option value='1'>1</option> <option selected value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> </select></td></tr>";
    }
    if (itemList[i]["quantity"] == 3) {
      quantity.innerHTML =
        "<select name='item-quantity' class='item-quantity' id='" +
        itemList[i]["item_id"] +
        "'> <option value='0'>0 (Delete)</option> <option value='1'>1</option> <option value='2'>2</option> <option selected value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> </select></td></tr>";
    }
    if (itemList[i]["quantity"] == 4) {
      quantity.innerHTML =
        "<select name='item-quantity' class='item-quantity' id='" +
        itemList[i]["item_id"] +
        "'> <option value='0'>0 (Delete)</option> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option selected value='4'>4</option> <option value='5'>5</option> </select></td></tr>";
    }
    if (itemList[i]["quantity"] == 5) {
      quantity.innerHTML =
        "<select name='item-quantity' class='item-quantity' id='" +
        itemList[i]["item_id"] +
        "'> <option value='0'>0 (Delete)</option> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option selected value='5'>5</option> </select></td></tr>";
    }

    totalPrice = totalPrice + itemList[i]["price"] * itemList[i]["quantity"];
  }

  var finalPriceRow = table.insertRow(itemList.length + 1);
  var finalPriceTitle = finalPriceRow.insertCell(0);
  var finalPrice = finalPriceRow.insertCell(1);

  finalPriceTitle.innerHTML = "<b>Final Price</b>";
  finalPrice.innerHTML = `<b id="price">${totalPrice.toFixed(2)}</b>`;

  for (let i = 0; i < itemList.length; i++) {
    waitForElm(`[id='${itemList[i]["item_id"]}']`).then((elm) => {
      updateItemQuantity(elm);
    });
  }
}

function updateItemQuantity(elm) {
  elm.addEventListener("change", () => {
    let quantity = elm.value;

    var table = document.getElementById("shopping-cart");
    var id = elm.id;

    let itemList = JSON.parse(localStorage.getItem("Cart"));

    // console.log(quantity);
    for (let i = 0; i < itemList.length; i++) {
      if (itemList[i]["item_id"] == id) {
        if (quantity == 0) {
          itemList.splice(i, 1);
          localStorage.setItem("Cart", JSON.stringify(itemList));
          table.deleteRow(i + 1);
        } else {
          itemList[i]["quantity"] = quantity;

          table.innerHTML = "";

          localStorage.setItem("Cart", JSON.stringify(itemList));
          populateTable();
        }
      }
    }
  });
}

function updateCartVisual(target)
{
  if(localStorage.getItem("Cart")){
    let itemList = JSON.parse(localStorage.getItem("Cart"));
    target.innerHTML = "";
    for (let i = 0; i < itemList.length; i++) {
      
      const div = document.createElement("div");
      const name = document.createElement("h2");
      name.innerHTML = itemList[i]["name"];
      const quantity = document.createElement("p");
      quantity.innerHTML = "Quantity: " + itemList[i]["quantity"];
      const img = document.createElement("img");
      var productName = itemList[i]["name"].replaceAll(" ","-");
      console.log("product_"+itemList[i]["item_id"]+"_"+productName+"_"+itemList[i]["price"]);
      img.src = document.getElementById("product_"+itemList[i]["item_id"]+"_"+productName+"_"+itemList[i]["price"]).src;
      div.appendChild(img);
      div.appendChild(name);
      div.appendChild(quantity);
      target.appendChild(div);
    }
  }
}

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  console.log(data);

  updateCart(
    Number(data.split("_")[1]),
    data.split("_")[2].replaceAll("-", " "),
    Number(data.split("_")[3])
  );

  updateCartVisual(ev.target);

  ev.stopPropagation();
  return false;
}
function clearCart()
{
  if(localStorage.getItem("Cart")){
    localStorage.removeItem('Cart');
    updateCartVisual(document.getElementById("shopping-cart"));
  }
}
