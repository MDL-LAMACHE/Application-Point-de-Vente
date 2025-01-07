function setMode(oEvent){
    document.body.classList.replace(aModes[Number(!this.checked)],aModes[Number(this.checked)]);
    localStorage.setItem('mode',aModes[Number(this.checked)]);
    this.parentNode.nextElementSibling.innerHTML = (this.checked)? "":""
}

function loadMode(){
    let sMode = localStorage.getItem('mode');
    document.forms["mytheme"]["theme-mode"].checked = sMode == aModes[1];
    setMode.call(document.forms["mytheme"]["theme-mode"])
}
let aModes = ["mode-white", "mode-dark"];
document.addEventListener('DOMContentLoaded',function(){
    document.body.classList.add(aModes[0]);
    document.forms["mytheme"]["theme-mode"].addEventListener('click', setMode);
    loadMode()
});