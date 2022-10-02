let i = 0;
setInterval(()=>{

    NotiHandler()
}
,1000)


function NotiHandler(){
    ajax = new XMLHttpRequest();

    ajax.open('GET','../../function/ajaxNoti.php',true);
    ajax.onload = function(){
        if (ajax.status == 200) {
            i++;
            let appen = document.getElementById('appen');
            appen.innerHTML = ajax.responseText;
            
        }

    }

    ajax.send();
}

