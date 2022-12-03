const reply_questions = document.querySelectorAll('.reply_question');
// console.log(reply_question);
const row_subcomments = document.querySelectorAll('.row_subcomments');


// let count = i;
for (let i = 0; i < reply_questions.length; i++) {
    reply_questions[i].addEventListener('click',function(event){
        event.preventDefault();
        // console.log([reply_questions[i]]);
        if(row_subcomments[i].style.display == 'none'){
            row_subcomments[i].style.display = 'block';
        }else {
            row_subcomments[i].style.display = 'none';
            // break;
        }
    })
}