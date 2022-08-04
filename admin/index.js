function get(obj){
    return document.getElementById(obj);
};

function switchToDashboard() {
    get("dashboard").classList.remove("hidden");
    get("products").classList.add("hidden");
    get("orders").classList.add("hidden");
};

function switchToOrders(){
    get("orders").classList.remove("hidden");
    get("dashboard").classList.add("hidden");
    get("products").classList.add("hidden");
}

function switchToProductsPage() {
    get("products").classList.remove("hidden");
    get("dashboard").classList.add("hidden");
    get("orders").classList.add("hidden");
};