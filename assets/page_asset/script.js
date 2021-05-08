// Vars gamemodes and maps are created by the php script
asset = asset.asset;

// Setting the page background to the asset background's image
$("body").css("background-image", "url(" + asset.background + ")");

// Download function
function download() {
  window.open(asset.downloadUrl, "_blank");
}

// Initiating page elements
$("#author").text(asset.org.title);

$("#type").text(asset.packageType == 1 ? "Map" : "Gamemode");

$("#description").text(asset.description);

// Converting unix time to human readable date
const dateObject = new Date(asset.updated * 1000);
const humanDateFormat = dateObject.toLocaleString();
$("#date").text("Last update: " + humanDateFormat);

$("#thumbnail").attr("src", asset.thumb);
