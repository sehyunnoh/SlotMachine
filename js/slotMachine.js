var image = [
  "apple",
  "cherry",
  "grapes",
  "lemon",
  "orange",
  "pear",
  "watermelon"
];

function random() {
  return Math.floor(Math.random() * 7);
}

function spin() {
  let col = [];
  var img = document.querySelectorAll("img");

  for (let i = 0; i < 3; i++) {
    col[i] = random();
    img[i].setAttribute("src", "./images/" + image[col[i]] + ".png");
  }

  $("input[name='img1']").val(col[0]);
  $("input[name='img2']").val(col[1]);
  $("input[name='img3']").val(col[2]);

  pick(col[0], col[1], col[2]);
}

function pick(col1, col2, col3) {
  var result = document.querySelector("#result");
  var message = "";

  if (col1 == col2 && col2 == col3 && col1 == col3) {
    credit += bet * 10;
    message = "Success!<br>+ Your bet x 10 : +" + bet * 10 + " = " + credit;
  } else if (col1 == col2 || col1 == col3 || col2 == col3) {
    credit += parseInt(bet * 2);
    message = "Success!<br>+ Your bet x 2 : +" + bet * 2 + " = " + credit;
  } else {
    credit -= bet;
    message = "Failed!<br>- Your bet : -" + bet + " = " + credit;
  }

  $("#credit").val(credit);
  $("#bet").val(bet);
  $("#name").val(name);

  result.innerHTML = message;
}

$("#new").on("click", function(e) {
  window.location = window.location.href;
});

function valueStay() {
  var col = [img1, img2, img3];
  var img = document.querySelectorAll("img");

  for (let i = 0; i < 3; i++) {
    img[i].setAttribute("src", "./images/" + image[col[i]] + ".png");
  }

  $("input[name='img1']").val(col[0]);
  $("input[name='img2']").val(col[1]);
  $("input[name='img3']").val(col[2]);

  $("#credit").val(credit);
  $("#bet").val(bet);
  $("#name").val(name);
}

function init() {
  var result = document.querySelector("#result");

  if (credit == 0) {
    result.innerHTML =
      "You can't play any more games because you don't have credit.";
    valueStay();
  } else if (bet == 0) {
    result.innerHTML = "Please put in the betting amount.";
    valueStay();
  } else if (bet < 0) {
    result.innerHTML = "Bet amount can not be negative.";
    valueStay();
  } else if (bet > credit) {
    result.innerHTML = "Betting amount exceeded credit.";
    valueStay();
  } else {
    spin();
  }
}

if (name == null || name == "") {
} else {
  init();
}
