function togglePasswordVisibility(icon) {
    var input = icon.parentElement.querySelector('.input100');
    if (input.type === 'password') {
        input.type = 'text';
        icon.innerHTML = '<i class="fa fa-eye-slash"></i>';
    } else {
        input.type = 'password';
        icon.innerHTML = '<i class="fa fa-eye"></i>';
    }
}