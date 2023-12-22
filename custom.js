$(document).ready(function() {
    $('.option').click(function() {
      $('.option').removeClass('selected');
      $(this).addClass('selected');
      var value = $(this).data('value');
      $('#selectedOption').val(value);
    });
  });

 




  document.addEventListener('DOMContentLoaded', function() {
    let savedQuestions = localStorage.getItem('questions');
    let savedAnswers = localStorage.getItem('answers');

    if (savedQuestions && savedAnswers) {
        let questions = JSON.parse(savedQuestions);
        let answers = JSON.parse(savedAnswers);

        let faqList = document.getElementById('faq-list');
        questions.forEach(function(question, index) {
            let listItem = document.createElement('li');
            listItem.textContent = question + ': ' + answers[index];
            faqList.appendChild(listItem);
        });
    }
});



   

function askQuestion() {
  var newQuestion = document.getElementById('newQuestion').value;
  if (newQuestion !== '') {
    console.log('Nouvelle question : ' + newQuestion);

    var faqContent = document.querySelector('.faq-content');
    var newQuestionElement = document.createElement('div');
    newQuestionElement.className = 'question';
    newQuestionElement.innerHTML = '<h3 class="question-title">' + newQuestion + '</h3><p class="answer">Réponse à la nouvelle question.</p>';

    faqContent.appendChild(newQuestionElement);

    document.getElementById('newQuestion').value = ''; 
  } else {
    alert('Veuillez entrer une question');
  }
}

function toggleAnswer(index) {
  var answerElement = document.getElementById('answer_' + index);
  if (answerElement.style.display === 'none' || answerElement.style.display === '') {
    answerElement.style.display = 'block'; 
  } else {
    answerElement.style.display = 'none'; 
  }
}

function editAnswer(element) {
  var newText = prompt('Veuillez saisir votre réponse :', element.textContent);
  if (newText !== null) {
    element.textContent = newText;
    element.readOnly = false; 
    element.focus(); 
  }
}

function replyToAnswer(element) {
  var newText = prompt('Veuillez saisir votre réponse :', ''); 
  if (newText !== null) {
    var replyElement = document.createElement('p');
    replyElement.textContent = newText;
    replyElement.className = 'reply';
    element.parentNode.appendChild(replyElement); 
  }
}

if (typeof(Storage) !== "undefined") {

  document.addEventListener('DOMContentLoaded', function() {
    let savedQuestions = localStorage.getItem('questions');
    let savedAnswers = localStorage.getItem('answers');

    if (savedQuestions && savedAnswers) {

      let questions = JSON.parse(savedQuestions);
      let answers = JSON.parse(savedAnswers);
      
   
      let faqList = document.getElementById('faq-list');
      questions.forEach(function(question, index) {
        let listItem = document.createElement('li');
        listItem.textContent = question + ': ' + answers[index];
        faqList.appendChild(listItem);
      });
    }
  });
} 

document.getElementById('questionForm').addEventListener('submit', function(event) {
  event.preventDefault();
  var formData = new FormData(this);

  fetch('page-faq.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.json())
  .then(data => {

  })
  .catch(error => {
      console.error('Erreur:', error);
  });
});

const options = document.querySelectorAll('.options .option');
const selectedValues = [];

options.forEach(option => {
    option.addEventListener('click', () => {
        const value = option.getAttribute('data-value');
        selectedValues.push(value);
        displayResult();
    });
});

function displayResult() {
    if (selectedValues.length >= 6) {
        const regimes = {
            'bonne-hygiène': 'MIND Régime',
            'perdre-du-poids': 'Perdre du poids',
            'trouver-un-régime': 'Régime simple',
            'faible-en-sucre': 'Régime sans sucre',
            'conscience': 'MIND Régime',
            'alimentation': 'Régime simple',
            'pas-restriction': 'Régime simple',
            'pas-viande ': 'Vegan',
            'medicales': 'Régime diabétique'
        };

        let result = '';
        selectedValues.forEach(value => {
            if (regimes[value]) {
                result += `<div>${regimes[value]}</div>`;
            }
        });

        const resultatDiv = document.querySelector('.resultat');
        resultatDiv.innerHTML = result;
        resultatDiv.style.display = 'block';
    }
}



const option = document.querySelectorAll('#personalityQuiz [data-value]');

options.forEach(option => {
    option.addEventListener('click', function() {

        options.forEach(opt => opt.classList.remove('option-selected'));


        this.classList.add('option-selected');

        const selectedValue = this.getAttribute('data-value');
        document.getElementById('selectedOption').value = selectedValue;
    });
});



    