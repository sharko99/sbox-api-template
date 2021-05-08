// Vars gamemodes and maps are created by the php script
maps;
gamemodes;

console.log(maps);

//Set the default category here (it also handle the current category)
var activeCategory = "gamemodes";

//Functions

//redirect the user to an asset page
function redirect(end) {
  window.location.href = "asset?a=" + end;
}

//Select the category
function select(category) {
  $("#" + activeCategory + "-category").removeClass("active");
  $("#" + category + "-category").addClass("active");

  $("#" + activeCategory + "-container").hide();
  $("#" + category + "-container").show();
  activeCategory = category;
}

//Starting the page logic
select(activeCategory);

//Showing gamemodes

//Calculating number of cards
var gm_CardsNumber = gamemodes[1].packages.length;

//gamemodes[0] = Newest ones
//gamemodes[1] = Most popular

//The number of transparent cards that we have to add for styling purpose
var gm_BlankCards = 0;

while ((gm_CardsNumber + gm_BlankCards) % 4 != 0) {
  gm_BlankCards += 1;
}

for (let i = 0; i < gm_CardsNumber; i++) {
  $("#gamemodes-container").append(
    '<div class="col min hover-card"> <div class="card-body col-sm"> <div class="card card-package" style="width: 18rem" onclick="redirect(\'' +
      gamemodes[0].packages[i].org.ident +
      "." +
      gamemodes[0].packages[i].ident +
      '\')"> <img src="' +
      gamemodes[0].packages[i].thumb +
      '" class="card-img-top" alt="..." /> <div class="image-overlay"></div> <h5 class="card-title text-on-image">(Gamemode) <b>' +
      gamemodes[0].packages[i].title +
      "</b></h5> </div> </div> </div>"
  );
}

for (let i = 0; i < gm_BlankCards; i++) {
  $("#gamemodes-container").append(
    '<div class="col min hidden"> <div class="card-body col-sm"> <div class="card card-package" style="width: 18rem"> <img src="" class="card-img-top" alt="..." /> <div class="card-body card-package"> <h5 class="card-title"></h5> </div> </div> </div> </div>'
  );
}

//Showing maps

//Calculating number of cards
var mp_CardsNumber = maps.assets.length;

//gamemodes[0] = Newest ones
//gamemodes[1] = Most popular

//The number of transparent cards that we have to add for styling purpose
var mp_BlankCards = 0;

while ((mp_CardsNumber + mp_BlankCards) % 4 != 0) {
  mp_BlankCards += 1;
}

for (let i = 0; i < mp_CardsNumber; i++) {
  $("#maps-container").append(
    '<div class="col min hover-card"> <div class="card-body col-sm"> <div class="card card-package" style="width: 18rem" onclick="redirect(\'' +
      maps.assets[i].org.ident +
      "." +
      maps.assets[i].ident +
      '\')"> <img src="' +
      maps.assets[i].thumb +
      '" class="card-img-top" alt="..." /> <div class="image-overlay"></div> <h5 class="card-title text-on-image">(Map) <b>' +
      maps.assets[i].title +
      "</b></h5> </div> </div> </div>"
  );
}

for (let i = 0; i < mp_BlankCards; i++) {
  $("#maps-container").append(
    '<div class="col min hidden"> <div class="card-body col-sm"> <div class="card card-package" style="width: 18rem"> <img src="" class="card-img-top" alt="..." /> <div class="card-body card-package"> <h5 class="card-title"></h5> </div> </div> </div> </div>'
  );
}
