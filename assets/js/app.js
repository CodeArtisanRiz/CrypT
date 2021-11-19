function bInrValue() {
  var price = parseFloat(document.getElementById("b_price").value);
  var quantity = parseFloat(document.getElementById("b_quantity").value);
  const inrVal = price * quantity;
  $("#b_inr_value").val(inrVal);
}
function bQuantity() {
  var price = parseFloat(document.getElementById("b_price").value);
  var inr = parseFloat(document.getElementById("b_inr_value").value);
  const quan = inr / price;
  $("#b_quantity").val(quan);
}
function bPrice() {
  var quantity = parseFloat(document.getElementById("b_quantity").value);
  var inr = parseFloat(document.getElementById("b_inr_value").value);
  const bPrice = inr / quantity;
  $("#b_price").val(bPrice);
}
