var num=0;
document.getElementById("click").onclick=function(){
    if(num==0){
        let empty=document.getElementById("empty");
        empty.remove();}
    num++;
    let lst=document.createElement("ul");
    let book=prompt("What is the title?");
    let author=prompt("Who authored "+book+"?");
    lst.innerHTML="<li>"+book+"</li>"+"<p>"+author+"</p>";
    let div=document.getElementById("add");
    div.appendChild(lst)
    console.log(div)
    
    console.log(lst);
    //document.body.appendChild(lst); adds at end of document
    //lst.setAttribute('id','book'); gives created elem an id

}