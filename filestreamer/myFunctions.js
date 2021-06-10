//alert("JS Imported.");
//#region Otherfunctions
function redirectPage(pageUrl){
    window.location=pageUrl;
}
function changeValue(id,value) {
    var d = document.getElementById(id);
    d.innerHTML = value;    
}
function changeSource(id,value){
    var d = document.getElementById(id);
    d.src = value;
}
function getValue(id){
    return document.getElementById(id).innerHTML;
}
function loadVideo(id,url){
    var toLoad = '<source id="videoSource" src="Contents/'+url+'">';
    changeValue(id,toLoad);
    //document.getElementById(id).reload();
}

function closeVideo(id){
	var toLoad = '<video id="videoHolder" class="videoHold" controls><source id="videoSource" src="" type="video/mp4"></video>';
	changeValue(id,toLoad);
}
function checkResizedWindow(){
    console.log("Window Resized");
    //Get current window size
    //Check if size can fit
    //adjust grid-template-column
    var w = window.innerWidth;
    var h = window.innerHeight;

    var elementsToPut = w/250;
    console.log("Elements "+w+" "+parseInt(elementsToPut));
    //changeGrid(parseInt(elementsToPut),"100%");
}
function reloadIframe(id){
    var d = document.getElementById(id);
    d.reload();
}
function getAttValue(id,type){
    var d = document.getElementById(id);
    if(type == 'name'){
        return d.name;
    }else if(type == 'value'){
        return d.value;
    }
}
function setAttValue(id,type,value){
    var d = document.getElementById(id);
    d.setAttribute(type,value);
}
function showHide(id,showHide) {
    var d = document.getElementById(id);
    if (showHide) {
        d.style.display = "block";
    } else {
        d.style.display = "none";
    }
}
function changeGrid(newSize,defaultWidth){
    var d = document.getElementById("mahGrid");
    var temp = "";
    for(var n=0;n<newSize;n++){
        temp+=defaultWidth;
        if(n<newSize-1){
            temp+=" ";
        }
    }
    console.log(temp);
    d.style.gridTemplateColumns = temp;
    d.style.columnGap = "20px";
    d.style.rowGap = "20px";
}
function getTime() {
    currentDate = new Date();
    changeValue("dateTime",
        from24To12Hour(currentDate.getHours())+":"+
        addExtraNumber(currentDate.getMinutes())+" "+
        getMeridiem(currentDate.getHours())+" "+
        numberToDate(currentDate.getMonth()) +" "+
        currentDate.getDate()+", "+
        currentDate.getFullYear()
        
    );


}
function changeAttribute(id,attributeName,value) {
    var d = document.getElementById(id);
    switch (attributeName) {
        case 0:
            
            break;
    
        default:
            break;
    }
}
//#endregion