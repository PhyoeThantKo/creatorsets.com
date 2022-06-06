function get(obj){
     return document.getElementById(obj);
 };

 function switchToDashboard() {
     get("products").classList.add("hidden");
     get("dashboard").classList.remove("hidden");
 };

 function switchToProductsPage() {
     get("products").classList.remove("hidden");
     get("dashboard").classList.add("hidden");
 };