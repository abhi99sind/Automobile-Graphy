function init(s1,s2){
    var s1= document.querySelector("#select1");
    var s2 =document.querySelector("#select2");
    

    if(s1.value=="car"){
        var arr =["|","maruti|Maruti","hyundai|Hyundai","tata|TATA","mahindra|Mahinra"];
    }

   else if(s1.value=="bike"){
        var arr =["|","bajaj|Bajaj","hero|Hero","tata|TATA","honda|Honda"];
    }
    for(key in arr){
        var pair = arr[key].split("|");
       var option =document.createElement("option");
       option.value=pair[0];
       option.innerHTML=pair[1];
       s2.options.add(option);
    }
}

function operation(s2,s3){
    var s2= document.querySelector("#select2");
    var s3 =document.querySelector("#select3");
    

    if(s2.value=="maruti"){
        var arr =["|","a100|A100","alto|Alto"];
    }
    for(key in arr){
        var pair = arr[key].split("|");
       var option =document.createElement("option");
       option.value=pair[0];
       option.innerHTML=pair[1];
       s3.options.add(option);
    }
}
function trim(s3,s4){
    var s3= document.querySelector("#select3");
    var s4 =document.querySelector("#select4");
    

    if(s3.value=="a100"){
        var arr =["|","lx|Lx","lxairbag|LxAirbag"];
    }
    for(key in arr){
        var pair = arr[key].split("|");
       var option =document.createElement("option");
       option.value=pair[0];
       option.innerHTML=pair[1];
       s4.options.add(option);
    }
}