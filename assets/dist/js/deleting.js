

let user = document.getElementById('user_email');
let form_delete = document.getElementById('delete');
let del_val = document.getElementById('del_val');
let form_stude = document.getElementById('form_stude');



function deleted(email){
    del_val.value = email;
    user_email.innerHTML = email;
    
    }


form_delete.addEventListener('submit', ()=>{

    
    let xhr = new XMLHttpRequest();
    
    xhr.open("GET","../../function/deleting.php?val="+del_val.value,true);
    
    xhr.onload = ()=>{
        if (xhr.status == 200){
            if(xhr.responseText == "can't delet user"){
                alert(xhr.responseText);
            }else{
                window.Location.href = "../../views/admin/all_user.php";
            }
        }
    }

    xhr.send();
})


