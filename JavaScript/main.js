$(document).ready(
    function() {
        console.log('cic');

        $('#test').on('click', function(e) {
            let username = $('#username').val();
            let password = $('#password').val();
            console.log(username);
            $.ajax({
                type: "POST",
                url: "http://localhost/todolistapi/User/connection",
                data: {email : username, password : password}
            })
        });
         
    }
);

/*document.addEventListener("DOMContentLoaded",function(){


    document.getElementById('test').addEventListener('click', (e)=> {
        
    let username = document.querySelector('#username').value;
    let password = document.querySelector('#password').value;
    console.log(password);
        fetch("http://localhost/todolistapi/user/connection",{
            method :"POST",
            headers : new Headers(),
            body :  JSON.stringify({username : username, password : password})
        })
    });
});*/
