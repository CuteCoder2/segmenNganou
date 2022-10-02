

    
    let form_update = document.forms['update'];

    
    function update_form(param1,param2,param3){
        form_update.elements[0].value = param1;
        form_update.elements[1].value = param2;
        form_update.elements[2].value = param3;
        
    }
    
    
    // form_update.addEventListener('submit', (e)=>{
    //     // e.preventDefault();
    //     let xhr2 = new XMLHttpRequest();
    //     let val1 = form_update.elements[0].value;
    //     let val2 = form_update.elements[1].value;
    //     let val3 = form_update.elements[2].value;

    //     xhr2.open("GET","../../function/update.php?val1="+val1+"&val2="+val2+"&val3="+val3 ,true);
    
    //     xhr2.onload = ()=>{
    //         if (xhr2.status == 200){
    //             console.log(xhr2.responseText);
    //         }else{
    //             console.log('failed');
    //         }
    //     }
    
    //     xhr2.send();

    // })
    