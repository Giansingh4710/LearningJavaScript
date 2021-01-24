let name=document.getElementById("name");
let button=document.getElementById("count");
for(let i=0;i<10;i++){
    for(let j=i;j>-1;j--){
        name.append(j+" ")
    }
    let br=document.createElement('br');
    name.appendChild(br);
}




