document.addEventListener('DOMContentLoaded', function() {
    var emailDisplay = document.getElementById('emailDisplay');
    var email = emailDisplay.getAttribute('data-email');
    emailDisplay.textContent = email;

    var commentForm = document.getElementById('commentForm');
    var commentInput = document.getElementById('commentInput');
    var commentSection = document.getElementById('commentSection');

    document.addEventListener('DOMContentLoaded', function() {
        var emailDisplay = document.getElementById('emailDisplay');
        var email = emailDisplay.getAttribute('data-email');
    
        //trova l'indice del simbolo '@' nell'indirizzo email
        var atIndex = email.indexOf('@');
    
        if (atIndex !== -1) {
            //estrae la parte di indirizzo email prima del simbolo '@'
            var displayText = email.substring(0, atIndex);
            emailDisplay.textContent = displayText;
        }
    });

    //impostazione zona commenti
    commentForm.addEventListener('submit', function(event) {
        event.preventDefault(); 

        var commentText = commentInput.value.trim();
        if (commentText !== '') {
            var newComment = document.createElement('p');
            newComment.textContent = commentText;

            commentSection.appendChild(newComment);

            commentInput.value = '';
        }
    });
});
