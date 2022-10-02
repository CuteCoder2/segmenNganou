

function getuser(){

    let ajax = new XMLHttpRequest();

    ajax.open('GET','../../function/get_stud_info.php',true);

    ajax.onload = function (){
        if(ajax.readyState == 4 && ajax.status == 200){
                let result = JSON.parse(ajax.responseText);
                console.log(result);
                document.getElementById('fname').value = result[0].first_name;
                document.getElementById('lname').value = result[0].last_name;
        }
    }

    ajax.send();
}

getuser();