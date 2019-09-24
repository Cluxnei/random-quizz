require('./bootstrap');

import Swal from 'sweetalert2';

$(() => {

    function showLoader(){
        let loader = $('#loader')
        loader.css({
            'display': '',
            'opacity': 0,
            'transition': 'all 0.5s ease-in-out'
        })
        setTimeout(() => {
            loader.css('opacity', 1)
        }, 5);
    }
    function hideLoader(){
        let loader = $('#loader')
        loader.css('opacity', 0)
        setTimeout(() => {
            loader.css('display', 'none')
        }, 500);
    }
    function displayError(msg = 'Ops'){
        Swal.fire('Ops!', msg, 'error');
    }
    function checkUsername(){
        return $('#username').val() != ''
    }
    function registerUsername(redirectAfterSuccess){
        showLoader()
        axios.post('/user', { username: $('#username').val()})
        .then(response => {
            hideLoader()
            if(response.data.error)
                displayError(response.data.msg)
            else window.location.href = redirectAfterSuccess
        }).catch(error => {
            hideLoader()
            console.error(error)
        })
    }

    $('#random-question').submit(function(event){
        event.preventDefault()
        if(checkUsername())
            registerUsername(this.action)
        else
            displayError()
    })


})
