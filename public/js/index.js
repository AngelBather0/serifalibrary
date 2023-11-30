let navs = document.querySelectorAll(".Content__raffles--tabs-tab");

function clearBodies() {
    document.querySelectorAll(".Content__raffles--container").forEach((body)=>{
        body.classList.remove("bodyActive");
    })
}
function clearNavs() {
    document.querySelectorAll(".Content__raffles--tabs-tab").forEach((nav)=>{
        nav.classList.remove("activeTab");
    })
}
function clearPagination() {
    document.querySelectorAll(".pagination").forEach((nav)=>{
        nav.classList.remove("paginationActive");
    })
}

navs.forEach((nav)=>{
    nav.addEventListener("click", ()=>{
        clearBodies();
        clearNavs();
        clearPagination();
        nav.classList.add("activeTab");
        let body = nav.getAttribute("navFor");
        document.querySelector(`.pagination${body}`).classList.add("paginationActive");
        document.querySelector(`.${body}`).classList.add("bodyActive")
    })
})