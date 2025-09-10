function ColetaDados(){
    var user = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    
    if (user === 'richard@email.com' && password === '123'){
        window.alert('Login OK');
    } else {
        document.getElementById('email').classList.add('user_pass_fail');
        document.getElementById('password').classList.add('user_pass_fail');
        window.alert('Error');
    }
};