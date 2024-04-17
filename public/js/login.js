document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('login-form').addEventListener('submit', function (event) {
        event.preventDefault(); 

        
        var formData = new FormData(this);

        
        var login = new XMLHttpRequest();
        login.open('POST', '/api/login', true);
        login.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        login.onreadystatechange = function () {
            if (login.readyState === XMLHttpRequest.DONE) {
                if (login.status === 200) {
                    var response = JSON.parse(login.responseText);

                    var token = response.token;
                   

                    
                    document.cookie = "jwt_token=" + token + ";path=/;secure;SameSite=Strict";

                    var user = response.user;
                    var role = user.role;

                    document.cookie = "role=" + role ;
                    
                    if (role === 'organizer') {
                        window.location.href = '/organisateur/annocement'; 
                    } else if (role === 'benevole') {
                        window.location.href = '/benevole/annoncement';
                    } else {
                        window.location.href = '/'; 
                    }
                    
                } else {
                    console.error('Erreur lors de la requête :', login.statusText);
                     
                }
            }
        };
        login.send(formData);
    });
});