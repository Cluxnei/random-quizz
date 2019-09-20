require('./bootstrap');

import Swal from 'sweetalert2';

$(() => {
    function displayError(msg = 'Ops'){
        Swal.fire('Ops!', msg, 'error');
    }
    function checkUsername(){
        return $('#username').val() != ''
    }
    function registerUsername(redirectAfterSuccess){
        axios.post('/user', { username: $('#username').val()})
        .then(response => {
            if(response.data.error)
                displayError(response.data.msg)
            else window.location.href = redirectAfterSuccess
        }).catch(error => {
            console.error(error)
        })
    }

    $('#random-question').click(function(event){
        event.preventDefault()
        if(checkUsername())
            registerUsername(this.href)
        else
            displayError()
    })
    function displayCorrectAnswerAndReload(){
        axios.post('/increment-score')
        axios.post('/check-win').then(response => {
            if(response.data){
                Swal.fire('Resposta Correta!', '', 'success')
                .then(result => {
                    window.location.href = '/success'
                })
            }else{
                Swal.fire('Resposta Correta!', '', 'success')
                .then(result => {
                    window.location.reload()
                })
            }
        })
    }
    function displayIncorrectAnswerAndReload(){
        Swal.fire('Resposta Incorreta!', '', 'error')
        .then(result => {
            window.location.reload()
        })
    }
    $('.check-answer').click(function(event){
        event.preventDefault()
        axios.post(this.href).then(response => {
            if(response.data)
                displayCorrectAnswerAndReload()
            else displayIncorrectAnswerAndReload()
        }).catch(error => {
            console.error(error)
        })
    })
})
