const form = document.getElementById("addPost");

form.addEventListener('reset', function(event){
    const userChoice = confirm("Are you sure you want to clear this blog entry? This cannot be undone.");
    if (!userChoice) {
        event.preventDefault();
    }    
})

form.addEventListener('submit', function(event){
    const title = document.getElementsByName('title')[0];
    const content = document.getElementsByName('content')[0];

    let error = 0;


    if(title.value.trim() === ""){
        title.classList.add('blank-warning');
        error++;
    } else {
        title.classList.remove('blank-warning');
    }

    if(content.value.trim() === ""){
        content.classList.add('blank-warning');
        error++;
    } else {
        content.classList.remove('blank-warning');
    }

    if (error > 0){
        event.preventDefault();
        alert("Please fill in both the Title and the Content fields.");
    }
})
