$(document).ready(function() {
// Initializing arrays with city names.
var Airija = [{
display: "Dublinas",value: "Dublinas"},
{display: "Korkas", value: "Korkas"}];
var Australija = [{
display: "Canbera",value: "Canbera"},
{display: "Sidnejus",value: "Sidnejus"},
{display: "Melburnas",value: "Melburnas"},
{display: "Pertas",value: "Pertas"},
{display: "Habartas",value: "Habartas"}];
var Prancuzija = [{
display: "Paryzius",value: "Paryzius"},
{display: "Avigonas",value: "Avigonas"},
{ display: "Strasturas",value: "Strasburas"},
{display: "Nica", value: "Nica"}];
var Belgija = [{
display: "Briuge",value: "Briuge"},
{display: "Briuselis",value: "Briuselis"},
{ display: "Gentas",value: "Gentas"},
{display: "Ljezas", value: "Ljezas"}];
var Bulgarija = [{
display: "Burgasas",value: "Burgasas"},
{display: "Plovdivas",value: "Plovdivas"},
{ display: "Plevenas",value: "Plevenas"},
{display: "Sofija", value: "Sofija"}];
var Cekija = [{
display: "Brno",value: "Brno"},
{display: "Praha",value: "Praha"},
{ display: "Pilzenas",value: "Pilzenas"},
{display: "Ostrava", value: "Ostrava"}];
var Danija = [{
display: "Kopenhaga",value: "Kopenhaga"},
{display: "Odense",value: "Odense"},
{ display: "Olborgas",value: "Olborgas"},
{display: "Orhusas", value: "Orhusas"}];
var Estija = [{
display: "Talinas",value: "Talinas"},
{display: "Tartu",value: "Tartu"}];
var Graikija = [{
display: "Heraklionas",value: "Heraklionas"},
{display: "Atenai",value: "Atenai"}];
var Gruzija = [{
display: "Batumis",value: "Batumis"},
{display: "Kutaisis",value: "Kutaisis"}];
var Ispanija = [{
display: "Barselona",value: "Barselona"},
{display: "Madridas",value: "Madridas"}];
var Italija = [{
display: "Milanas",value: "Milanas"},
{display: "Roma",value: "Roma"}];
var JAV = [{
display: "Vasingtonas",value: "Vasingtonas"},
{display: "Majamis",value: "Majamis"}];
var Kanada = [{
display: "Otava",value: "Otava"},
{display: "Vankuveris",value: "Vankuveris"}];
var Kipras = [{
display: "Limasolas",value: "Limasolas"},
{display: "Nikosija",value: "Nikosija"}];
var Kroatija = [{
display: "Zagrebas",value: "Zagrebas"},
{display: "Splitas",value: "Splitas"}];
var Latvija = [{
display: "Daugpilis",value: "Daugpilis"},
{display: "Ryga",value: "Ryga"}];
var Lenkija = [{
display: "Varsuva",value: "Varsuva"},
{display: "Kelcai",value: "Kelcai"}];
var Lietuva = [{
display: "Kaunas",value: "Kaunas"},
{display: "Vilnius",value: "Vilnius"}];
var Norvegija = [{
display: "Oslas",value: "Oslas"},
{display: "Bergenas",value: "Bergenas"}];
// Function executes on change of first select option field.
$("#country").change(function() {
var select = $("#country option:selected").val();
switch (select) {
case "Airija":
city(Airija);
break;
case "Australija":
city(Australija);
break;
case "Prancuzija":
city(Prancuzija);
break;
case "Belgija":
city(Belgija);
break;
case "Bulgarija":
city(Bulgarija);
break;
case "Cekija":
city(Cekija);
break;
case "Danija":
city(Danija);
break;
case "Estija":
city(Estija);
break;
case "Graikija":
city(Graikija);
break;
case "Gruzija":
city(Gruzija);
break;
case "Ispanija":
city(Ispanija);
break;
case "Italija":
city(Italija);
break;
case "JAV":
city(JAV);
break;
case "Kanada":
city(Kanada);
break;
case "Kipras":
city(Kipras);
break;
case "Kroatija":
city(Kroatija);
break;
case "Latvija":
city(Latvija);
break;
case "Lenkija":
city(Lenkija);
break;
case "Lietuva":
city(Lietuva);
break;
case "Norvegija":
city(Norvegija);
break;
default:
$("#city").empty();
$("#city").append("<option>--Select--</option>");
break;
}
});
// Function To List out Cities in Second Select tags
function city(arr) {
$("#city").empty(); //To reset cities
$("#city").append("<option></option>");
$(arr).each(function(i) { //to list cities
$("#city").append("<option value=\"" + arr[i].value + "\">" + arr[i].display + "</option>")
});
}
});