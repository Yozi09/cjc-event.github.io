function veri(){
    var a=false
    var b=false
    var c=false
    var n=document.getElementById('nom')
    var p=document.getElementById('prenom')
    var t=document.getElementById('tel')
    var T="^06|07[0-9]{8}$"
    var tel=new RegExp(T)
    if(isNaN(n.value)==false){
        n.style.border="1.5px red solid"
        a=false
    }
    else if(isNaN(n.value)==true){
        n.style.border="1.7px black solid"
        a=true
    }
    if(isNaN(p.value)==false){
        p.style.border="1.5px red solid"
        b=false
    }
    else if(isNaN(p.value)==true){
        p.style.border="1.7px black solid"
        b=true
    }
    if(tel.test(t.value)==false){
        c=false
        t.style.border="1.5px red solid"
    }
    else{
        c=true
        t.style.border="1.7px black solid"
    }

    if(a==true && b==true && c==true){
        document.getElementById('btn').disabled=false
    }
    

}