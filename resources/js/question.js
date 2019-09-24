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

    let questions, questionIndex = 0
    axios.get('/random/questions/30').then(response => questions = response.data)
    function incrementScore(){
        let score = $('.score')
        score.text(parseInt(score.text()) + 1)
    }
    function displayCorrectAnswerAndReload(){
        axios.post('/increment-score')
        incrementScore()
        axios.post('/check-win').then(response => {
            if(response.data){
                Swal.fire('Resposta Correta!', '', 'success')
                .then(() => {
                    window.location.href = '/success'
                })
            }else{
                Swal.fire('Resposta Correta!', '', 'success')
                reloadAnswer()
            }
        })
    }
    function reloadAnswer(){
        let question = questions[questionIndex++]
        $('.question-title').text(question.title)
        $('.question-description').text(question.description)
        let categories = question.categories.map(category => category.name).join(', ')
        $('.categories').text(categories)
        let answers = question.answers.map(answer =>
            `<a href="/answer/${answer.id}" class="check-answer">${answer.title}</a><br>`
        ).join('')
        $('.question-answers').html(answers)
        watchAnswerButton()
    }
    function displayIncorrectAnswerAndReload(){
        Swal.fire('Resposta Incorreta!', '', 'error')
        reloadAnswer()
    }
    function watchAnswerButton(){
        $('.check-answer').click(function(event){
            event.preventDefault()
            showLoader()
            axios.post(this.href).then(response => {
                hideLoader()
                if(response.data)
                    displayCorrectAnswerAndReload()
                else displayIncorrectAnswerAndReload()
            }).catch(error => {
                hideLoader()
                console.error(error)
            })
        })
    }
    watchAnswerButton()
})
