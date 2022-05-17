

function dropDown() {
    document.getElementsByClassName("menu-dropdown")[0].style.display = "flex";
    document.getElementsByClassName("menu-dropdown")[0].style.alignItems = "center";
    document.getElementsByClassName("menu-dropdown")[0].style.justifyContent = "center";
    document.getElementsByClassName("menu-dropdown")[0].style.flexDirection = "column";
}

function closeDropDown() {
    document.getElementsByClassName("menu-dropdown")[0].style.display = "none";
}